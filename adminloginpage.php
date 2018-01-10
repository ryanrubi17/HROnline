<?php
  session_save_path('tmp');
  session_start();
  include ('connect.php');
  $username = "";
 if(!empty($_SESSION['previous-page'])){
    if($_SESSION['previous-page'] == 'google.php'  || $_SESSION['previous-page'] == 'jobposition.php' || $_SESSION['previous-page'] == 'account.php' || $_SESSION['previous-page'] == 'reports.php'){
      unset($_SESSION['admin']);
	  unset($_SESSION['currentYear']);
      unset($_SESSION['email_message']);
      unset($_SESSION['email_subject']);
      unset($_SESSION['jobfairquery']);
      unset($_SESSION['googlequery']);
      unset($_SESSION['indeedquery']);
      unset($_SESSION['loginerror']);
    }
  }
  
  if(isset($_SESSION['loginattempt']) ){ //
	 if($_SESSION['loginattempt'] != null){
		$temp = intval($_SESSION['loginattempt']);
		 if($temp >= 5){	
			$num = rand(100,999);//captcha code
			$str = 'ANDRS'.$num;
			$shuffled = str_shuffle($str);
			$_SESSION['code'] = $shuffled;
			$_SESSION['loginerror'] = "You have exceeded the login attempt limit!";
			header('location: loginattempt.php');			
		}
	}         
 }
  // echo '<p style="padding-top:.9%">Current PHP version: ' . phpversion() . '</p>';
?>

<html>  
   <head>
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
      <link rel="stylesheet" type="text/css" href="css/ripples.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
   </head>
    <style type="text/css">
    .login-img3-body{
        background: url('img/bg2.jpg') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .img-res{
      max-width: 1000px;
      width: 100%;
  }
    .login-block {
    width: 400px;
    padding: 20px;
    background: #fff;
    opacity: 0.9;
    border-radius: 5px;
    border-top: 5px solid #1927F0;
    margin: 0 auto;
  }
    .login-block h1 {
    opacity:1; 
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
    font-weight: bold;
  }
    .login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    padding: 0 20px 0 50px;
    outline: none;
  }
    .login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
  }
    .login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
  } 
    .login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
  }
    .login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
  }
    .login-block input:active, .login-block input:focus {
    border: 1px solid ;
  }
    .login-block button {
    width: 100%;
    height: 40px;
    background: #1927F0;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #090808;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    outline: none;
    cursor: pointer;
  }
    .login-block button:hover {
    background: #1927F0;
  }
  </style>
  <body class="login-img3-body">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-sm-12">
          <center><img src="img/ag.png" class="img-res"></center>
        </div>
      </div>
      <div class="login-block">
        <h1 style="margin-bottom:5px;">Login</h1>
          <form action="loginbtn.php" method="post">
            <input id="username" type="text" name="username" required="" placeholder="Username" />
            <input id="password" type="password" name="password" required="" placeholder="Password" />
            <button id='login_id' type="submit" name="action">Log In</button>
          </form>
      </div>
                <?php
                  
                  $date = date("Y-m-d h:i:sa");
                  $slqInsertUser = "INSERT INTO tbl_userlogs (username, loggedInDate) VALUES ($username, $date)";
                 $result1 = $conn->query($slqInsertUser);
                  if(!empty($_SESSION['loginerror'])){
                    echo"<div id='loginerror' class='alert alert-dismissible alert-danger'>
                      <button type='button' class='close' data-dismiss='alert'>×</button>
                      <p id='notif' style='text-align:center;'>".$_SESSION['loginerror']."</p>
                      </div>";
					  
                  }
                 
                   
				  
                ?>
  <!-- scripts -->
  <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/material.js"></script>
  <script type="text/javascript">
    $.material.init();
    $(document).ready(function() {
     //$('select').material_select();
    });
  </script>

   </body>
</html>