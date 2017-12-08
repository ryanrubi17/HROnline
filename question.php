<?php 
include 'connect.php';//database connection
?>
<!DOCTYPE html>
<html>
<head>
  <title> Application Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- stylesheet links -->
  <link rel="shortcut icon" href="favicon.ico" /> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">
  <link rel="stylesheet" type="text/css" href="css/datepicker3.css">
  <link rel="stylesheet" type="text/css" href="css/ripples.css">
  <link rel="stylesheet" type="text/css" href="css/inputmask.css">
  <!--  -->
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
  <!-- Javascript file -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/material.js"></script>
  <script type="text/javascript" src="js/angular.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/jquery.dropdown.js"></script>
  <script type="text/javascript" src="js/inputmask.js"></script>
  <script type="text/javascript" src="js/jquery.inputmask.js"></script>

  <!-- css link for style.css -->
  <link rel="stylesheet" type="text/css" href="custom_css/question.css">

</head>

<body>
  <form method="POST" action="agentform1.php">
    <div class="card container" id="questcon">
      <h6 style="padding-top: 30px"><i class="fa fa-book"> </i><b> Question</b> </h6>
      <hr> <hr>
        <dir class="row col-md-12" style="margin-top:0px;">
          <div class="form-group">
            <label class="control-label" >Applicant ID</label>
            <?php
				// Get last applicant id
				$getLastRefId = $conn->query("SELECT ID from tbl_application ORDER BY ID DESC LIMIT 1");
				while($lastRefId = $getLastRefId->fetch_assoc()) {
					$lastId = $lastRefId['ID'];
				}
			?>
            <input type="text" name="ref_number" id = "id" value="<?php echo $lastId; ?>" class="form-control" required readonly>
            <input type="text" name="type" id="type" value= "Agent" class="form-control" readonly>
          </div>
          <div class="form-group label-floating">
            <b><input type="text" name="label_question1" id="label_question1" class="form-control gap" value = "1.What experience do you have in call center?" readonly></b>              
            <textarea class="form-control" rows="5" name="ans1" id="ans1" required></textarea>
          </div>
          <div class="form-group label-floating">
            <b><input type="text" name="label_question2" id="label_question2" class="form-control gap" value = "2.What is the key to success for a call center agent?" readonly></b>              
            <textarea class="form-control" rows="5" name="ans2" id="ans2" required></textarea>
          </div>
          <div class="form-group label-floating">
            <b><input type="text" name="label_question3" id="label_question3" class="form-control gap" value = "3.  Do you like multitasking, or you prefer  to tackle one problem at a time?" readonly></b>
            <textarea class="form-control" rows="5" name="ans3" id="ans3" required></textarea>
          </div>
          <div class="form-group label-floating">
            <b><input type="text" name="label_question4" id="label_question4" class="form-control gap" value = "4.  What will you do in a situation when your system shut down and your are still on the phone with a costumer?" readonly></b>
            <textarea class="form-control" rows="5" name="ans4" id="ans4" required></textarea>
          </div>
          <!-- start of question in initial interview Notes-->
          <div class="form-group label-floating">
            <div class="text form-control" style="margin-bottom: 5px;">
              <b>Initial Interviewer Notes:</b>
            </div>
            <textarea class="form-control" rows="6" name="InitialInterviewerNotes" id="InitialInterviewerNotes" required></textarea>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                      <label class="control-label col-sm-4">Typing Skills:</label>
                      <div class="col-md-7">
                          <input type="text" class="form-control gap" name="typeskills"  id="typeskills" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-4">Communication:</label>
                      <div class="col-md-7">
                          <input type="text" class="form-control gap" name="communicationskill"  id="communicationskill" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-4">Work Availability:</label>
                      <div class="col-md-7">
                          <input type="text" class="form-control gap" name="workavailability"  id="workavailability" required>
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                      <label class="control-label col-sm-4">Accuracy:</label>
                      <div class="col-md-7">
                          <input type="text" class="form-control gap" name="accuracy"  id="accuracy" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-4">Expected Salary:</label>
                      <div class="col-md-7">
                          <input type="text" class="form-control gap" name="expectedsalary"  id="expectedsalary" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-4">Expectation:</label>
                      <div class="col-md-7">
                          <input type="text" class="form-control gap" name="expectation"  id="expectation" required> 
                      </div>
                  </div>
              </div>
              <!-- end of question in initial interview Notes-->
          </div><br>
          <hr style="height: 10px; width: 100%; margin:0 auto;line-height:10px;background-color: #D3D3D3"; border:0 none; />
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="EmploymentIssues" class="control-label col-md-4">Employment Issues:</label>
                <div class="checkbox col-md-6">
                  <label for="c1">YES  <input type="radio"  name="emp_issue" id="emp_issue" value="YES"></label>
                  <label for="c2">NO  <input type="radio"  name="emp_issue"  id="emp_issue" value="NO"></label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="MartialIssues:" class="control-label col-md-4">Martial Issues:</label>
                <div class="checkbox col-md-6">
                  <label for="c1">YES  <input type="radio"  name="martial_issue" id="martial_issue" value="YES"></label>
                  <label for="c2">NO  <input type="radio"  name="martial_issue"  id="martial_issue" value="NO"></label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="MedicalIssues:" class="control-label col-md-4">Medical Issues::</label>
                <div class="checkbox col-md-6">
                  <label for="c1">YES  <input type="radio"  name="med_issue" id="med_issue" value="YES"></label>
                  <label for="c2">NO  <input type="radio"  name="med_issue"  id="med_issue" value="NO"></label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Custody Issues::" class="control-label col-md-4">Custody Issues::</label>
                <div class="checkbox col-md-6">
                  <label for="c1">YES  <input type="radio"  name="custody_issue" id="custody_issue" value="YES"></label>
                  <label for="c2">NO  <input type="radio"  name="custody_issue"  id="custody_issue" value="NO"></label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="PlanAbroad" class="control-label col-md-4">Plan to go abroad:</label>
                <div class="checkbox col-md-6">
                  <label for="c1">YES  <input type="radio"  name="plan_abroad" id="plan_abroad" value="YES"></label>
                  <label for="c2">NO  <input type="radio"  name="plan_abroad"  id="plan_abroad" value="NO"></label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="PlanSchool:" class="control-label col-md-4">Plan back to school:</label>
                <div class="checkbox col-md-6">
                  <label for="c1">YES  <input type="radio"  name="plan_school" id="plan_school" value="YES"></label>
                  <label for="c2">NO  <input type="radio"  name="plan_school"  id="plan_school" value="NO" ></label>
                </div>
              </div>
            </div>
          </div>
          <div align="right">
            <button onclick="myfunction()" value ="submit" name="submit" id ="submit" type="submit" class="btn btn-primary" style="margin-bottom: 5px;">Submit</button>
          </div>
        </div>
        
    </div>
  </form>

</body>
</html>