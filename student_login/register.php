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
<label>Email ID:</label>
<input name="email" type="text" class="inputvalues" placeholder="Email" /><br>
<label>Phone Number:</label>
<input name="phonenumber" type="text" class="inputvalues" placeholder="Phone Number" /><br>
<label>College/University</label>
<input name="college" type="text" class="inputvalues" placeholder="College/University" /><br>
<label>College/University ID</label>
<input name="collegeid" type="text" class="inputvalues" placeholder="College/University ID" /><br>
<label>Disability Description</label>
<input name="disability" type="text" class="inputvalues" placeholder="Disability Discription" /><br>
<label><b>Password:</b></label>
<input name="password" type="password" class="inputvalues" placeholder="password" /><br>
<label><b>Confirm Password:</b></label>
<input name="cpassword" type="password" class="inputvalues" placeholder="password" /><br>
<label><b>Sectors</b></label>
<input type="checkbox" name="manufacturing" value="manufacturing">Manufacturing<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="retail" value="retail">    Retail<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="banking" value="banking">   Banking<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="bpo" value="bpo">       BPO<br>
<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" />
<br>
<a href="index1.php"><input type="button" id="back_btn" value="Back" /></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
//echo '<script type="text/javascript"> alert("sign up button clicked") </script>';
$username=$_POST['username'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$college=$_POST['college'];
$collegeid=$_POST['collegeid'];
$disability=$_POST['disability'];
$manufacturing=$_POST['manufacturing'];
$retail=$_POST['retail'];
$banking=$_POST['banking'];
$bpo=$_POST['bpo'];
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