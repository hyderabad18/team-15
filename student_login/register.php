<?php
     require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#7f8c8d;">
<div id="main-wrapper">
<center>
<h2>Registration Form</h2>
<img src="imgs/photo.png" class="photo" />
</center>
<form class="myform" action="register.php" method="post">
<label><b>Username:</b></label>
<input name="username" type="text" class="inputvalues" placeholder="Username" /><br>
<label><b>Password:</b></label>
<input name="password" type="password" class="inputvalues" placeholder="password" /><br>
<label><b>Confirm Password:</b></label>
<input name="cpassword" type="password" class="inputvalues" placeholder="password" /><br>
<label><b>Sectors</b></label>
<input type="checkbox" name="sector" value="manufacturing">Manufacturing<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="sector" value="retail">    Retail<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="sector" value="banking">   Banking<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="sector" value="bpo">       BPO<br>
<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" />
<br>
<a href="index1.php"><input type="button" id="back_btn" value="Back" /></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
//echo '<script type="text/javascript"> alert("sign up button clicked") </script>';
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if($password==$cpassword)
{
$query="select * from user where username='$username'";
$query_run=mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0)
{
	echo '<script type="text/javascript"> alert("user already exits....") </script>';
}
else
{
	$query="insert into user values('$username','$password')";
	$query_run=mysqli_query($con,$query);
}
	if($query_run)
{
	echo '<script type="text/javascript">alert("user registered...")</script>';
}
else
{
	echo '<script type="text/javascript"> alert("error!")</script>';
}
}
else
{
		echo '<script type="text/javascript"> alert("password and confirm password doesnot match!")</script>';
}
}
?>
</div>
</body>
</html>