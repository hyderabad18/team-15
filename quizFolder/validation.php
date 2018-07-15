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
 $per=($count*4)/100";
echo "<html>
<body>

<h1>your percentage for this test is $per</h1>
</body>
</html>";
$id=$_SESSION['id'];
$sql = "INSERT INTO testres(id,percentage)
VALUES ($id,$per)";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

 ?>