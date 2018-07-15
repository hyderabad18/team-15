<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youthseva";

// Create connection
session_start();
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "connected";
}

// prepare and bind
/*$inputid=$_POST[''];
$inputmail=$_POST['email'];
$sql = "SELECT * FROM uid WHERE uid='$inputid' and ulb_mail ='$inputmail'";
//$sql="select * from `uid` where `uid`='".$inputid."' and `ulb_mail`='".$inputmail."'";
$result=mysqli_query($conn,$sql);
*/
if($_SERVER["REQUEST_METHOD"] =='POST')
{
		echo "enterd";
	 //  $row=mysqli_fetch_assoc($result);

$stmt = $conn->prepare("INSERT INTO user VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$sname,$cpass,$college,$caddr,$cph,$cdis,$email,$cbpo);
    
    // set parameters and execute
    $sname=$_POST['name'];
	$email=$_POST['email'];
	$college=$_POST['college'];
	$caddr=$_POST['address'];
	$cpass=$_POST['pass'];
	$cph=$_POST['phno'];
	$cdis=$_POST['disability'];
	$cbpo=$_POST['sector'];
	
   
   
    $stmt->execute();
    
    echo $conn->error;
    $stmt->close();
    $_SESSION[]="registered successfully";
    header("location:index1.php");
    //  echo "executed"; 
	} 

    $conn->close();
?>

   

