<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"

 
  <!-- If IE use the latest rendering engine -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <!-- Set the page to the width of the device and set the zoom level -->
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  
  <title>Register</title>
  <link rel="shortcut icon" href="../images/MHlogo1.ico">
  <link href="other/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  <link href="other/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">  
  <link href="css/signUp.css" rel="stylesheet">
</head>

<body>

<section class="login-block">
  
    <div class="container-fluid">
      <center>
      <div class="row">
        <div class="col-md-4 login-sec">
            <h2 class="text-center">Registration</h2>
            <center><small>*are mandatory</small></center>
            <br/>
            <form class="login-form" action="prepeg.php" method="POST">  
            <span class="text-uppercase" style="color:red;">
                <?php if(isset($_SESSION["error"])) 
                     echo $_SESSION["error"];?> </span><br/>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <!--<label for="FirstName" class="text-uppercase" >First Name</label>-->
                      <input type="text" class="form-control" placeholder="First Name*" name="fname">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <!--<label for="LastName" class="text-uppercase" >Last Name</label>-->
                      <input type="text" class="form-control" placeholder="Last Name*" name="lname">                
                    </div>
                  </div>
                </div>

 	<div class="form-group">
                  <!--<label for="Username" class="text-uppercase" name="user">User</label>-->
                  <input type="text" class="form-control" placeholder="Enter the Username*" name="user">
                </div>

                <div class="form-group">
                  <!--<label for="Email" class="text-uppercase" >Email ID</label>-->
                  <input type="email" class="form-control" placeholder="Enter the Email ID*" name="email">
                </div>
                <div class="form-group">
                  <!--<label for="GovID" class="text-uppercase" >Government ID</label>-->
                  
                  <input type="text" class="form-control" placeholder="Phone Number" name="uid">
                </div>

	<div class="form-group">
                  <!--<label for="Dept" class="text-uppercase" >Department</label>-->
                  <input type="text" class="form-control" placeholder="Address*" name="dept">
                </div>
                <div class="form-group">
                  <!--<label for="Password1" class="text-uppercase" >Password</label>-->
                  <input type="password" class="form-control" placeholder="Password*" name="password">
                </div>

                <div class="form-group">
                  <!--<label for="Password2" class="text-uppercase">Confirm Password</label>-->
                  <input type="password" class="form-control" placeholder="Confirm Password*">
                </div>            
                
                <div class="form-check">
                  <input type="submit" class="btn btn-login float-right" name="login">
                </div>        
            </form>
        </div>
        
      </div>
      </center>
    </div>
  
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>

<?php unset($_SESSION['error']); ?>
</body>
</html>