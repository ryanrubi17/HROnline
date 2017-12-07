<?php



	session_start();

	if(isset($_SESSION['refcode_not_found'])){

		if($_SESSION['refcode_not_found']=='Interviewer'){

			echo'

			<script type="text/javascript">

			var r = confirm("Your Interview is alredy Finished!");

			

			window.location.replace("http://www.andersongroup.ph");

			</script>

			';unset($_SESSION['refcode_not_found']);

		}

	}

	unset($_SESSION['Application_Status']);

	unset($_SESSION['newapp']);

?>

<!DOCTYPE html>

<html>

<head>

	<title>Application Form</title>



	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="Anderson Recruits">

	<meta property="og:description" content="Application Form">

	<meta property="og:image" content="http://andersongroup.ph/application/img/recruitslogo.jpg">

	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>	

	<link rel="shortcut icon" href="favicon.ico" />	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">

	<link rel="stylesheet" type="text/css" href="css/datepicker3.css">

	<link rel="stylesheet" type="text/css" href="css/ripples.css">

	<link rel="stylesheet" type="text/css" href="css/inputmask.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<!-- Javascript file -->

	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/material.js"></script>

	<script type="text/javascript" src="js/angular.js"></script>

	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

	<script type="text/javascript" src="js/jquery.dropdown.js"></script>

	<script type="text/javascript" src="js/inputmask.js"></script>

	<script type="text/javascript" src="js/jquery.inputmask.js"></script>

	<!-- link for style.css -->
	<link rel="stylesheet" type="text/css" href="custom_css/index.css">
	

	

	<!--THIS CODE HAS BEEN ADDED BY MARKETING TEAM TO TRACK CONVERSIONS OF THE APPLICATION FORM----DO NOT DELETE OR MODIFY-->

	<!-- Facebook Pixel Code -->

    <script>

    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?

    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;

    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;

    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,

    document,'script','https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '784252355009373'); // Insert your pixel ID here.

    fbq('track', 'PageView');

    </script>

    <noscript><img height="1" width="1" style="display:none"

    src="https://www.facebook.com/tr?id=784252355009373&ev=PageView&noscript=1"

    /></noscript>

    <!-- DO NOT MODIFY -->

    <!-- End Facebook Pixel Code -->

   

    

    <!--END OF THE FACEBOOK TRACKING CODE-->

	

	<script type="text/javascript">

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

		})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');



		__gaTracker('create', 'UA-76297316-1', 'auto');

		__gaTracker('set', 'forceSSL', true);

		__gaTracker('send','pageview');

	</script>

<script>

$(document).ready(function(){

	$('#myModal').modal({backdrop: 'static', keyboard: false}); 

	$('#myModal').modal('show');

		$("#weight").keydown(function (e) {

        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||

            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||

            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||

            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||

            (e.keyCode >= 35 && e.keyCode <= 39)) {

                 return;

        }

        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

            e.preventDefault();

        }

    });

});

</script>

</head>

<body>



<!-- OnPageLoad Modal -->

<div id="myModal" class="modal fade" role="dialog">

	<div class="modal-dialog">

	<!-- Modal content-->

		<div class="modal-content">



			<a href="http://andersongroup.ph/">

		<center> <img class="img-fluid logo" src="aa.png" style="width:80%;height:100%;"> </center>

	</a>

		<!--div class="modal-header">

			<h5 class="modal-title" id="ARMS" style="color:black;"><b style="color:black;">A</b>nderson <b style="color:black;">R</b>ecruitment <b style="color:black;">M</b>anagement <b style="color:black;">S</b>ystem</h5>

		</div-->

		

		<div class="modal-body">

			<h6>Choose Candidate Type:</h6>

			<center>

				<button type="button" id="btn_experienced" style="padding-bottom:2%;" class=" btn btn-default experienced"><p style="margin-bottom:0px;" id="exp_text"><i class="fa fa-briefcase" id="case_icon" aria-hidden="true"></i> &nbsp; Experienced Candidate</p></button>&nbsp; 

				<button type="button" id="btn_freshgrad" style="padding-bottom:2%;margin-bottom:5%;" class=" btn btn-default fresh"><p style="margin-bottom:0px;" id="fresh_grad"><i class="fa fa-graduation-cap" aria-hidden="true"></i> &nbsp; Fresh Graduate</p></button>

				<button type="button" id="btn_intern" style="padding-bottom:2%;margin-bottom:5%;" class=" btn btn-default interns"><p style="margin-bottom:0px;" id="intern_ship"><i class="fa fa-id-badge" aria-hidden="true"></i> &nbsp; Intern</p></button>

				

				

				<div class="strike" style="margin-bottom:3%;">

					<span style="font-size:17px;"><b>OR</b></span>

				</div>

				

			</center>

			

			<h6 title="Enter Your 10 digit Code for unfinished Application Form.">Use Reference Code:</h6>

			<center>

				<input type="text" style="width:70%;" title="Enter Your 10 digit Code for unfinished Application Form." maxlength="10" name="ref_code" class='form-control' id="ref_code"/>

				<?php 

				if(isset($_SESSION['refcode_not_found'])){

					if($_SESSION['refcode_not_found']=='yes'){

						echo'<p style="color:red;margin-top:-3%;">Invalid Reference Code.</p>';

						$_SESSION['refcode_not_found']='no';

					}else if($_SESSION['refcode_not_found']=='submitted'){

						echo'<p style="color:red;margin-top:-2%;font-size:13px;">Your application form has been viewed already.<br> Please wait for an email.</p>';

						$_SESSION['refcode_not_found']='no';

					}

					unset($_SESSION['refcode_not_found']);

				}

				?>

			</center>

		</div>

		<div class="modal-footer">

			<button type="button" class="btn btn-primary pull-right" data-dismiss="modal" id="okay_button">Okay</button>

		</div>

    </div>

	</div>

</div>



</div>

<!-- End of OnPageLoad Modal -->



<div class="modal fade" id="SaveQuitModal" role="dialog">

  <div class="modal-dialog popdialog">

    <div class="modal-content">

     <div class="modal-header">

			<button type="button" class="close" data-dismiss="modal">&times;</button>

			<h5 class="modal-title">Save and Quit</h5>

	</div>

      <div class="modal-body">

        <h3>Are you sure?<h3>

		

		<p style="font-size:11px;color:#ff6d00;padding-top:2%;" id="SaveandQuit"></p>

		</div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> &nbsp; No</button>

        <button type="button" class="btn btn-primary" id="ref_yes"><i class="fa fa-check-circle" aria-hidden="true"></i> &nbsp; Yes</button>

      </div>

    </div>

  </div>

</div>



	<!-- Formbody -->

<!--START-->

	<br>

	<a href="http://andersongroup.ph/">

		<center> <img class="img-fluid logo" src="aa.png" style="width:50%;height:100%;"> </center>

	</a>

<!--END-->



	<br>

		<div class="col-md-1"></div>

		<div class="col-md-10">

			<form action="serverside.php" name="myForm" autocomplete="off" novalidate id="myForm" ng-app="" method="post" enctype="multipart/form-data" data-toggle="validator">

			

			

				<div class="card container" id="container1">

				

					<img class="img" src="lady liberty.png" style=" width: 85%;" >

					<a class="btn btn-raised btn-sm btn-primary pull-right" title="Temporary save your unfinished form. Please Come back to comple the form." id="saveQuit" style="color:white;float:right;text-decoration:none;margin-top:3%;">Save and Quit</a>

					

					

					<div class="row col-md-12">

						

						<div class="col-md-6">

							

							<div class="form-group">

							<br>

								<label for="position">Position applying for:</label>

		      						<div class="form-group label-floating" id="posDiv">

									<?php  

		      							if(isset($_GET['position']) && !empty($_GET['position'])){		      								

											echo "<input readonly type='text' id='apply_position' class='form-control' value='".$_GET['position']."' name='position_name' >";

		      							}else{
										

										echo '<div id="apply_position2"><select id="apply_position" name="position_name" class="select form-control">

										<option disabled selected>Select Position</option>';

									

										include('connect.php');

										$sql = "SELECT * FROM `tbl_position` ORDER BY position_name ASC";

										$result = $conn->query($sql);

										while($row = $result->fetch_assoc()){

										echo "<option value='".$row['position_name']."'>".$row['position_name']."</option>";

										}

										

										echo"</select></div>";

										

										

										echo'<div id="positionErrorMessage" style="display:none;color:red;">Select your position here.</div>';

										

		      							}

		      						?>

									

										

									<div>

									

									</div>

								</div>

								<div id="" class="form-group label-floating" >

										<input type="text" style="display:none;"  name="other_position" placeholder="Position" class="form-control" id="otherpositionDiv" required/>

										<div class="help-block with-errors" id="otherpositionDiv2" style="color: red"></div>

								</div>

								

	      					</div>

	      					<div class="form-group">

				    			<label>Are you amenable to shifting schedule?</label>

				    			<div class="radio radio-primary">

						          <label>

						            <input type="radio" name="sched" id="sched2" value="YES">

						            YES

						          </label>

						          <label>

						            <input type="radio" name="sched" id="sched2" value="NO" checked>

						            NO

						          </label>

						        </div>

						    </div>

						    <div class="form-group">

				    			<label>Are you willing to work on weekends/holidays?</label>

				    			<div class="radio radio-primary">

						          <label>

						            <input type="radio" name="holidays" id="holidays2" value="YES">

						            YES

						          </label>

						          <label>

						            <input type="radio" name="holidays" id="holidays2" value="NO" checked>

						            NO

						          </label>

						        </div>

						    </div>

						</div>

						

						<div class="col-md-6 sample">

							<div class="form-group">

								<br>

								<div class="form-group"><!-- EMPLOYMENT DATE -->

			      					<label id="Expdate"><i class="fa fa-calendar" ></i> Available date for employment <label class="text-danger">*</label></label><label id="Intdate"> <i class="fa fa-calendar" ></i> Available date for internship <label class="text-danger">*</label></label>

			      					<div class="input-group">

										<input data-provide="datepicker" onkeydown="return false;" class="form-control date" name="empdate" id ="empdate" data-date-disable-touch-keyboard="true" data-date-start-date="today" data-date-autoclose="true" data-date-today-highlight="true" data-date-format="MM dd, yyyy" style="color: transparent;text-shadow: 0 0 0 black;"  required>	

			      						<span class="input-group-addon add-on"><a href="" onclick="$('#empdate').focus();"><span  class="fa fa-calendar"></span></a>

										

           			 				</div>

			      						<div class="help-block with-errors" style="color: red"></div>

			  					</div>

							</div>

							

							<div class="form-group" id="salary_group"><!-- SALARY -->

		  						<label for="salary">Expected Salary</label>

								<div class="input-group" id="salarygroup">

									<select id="salary" class="select form-control" name="salaryexpectation" >

										<option value="0" id='intern'>0</option>

										<option value="10,000.00 - 15,000.00">&#8369;10,000.00 - &#8369;15,000.00</option>

										<option value="16,000.00 - 20,000.00">&#8369;16,000.00 - &#8369;20,000.00</option>

										<option value="21,000.00 - 25,000.00">&#8369;21,000.00 - &#8369;25,000.00</option>

										<option value="26,000.00 - 30,000.00">&#8369;26,000.00 - &#8369;30,000.00</option>

										<option value="31,000.00 - 35,000.00">&#8369;31,000.00 - &#8369;35,000.00</option>

										<option value="36,000.00 - 40,000.00">&#8369;36,000.00 - &#8369;40,000.00</option>

										<option value="41,000.00 - 50,000.00">&#8369;41,000.00 - &#8369;50,000.00</option>

										<option value="51,000.00 - 55,000.00">&#8369;51,000.00 - &#8369;55,000.00</option>

									</select><span class="input-group-addon add-on"><span  class="fa fa-arrow-down"></span>

								</div>

							</div>

						</div>						

					</div>

					

					<!-- personal information -->

					

					<div class="row col-md-12">

						

						<h6 style="margin-top: 2%"><i class="fa fa-user-o"></i><b> PERSONAL INFORMATION</b></h6>

						

						<hr style="padding-bottom: 10px;">

						<div class="col-md-6">

						

							<div id="error_lname" class="form-group label-floating" >

								<label for="lname" class="control-label">Last Name <label class="text-danger">*</label></label>

								<input class="form-control" type="text" minlength="2" name="lname" id="lname" required>

								<div class="help-block with-errors" style="color: red"></div>

							</div>	

							<div class="form-group label-floating">

								<label for="fname" class="control-label">First Name <label class="text-danger">*</label></label>

								<input name="fname" id="fname" class="form-control"  minlength="2" required  >

								<div class="help-block with-errors" style="color: red"></div>

							</div>

							<div class="form-group label-floating">

								<label for="mname" class="control-label">Middle Name</label>

								<input type="text" name="mname" ng-model="mname" id="mname" class="form-control">

								

							</div>

							<div class="form-group label-floating">

								<label for="ename" class="control-label">Name Extension</label>

								<input type="text" name="ename" id="ename" class="form-control">

							</div>

  



							<div class="form-group">

				    			<label>Gender</label>

				    			<div class="radio radio-primary">

						          <label>

						            <input type="radio" name="sex123" id="s1" value="Male" checked="true">

						            MALE	

						          </label>

						          <label>

						            <input type="radio" name="sex123" id="s1" value="Female" >

						            FEMALE

						          </label>

						        </div>

						    </div>

						</div>

						<div class="col-md-6">

							<div class="form-group label-floating">

								<label for="nickname" class="control-label">Nick Name</label>

								<input type="text" name="nickname123" id="nickname" class="form-control">

							</div>

							<div class="form-group label-floating ">

								<label for="date-ofbirth" class="control-label"><i class="fa fa-calendar" ></i> Date of Birth <label class="text-danger">*</label></label>

								<div class="input-group" id="datePicker">

									<input data-provide="datepicker" style="color: transparent;text-shadow: 0 0 0 black;" name="bday123" id="bday123" class="form-control date" data-date-end-date="-17y" data-date-autoclose="true" onkeydown="return false;" data-date-format="MM dd, yyyy" required>

									<span class="input-group-addon add-on"><a href="" onclick="$('#bday123').focus();"><span class="fa fa-calendar"></span></a>

           			 			</div>

           			 			<div class="help-block with-errors" style="color: red"></div>

							</div>

							<div class="form-group label-floating">

								<label for="placeofbirth" class="control-label">Select place of birth <label class="text-danger">*</label></label>

								<input type="text" value="" name="bplace" id="placeofbirth" class="form-control" data-toggle="modal" data-target="#modalPB" onkeydown="return false;" style="color: transparent;text-shadow: 0 0 0 black;" autocomplete="off" required>

								<div class="help-block with-errors" style="color: red"></div>

								

							</div>

								

							<div class="form-group label-floating">

								<label for="citizen" class="control-label" >Citizenship <label class="text-danger">*</label></label>

								<select class="select form-control" name="citizen" id="citizen" >

										      		<?php  

						      							include('connect.php');

						      							$sql = "SELECT * FROM `tbl_citizenship`";

						      							$result = $conn->query($sql);

						      							while($row = $result->fetch_assoc()){

						      								if ($row['id'] == 68) {

						      									echo "<option value='".$row['Citizenship']."' selected>".$row['Citizenship']."</option>";

						      								}

						      								else{

						      									echo "<option value='".$row['Citizenship']."'>".$row['Citizenship']."</option>";		

						      								}

						      							}

						      						?>

										      	</select>

								<div class="help-block with-errors" style="color: red"></div>

							</div>

							<div class="row">

								<div class="col-md-6">

									<div class="form-group label-static">

										<label for="cstatus" class="control-label">Civil Status</label>

				      					<select id="cstatus" class="select form-control" name="cstatus" onchange="showspec(this)">

				      						<option value="Single">Single</option>

				      						<option value="Married">Married</option>

				      						<option value="Annuled">Annuled</option>

				      						<option value="Widowed">Widowed</option>

				      						<option value="Separated">Separated</option>

				      						<option value="Others">Others</option>

				      					</select>

									</div>

								</div>

									<!-- <div class="switch form-group" >

								<label><input onchange="checkspec(this)" type="checkbox" name="child2" id="child2" value="1"> Do You Have Child/Children</label> -->

							



								<div class="col-md-6">

									<div id="other_div" class="form-group label-floating">

					      				<label class="control-label" for="wewe">Civil Status<label class="text-danger">*</label></label>

					      				<input type="text" name="cstatusspec" class="form-control" id="wewe" >

			      					</div>

								</div>

							</div>

						</div>

					</div>

					<div class="row ">

					<div class="col-md-12">

					<button type="button" id="fnext" style="margin-bottom: 2%" class="fnext btn btn-primary pull-right">NEXT</button><!--  -->

					</div>	

					</div>

					

					

				</div> <!-- End of container 1 -->



				<div id="modalPB" class="modal fade" role="dialog" >

								  <div class="modal-dialog">

								    <div class="modal-content">

								      <div class="modal-header">

								      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

								        <h3 class="modal-title"><center>Select your birthplace</center></h3>

								      </div>

								      <div class="modal-body">

								      <div class="form-group">

								      	<div class="">

								      		<label>

								      			<input type="checkbox" name="outsidecountry" onclick="if(this.checked){showCountry()} else {hideCountry()}"> If birthplace is outside of the Philippines

								      		</label>

								      	</div>

								      </div>

								      <div id="country">

									      <select class="select form-control" name="Country_name" id="countryid" onchange="countryfunction(this)">

									      		<?php  

					      							include('connect.php');

					      							$sql = "SELECT * FROM `tbl_country`";

					      							$result = $conn->query($sql);

					      							while($row = $result->fetch_assoc()){

					      							echo "<option value='".$row['Country_name']."'>".$row['Country_name']."</option>";



					      							}

					      						?>

									      	</select>

								      	</div>

								      	<div id="phil">

									      	<div id="region">

											<b>Region</b>

										      	<select class="select form-control" name="Region_name" id="regionid" onchange="regionfunction(this)">

										      		<?php  

						      							include('connect.php');

						      							$sql = "SELECT * FROM `tbl_region`";

						      							$result = $conn->query($sql);

						      							while($row = $result->fetch_assoc()){

						      							echo "<b>Region</b><option value='".$row['id']."_".$row['Region_name']."'>".$row['Region_name']."</option>";

						      							}

						      						?>

										      	</select>

										    </div>  	

										    <div id="province">

										    	

										    </div>

											<div id="cities" style="padding-top: 15px">

												

											</div>

										</div>

									      </div>

								      <div class="modal-footer">

								      <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>

								        

								      </div>

								    </div>

								  </div>

				</div>



				<div class="card container" id="container2">

					<img class="img" src="lady liberty.png" style=" width: 85%; " >

					<a class="btn btn-raised btn-sm btn-primary pull-right" value="" id="saveQuit2" style="color:white;float:right;text-decoration:none;margin-top:2%;">Save and Quit</a>

					<h6 style="padding-top: 2%;"><i class="fa fa-user-o"></i> <b>PERSONAL INFORMATION</b></h6>

					<hr style="padding-bottom: 10px;">

					<div class="row col-md-12">

						<div class="col-md-6">

							<label>Height</label>

							<div class="row">

								<div class="col-md-6">

									<div class="form-group label-floating">

										<label for="feet" class="control-label">Feet (ft.)</label>

										<input type="number" name="feet" class="form-control" id="feet">

									</div>

								</div>

								<div class="col-md-6">

									<div class="form-group label-floating">

										<label for="inches" class="control-label">Inches (in.)</label>

										<input type="number" name="inch" class="form-control" id="inches">

									</div>

								</div>

							</div>

							<div class="form-group label-floating">

								<label for="bloodtype" class="control-label">Blood type</label>

								<select class="select form-control" id="bloodtype" name="btype">

									<option value="O+">O+</option><option value="BA">B+&#45;</option>

									<option value="Om">O&#45;</option><option value="Bm">B&#45;</option>

									<option value="A+">A+</option><option value="AB+">AB+</option>

									<option value="Am">A&#45;</option><option value="ABm"> AB&#45;</option>

								</select>

							</div>

						</div>



						<div class="col-md-6">

							<label>Weight</label>

							<div class="form-group label-floating">

								<label for="pounds" class="control-label">Pounds (lbs:)</label>

								<input type="text" name="weight" id="weight" class="form-control" id="pounds">

							</div>

							<div class="form-group label-floating">

								<label for="religion" class="control-label">Religion</label>

								<input type="text" name="religion123" class="form-control" id="religion">

							</div>

						</div>

					</div>

					<div class="row col-md-12">

						<div class="col-md-6">

							<label>Select Current Address<label class="text-danger">*</label></label>

							<div class="form-group label-floating">

								<input class="form-control"  style="color: transparent;text-shadow: 0 0 0 black;" autocomplete="off" onkeydown='return false;' type="text" id="curaddress" name="currentaddress" data-toggle="modal" data-target="#modalCA" required >

								<div class="help-block with-errors" style="color: red"></div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group label-floating">

								<label class="control-label" for="currendaddress">Current Address (Number, Street, Subdivision, Barangay)<label class="text-danger">*</label></label>

								<div class="col-md-6">

								<div class="form-group label-floating">

									<label class="control-label" for="current_home_num">Home No. and Street<label class="text-danger">*</label></label>

									<input type="text" name="current_home_num" class="form-control" id="current_home_num" required>

									<div class="help-block with-errors" style="color: red"></div>

								</div>

								

							</div>

							<div class="col-md-6">

								<div class="form-group label-floating">

									<label class="control-label" for="current_barangay">Barangay<label class="text-danger">*</label></label>

									<input type="text" name="current_barangay" class="form-control" id="current_barangay" required>

									<div class="help-block with-errors" style="color: red"></div>

								</div>

								

							</div>

							</div>

						</div>

					</div>

					<div class="row col-md-12">

						<div class="col-md-6">

							<label>Select Provincial Address</label>

							<input class="form-control" type="text" id="provaddress" name="provinceaddress" data-toggle="modal" data-target="#modalPA" readonly>

						</div>

						<div class="col-md-6">

							<div class="form-group label-floating">

								<label class="control-label" for="provincialaddress">Provincial Address (Number, Street, Subdivision, Barangay)</label>

								<div class="col-md-6">

									<div class="form-group label-floating">

										<label class="control-label" for="provincial_home_num">Home No. and Street</label>

										<input ype="text" name="provincial_home_num" class="form-control" id="provincial_home_num">

										

									</div>

								</div>

								<div class="col-md-6">

									<div class="form-group label-floating">

										<label class="control-label" for="provincial_barangay">Barangay</label>

										<input type="text" name="provincial_barangay" class="form-control" id="provincial_barangay">

									</div>

								</div>

							</div>

						</div>

					</div>



					<!-- contact -->

					<div class="row col-md-12">

						<h6 style="padding-top:5%"><i class="fa fa-phone"></i><b> CONTACT INFORMATION</b></h6>

						<hr>

						<div class="col-md-6">

							<div class="row">

								<div class="col-md-6">

									<div class="form-group label-floating">

										<label class="control-label" for="email">E-Mail Address<label class="text-danger">*</label></label>

										<input onfocusout="emailfunction2();" type="email" name="email" class="form-control" id="email" required>

										<div id='emailhelp' class="help-block with-errors" style="color: red"></div>

									</div>

								</div>

								<div class="col-md-6">

									<div class="form-group label-floating">

										<label class="control-label" for="skype">Skype User Id</label>

										<input type="text" name="skype_userid" class="form-control" id="skype">

									</div>

								</div>

								<div class="col-md-12">

									<div class="form-group label-floating">

										<label class="control-label" for="facebook">Facebook account</label>

										<input class="form-control" type="text" id="fbact" name="facebook">

									</div>

								</div>

								<div class="col-md-12">

									<div class="form-group label-floating">

										<label class="control-label" for="twitter">Twitter account</label>

										<div class="input-group">

											<span class="input-group-addon">@</span>

											<input class="form-control" id="twact" type="text" name="twitter">

										</div>

									</div>

								</div>

							</div>

						</div>

						<!--  -->

							<div class="row col-md-6">

							<div class="col-md-6">

								<div class="form-group label-floating">

									<label class="control-label" for="telno">Home Tel No.</label>

									<input data-inputmask="'mask': '(99)-999-9999'" type="text" name="home_telnum" class="form-control" id="telno" ng-minlength="7" ng-model="home_telnum">

								</div> 

							</div>

							<script>

								//document.getElementById("#celno").val("09");

								var xxx = document.getElementById("#celno");

							</script>

							<div class="col-md-6">

								<div class="form-group label-floating">

									<label class="control-label" for="celno">Mobile No.<label class="text-danger">*</label></label>

										<input data-inputmask="'mask': '(+63) 999-999-9999'" type="text" name="mobile_num" class="form-control" id="mobile_number" required >

										<span style="color: red;display:none;" id="number_validator">Invalid Contact Number.</span>

										<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

							<div class="col-md-6">

								<div class="form-group label-floating">

									<label class="control-label" for="celno2">Mobile No.<small>(Optional)</small></label>

									<input value="09" data-inputmask="'mask': '9999-999-9999'" type="text" name="mobile_num2" class="form-control" id="celno2"  >

								</div>

							</div>

							<div class="col-md-6">

								<div class="form-group label-floating">

									<label class="control-label" for="celno3">Mobile No.<small>(Optional)</small></label>

									<input value="09" data-inputmask="'mask': '9999-999-9999'" type="text" name="mobile_num3" class="form-control" id="celno3" >

								</div>

							</div>

							<div class="col-md-6">

								<div class="form-group label-floating">

									<label style="font-size: 11px;" class="control-label text-sm" for="contactperson">Contact Person in case of emergency</label><label class="text-danger">*</label>

									<input class="form-control" type="text" name="contact_name" id="contactperson" minlength="2" ng-model="contact_name" required>

									<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

							<div class="col-md-6">

								<div class="form-group label-floating">

									<label class="control-label" for="contactpersonno" style="font-size: 11px">{{contact_name}}'s Contact Details</label><label class="text-danger">*</label>

								

										<input class="form-control" type="number" name="contact_details" id="contactpersonno" required>

										<div class="help-block with-errors" style="color: red"></div>

								

								</div>

							</div>

						</div>

					</div>



					<!-- buttons -->

					<button type="button" href="#container1" class="btn btn-raised btn-primary pull-left" onclick="document.getElementById('container1').style.display='block';document.getElementById('container2').style.display='none';">PREVIOUS</button>

					<button type="button" style="margin-bottom: 1%" class="btn btn-raised btn-primary pull-right" id='snext'>NEXT</button> <!--  -->

				</div> <!-- End of container 2 -->



				<div id="modalCA" class="modal fade" role="dialog" >

								  <div class="modal-dialog">

								    <div class="modal-content">

								      <div class="modal-header">

								      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

								        <h3 class="modal-title"><center>Select your current address</center></h3>

								      </div>

								      <div class="modal-body">

								     

								      	<div id="phil">

									      	<div id="region">

											<b>Region</b>

										      	<select class="select form-control" name="Region_name" id="cregionid" onchange="cregionfunction(this)">

										      		<?php  

						      							include('connect.php');

						      							$sql = "SELECT * FROM `tbl_region`";

						      							$result = $conn->query($sql);

						      							while($row = $result->fetch_assoc()){

						      							echo "<option value='".$row['id']."_".$row['Region_name']."'>".$row['Region_name']."</option>";

						      							}

						      						?>

										      	</select>

										    </div>  	

										    <div id="cprovince"></div>

											<div id="ccities" style="padding-top: 15px"></div>

										</div>

									      </div>

								      <div class="modal-footer">

								      <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>

								        

								      </div>

								    </div>

								  </div>

				</div>

				<div id="modalPA" class="modal fade" role="dialog" >

								  <div class="modal-dialog">

								    <div class="modal-content">

								      <div class="modal-header">

								      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

								        <h3 class="modal-title"><center>Select your provincial address</center></h3>

								      </div>

								      <div class="modal-body">

								     

								      	<div id="phil">

									      	<div id="region">

											<b>Region</b>

										      	<select class="select form-control" name="Region_name" id="pregionid" onchange="pregionfunction(this)">

										      		<?php  

						      							include('connect.php');

						      							$sql = "SELECT * FROM `tbl_region`";

						      							$result = $conn->query($sql);

						      							while($row = $result->fetch_assoc()){

						      							echo "<option value='".$row['id']."_".$row['Region_name']."'>".$row['Region_name']."</option>";

						      							}

						      						?>

										      	</select>

										    </div>  	

										    <div id="pprovince"></div>

											<div id="pcities" style="padding-top: 15px"></div>

										</div>

									      </div>

								      <div class="modal-footer">

								      <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>

								        

								      </div>

								    </div>

								  </div>

				</div>



				<div class="card container" id = "container3">

					<img class="img" src="lady liberty.png" style=" width: 85%;">

					<a class="btn btn-raised btn-sm btn-primary pull-right" value="" id="saveQuit3" style="color:white;float:right;text-decoration:none;margin-top:2%;">Save and Quit</a>

					<h6 style="padding-top: 30px"><i class="fa fa-group"> </i><b> FAMILY BACKGROUND</b></h6>

					<hr style="padding-bottom: 10px;">

					<!-- for married ones -->

					<div id="married_div" class="row col-md-12">

						<h2 style="padding-top: 2%;" align="center"> Spouse </h2>

						<div class="col-md-6">

							<div class="form-group label-floating">

					      		<label class="control-label" for="slname">Spouse's Last Name</label>

					      		<input id="slname" type="text" name="spouse_lastname" class="form-control" >

							</div>

							<div class="form-group label-floating">

					      		<label class="control-label" for="sfname">Spouse's First Name</label>

					      		<input id="sfname" type="text" name="spouse_firstname" class="form-control" >

							</div>

							<div class="form-group label-floating">

					      		<label class="control-label" for="smname">Spouse's Middle Name</label>

					      		<input id="smname" type="text" name="spouse_midname" class="form-control" >

							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group label-floating">

								<label class="control-label" for="occupation">Spouse's Occupation</label>

								<input type="text" name="spouse_occ" id="occupation" class="form-control">

							</div>

							<div class="form-group label-floating">

								<label class="control-label" for="employer-name">Company Name</label>

								<input type="text" name="spouse_empname" id="employer-name" class="form-control">

							</div>

						</div>

					</div> <!-- end for married ones -->

								<!-- for widowed ones -->

					<div id="widowed_div" class="row col-md-12">

						<h2 style="padding-top: 2%;" align="center"> Spouse </h2>

						<div class="col-md-6">

							<div class="form-group label-floating">

					      		<label class="control-label" for="slname">Spouse's Last Name</label>

					      		<input id="slname" type="text" name="widowed_lname" class="form-control" >

							</div>

							<div class="form-group label-floating">

					      		<label class="control-label" for="sfname">Spouse's First Name</label>

					      		<input id="sfname" type="text" name="widowed_fname" class="form-control" >

							</div>

							<div class="form-group label-floating">

					      		<label class="control-label" for="smname">Spouse's Middle Name</label>

					      		<input id="smname" type="text" name="widowed_midname" class="form-control" >

							</div>

						</div>

						<div class="col-md-6">

						</div> 

					</div> <!-- end for widowed ones -->

					<div class="row col-md-12">

						<div class="col-md-6">

							<h3 style="padding-top: 3%;" align="center">Father's Information</h3>

							<div class="form-group label-floating">

								<label class="control-label" for="flname">Father's Last name</label>

								<input type="text" name="flname" id="flname" class="form-control">

							</div>

							<div class="form-group label-floating">

								<label class="control-label" for="ffname">Father's First Name</label>

								<input type="text" name="ffname" id="ffname" class="form-control">

							</div>

							<div class="form-group label-floating">

								<label class="control-label" for="fmname">Father's Middle Name</label>

								<input type="text" name="fmname" id="fmname" class="form-control">

							</div>

							<div class="form-group label-floating">

								<label class="control-label" for="fplace_birth">Place of Birth</label>

								<input type="text" name="father_placebirth" id="fplace_birth" class="form-control" data-toggle="modal" data-target="#modalFPB"  readonly>

							</div>

						</div>

						<div class="col-md-6">

							<h3 style="padding-top: 3%;" align="center">Mother's Information</h3>

							<div class="form-group label-floating">

								<label class="control-label" for="mlname">Mother's Maiden name</label>

								<input type="text" name="mother_lname" id="mlname" class="form-control">

							</div>

							<div class="form-group label-floating">

								<label class="control-label" for="mfname">Mother's First Name</label>

								<input type="text" name="mother_fname" id="mfname" class="form-control">

							</div>

							<div class="form-group label-floating">

								<label class="control-label" for="mmname">Mother's Middle Name</label>

								<input type="text" name="mother_midname" id="mmname" class="form-control">

							</div>

							<div class="form-group label-floating">

								<label class="control-label" for="mplace_birth">Place of Birth</label>

								<input type="text" name="mother_placebirth" id="mplace_birth" class="form-control" data-toggle="modal" data-target="#modalMPB" readonly>

							</div>

						</div>

					</div>

					<div class="col-md-12">

						<label class="switch col-md-4">

							<input id="positive" type="checkbox"/>

							<div class="slider round"></div>

						</label>

						<h5 class="col-md-5">  Do you have child/Children?</h5>	

					</div>



                    <div class="wawsibling btn-group-sm"  id="siblings">

                    	<div class="row">

                    		<div class="col-md-12">	

                      			<button type="button" class="btn btn-sm btn-raised btn-info add_field_button_sibling">Add Sibling</button>

                    		</div>

                    	</div>

                      <div class="input_fields_wrap_sibling">

                        <div class="row col-md-12">

                          <div class="col-md-6">

                            <div class="col-md-7">

                              <div class="form-group label-floating">

                                <label class="control-label" for="sibling" >Enter sibling name</label>

                                <input type="text" name="sibling1" id="sibling" class="form-control">

                              </div>

                            </div> 

                            <div class="col-md-3">

                              <div class="form-group label-floating">

                                <label class="control-label" for="sage">Age</label>

                                <input id="sage" class="form-control" type="number" name="sibling_age1"/>

                              </div>

                            </div>

                          </div>

                        </div> <!-- second sibling -->

                        <div class="row col-md-12">

                          <div class="col-md-6">

                            <div class="col-md-7">

                              <div class="form-group label-floating">

                                <label class="control-label" for="sibling" >Enter sibling name</label>

                                <input type="text" name="sibling2" id="sibling" class="form-control">

                              </div>

                            </div> 

                            <div class="col-md-3">

                              <div class="form-group label-floating">

                                <label class="control-label" for="sage">Age</label>

                                <input id="sage" class="form-control" type="number" name="sibling_age2"/>

                              </div>

                            </div>

                            <button type="button" style="margin-top: 8%" class="btn btn-raised btn-sm btn-danger pull-right remove_field" >Remove</button>

                          </div>

                        </div><!-- third sibling -->

                        <div class="row col-md-12" >

                          <div class="col-md-6">

                            <div class="col-md-7">

                              <div class="form-group label-floating">

                                <label class="control-label" for="sibling" >Enter sibling name</label>

                                <input type="text" name="sibling3" id="sibling" class="form-control">

                              </div>

                            </div> 

                            <div class="col-md-3">

                              <div class="form-group label-floating">

                                <label class="control-label" for="sage">Age</label>

                                <input id="sage" class="form-control" type="number" name="sibling_age3"/>

                              </div>

                            </div>

                            <button type="button" style="margin-top: 8%" class="btn btn-raised btn-danger btn-sm pull-right remove_field">Remove</button>

                          </div>

                        </div>

                      </div>

                    </div>



                    <div class="wawchild btn-group-sm" id="children" style="display: none;">

                      <div class="input_fields_wrap">

                        <div class="row col-md-12">

                        <div class="col-md-6">

                            <!-- fillings -->

                          </div>

                        <div class="col-md-6">

                          <button type="button" class="btn btn-raised btn-sm btn-info add_field_button">Add Dependents</button>

                        </div>

                          <div class="col-md-6">

                            <!-- fillings -->

                          </div>

	                    </div>

	                    <div class="row col-md-12" id="1chi">

	                    	<div class="col-md-6">

	                    		<!-- fillings -->

	                    	</div>

	                    	<div class="col-md-6">

	                            <div class="col-md-7">

	                              <div class="form-group label-floating">

	                                <label class="control-label" for="child" >Enter child name</label>

	                                <input type="text" name="child_name1" id="child" class="form-control">

	                              </div>

	                            </div> 

	                            <div class="col-md-3">

	                              <div class="form-group label-floating">

	                                <label class="control-label" for="age">Age</label>

	                                <input id="age" class="form-control" type="number" name="child_age1"/>

	                              </div>

	                            </div>

	                        </div>

	                    </div>

                        <div class="row col-md-12" id="2chi">

                          <div class="col-md-6">

                            <!-- fillings -->

                          </div>

                          <div class="col-md-6">

                            <div class="col-md-7">

                              <div class="form-group label-floating">

                                <label class="control-label" for="child" >Enter child name</label>

                                <input type="text" name="child_name2" id="child" class="form-control">

                              </div>

                            </div> 

                            <div class="col-md-3">

                              <div class="form-group label-floating">

                                <label class="control-label" for="age">Age</label>

                                <input id="age" class="form-control" type="number" name="child_age2"/>

                              </div>

                            </div>

                            <button type=button style="margin-top: 8%" class="btn btn-raised btn-sm btn-danger pull-right remove_field">Remove</button>

                          </div>

                        </div>

                        <div class="row col-md-12" id="3chi">

                          <div class="col-md-6">

                            <!-- fillings -->

                          </div>

                          <div class="col-md-6">

                            <div class="col-md-7">

                              <div class="form-group label-floating">

                                <label class="control-label" for="child" >Enter child name</label>

                                <input type="text" name="child_name3" id="child" class="form-control">

                              </div>

                            </div> 

                            <div class="col-md-3">

                              <div class="form-group label-floating">

                                <label class="control-label" for="age">Age</label>

                                <input id="age" class="form-control" type="number" name="child_age3"/>

                              </div>

                            </div>

                            <button type=button style="margin-top: 8%" class="btn btn-raised btn-danger btn-sm pull-right remove_field">Remove</button>

                          </div>

                        </div>

                      </div>

                    </div>



					<!-- buttons -->

					<button type="button" class="btn btn-raised btn-primary pull-left" onclick="document.getElementById('container2').style.display='block';document.getElementById('container3').style.display='none';">PREVIOUS</button>

					<button type="button" style="margin-bottom: 1%" class="btn btn-raised btn-primary pull-right" onclick="document.getElementById('container3').style.display='none'; document.getElementById('container4').style.display='block';">NEXT</button>	

				</div> <!-- end of container 3 -->



				<div id="modalFPB" class="modal fade" role="dialog" >

					<div class="modal-dialog">

						<div class="modal-content">

							<div class="modal-header">

								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

								<h3 class="modal-title"><center>Select your father birth place</center></h3>

							</div>

							<div class="modal-body">

								<div class="form-group">

									<div class="">

								      	<label>

								      		<input type="checkbox" name="" onclick="if(this.checked){fshowCountry()} else {fhideCountry()}"> If birthplace is outside of the Philippines

								      	</label>

								    </div>

								</div>

								<div id="fcountry">

									<select class="select form-control" name="fCountry_name" id="fcountryid" onchange="fcountryfunction(this)">

									    <?php  

					      					include('connect.php');

					      					$sql = "SELECT * FROM `tbl_country`";

					      					$result = $conn->query($sql);

					      					while($row = $result->fetch_assoc()){

					      					echo "<option value='".$row['Country_name']."'>".$row['Country_name']."</option>";

						      				}

						      			?>

									</select>

								</div>

								<div id="fphil">

									<div id="fregion">

										<select class="select form-control" name="fRegion_name" id="fregionid" onchange="fregionfunction(this)">

										    <?php  

						      					include('connect.php');

						      					$sql = "SELECT * FROM `tbl_region`";

						      					$result = $conn->query($sql);

						      					while($row = $result->fetch_assoc()){

						      					echo "<b>Region</b><option value='".$row['id']."_".$row['Region_name']."'>".$row['Region_name']."</option>";

						      					}

						      				?>

										</select>

									</div>  	

									<div id="fprovince">

										    	

									</div>

									<div id="fcities" style="padding-top: 15px">

												

									</div>

								</div>

							</div>

							<div class="modal-footer">

								<button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>        

							</div>

						</div>

					</div>

				</div>





				<div id="modalMPB" class="modal fade" role="dialog" >

					<div class="modal-dialog">

						<div class="modal-content">

							<div class="modal-header">

								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

								<h3 class="modal-title"><center>Select your mother birth place</center></h3>

							</div>

							<div class="modal-body">

								<div class="form-group">

									<div class="">

								      	<label>

								      		<input type="checkbox" name="" onclick="if(this.checked){mshowCountry()} else {mhideCountry()}"> If birthplace is outside of the Philippines

								      	</label>

								    </div>

								</div>

								<div id="mcountry">

									<select class="select form-control" name="mCountry_name" id="mcountryid" onchange="mcountryfunction(this)">

									    <?php  

					      					include('connect.php');

					      					$sql = "SELECT * FROM `tbl_country`";

					      					$result = $conn->query($sql);

					      					while($row = $result->fetch_assoc()){

					      					echo "<option value='".$row['Country_name']."'>".$row['Country_name']."</option>";

						      				}

						      			?>

									</select>

								</div>

								<div id="mphil">

									<div id="mregion">

										<select class="select form-control" name="mRegion_name" id="mregionid" onchange="mregionfunction(this)">

										    <?php  

						      					include('connect.php');

						      					$sql = "SELECT * FROM `tbl_region`";

						      					$result = $conn->query($sql);

						      					while($row = $result->fetch_assoc()){

						      					echo "<b>Region</b><option value='".$row['id']."_".$row['Region_name']."'>".$row['Region_name']."</option>";

						      					}

						      				?>

										</select>

									</div>  	

									<div id="mprovince">

										    	

									</div>

									<div id="mcities" style="padding-top: 15px">

												

									</div>

								</div>

							</div>

							<div class="modal-footer">

								<button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>        

							</div>

						</div>

					</div>

				</div>



                <div class="card container" id = "container4">

                	<img class="img" src="lady liberty.png" style=" width: 85%;">

					<a class="btn btn-raised btn-sm btn-primary pull-right" value="" id="saveQuit4" style="color:white;float:right;text-decoration:none;margin-top:2%;">Save and Quit</a>

					<div id="removeWorkid">

                    <h6 style="padding-top: 30px"><i class="fa fa-briefcase"> </i><b> WORK EXPERIENCE <small>(Most recent on top)</small></b></h6>  

                    <hr>

                            <button type="button" class="btn btn-raised btn-sm btn-info add_field_button_work">Add Work Experience</button>

                    <div class="input_fields_wrap_work">

                      <div class="row col-md-12">

                          <div class="col-md-2">

                            <div class="form-group label-floating">

                              <label class="control-label" for="from"><i class="fa fa-calendar" ></i> From:</label>

                              <div class="input-group"><div class="help-block with-errors" style="color: red;"></div>

                              	<input class="form-control date" data-provide="datepicker" name="datefrom" id="from" data-date-autoclose="true"   data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

                              	

								<span class="input-group-addon add-on"><a href="" onclick="$('#from').focus();"><span class="fa fa-calendar"></span></a>

           			 		  </div>

                            </div>

                          </div>

                          <div class="col-md-2">

                            <div class="form-group label-floating">

                              <label class="control-label" for="to"><i class="fa fa-calendar" ></i> To:</label>

                              <div class="input-group">

                              	<input class="form-control date" data-provide="datepicker" name="dateto" id="to" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

                              	<div class="help-block with-errors" style="color: red;"></div>

								<span class="input-group-addon add-on"><a href="" onclick="$('#to').focus();"><span class="fa fa-calendar"></span></a>

           			 		  </div>

                            </div>

                          </div>

                          <div class="col-md-3">

                            <div class="form-group label-floating">

                              <label class="control-label" for="employers_name1">Company Name</label>

                              <input class="form-control" type="text" name="company_name" id="employers_name1">

							  <div class="help-block with-errors" style="color: red;"></div>

                            </div>

                          </div>

                          <div class="col-md-2">

                            <div class="form-group label-floating">

                              <label class="control-label" for="employers_contact_number">Contact number</label>

                              <input class="form-control" type="number" name="contactnum" id="employers_contact_number">

                            </div>

                          </div>

                          <div class="col-md-3">

                            <div class="form-group label-floating">

                              <label class="control-label" for="employers_address">Company's address</label>

                              <input class="form-control" type="text" name="compadd" id="employers_address">

							  <div class="help-block with-errors" style="color: red;"></div>

                            </div>

                          </div>

                          </div>

						  <div class="row col-md-12">

                          <div class="col-md-3">

                            <div class="form-group label-floating">

                              <label class="control-label" for="position-title">Position Title</label>

                              <input class="form-control" type="text" name="position" id="position-title">

							  <div class="help-block with-errors" style="color: red"></div>

                            </div>

                          </div>

                          <div class="col-md-4">

                            <div class="form-group label-floating">

                              <label class="control-label" for="name-supervisor">Name of immediate supervisor</label>

                              <input class="form-control" type="text" name="supervisor" id="name-supervisor">

                            </div>

                          </div>

                          <div class="col-md-2">

                            <div class="form-group label-floating">

                              <label class="control-label" for="monthly-salary">Monthly salary</label>

                              <input class="form-control" type="number" name="salary" id="monthlysalary">

							  <div class="help-block with-errors" style="color: red;"></div>

                            </div>

                          </div>

                          <div class="col-md-3">

                            <div class="form-group label-floating">

                              <label class="control-label" for="reason">Reason of leaving</label>

                              <input class="form-control" type="text" name="reason" id="reason">

							  <div class="help-block with-errors" style="color: red"></div>

                            </div>

                          </div>

                      </div>

                    </div>

                            </div>

                    <div class="row col-md-12">

	                    <h6 style="margin-top: 30px; pull-left"><i class="fa fa-graduation-cap"> </i><b> EDUCATIONAL BACKGROUND </b></h6>

	                    <hr>

	                    	<div class="col-md-12">

	                    		<label><b>Primary:</b></label>

	                    	</div>

	                    	<div class="col-md-4">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="school">Name of School</label>

	                    			<input type="text" name="elem_name" class="form-control" id="school">

	                    		</div>

	                    	</div>

	                    	<div class="col-md-3">

	                    		<label class="control-label" for="pfrom"><i class="fa fa-calendar" ></i> From:</label>

	                    		<div class="input-group input-daterange">

									<input data-provide="datepicker"  name="elem_datefrom" id="pfrom" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

									<div class="input-group-addon">to</div>

									<input data-provide="datepicker" name="elem_dateto" id="pto" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

								</div>

			                   <!--  <div class="col-md-6">

			                    	<div class="form-group label-floating">

			                    		<label class="control-label" for="pfrom"><i class="fa fa-calendar" ></i> From:</label>

			                    		<input data-provide="datepicker"  name="elem_datefrom" id="pfrom" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

			                    	</div>

			                    </div>

			                    <div class="col-md-6">

			                    	<div class="form-group label-floating">

			                    		<label class="control-label" for="pto"><i class="fa fa-calendar" ></i> To:</label>

			                    		<input data-provide="datepicker" name="elem_dateto" id="pto" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

			                    	</div>

			                    </div> -->

	                    	</div>

	                    	<div class="col-md-4">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="scholarship">Scholarship/Honors</label>

	                    			<input type="text" class="form-control" id="scholarship" name="elem_scholarship">

	                    		</div>

	                    	</div>

	                    	<div class="col-md-12">

	                    		<label><b>Secondary:</b></label>

	                    	</div>

	                    	<div class="col-md-4">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="school">Name of School</label>

	                    			<input type="" name="hs_name" class="form-control" id="school">

	                    		</div>

	                    	</div>

	                    	<div class="col-md-3">

	                    		<label class="control-label" for="pfrom"><i class="fa fa-calendar" ></i> From:</label>

	                    		<div class="input-group input-daterange">

									<input data-provide="datepicker" name="hs_datefrom" id="sfrom" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

									<div class="input-group-addon">to</div>

									<input data-provide="datepicker" name="hs_dateto" id="sto" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

								</div>





		                    	<!-- <div class="col-md-6">

		                    		<div class="form-group label-floating">

		                    			<label class="control-label" for="sfrom"><i class="fa fa-calendar" ></i> From:</label>

		                    			<input data-provide="datepicker" name="hs_datefrom" id="sfrom" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d">

		                    		</div>

		                    	</div>

		                    	<div class="col-md-6">

		                    		<div class="form-group label-floating">

		                    			<label class="control-label" for="sto"><i class="fa fa-calendar" ></i> To:</label>

		                    			<input data-provide="datepicker" name="hs_dateto" id="sto" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

		                    		</div>

		                    	</div> -->

		                    </div>

	                    	<div class="col-md-4">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="scholarship">Scholarship/Honors</label>

	                    			<input type="text" class="form-control" id="scholarship" name="hs_scholarship">

	                    		</div>

	                    	</div>

	                    	<div class="col-md-12">

	                    		<label><b>Tertiary:</b></label>

	                    		<label style="padding-left: 2%">

	                    			<input type="checkbox"  name="college_grad" id="college_grad" value="YES" onclick="if(this.checked){showTertiary()} else {hideTertiary()}" checked>Graduated

	                    		</label>

	                    	</div>

	                    	<div id="tertiary">

		                    	<div class="col-md-4">

		                    		<div class="form-group label-floating">

		                    			<label class="control-label" for="school">Name of School</label>

		                    			<input type="" name="col_name" id="col_name" class="form-control" id="school">

		                    		</div>

		                    	</div>

		                    	<div class=" col-md-3" id="col_from">

		                    		<label class="control-label" for="col_datefrom"><i class="fa fa-calendar" ></i> From:</label>

									

		                    		<div class="input-group input-daterange">

										<input data-provide="datepicker" name="col_datefrom" id="col_datefrom" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly >

											<div class="input-group-addon">to</div>

											

										<input data-provide="datepicker" name="col_dateto" id="col_dateto" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

									</div>



			                    </div>

								

								

								<div class=" col-md-3" id="col_to" style="display:none;">

		                    		<label class="control-label" for="col_datefrom2"><i class="fa fa-calendar" ></i> From:</label>

									

		                    		<div class="input-group input-daterange">

										<input data-provide="datepicker" name="col_datefrom2" id="col_datefrom2" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly >

											

									</div>

								</div>



			                    <div class="row col-md-5">

			                    	<div class="col-md-6">

			                    		<div class="form-group label-floating">

			                    			<label class="control-label" for="degree" style="font-size: small;">Degree Course /Vocational</label>

			                    			<input type="text" id="col_degree" class="form-control" name="col_degree">

			                    		</div>

			                    	</div>

			                    	<div class="col-md-6">

			                    		<div class="form-group label-floating">

			                    			<label class="control-label" for="scholarship">Scholarship/Honors</label>

			                    			<input type="text" class="form-control" id="col_scholarship" name="col_scholarship">

			                    		</div>

			                    	</div>

			                    </div>

		                    </div>

		                    <div id="gradStudies">

		                    	<div class="col-md-12">

		                    		<label><b>Graduate Studies:</b></label>

		                    	</div>

		                    	<div class="col-md-4">

		                    		<div class="form-group label-floating">

		                    			<label class="control-label" for="school">Name of School</label>

		                    			<input type="" name="grad_name" class="form-control" id="grad_name">

		                    		</div>

		                    	</div>

		                    	<div class=" col-md-3">

		                    		<label class="control-label" for="pfrom"><i class="fa fa-calendar" ></i> From:</label>

		                    		<div class="input-group input-daterange">

										<input data-provide="datepicker" name="grad_datefrom" id="grad_datefrom" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

										<div class="input-group-addon">to</div>

										<input data-provide="datepicker" name="grad_dateto" id="grad_dateto" class="form-control date" data-date-autoclose="true"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-end-date="-1d" readonly>

									</div>

								</div>

			                    <div class="row col-md-5">

			                    	<div class="col-md-6">

			                    		<div class="form-group label-floating">

			                    			<label class="control-label" for="degree" style="font-size: small;">Degree Course /Vocational</label>

			                    			<input type="text" id="grad_degree" class="form-control" name="grad_degree">

			                    		</div>

			                    	</div>

			                    	<div class="col-md-6">

			                    		<div class="form-group label-floating">

			                    			<label class="control-label" for="scholarship">Scholarship/Honors</label>

			                    			<input type="text" class="form-control" id="grad_scholarship" name="grad_scholarship">

			                    		</div>

			                    	</div>

			                    </div>

		                    </div>

                    </div>

                    <div class="col-md-12">

                    	<h6 style="padding-top: 30px"><i class="fa fa-id-card"> </i><b> Professional Qualifications</b></small></h6>  

                    	<hr>

                            <button type="button" class="btn btn-raised btn-info btn-sm add_field_button_professional">Add Professional Qualification</button>

                    </div>

                    <div class="input_fields_wrap_professional">                     	

	                    <div class="row col-md-12">

	                    	<div class="col-md-3">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="license">License/Certification</label>

	                    			<input type="text" class="form-control" name="license" id="license">

	                    		</div>

	                    	</div>

	                    	<div class="col-md-1">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="rate">Rating</label>

	                    			<input type="text" id="rate" class="form-control" name="rating">

	                    		</div>

	                    	</div>

	                    	<div class="col-md-2">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="dateg"><i class="fa fa-calendar" ></i> Date Grandted</label>

		                    			<input data-provide="datepicker" id="dateg" class="form-control date" name="dategranted" data-date-autoclose="true"  data-date-format="MM dd, yyyy" data-date-end-date="-1d" readonly>

	                    		</div>

	                    	</div>

	                    	<div class="col-md-2">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="institution">Granting Institution</label>

	                    			<input type="text" class="form-control" id="institution" name="institution">

	                    		</div>

	                    	</div>

	                    	<div class="col-md-2">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="license-number">License Number</label>

	                    			<input type="number" class="form-control" id="license-number" name="licensenum">

	                    		</div>

	                    	</div>

	                    	<div class="col-md-2">

	                    		<div class="form-group label-floating">

	                    			<label class="control-label" for="dater"><i class="fa fa-calendar" ></i> Date Release</label>

	                    				<input data-provide="datepicker" class="form-control date" id="dater" name="datereleased" data-date-autoclose="true"  data-date-format="MM dd, yyyy" data-date-end-date="-1d" readonly>

	                    		</div>

	                    	</div>

	                    </div>

                    </div>



                        <!-- buttons -->

                    <button type="button" class="btn btn-raised btn-primary pull-left" onclick="document.getElementById('container3').style.display='block';document.getElementById('container4').style.display='none';">PREVIOUS</button>

                    <button type="button" style="margin-bottom: 1%" class="btn btn-raised btn-primary pull-right" id="frnext">NEXT</button>

                </div> <!-- end of container 4 -->



                <div class="card container" id="container5">

					<img class="img" src="lady liberty.png" style=" width: 85%;" >

					<a class="btn btn-raised btn-sm btn-primary pull-right" value="" id="saveQuit5" style="color:white;float:right;text-decoration:none;margin-top:2%;">Save and Quit</a>

                	<h6 style="padding-top: 30px"><i class="fa fa-language"> </i><b> Language proficiency</b> </h6>  

                    <hr>

					<button type="button" class="btn btn-raised btn-sm btn-info add_field_button_language" value="Add another text input" onClick="addInput('dynamicInput');">Add Language</button>

					<div class="input_fields_wrap_language" >

						<div class="row col-md-12" id="dynamicInput">

							<div class="col-md-3">

								<div class="form-group label-floating">

									<label class="control-label" for="language">Language you know</label>

									<input type="text" class="form-control" id="language" name=" language">

								</div>

							</div>

							<div class="col-md-12"></div>

							<div class="col-md-1">

								<div class="form-group">

									<label> 

										<input type="checkbox" name="speak" value="yes"> Speak

									</label>

								</div>

							</div>

							<div class="col-md-1">

								<div class="form-group">

									<label>  

										<input type="checkbox" name="write" value="yes"> Write

									</label>

								</div>

							</div>

							<div class="col-md-1">

								<div class="form-group">

									<label>  

										<input type="checkbox" name="read" value="yes"> Read

									</label>

								</div>

							</div>

						</div>

					</div>



					<h6 style="padding-top: 30px"><b> Other Information</b> </h6>

					<hr>

					<div class="row col-md-4" >			

						<div class="form-group label-floating">

							<label class="control-label" for="checkup"><i class="fa fa-calendar" ></i> Last physical check-up </label>

							<div class="input-group">

								<input data-provide="datepicker" id="checkup" class="form-control date" name="checkup" data-date-autoclose="true"  data-date-format="MM dd, yyyy" data-date-end-date="-1d" readonly>

								<span class="input-group-addon add-on"><span class="fa fa-calendar"></span>

							</div>

						</div>

					</div>

					<div class="row col-md-12">

						<div class="row col-md-4">

							<div class="input_fields_wrap_skill">

								<button type="button" class="btn btn-raised btn-sm btn-info add_field_button_skill">ADD</button>

								<div class="form-group label-floating">

									<label class="control-label" for="skill">Special Skill/Hobbies</label>

									<input type="text" class="form-control" id="skill" name="skill1">

								</div>

							</div>

						</div>

						<div class="col-md-4">

							<div class="input_fields_wrap_nacad">

									<button type="button" class="btn btn-raised btn-sm btn-info add_field_button_nacad">ADD</button>

								<div class="form-group label-floating">

									<label class="control-label" for="nacad">Non-Academic Distinction / Recognition</label>

									<input type="text" class="form-control" id="nacad" name="recognition1">

								</div>

							</div>

						</div>

						<div class="col-md-4">

							<div class="input_fields_wrap_org">

									<button type="button" class="btn btn-raised btn-sm btn-info add_field_button_org">ADD</button>

								<div class="form-group label-floating">

									<label class="control-label" for="org">Membership in Association / Organization</label>

									<input type="text" class="form-control" id="org" name="org1">

								</div>

							</div>

						</div>

					</div>

					

					<div class="row col-md-12">			

					<h6 style="margin-top: 10px"><b> Character Reference</b> (Person not related by consanguity or affinity to you)</h6>

					</div>

					<div class="">

						<div class="row col-md-12">

							<div class="col-md-5">

								<div class="form-group label-floating">

									<label class="control-label" for="rname">Name<label class="text-danger">*</label></label>

									<input type="text" class="form-control" id="rname" name="ONE_REFNAME" minlength="2" required>

           			 				<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group label-floating">

									<label class="control-label" for="cname">Company Name<label class="text-danger">*</label></label>

									<input type="text" class="form-control" id="company_name1" name="ONE_REFADDRESS" minlength="2" required>

           			 				<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

							<div class="col-md-3">

								<div class="form-group label-floating">

									<label class="control-label" for="eadd">Tel No. / Email Address<label class="text-danger">*</label></label>

									<input type="text" class="form-control" id="email1" name="ONE_REFCONTACT" required>

           			 				<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

						</div>

						<div class="row col-md-12">

							<div class="col-md-5">

								<div class="form-group label-floating">

									<label class="control-label" for="rname">Name<label class="text-danger">*</label></label>

									<input type="text" class="form-control" id="rname2" name="TWO_REFNAME" required>

									<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group label-floating">

									<label class="control-label" for="cname">Company Name<label class="text-danger">*</label></label>

									<input type="text" class="form-control" id="cname2" name="TWO_REFADDRESS" required>

									<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

							<div class="col-md-3">

								<div class="form-group label-floating">

									<label class="control-label" for="eadd">Tel No. / Email Address<label class="text-danger">*</label></label>

									<input type="text" class="form-control" id="eadd2" name="TWO_REFCONTACT" required>

									<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

						</div>

						<div class="row col-md-12">

							<div class="col-md-5">

								<div class="form-group label-floating">

									<label class="control-label" for="rname">Name<label class="text-danger">*</label></label>

									<input type="text" class="form-control" id="rname3" name="THREE_REFNAME" required>

									<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

							<div class="col-md-4">

								<div class="form-group label-floating">

									<label class="control-label" for="cname">Company Name<label class="text-danger">*</label></label>

									<input type="text" class="form-control" id="cname3" name="THREE_REFADDRESS" required>

									<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

							<div class="col-md-3">

								<div class="form-group label-floating">

									<label class="control-label" for="eadd">Tel No. / Email Address<label class="text-danger">*</label></label>

									<input type="text" class="form-control" id="eadd3" name="THREE_REFCONTACT" required>

									<div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

						</div>

						<div class="row col-md-16">

					      <div class="col-md-4">

					      	<div class="form-group">

					      		<label for="inputFile">File</label>

					      		<input type="file" name="fileToUpload" id="fileToUpload" accept="application/msword, application/pdf, .doc, .docx, .pdf">

						 	 	<div class="input-group">

									<input type="text" readonly="" class="form-control" placeholder="Upload Resume in PDF or DocX Format">

									<span class="input-group-btn input-group-sm">

										<button type="button" class="btn btn-fab btn-fab-mini">

											<i class="fa fa-paperclip"></i>

										</button>

									</span>

								</div>

					      	</div>

					      </div>

						  <div class="col-md-4">

					      	<div class="form-group label-floating">

						        <center><label class="control-label" for="source">Your Photo:</label><br>

						        <a href="#" onclick="document.getElementById('fileup').click(); return false;"><img style="border-radius:50%;" id="blah" src="img/profileBanner.png" width=100 height=100 alt="your image" /></a></br></br><center>

								<input type="file" name="fileup" id="fileup" accept="image/*" onchange="readURL(this);"/>

					      	</div>

					      </div>

					      <div class="col-md-4">

					      	<div class="form-group label-floating">

						        <label class="control-label" style="padding-bottom:9%;" for="source">Application Source</label><label class="text-danger">*</label></label>

						        <select id="source" name="sourcex" class="select form-control" onchange="showsource(this)">

									<option value="-Select Here-">-Select Here-</option>

						        	<option value="Linked In">Linked In</option>

						        	<option value="Website">Website</option>

						        	<option value="Facebook">Facebook</option>

						        	<option value="From a Friend">From a Friend</option>

						        	<option value="Job street">Jobstreet</option>

						        	<option value="Others">Others</option>

						        </select>

								<span style="color: red;display:none;" id="source_validator">Select Application Source.</span>

					      	</div>

					      </div>

						  <div class="col-md-4">

							<div id="souceothers" class="form-group label-floating">

						      	<label class="control-label" style="padding-bottom:9%;" for="sourcespec">Please specify</label>

						      	<input type="text" id="sourcespec" class="form-control" name="sourcespec">

						    </div>

						  </div>

						  

						</div>

					</div>

					

                	<!-- buttons -->

                	<button type="button" class="btn btn-raised btn-primary pull-left" onclick="document.getElementById('container4').style.display='block';document.getElementById('container5').style.display='none';">PREVIOUS</button>

                    <button type="button" id='lnext' style="margin-bottom: 1%" class="btn btn-raised btn-primary pull-right" >NEXT</button>

                </div><!-- end of container 5 -->

				<!-- Start of container 6 -->

				<div class="card container" id="container6">

					<img class="img" src="lady liberty.png" style=" width: 85%;">

					

					<h6 style="padding-top: 30px"><i class="fa fa-book"> </i><b> Essay Questions</b> </h6>  

					<hr>

					<div class="row col-md-12" >

					<?php

						$cnt_res = $conn->query("SELECT * from tbl_question");

						$row_cnt = $cnt_res->num_rows;

						echo'<input type="hidden" id="question_count" name="question_count" value="'.$row_cnt.'">';

						$cnt = 1;

						while($row4 = $cnt_res->fetch_assoc()) {

							$question = utf8_encode($row4['Question']);

							echo'<div class="form-group">

								<div class="form-group label-floating">

								  <label for="question'.$cnt.'" style=""><b> '.$cnt.'. </b>'.$question.'</label>

								  <textarea class="form-control" rows="5" name="question'.$cnt.'" id="question'.$cnt.'" required></textarea>

								  <p style="float:right;"><b><span id="word_left'.$cnt.'">300</span></b>(Max.300 words)</p>

								  <div class="help-block with-errors" style="color: red"></div>

								</div>

							</div>

								<br>';

							$cnt++;

						}

					?>

						<button type="button" class="btn btn-raised btn-primary pull-left" onclick="document.getElementById('container5').style.display='block';document.getElementById('container6').style.display='none';">PREVIOUS</button>

						<button type="button" id="agreement" style="margin-bottom: 1%" class="btn btn-raised btn-info btn-md pull-right" name="checker" data-toggle="modal" data-target="#confirmModal">SUBMIT</button>

					</div>

				</div>



				<!--START-->

				<div class="container">

					<div id="confirmModal" role="dialog" class="modal fade">

						<div class="modal-dialog">

						  <div class="modal-content">

							<div class="modal-header">

							  <button type="button" data-dismiss="modal" class="close">&times;</button>

							  <h4 class="modal-title"><b>I N F O R M A T I O N&nbsp;&nbsp;&nbsp;C O N F I R M A T I O N</b></h4>

							</div>

							<div class="modal-body">

								Please check these information if they are correct. <br>

								Go back if you need to change anything. <br><br>

								 <table style="margin-left:5%">

                                    <tr>

                                        <th>NAME</th>

                                        <td> <input style="width:85%; margin-left: 5%;" type="text" id="name" readonly></td>

                                    </tr>

                                    <tr>

								        <th> ADDRESS </th>

                                        <td> <input style="width:85%; margin-left: 5%;" type="text" id="address" readonly> </td>

									</tr>

									<tr>

										<th> BIRTHDAY </th>

										<td> <input style="width:85%; margin-left: 5%;" type="text" id="birthday" readonly></td>

									</tr>

									<tr>

                                        <th> CONTACT NUMBER </th>

										<td> <input style="width:85%; margin-left: 5%;" type="text" id="contact" readonly></td>

									</tr>

								    <tr>

									   <th> E-MAIL </th>

									   <td> <input style="width:85%; margin-left: 5%;" type="text" id="useremail" readonly> </td>

								    </tr>

								    <tr>

                                        <th> APPLIED POSITION </th>

									   <td> <input style="width:85%; margin-left: 5%;" type="text" id="position" readonly> </td>

									</tr>

									<tr>

										<th> EMPLOYMENT DATE </th>

										<td> <input style="width:85%; margin-left: 5%;" type="text" id="employdate" readonly> </td>

									</tr>

									<tr>

										<th> APPLICATION SOURCE </th>

										<td> <input style="width:85%; margin-left: 5%;" type="text" id="srcs" readonly> 

										<input style="width:43%; margin-left: 5%;" type="text" id="srcsspec" readonly> </td>

									</tr>

                                </table>

							</div>

							<div class="modal-footer">

								<button type="button" id="agreement" class="btn btn-raised btn-info btn-md" data-toggle="modal" data-dismiss="modal" data-target="#modald">Confirm</button>

								<button type="button" data-dismiss="modal" class="btn btn-default">Back</button>

							</div>

						  </div>

						</div>

					</div>

				</div>

				<!--END-->

				

                <div id="modald" class="modal fade" role="dialog" >

				  <div class="modal-dialog">

				    <div class="modal-content">

				      <div class="modal-header">

				      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>

				        <h3 class="modal-title"><center>Terms and Agreement</center></h3>

				      </div>

				      <div class="modal-body">

				      <p align="justify"><medium>

				        I certify that the information contained in this application is

				        correct to the best of my knowledge. I understand that to falsify

				        information is grounds for refusing to hire me, or for discharge

				        should I be hired. I authorize any person, organization or 

				        company listed on this application to furnish you any and all 

				        information concerning my previous employment, education, and 

				        qualifications for employment, I agree to abide by the rules and

				        regulations of the company, which rules may be changed, withdrawn,

				        added or interpreted at any time, at the company's sole option and

				        without prior notice to me. I also acknowledge that my employment

				        may be terminated, or any offer or acceptance of employment 

				        withdrawn, at any time, with or without cause, and with or without

				        prior notice at the option of the company or myself.

				      </medium></p>

				      </div>

				      <div class="modal-footer">

					  <input type="submit" id="submitAllData" style="visibility: hidden;"/>

				      <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>

					  <button id="submitForm" class="btn btn-success btn-raised">I Agree</button>

				      </div>

				    </div>

				  </div>

				</div>

				

				<input type="hidden" id="AgreeSubmit" name="submit" value="YES">

				<input type="hidden" id="col_grad" name="col_grad" value="YES">

				<input type="hidden" id="birthPlaceCountry" name="birthPlaceCountry" value="">

				<input type="hidden" id="birthPlaceRegion" name="birthPlaceRegion" value="">

				<input type="hidden" id="birthPlaceProvince" name="birthPlaceProvince" value="">

				<input type="hidden" id="birthPlaceCity" name="birthPlaceCity" value="">



				<input type="hidden" id="curAddRegion" name="curAddRegion" value="">

				<input type="hidden" id="curAddProvince" name="curAddProvince" value="">

				<input type="hidden" id="curAddCity" name="curAddCity" value="">



				<input type="hidden" id="provAddRegion" name="provAddRegion" value="">

				<input type="hidden" id="provAddProvince" name="provAddProvince" value="">

				<input type="hidden" id="provAddCity" name="provAddCity" value="">



				<input type="hidden" id="fatherCountry" name="fatherCountry" value="">

				<input type="hidden" id="fatherRegion" name="fatherRegion" value="">

				<input type="hidden" id="fatherProvince" name="fatherProvince" value="">

				<input type="hidden" id="fatherCity" name="fatherCity" value="">



				<input type="hidden" id="motherCountry" name="motherCountry" value="">

				<input type="hidden" id="motherRegion" name="motherRegion" value="">

				<input type="hidden" id="motherProvince" name="motherProvince" value="">

				<input type="hidden" id="motherCity" name="motherCity" value="">

				

				<input type="hidden" id="siblingchild" name="siblingchild" value="">

				<input type="hidden" id="app_stat" name="app_stat" value="exp">

			</form>	

			<center>

				<div class="panel-footer" id="footer">

						<p>Private and Confidential. Anderson Group BPO Inc. © 2017 <br></p>

				</div>

			</center>

	</div>

	

		

	

<!--End of Formbody -->



	<script type="text/javascript" src="formvalidator.js"></script>

	<script type="text/javascript" src="js/validator.js"></script>

	<script type="text/javascript">

		$( document ).ready(function() {

               $("#btn_intern").on('click',function(){
                 jQuery("#question1").prop("readonly", "true").val("N/A"); //Disabled the essay question 
                 jQuery("#question2").prop("readonly", "true").val("N/A");
                 jQuery("#question3").prop("readonly", "true").val("N/A");
                 jQuery("#question4").prop("readonly", "true").val("N/A");
                 jQuery("#removeWorkid").hide();jQuery("#salary_group").hide();jQuery("#Expdate").hide();jQuery("#Intdate").show();

                $(".interns").addClass("active");

                $(".experienced").removeClass("active");

                $(".fresh").removeClass("active");    

                });

                $("#btn_experienced").on('click',function(){

                $("apply_position").find("#removeIntern").remove();jQuery("#Intdate").hide();jQuery("#Expdate").show();jQuery("#salary_group").show();jQuery("#removeWorkid").show();

                });

                   jQuery("#btn_freshgrad").on('click', function(event){

                   jQuery("#Intdate").hide();jQuery("#Expdate").show();jQuery("#salary_group").show();jQuery("#removeWorkid").show();

                   });   

        }); 

	</script>	

	<script type="text/javascript">

		$( document ).ready(function() {

			$("#apply_position").on('change', function(e) {

			var value = document.getElementById("apply_position").value;

			if(value=="Others"){

				

				document.getElementById("otherpositionDiv").required = true;

				$("#otherpositionDiv").css("display","block");

				$("#otherpositionDiv2").css("display","block");

			}else{

				document.getElementById("otherpositionDiv").required = false;

				$("#otherpositionDiv").css("display","none");

				$("#otherpositionDiv2").css("display","none");

			}

			

			});

		    document.getElementById('container2').style.display='none';/*hide all containers !first*/

		    document.getElementById('container3').style.display='none';/*hide all containers !first*/

		    document.getElementById('container4').style.display='none';/*hide all containers !first*/

		    document.getElementById('container5').style.display='none';/*hide all containers !first*/

		    document.getElementById('container6').style.display='none';/*hide all containers !first*/

		    document.getElementById('other_div').style.display='none';/*hide specify civil status*/

		    document.getElementById('married_div').style.display='none';/*hide married status*/

		    document.getElementById('widowed_div').style.display='none';/*hide widowed status*/

		    document.getElementById('souceothers').style.display='none';

		    document.getElementById('country').style.display='none';

		    document.getElementById('fcountry').style.display='none';

		    document.getElementById('mcountry').style.display='none';

		   

		});

		function readURL(input) {

		if (input.files && input.files[0]) {

			var reader = new FileReader();



			reader.onload = function (e) {

				$('#blah')

					.attr('src', e.target.result)

					.width(100)

					.height(100);

			};



			reader.readAsDataURL(input.files[0]);

		}

		}

		

	</script>

	

	<!--START-->

	<script type="text/javascript">

		$('button[name=checker]').click(function(){

            var last =  $('#lname').val();

			var first =  $('#fname').val();

			var middle =  $('#mname').val();

            var fulln = last + ", " + first + " " + middle;

			var add1 =  $('#current_home_num').val();

			var add2 =  $('#current_barangay').val();

			var add3 =  $('#curaddress').val();

            var fulladd = add1 + ", " + add2 + ", " + add3;

			var bday =  $('#bday123').val();

			var con_num =  $('#mobile_number').val();

			var e_mail =  $('#email').val();

			var applied =  $('#apply_position').val();

			var empdate =  $('#empdate').val();

			var sources =  $('#source').val();

            var sourcespec = $('#sourcespec').val();



            document.getElementById("name").value = fulln;

            document.getElementById("address").value = fulladd;

            document.getElementById("birthday").value = bday;

            document.getElementById("contact").value = con_num;

            document.getElementById("useremail").value = e_mail;

            document.getElementById("position").value = applied;

            document.getElementById("employdate").value = empdate;

            document.getElementById("srcs").value = sources;

            document.getElementById("srcsspec").value = sourcespec;

        });

	<!--END-->

		

		$.material.init();

		function emailfunction2(){

			var emailvalue =  $('#email').val();

			$.ajax({

				url: "address.php",

				type: "GET",

				data: {email:emailvalue},

				success: function(data){

					

					document.getElementById('emailhelp').innerHTML = data;

				},

				error: function(data){

					alert(data);

				}

			});

		}



		// function for toggle child/sibling

		$(document).ready(function(){

	

    		$("#positive").click(function(){

       			if($("#siblings").attr('data-click-state') == 1) {

				$("#siblings").attr('data-click-state', 0);

				$("#siblings").show();

				$("#children").hide();

				/*document.getElementById("siblingchild").value=0;

				$('.wawchild input[type="text"]').val('');

				$('.wawchild input[type="number"]').val('');
*/
				

				} else {

				$("#siblings").attr('data-click-state', 1);

				$("#children").show();

				$("#siblings").hide();

				/*document.getElementById("siblingchild").value=1;

				$('.wawsibling input[type="text"]').val('');

				$('.wawsibling input[type="number"]').val('');*/

				

				}

		});

		});



		//functions for Birth Place

		function countryfunction(selectedCountry){

			$( "#birthPlaceCountry" ).val( selectedCountry.options[selectedCountry.selectedIndex].text )



			var country = $('#countryid').val();

			$("#placeofbirth").val(country);

			document.getElementById('birthPlaceRegion').value='';

			document.getElementById('birthPlaceCity').value='';

			document.getElementById('birthPlaceProvince').value='';



		}



		function regionfunction(selectedRegion){

			$( "#birthPlaceRegion" ).val( selectedRegion.options[selectedRegion.selectedIndex].text )



			var regid = $('#regionid').val();

			var splitted = regid.split("_");

			var rid = splitted[0];

			var rname = splitted[1];



			if (rid == 1) {

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, rname: rname, ajaxmanila: 1},

					success:function (data){

						

						//for manila click in selectTag

						document.getElementById('cities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='ncrfunction(this)' name='cities' id='cityid'>"+data+"</select>";

		     			document.getElementById('province').style.display='none';

		     			document.getElementById('birthPlaceProvince').value='';

						

						

					},

					error: function(data){

						alert(data);	

					}

				});

			}

			else{

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, rname: rname, ajaxprovince: 1},

					success: function(data){

						//for province click in selectTag

		     			document.getElementById('province').style.display='block';

						document.getElementById('province').innerHTML = "<b>Province</b><select class='select form-control' onchange='provincefunction(this)' name='province' id='provinceid'>"+data+"</select>";

		     			document.getElementById('cities').style.display='block';

					},

					error: function(data){

						alert(data);	

					}

				});

			}

		}



		function ncrfunction(selectedCity){

			var cname = $('#cityid').val();

			$("#placeofbirth").val(cname);

			$( "#birthPlaceCity" ).val( selectedCity.options[selectedCity.selectedIndex].text );

			

		}



		var pid = "";

		var pname = "";



		function provincefunction(selectedProvince){



			$( "#birthPlaceProvince" ).val( selectedProvince.options[selectedProvince.selectedIndex].text )



			var provid = $('#provinceid').val();

			var provsplit = provid.split("_");

			pid = provsplit[0];

			pname = provsplit[1];



			$.ajax({

				url: "address.php",

				type: "POST",

				data: {pid: pid, pname: pname, ajaxcities: 1},

				success: function(data){

					

					document.getElementById('cities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='citiesfunction(this)' name='cities' id='cityid'>"+data+"</select>";

					

				},

				error: function(data){

					alert(data);

				}

			});

		}



		function citiesfunction(selectedCity){



			var cname = $('#cityid').val();

			$("#placeofbirth").val(cname +", "+pname);

		

		



			$( "#birthPlaceCity" ).val( selectedCity.options[selectedCity.selectedIndex].text )

		}





		//functions for current address



		function cregionfunction(selectedCRegion){

			$( "#curAddRegion" ).val( selectedCRegion.options[selectedCRegion.selectedIndex].text )

			var regid = $('#cregionid').val();

			var splitted = regid.split("_");

			var rid = splitted[0];

			var rname = splitted[1];



			if (rid == 1) {

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, rname: rname, ajaxmanila: 1},

					success:function (data){

						document.getElementById('ccities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='cncrfunction(this)' id='ccityid'>"+data+"</select>";

		     			document.getElementById('cprovince').style.display='none';

						document.getElementById('curAddProvince').value='';

						

					},

					error: function(data){

						alert(data);	

					}

				});

			}

			else{

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, rname: rname, ajaxprovince: 1},

					success: function(data){

						document.getElementById('cprovince').style.display='block';

						document.getElementById('cprovince').innerHTML = "<b>Province</b><select class='select form-control' onchange='cprovincefunction(this)' id='cprovinceid'>"+data+"</select>";

		     			document.getElementById('ccities').style.display='block';

					},

					error: function(data){

						alert(data);	

					}

				});

			}

		}



		function cncrfunction(selectedCCity){

			var cname = $('#ccityid').val();

			$("#curaddress").val(cname);

			$( "#curAddCity" ).val( selectedCCity.options[selectedCCity.selectedIndex].text )

		}



		var pid = "";

		var cpname = "";



		function cprovincefunction(selectedCProvince){

			$( "#curAddProvince" ).val( selectedCProvince.options[selectedCProvince.selectedIndex].text )

			var provid = $('#cprovinceid').val();

			var provsplit = provid.split("_");

			pid = provsplit[0];

			cpname = provsplit[1];



			$.ajax({

				url: "address.php",

				type: "POST",

				data: {pid: pid, cpname: cpname, ajaxcities: 1},

				success: function(data){

					document.getElementById('ccities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='ccitiesfunction(this)' id='ccityid'>"+data+"</select>";

				},

				error: function(data){

					alert(data);

				}

			});

		}

		function ccitiesfunction(selectedCCity){

			var cname = $('#ccityid').val();

			$("#curaddress").val(cname +", "+cpname);

			$( "#curAddCity" ).val( selectedCCity.options[selectedCCity.selectedIndex].text )

		}

			

		

			function next_container(){

				

			}

		

	

		//functions for provincial address



		function pregionfunction(selectedPRegion){

			$( "#provAddRegion" ).val( selectedPRegion.options[selectedPRegion.selectedIndex].text )

			var regid = $('#pregionid').val();

			var splitted = regid.split("_");

			var rid = splitted[0];

			var rname = splitted[1];



			if (rid == 1) {

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, rname: rname, ajaxmanila: 1},

					success:function (data){

						document.getElementById('pcities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='pncrfunction(this)' id='pcityid'>"+data+"</select>";

		     			document.getElementById('pprovince').style.display='none';

		     			document.getElementById('provAddProvince').value='';

						

					},

					error: function(data){

						alert(data);	

					}

				});

			}

			else{

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, rname: rname,ajaxprovince: 1},

					success: function(data){

						document.getElementById('pprovince').style.display='block';

						document.getElementById('pprovince').innerHTML = "<b>Province</b><select class='select form-control' onchange='pprovincefunction(this)' id='pprovinceid'>"+data+"</select>";

		     			document.getElementById('pcities').style.display='block';

					},

					error: function(data){

						alert(data);	

					}

				});

			}

		}



		function pncrfunction(selectedPCity){

			var pname = $('#pcityid').val();

			$("#provaddress").val(pname);

			$( "#provAddCity" ).val( selectedPCity.options[selectedPCity.selectedIndex].text )

		}



		var pid = "";

		var ppname = "";



		function pprovincefunction(selectedPProvince){

			$( "#provAddProvince" ).val( selectedPProvince.options[selectedPProvince.selectedIndex].text )

			var provid = $('#pprovinceid').val();

			var provsplit = provid.split("_");

			pid = provsplit[0];

			ppname = provsplit[1];



			$.ajax({

				url: "address.php",

				type: "POST",

				data: {pid: pid, ppname: ppname, ajaxcities: 1},

				success: function(data){

					document.getElementById('pcities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='pcitiesfunction(this)' id='pcityid'>"+data+"</select>";

				},

				error: function(data){

					alert(data);

				}

			});

		}

		function pcitiesfunction(selectedPCity){

			var cname = $('#pcityid').val();

			$("#provaddress").val(cname +", "+ppname);

			$( "#provAddCity" ).val( selectedPCity.options[selectedPCity.selectedIndex].text )

		}



		//for father place of birth

		function fcountryfunction(selectedfCountry){

			$( "#fatherCountry" ).val( selectedfCountry.options[selectedfCountry.selectedIndex].text )

			var country = $('#fcountryid').val();

			$("#fplace_birth").val(country);

		}



		function fregionfunction(selectedfRegion){

			$( "#fatherRegion" ).val( selectedfRegion.options[selectedfRegion.selectedIndex].text )

			var regval = $('#fregionid').val();

			var regsplit = regval.split("_");

			var rid = regsplit[0];

			var fregname = regsplit[1];



			if (rid == 1) {

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, fregname: fregname, ajaxmanila: 1},

					success:  function(data){

						document.getElementById('fcities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='fncrfunction(this)' id='fcityid'>"+data+"</select>";

		     			document.getElementById('fprovince').style.display='none';

					},

					error: function(data){

						alert(data);

					}

				});

			}

			else{

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, fregname: fregname, ajaxprovince: 1},

					success: function(data){

						document.getElementById('fprovince').style.display='block';

						document.getElementById('fprovince').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='fprovincefunction(this)' id='fprovinceid'>"+data+"</select>";

		     			document.getElementById('fcities').style.display='block';

					},

					error: function(data){

						alert(data);	

					}

				});

			}

		}



		function fncrfunction(selectedfCity){

			var fregname = $('#fcityid').val();

			$("#fplace_birth").val(fregname);

			$( "#fatherCity" ).val( selectedfCity.options[selectedfCity.selectedIndex].text )

		}



		var pid = "";

		var fname = "";



		function fprovincefunction(selectedfProvince){

			$( "#fatherProvince" ).val( selectedfProvince.options[selectedfProvince.selectedIndex].text )

			var fprovid = $('#fprovinceid').val();

			var fprovsplit = fprovid.split("_");

			pid = fprovsplit[0];

			fname = fprovsplit[1];



			$.ajax({

				url: "address.php",

				type: "POST",

				data: {pid: pid, fname: fname, ajaxcities: 1},

				success: function(data){

					document.getElementById('fcities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='fcitiesfunction(this)' id='fcityid'>"+data+"</select>";

				},

				error: function(data){

					alert(data);

				}

			});

		}

		function fcitiesfunction(selectedfCity){

			var cname = $('#fcityid').val();

			$("#fplace_birth").val(cname +", "+fname);

			$( "#fatherCity" ).val( selectedfCity.options[selectedfCity.selectedIndex].text )

		}



		//for mother place of birth

		function mcountryfunction(selectedmCountry){

			$( "#motherCountry" ).val( selectedmCountry.options[selectedmCountry.selectedIndex].text )

			var country = $('#mcountryid').val();

			$("#mplace_birth").val(country);

		}



		function mregionfunction(selectedmRegion){

			$( "#motherRegion" ).val( selectedmRegion.options[selectedmRegion.selectedIndex].text )

			var regval = $('#mregionid').val();

			var regsplit = regval.split("_");

			var rid = regsplit[0];

			var mregname = regsplit[1];



			if (rid == 1) {

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, mregname: mregname, ajaxmanila: 1},

					success:  function(data){

						document.getElementById('mcities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='mncrfunction(this)' id='mcityid'>"+data+"</select>";

		     			document.getElementById('mprovince').style.display='none';

					},

					error: function(data){

						alert(data);

					}

				});

			}

			else{

				$.ajax({

					url: "address.php",

					type: "POST",

					data: {rid: rid, mregname: mregname, ajaxprovince: 1},

					success: function(data){

						document.getElementById('mprovince').innerHTML = "<b>Province</b><select class='select form-control' onchange='mprovincefunction(this)' id='mprovinceid'>"+data+"</select>";

		     			document.getElementById('mcities').style.display='block';

					},

					error: function(data){

						alert(data);	

					}

				});

			}

		}



		function mncrfunction(selectedmCity){

			var mregname = $('#mcityid').val();

			$("#mplace_birth").val(mregname);

			$( "#motherCity" ).val( selectedmCity.options[selectedmCity.selectedIndex].text )

		}



		var pid = "";

		var mname = "";



		function mprovincefunction(selectedmProvince){

			$( "#motherProvince" ).val( selectedmProvince.options[selectedmProvince.selectedIndex].text )

			var mprovid = $('#mprovinceid').val();

			var mprovsplit = mprovid.split("_");

			pid = mprovsplit[0];

			mname = mprovsplit[1];



			$.ajax({

				url: "address.php",

				type: "POST",

				data: {pid: pid, mname: mname, ajaxcities: 1},

				success: function(data){

					document.getElementById('mcities').innerHTML = "<b>City/Municipality</b><select class='select form-control' onchange='mcitiesfunction(this)' id='mcityid'>"+data+"</select>";

				},

				error: function(data){

					alert(data);

				}

			});

		}

		function mcitiesfunction(selectedmCity){

			var cname = $('#mcityid').val();

			$("#mplace_birth").val(cname +", "+mname);

			$( "#motherCity" ).val( selectedmCity.options[selectedmCity.selectedIndex].text )

		}



		//for not graduate

		function showTertiary(){

			/* document.getElementById('tertiary').style.display = "block";

			document.getElementById('gradStudies').style.display = "block"; */

			document.getElementById('col_grad').value = "YES";

			document.getElementById('col_to').style.display = "none";

			document.getElementById('col_from').style.display = "block";

		}

		function hideTertiary(){

			/* document.getElementById('tertiary').style.display = "none";

			document.getElementById('gradStudies').style.display = "none"; */

			document.getElementById('col_to').style.display = "block";

			document.getElementById('col_from').style.display = "none";

			document.getElementById('col_grad').value = "NO";

		}





		// function for select civil status

		function showspec(elem){

		   if(elem.value == "Others"){

	      		document.getElementById('other_div').style.display = "block";

	      		document.getElementById('widowed_div').style.display = "none";

		  		document.getElementById('married_div').style.display = "none";

		   }

		   else if (elem.value == "Married") {

		   		document.getElementById('married_div').style.display = "block";

		   		document.getElementById('widowed_div').style.display = "none";

		   		document.getElementById('other_div').style.display = "none";

		   }

		   else if (elem.value == "Widowed") {

		   		document.getElementById('widowed_div').style.display = "block";

		   		document.getElementById('married_div').style.display = "none";

		   		document.getElementById('other_div').style.display = "none";

		   }

		    else if (elem.value == "Separated") {

		   		document.getElementById('married_div').style.display = "block";

		   		document.getElementById('widowed_div').style.display = "none";

		   		document.getElementById('other_div').style.display = "none";

		   }



		  else{

		  		document.getElementById('other_div').style.display = "none";

		  		document.getElementById('widowed_div').style.display = "none";

		  		document.getElementById('married_div').style.display = "none";

		  }

		}



		function showCountry(){

			document.getElementById('country').style.display = "block";

			document.getElementById('phil').style.display = "none";

		};



		function hideCountry(){

			document.getElementById('phil').style.display = "block";

			document.getElementById('country').style.display = "none";

		};



		function fshowCountry(){

			document.getElementById('fcountry').style.display = "block";

			document.getElementById('fphil').style.display = "none";

			document.getElementById('fatherCity').value = "";

			document.getElementById('fatherRegion').value = "";

			document.getElementById('fatherProvince').value = "";

		};



		function fhideCountry(){

			document.getElementById('fphil').style.display = "block";

			document.getElementById('fcountry').style.display = "none";

		};



		function mshowCountry(){

			document.getElementById('mcountry').style.display = "block";

			document.getElementById('mphil').style.display = "none";

			document.getElementById('motherCity').value = "";

			document.getElementById('motherRegion').value = "";

			document.getElementById('motherProvince').value = "";

		};



		function mhideCountry(){

			document.getElementById('mphil').style.display = "block";

			document.getElementById('mcountry').style.display = "none";

		};



		function showsource(source){

			if (source.value == 'Others') {

				document.getElementById('souceothers').style.display = "block";

			}

			else{

				document.getElementById('souceothers').style.display = "none";

			}

		}



		      $(document).ready(function() {

		        $(".select").dropdown({"optionClass": "withripple"});



		      });



		      $().dropdown({autoinit: "select"});



            // function for adding fields child

            $(document).ready(function() { 

                var max_fields = 10; 

                var wrapper = $(".input_fields_wrap"); //Fields wrapper

                var add_button = $(".add_field_button"); //Add button ID

                

                var x = 3; //initlal text box count

                $(add_button).click(function(e){ //on add input button click

                    e.preventDefault();

                    if(x < max_fields){ //max input box allowed

                        x++; //text box increment

                        $(wrapper).append('<div class="row col-md-12"><div class="col-md-6"></div><div class="col-md-6"><div class="col-md-7"><div class="form-group label-floating"><label class="control-label" for="child" >Enter child name</label><input type="text" name="child_name' + x + '" id="child" class="form-control"></div></div> <div class="col-md-3"><div class="form-group label-floating"><label class="control-label" for="age">Age</label><input id="age" class="form-control" type="number" name="child_age' + x + '"/></div></div><button type=button style="margin-top: 8%" class="btn btn-raised btn-sm btn-danger remove_field pull-right">Remove</button></div></div>'); //add input box

                    }

                });

                

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

                    e.preventDefault(); $(this).parent('div').remove(); x--;

                })

            });





 



            // function for adding fields sibling

            $(document).ready(function() { 

                var max_fields = 10; 

                var wrapper = $(".input_fields_wrap_sibling"); //Fields wrapper

                var add_button = $(".add_field_button_sibling"); //Add button ID

                

                var x = 3; //initlal text box count

                $(add_button).click(function(e){ //on add input button click

                    e.preventDefault();

                    if(x < max_fields){ //max input box allowed

                        x++; //text box increment

                        $(wrapper).append('<div class="row col-md-12"><div class="col-md-6"><div class="col-md-7"><div class="form-group label-floating"><label class="control-label" for="sibling" >Enter sibling name</label><input type="text" id="sibling" class="form-control" name="sibling' + x + '"></div></div> <div class="col-md-3"><div class="form-group label-floating"><label class="control-label" for="sage">Age</label><input id="sage" name="sibling_age' + x + '" class="form-control" type="number"/></div></div><button type=button style="margin-top: 7%" class="btn btn-raised btn-sm btn-danger remove_field pull-right">Remove</button></div></div>'); //add input box

                    }

                });

                

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

                    e.preventDefault(); $(this).parent('div').remove(); x--;

                })

            });



            // function for adding fields work

            $(document).ready(function() { 

                var max_fields = 5; 

                var wrapper = $(".input_fields_wrap_work"); //Fields wrapper

                var add_button = $(".add_field_button_work"); //Add button ID

                

                var x = 1; //initlal text box count

                $(add_button).click(function(e){ //on add input button click

                    e.preventDefault();

                    if(x < max_fields){ //max input box allowed

                        x++; //text box increment

                        $(wrapper).append('<div class=""><div class="row col-md-12"><div class="col-md-2"><div class="form-group label-floating"><label class="control-label" for="from"><i class="fa fa-calendar" ></i> From:</label><div class="input-group"><input class="form-control date" data-provide="datepicker" name="datefrom' + x + '" id="from"  data-date-min-view-mode="1" data-date-format="M yyyy" data-date-autoclose="true"  data-date-end-date="-1d" readonly><span class="input-group-addon add-on"><span class="fa fa-calendar"></span></div></div></div><div class="col-md-2"><div class="form-group label-floating"><label class="control-label" for="to"><i class="fa fa-calendar" ></i> To:</label><div class="input-group"><input class="form-control date" data-provide="datepicker" name="dateto' + x + '" id="to"  data-date-min-view-mode="1" data-date-autoclose="true"  data-date-format="M yyyy" data-date-end-date="-1d" readonly><span class="input-group-addon add-on"><span class="fa fa-calendar"></span></div></div></div><div class="col-md-3"><div class="form-group label-floating"><label class="control-label" for="employers_name">Company`s Name</label><input class="form-control" type="text" name="company_name' + x + '" id="employers_name"></div></div><div class="col-md-2"><div class="form-group label-floating"><label class="control-label" for="employers_contact_number">Contact number</label><input class="form-control" type="number" name="contactnum' + x + '" id="employers_contact_number"></div></div><div class="col-md-3"><div class="form-group label-floating"><label class="control-label" for="employers_address">Company`s address</label><input class="form-control" type="text" name="compadd' + x + '" id="employers_address"></div></div><div class ="col-md-3"><div class="form-group label-floating"><label class="control-label" for="position-title">Position Title</label><input class="form-control" type="text" name="position' + x + '" id="position-title"></div></div><div class="col-md-4"><div class="form-group label-floating"><label class="control-label" for="name-supervisor">Name of immediate supervisor</label><input class="form-control" type="text" name="supervisor' + x + '" id="name-supervisor"></div></div><div class="col-md-2"><div class="form-group label-floating"><label class="control-label" for="monthly-salary">Monthly salary</label><input class="form-control" type="number" name="salary' + x + '" id="monthly-salary"></div></div><div class="col-md-3"><div class="form-group label-floating"><label class="control-label" for="reason">Reason of leaving</label><input class="form-control" type="text" name="reason' + x + '" id="reason"></div></div><button type=button class="btn btn-raised btn-sm btn-danger remove_field pull-right">Remove</button></div></div>'); //add input box

                    }

                });

                

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

                    e.preventDefault(); $(this).parent('div').remove(); x--;

                })

            });



            // function for adding fields professional qualification

            $(document).ready(function() { 

                var max_fields = 3; 

                var wrapper = $(".input_fields_wrap_professional"); //Fields wrapper

                var add_button = $(".add_field_button_professional"); //Add button ID

                

                var x = 1; //initlal text box count

                $(add_button).click(function(e){ //on add input button click

                    e.preventDefault();

                    if(x < max_fields){ //max input box allowed

                        x++; //text box increment

                        $(wrapper).append('<div class="row col-md-12"><div class="col-md-3"><div class="form-group label-floating"><label class="control-label" for="license">License/Certification</label><input type="text" class="form-control" name="license' + x + '" id="license"></div></div><div class="col-md-1"><div class="form-group label-floating"><label class="control-label" for="rate">Rating</label><input type="text" id="rate" class="form-control" name="rating' + x + '"></div></div><div class="col-md-2"><div class="form-group label-floating"><label class="control-label" for="dateg"><i class="fa fa-calendar" ></i> Date Grandted</label><input data-provide="datepicker" id="dateg" class="form-control date" name="dategranted' + x + '" data-date-format="MM dd, yyyy" data-date-autoclose="true"  data-date-end-date="-1d" readonly></div></div><div class="col-md-2"><div class="form-group label-floating"><label class="control-label" for="institution">Granting Institution</label><input type="text" class="form-control" id="institution" name="institution' + x + '"></div></div><div class="col-md-2"><div class="form-group label-floating"><label class="control-label" for="license-number">License Number</label><input type="number" class="form-control" id="license-number" name="licensenum' + x + '"></div></div><div class="col-md-2"><div class="form-group label-floating"><label class="control-label" for="dater"><i class="fa fa-calendar" ></i> Date Release</label><input data-provide="datepicker" class="form-control date" id="dater" name="datereleased' + x + '" data-date-format="MM dd, yyyy" data-date-autoclose="true"  data-date-end-date="-1d" readonly></div></div><button type=button class="btn btn-raised btn-sm btn-danger remove_field pull-right">Remove</button></div>'); //add input box

                    }

                });

                

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

                    e.preventDefault(); $(this).parent('div').remove(); x--;

                })

            });



             // function for adding fields language

            $(document).ready(function() { 

                var max_fields = 5; 

                var wrapper = $(".input_fields_wrap_language"); //Fields wrapper

                var add_button = $(".add_field_button_language"); //Add button ID

                

                var x = 1; //initlal text box count

                $(add_button).click(function(e){ //on add input button click

                    e.preventDefault();

                    if(x < max_fields){ //max input box allowed

                        x++; //text box increment

                        $(wrapper).append('<div class="row col-md-12"><div class="col-md-3"><div class="form-group label-floating"><label class="control-label" for="language">Language you know</label><input type="text" class="form-control" id="language" name="language' + x + '"></div></div><div class="col-md-12"></div><div class="col-md-1"><div class="form-group"><label><input type="checkbox" name="speak' + x + '" value= "yes"> Speak</label></div></div><div class="col-md-1"><div class="form-group"><label> <input type="checkbox" name="write' + x + '" value="yes"> Write</label></div></div><div class="col-md-1"><div class="form-group"><label> <input type="checkbox" name="read' + x + '" value="yes"> Read</label></div></div><button type=button class="btn btn-sm btn-raised btn-danger remove_field" style="margin-top: 3%">Remove</button></div>'); //add input box

                    }

                });

                

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

                    e.preventDefault(); $(this).parent('div').remove(); x--;

                })

            });



            // function for adding fields Skills and hobbies

            $(document).ready(function() { 

                var max_fields = 3; 

                var wrapper = $(".input_fields_wrap_skill"); //Fields wrapper

                var add_button = $(".add_field_button_skill"); //Add button ID

                

                var x = 1; //initlal text box count

                $(add_button).click(function(e){ //on add input button click

                    e.preventDefault();

                    if(x < max_fields){ //max input box allowed

                        x++; //text box increment

                        $(wrapper).append('<div class="form-group label-floating"><label class="control-label" for="skill">Special Skill/Hobbies</label><input type="text" class="form-control" id="skill" name="skill' + x + '"><button type=button class="btn btn-raised btn-sm btn-danger remove_field pull-right">Remove</button>'); //add input box

                    }

                });

                

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

                    e.preventDefault(); $(this).parent('div').remove(); x--;

                })

            });





            // function for adding fields Non-academic

            $(document).ready(function() { 

                var max_fields = 3; 

                var wrapper = $(".input_fields_wrap_nacad"); //Fields wrapper

                var add_button = $(".add_field_button_nacad"); //Add button ID

                

                var x = 1; //initlal text box count

                $(add_button).click(function(e){ //on add input button click

                    e.preventDefault();

                    if(x < max_fields){ //max input box allowed

                        x++; //text box increment

                        $(wrapper).append('<div class="form-group label-floating"><label class="control-label" for="nacad">Non-Academic Distinction / Recognition</label><input type="text" class="form-control" id="nacad" name="recognition' + x + '"><button type=button class="btn btn-raised btn-sm btn-danger remove_field pull-right">Remove</button>'); //add input box

                    }

                });

                

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

                    e.preventDefault(); $(this).parent('div').remove(); x--;

                })

            });

        

        	// function for adding fields Members in Association and Organizations

            $(document).ready(function() { 

                var max_fields = 3; 

                var wrapper = $(".input_fields_wrap_org"); //Fields wrapper

                var add_button = $(".add_field_button_org"); //Add button ID

                

                var x = 1; //initlal text box count

                $(add_button).click(function(e){ //on add input button click

                    e.preventDefault();

                    if(x < max_fields){ //max input box allowed

                        x++; //text box increment

                        $(wrapper).append('<div class="form-group label-floating"><label class="control-label" for="org">Membership in Association / Organizations</label><input type="text" class="form-control" id="org" name="org' + x + '"><button type=button class="btn btn-raised btn-sm btn-danger remove_field pull-right">Remove</button>'); //add input box

                    }

                });

                

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

                    e.preventDefault(); $(this).parent('div').remove(); x--;

                })

            });



       



            // function for toggle child/sibling

		$(document).ready(function(){

    		$("#yun").click(function(){

       			$(".waw").toggle();

    		});

		});



		//Input mask

		    $(document).ready(function(){

				$(":input").inputmask();

			  	

			  	Inputmask().mask(document.querySelectorAll("input"));

			});



	</script>

</body>

</html>

