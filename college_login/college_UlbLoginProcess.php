<!-- CONTROLLER FOR ULB(ULBS AUTHENTICATION) -->
<?php 
	// include_once "./status.php";
	include_once "./models/getting.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$params = array();
    $params['secret'] = '6LcOCFAUAAAAAEt4PkNiB7qrI61tg-IVvT9vGxOn'; // Secret key
    if (!empty($_POST) && isset($_POST['g-recaptcha-response'])) {
        $params['response'] = urlencode($_POST['g-recaptcha-response']);
    }
    $params['remoteip'] = $_SERVER['REMOTE_ADDR'];

    $params_string = http_build_query($params);
    $requestURL = 'https://www.google.com/recaptcha/api/siteverify?' . $params_string;

    // Get cURL resource
    $curl = curl_init();

    // Set some options
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $requestURL,
    ));

    // Send the request
    $response = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);

    $response = @json_decode($response, true);

    if ($response["success"] == true) {
        // echo '<h3 class="alert alert-success">Login Successful</h3>';
        if(isset($_POST['submit'])){
		require("./models/UlbUser.php");//importing UlbUser class from  UlbUser.php (MODEL for ULB_USERS)  
		require("./models/UlbConnection.php");//Database actions on ulb table (DAO FOR ULB_USERS ) 
		$user_name=$_POST['name'];
		$pwd=$_POST['pwd'];
		$user=new UlbUser;
		$ulb_dao=new UlbConnection("sih_db");
		$user->setUlbUser($user_name);
		$user->setUlbPassword($pwd);
		session_start();
		if($ulb_dao->authenticateUlb($user)==1){
			if(isset($_POST['remember'])){
				setcookie("remember","yes",time()+120);
				setcookie("user",$user_name,time()+120);
				setcookie("pwd",$pwd,time()+120);
			}
			else{
				if(isset($_COOKIE['remember']))
					setcookie("remember","",2);
				if(isset($_COOKIE['user']))
					setcookie("user","",2);
				if(isset($_COOKIE['pwd']))
					setcookie("pwd","",2);
			}
			/*else{

				setcookie("remember","yes",false);
				setcookie("user",$user_name,false);
			}*/
			$_SESSION['uid']=$ulb_dao->getUid($user);
			// $conn=getConnection();
			// loginstatus($ulb_dao->getUid($user),$conn);
			header("location:ulbdummy.php");
		}
		else{
			$_SESSION['error']="invalid username or password";
			header("location:ulblogin.php");
		}
	}
	}
	else{
		echo "<h1>OOPS!.....YOU ARE NOT AUTHORIZED TO VIEW THIS PAGE</h1><br/>";
		echo "PLEASE LOGIN .....<a href='login1.php'>LOGIN</a>";
	}	
    } else {
        echo '<h3 class="alert alert-danger">Login failed</h3>';
    }
	
?>