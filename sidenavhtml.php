<?php
    $id = isset($_GET['id']) ? $_GET['id'] : ' ';
	//$id = $_GET['id'];
	echo '
	<style>
		h5 {
			color:black;

		}
		h5:hover {
			color:white;
			
		}
		.navi:hover{
			background-color: #00008B;
			color: white;
		}
	</style>
	
	<div id="mySidenav" class="sidenav" style="background: url(pic4.jpg);">
	
	<img src="adg1.png" class="img-responsive" width="60%" style="margin-bottom: 10%; margin-left: 4em;">
	<img src="adg.png" class="img-responsive"  width="100%" style=" padding: 5px; margin-top: 5px; margin-bottom: 20%;">
	<a href="javascript:void(0)" class="closebtn" style="color:black;" onclick="closeNav()">&times;</a> ';
	
	/*
	if($_SESSION['neco'] == 1)
		  echo'
			<a href="google.php" style="background-color: #262626"><h5>Application List</h5></a>
			<a style="text-align: left;" href="reports.php"><h5>Reports</h5></a>';
	}
	else if($_SESSION['neco'] == 2){
		echo'
			<a href="google.php"><h5>Application List</h5></a>
			<a style="text-align: left; background-color: #262626; href="reports.php"><h5>Reports</h5></a>';
	}
	else if($_SESSION["neco"] == 3){
		echo'
			<a href="google.php"><h5>Application List</h5></a>
			<a style="text-align: left;" href="reports.php"><h5>Reports</h5></a>';
	}
	*/
	echo' 
	
	<a class="navi" href="google.php?id='.$id.'"><h5>Application List</h5></a>
	<a class="navi" style="text-align: left;" href="applicants.php?id='.$id.'"><h5>Applicant List</h5></a>
	<a class="navi" style="text-align: left;" href="reports.php?id='.$id.'"><h5>Reports</h5></a>
	<a class="navi" style="text-align: left;" href="addNewPosition.php?id='.$id.'"><h5>Add Position</h5></a>
	<a class="navi" style="text-align: left;" href="createAccount.php?id='.$id.'"><h5>Create User Accounts</h5></a>
	<a class="navi" style="text-align: left;" href="user_logs.php?id='.$id.'"><h5>User History Logs</h5></a>
	<a class="navi" href="about.php?id='.$id.'"> About Us</a>';
   if($_SESSION['id'] == 1){
	  echo '
	 
	  <a class="navi" style="text-align: left;" href="adminloginpage.php"><h5>Log out</h5></a>
		
	  </div>';
   }else{
	   //if($_SESSION['neco'] == 3){
		   echo '<a class="navi" id = "accountAnchor" style="text-align: left;" href="account.php"><h5>Account</h5></a>
		  
				<a class="navi" style="text-align: left;" href="adminloginpage.php"><h5>Log out</h5></a>
				 </div> ';
	//}
	
}


?>