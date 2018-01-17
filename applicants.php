<?php
	require_once('auth.php');
	require_once('connect.php');
	$query = "SELECT NAME, POSITION, `EMAIL ADDRESS` FROM tbl_application WHERE NOT NAME=',' AND NOT `EMAIL ADDRESS`='' ORDER BY ID";
	$result = $conn->query($query);
	$count = $result->num_rows;
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
	<style> 
	.getCSV, .getExcel, .getCSV:hover, .getExcel:hover {
	    background-color: #208c82;
		padding: 10px;
		border-radius: .5rem;
		text-decoration: none;
		cursor: pointer;
		color: #ffffff;
		border: 1px solid #00887b;
		box-shadow: 0 5px 10px 0 #808080;
	}
	.getCSV:active, .getExcel:active, .getCSV:visited, .getExcel:visited {
	    background-color: #196f67;
		border: 1px solid #025850;
		box-shadow: 0 5px 10px 0 #353535;
	}
	</style>
</head>
<body>
	<?php include ('sidenavhtml.php'); ?>
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
			<div id="x" class="table-responsive">
				<table id="applicants" class="table table-condensed table-hover">
					<thead>
						<tr>
							<th style="text-align:left!important">Name</th>
							<th style="text-align:left!important">Position</th>
							<th style="text-align:left!important">Email</th>
						</tr>
					</thead>
					<tbody style="text-align:left!important">
						<?php
							while($row = $result->fetch_assoc()){
								echo '<tr>';
								echo '<td>'.$row['NAME'].'</td>';
								echo '<td>'.$row['POSITION'].'</td>';
								echo '<td>'.$row['EMAIL ADDRESS'].'</td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>
				<center>
					<span>Total: <?php echo $count; ?> applicants</span>
				</center>
			</div>
			<div style="position:fixed;bottom:25px;right:25px">
				<a class="getCSV">Save as CSV</a>
				<a class="getExcel" onclick="window.open('data:application/vnd.ms-excel,' + document.getElementById('x').outerHTML.replace(/ /g, '%20'));">Save as Excel</a>
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
		function openNav() {
			document.getElementById("mySidenav").style.width = "300px";
			document.getElementById("main").style.marginLeft = "300px";
		}
		
		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
		}
	</script>
</body>
</html>