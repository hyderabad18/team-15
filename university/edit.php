<?
mysql_connect("localhost");
mysql_select_db("test") or die("database could not connect");
?>
<html>
<head>
<meta name="description"content="Php Code for View,Search, Edit and DeleteRecord" />
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>Update Student Record</title>
</head>
<body>
<?
if($_POST["do"]=="update")
{
$roll=$_POST["roll"];
$class=$_POST["class"];
$name=$_POST["name"];
$fname=$_POST["fname"];
$sex=$_POST["sex"];
$addr1=$_POST["addr1"];
$addr2=$_POST["addr2"];
$addr3=$_POST["addr3"];
$city=$_POST["city"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$remarks=$_POST["remarks"];
$query="update student setname='$name',f_name='$fname',sex='$sex',addr1='$addr1',addr2='$addr2',addr3='$addr3',city='$city',phone='$phone',email='$email',remarks='$remarks' where roll=$roll";
mysql_query($query);
echo "<center>Successfully Updated in DATABASE</center>";
include("search.php");
}
?>
<center>
<h1><u>Student Database</u></h1>
</center>
<?
$roll=$_GET["roll"];
$query="select * from student where roll='$roll'";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result))
{
?>
<form name="update" method="post" action="edit.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"align="center" border="0">
<tr>
<td colspan="4" style="background:#0066FF; color:#FFFFFF; font-size:20px">ADD STUDENT RECORD</td>
</tr>
<tr>
<tr>
<td>Enter Roll Number</td>
<td>
<?
echo $row[0];
?>
<input type="hidden" name="roll" size="20" value="<? echo $row[0];?>"></td>
<td>Enter Class</td>
<td><input type="text" name="class" size="20" value="<? echo $row[1];?>"disabled="disabled"></td>
</tr>
<tr>
<td>Enter Name of Student</td>
<td><input type="text" name="name" size="20" value="<? echo $row[2];?>"></td>
<td>Enter Father's Name</td>
<td><input type="text" name="fname" size="20" value="<? echo $row[3];?>"></td>
</tr>
<tr>
<td>Sex</td>
<td><input type="radio" name="sex" value="Male" checked="checked">Male<input type="radio" name="sex" value="Female">Female </td>
<td>Address1</td><td><input type="text" name="addr1" size="20" value="<? echo $row[5];?>">
</td>
</tr>
<tr>
<td>Address2</td><td><input type="text" name="addr2" size="20" value="<? echo $row[6];?>">
</td>
<td>Address3</td><td><input type="text" name="addr3" size="20" value="<? echo $row[7];?>"></td></tr><tr><td>City</td><td><input type="text" name="city" size="20" value="<? echo $row[8];?>"></td><td>Phone</td><td><input type="text" name="phone" size="20" value="<? echo $row[9];?>"></td></tr><tr><td>Email</td><td><input type="text" name="email" size="20" value="<? echo $row[10];?>"></td><td>Remarks</td>
<td><input type="text" name="remarks" size="20" value="<? echo $row[11];?>"></td></tr><tr><td colspan="4" align="center"><input type="hidden" name="do"value="update"><input type="submit" value="UPDATE RECORD"></td></tr></table></form><? } ?><p align="center"><a href="index.php">Go Back to Home</a>
</p>
</body>
</html>