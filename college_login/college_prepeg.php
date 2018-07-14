<?php
$servername = "localhost";
$username = "root";
$password = "MadhuMysql";
$dbname = "sih_db";

// Create connection
session_start();
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$inputid=$_POST['uid'];
$inputmail=$_POST['email'];
$sql = "SELECT * FROM uid WHERE uid='$inputid' and ulb_mail ='$inputmail'";
//$sql="select * from `uid` where `uid`='".$inputid."' and `ulb_mail`='".$inputmail."'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
        $row=mysqli_fetch_assoc($result);

$stmt = $conn->prepare("INSERT INTO ulb VALUES (?,?, ?,?,?,?,?)");
    $stmt->bind_param("ssssiss", $fname, $lname,$user,$uid,$password, $mail,$dept);
    
    // set parameters and execute
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user=$_POST['user'];
    $uid=$_POST['uid'];
    $password=$_POST['password'];
    $mail = $_POST['email'];
    $dept=$_POST['dept'];
    $stmt->execute();
    
    echo $conn->error;
    $stmt->close();
    $_SESSION[]="registered successfully";
    header("location:ulblogin.php");
       
	} else {
    $_SESSION["error"]="invalid ulb_id";
    header("location:ulb_signup.php");
    }

    $conn->close();
?>

   

