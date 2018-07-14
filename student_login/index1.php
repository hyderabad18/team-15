<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#7f8c8d;">
<div id="main-wrapper">
<center>
<h2>Student Login Form</h2>
<img src="imgs/photo.png" class="photo" />
</center>
<form class="myform" action="index1.php" method="post">
<label><b>Username:</b></label>
<input name="username" type="text" class="inputvalues" placeholder="Username" required /><br>
<label><b>Password:</b></label>
<input name="password" type="password" class="inputvalues" placeholder="Password" /><br>
<input name="login" type="submit" id="login_btn" value="Login" />
<br>
<a href="register.php"><input type="button" id="register_btn" value="Register" /></a>
</form>
<?php
if(isset($_POST['login']))
{
$username=$_POST["username"];
$password=$_POST["password"];	
$query="select * from user where username='$username' and password='$password'";
$query_run=mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0)
{
//valid user
$_SESSION['username']=$username;
header('location:homepage.php');
}
else
{
	//invalid user
	echo '<script type="text/javascript"> alert("invalid credentials") </script>';
}
}
?>
</div>
</body>
</html>