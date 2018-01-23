<?php
	require_once('auth.php');
	require_once('connect.php');
	if(isset($_POST['search'])) {
		$name = $_POST['search'];
		$string = '%'.$name.'%';
		$query = "SELECT ID, NAME, POSITION, `EMAIL ADDRESS` FROM tbl_application WHERE (NAME LIKE '$string' OR POSITION LIKE '$string' OR `EMAIL ADDRESS` LIKE '$string') AND NOT NAME=',' AND NOT `EMAIL ADDRESS`='' ORDER BY ID";
		$result = $conn->query($query);
		$count = $result->num_rows;
		if($count <= 1) {
			$label = "applicant";
		} else {
			$label = "applicants";
		}
		echo '<table id="applicants" class="table table-condensed table-hover">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>Name</th>';
		echo '<th>Position</th>';
		echo '<th>Email</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while($row = $result->fetch_assoc()){
			echo '<tr class="applicant-data" data-toggle="modal" data-target="#applicant-info" data-id="'.$row['ID'].'">';
			echo '<td>'.$row['NAME'].'</td>';
			echo '<td>'.$row['POSITION'].'</td>';
			echo '<td>'.$row['EMAIL ADDRESS'].'</td>';
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
		echo '<center>';
		echo '<span>Total: '.$count.' '.$label.'</span>';
		echo '</center>';
	}
?>
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