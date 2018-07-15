<?php 
$count=0;
if(isset($_POST['submit']))
{
if(isset($_POST['customRadio'])){
$val=$_POST['customRadio'];
if($val=="correct")
{$count++;

}}
 if(isset($_POST['customRadio3'])){
$val=$_POST['customRadio3'];

if($val=="correct1")
{
	$count++;

}
 }
  if(isset($_POST['customRadio1'])){
$val=$_POST['customRadio1'];

if($val=="correct2")
{$count++;

}
 }
  if(isset($_POST['customRadio2'])){
$val=$_POST['customRadio2'];

if($val=="correct3")
{$count++;

}
 }
 $per=($count*4)/100;
echo "<h1>percentage is".$per. "</h1>";
/*$hostname=$_SERVER['HTTP_HOST'];
$protocol=strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='http://';
$var=$protocol.$hostName.$pathInfo['home']."/index.html";

$var=$protocol.$hostName.$pathInfo['home']."/index.html";*/
echo "<a href='../home/index.html'>Go To Login Page</a>";
/*$sql = "INSERT INTO testres(id,percentage)
VALUES (  ,$per)";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
}

 ?>