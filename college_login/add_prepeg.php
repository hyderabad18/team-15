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

$stmt = $conn->prepare("INSERT INTO studentvalue VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$cname,$cemail,$cid, $cph);
    
    // set parameters and execute
    $cname = $_POST['name'];
    $cemail = $_POST['rollno'];
    $cid=$_POST['email'];
    $cph=$_POST['disability'];
   
   
    $stmt->execute();
    
    echo $conn->error;
    $stmt->close();
    $_SESSION[]="registered successfully";
    header("location:add1.php");
       
	} 

    $conn->close();
?>

   

