<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youthseva";//Database name

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
		echo "entered";
	 //  $row=mysqli_fetch_assoc($result);

$stmt = $conn->prepare("INSERT INTO `corporate_detail` (`corpid`, `corpname`, `corpmail`, `corpaddress`, `corppassword`) VALUES (NULL, ?, ?, ?, ?);");// CHNAGED TABLE NAME to corporate-details
    $stmt->bind_param("ssss",$corpname,$corpemail,$corpaddr,$corppass);// CHANGED DATABASE KEY VALUES HERE
    
    // set parameters and execute
    //CHANGED THESE TO BIND
    $corpname = $_POST['corpname'];
    $corpemail = $_POST['corpemail'];
  //  $corpid=$_POST['corpid'];
    //$cph=$_POST['phno']; // REMOVED PHONE NUMBER
    $corpaddr=$_POST['corpaddress'];
    $corppass = $_POST['corppassword'];
   
    $stmt->execute();
    
    echo $conn->error;
    $stmt->close();
    $_SESSION[]="registered successfully";
    header("location:corporate_ulblogin.php"); // college_ulblogin.php changed to corporate_ulblogin.php
       
	} 

    $conn->close();
?>

   

