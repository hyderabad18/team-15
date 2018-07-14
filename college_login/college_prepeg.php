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

$stmt = $conn->prepare("INSERT INTO college_details VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$cname,$cid,$cemail,$caddr, $cph,$cpass);
    
    // set parameters and execute
    $cname = $_POST['collegename'];
    $cemail = $_POST['collegeemail'];
    $cid=$_POST['collegeid'];
    $cph=$_POST['phno'];
    $caddr=$_POST['collegeaddress'];
    $cpass = $_POST['collegepassword'];
   
    $stmt->execute();
    
    echo $conn->error;
    $stmt->close();
    $_SESSION[]="registered successfully";
    header("location:college_ulblogin.php");
       
	} 

    $conn->close();
?>

   

