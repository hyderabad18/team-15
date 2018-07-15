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

$stmt = $conn->prepare("INSERT INTO `job_detail` (`jobid`, `jobname`, `jobdesc`, `jobsec`, `disabilitydesc`,`cutoff`) VALUES (NULL, ?, ?, ?, ?,?);");// CHNAGED TABLE NAME to corporate-details
    $stmt->bind_param("ssssi",$jobname,$jobdesc,$jobsec,$disabilitydesc,$cutoff);// CHANGED DATABASE KEY VALUES HERE
    
    // set parameters and execute
    //CHANGED THESE TO BIND
    $jobname = $_POST['jobname'];
    $jobdesc = $_POST['jobdesc'];
  //  $corpid=$_POST['corpid'];
    //$cph=$_POST['phno']; // REMOVED PHONE NUMBER
    $jobsec=$_POST['jobsec'];
    $disabilitydesc = $_POST['disabilitydesc'];
    $cutoff= $_POST['cutoff'];
   
    $stmt->execute();
    
    echo $conn->error;
    $stmt->close();
    $_SESSION[]="registered successfully";
   header("location:postjob_ulb_signup.php"); // college_ulblogin.php changed to 
       
	} 

    $conn->close();
?>

   

