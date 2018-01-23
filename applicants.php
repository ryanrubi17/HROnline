<?php
	require_once('auth.php');
	require_once('connect.php');
	$query = "SELECT ID, NAME, POSITION, `EMAIL ADDRESS` FROM tbl_application WHERE NOT NAME=',' AND NOT `EMAIL ADDRESS`='' ORDER BY ID";
	$result = $conn->query($query);
	$count = $result->num_rows;
	if($count <= 1) {
		$label = "applicant";
	} else {
		$label = "applicants";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Applicants List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.material.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" type="text/css" href="custom_css/applicants.css">
</head>
<body>
	<?php include('sidenavhtml.php'); ?>
	<div id="main">
		<div class="row" style="z-index:1; margin-top:-20px;" id="topDiv">
			<nav  class="navbar navbar-inverse" >
				<div class="container-fluid" id= 'navHead' style = 'background-color:#dfe5ec;'>
					<a class="navbar-brand" style="cursor:pointer; z-index:1;" href="#"><h4 style="font-family:'Trebuchet MS', Helvetica, sans-serif; cursor:pointer; z-index:1; color:#00008B;" onclick="openNav()"><i class="fa fa-bars"></i> Menu</h4></a>		  
					<span style = "position:absolute;left:0;right:0;text-align:center;"><h3 style="color:#00008B;">Applicants List</h3></span>
				</div>
			</nav>
		</div>
		<div class="container">
			<form id="search-form"> 
				<input type="text" id="search" placeholder="Search" required />
				<div id="search-icon"></div>
			</form>
			<div class="table-responsive">
				<div id="result"></div>
				<div id="initial-table">
					<table id="applicants" class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody id="result">
							<?php
								while($row = $result->fetch_assoc()) {
									echo '<tr class="applicant-data" data-toggle="modal" data-target="#applicant-info" data-id="'.$row['ID'].'">';
									echo '<td>'.$row['NAME'].'</td>';
									echo '<td>'.$row['POSITION'].'</td>';
									echo '<td>'.$row['EMAIL ADDRESS'].'</td>';
									echo '</tr>';
								}
							?>
						</tbody>
					</table>
					<center>
						<span>Total: <?php echo $count.' '.$label; ?></span>
					</center>
				</div>
			</div>
			<div style="position:fixed;bottom:25px;right:25px">
				<a class="getCSV">Save as CSV</a>
				<a class="getExcel" onclick="window.open('data:application/vnd.ms-excel,' + document.getElementById('applicants').outerHTML.replace(/ /g, '%20'));">Save as Excel</a>
			</div>
		</div>
	</div>
	<div id="applicant-info" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Applicant Information</h4>
				</div>
				<div id="modal-info"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/csv.js"></script>
	<script type="text/javascript">
		$('.getCSV').click( function() { 
			exportTableToCSV.apply(this, [$('#applicants'), 'applicants.csv']);
		});
	</script>
	<script type="text/javascript">
		$('input').on('keypress', function(e) {
			return e.which !== 13;
		});
	</script>
	<script type="text/javascript">
		function openNav() {
			document.getElementById("mySidenav").style.width = "300px";
			document.getElementById("main").style.marginLeft = "300px";
		}
		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
		}
	</script>
	<script type="text/javascript">
		$('#search-icon').click(function(){
			$('#search').focus();
			$('#search').css('width','50%');
			$('#search').css('opacity','1');
		});
		$('#search').focusout(function(){
			$('#search').css('width','0');
			$('#search').css('opacity','0');
		});
	</script>
	<script type="text/javascript">
		function fill(Value) {
		  	$('#search').val(Value);
			$('#result').hide();
		}
		$(document).ready(function() {
		  	$("#search").keyup(function() {
		       	var name = $('#search').val();
		       	if (name == "") {
					$("#initial-table").show();
		            $("#result").html("");
		     	}
		     	else {
		           	$.ajax({
		               type: "POST",
		               url: "http://localhost/HROnline/search.php",
		               data: {
		                   search: name
		               },
		               success: function(html) {
						   $("#initial-table").hide();
		                   $("#result").html(html).show();
		               }
		           });
		       }
		   });
		});
	</script>
	<script type="text/javascript">
		$('.applicant-data').click(function(e) {
			var applid = $(this).attr("data-id");
           	$.ajax({
               type: "POST",
               url: "http://localhost/HROnline/applicant-data.php",
               data: {
                   aid: applid
               },
               success: function(html) {
                   $("#modal-info").html(html).show();
               }
           });
		});
	</script>
</body>
</html>