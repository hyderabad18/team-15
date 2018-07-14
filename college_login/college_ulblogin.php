<?php 
  if(!isset($_SESSION)) //CHECKING THE SESSION(NEW SESSION OR PREVIOUS SESSION)
    session_start(); 
  if(isset($_SESSION['uid']))//IF THE USER ALREADY LOGGED-IN...DIRECTLY GO THE HOME PAGE
    header("location:ulbhome.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Online PMAY E-learning module for ULBs and general citizens">
  <meta name="keywords" content="PMAY, Pradhan Mantri Awas Yojna, ULBs, Urban Local Bodies, E-learning, State of Maharashtra, policies">

  <title>Login</title>
 
  <link href="other/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  <link href="other/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">    
  <link href="css/login1.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<!--<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}-->
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        

<section class="login-block">
    <div class="container">
      <div class="row">

        <div class="col-md-4 login-sec">
            <h2 class="text-center">College Login</h2>
            <form class="login-form" action="college_UlbLoginProcess.php" method="post">

              <div class="form-group">
                <span class="text-uppercase" style="color:red;">
                    <?php if(isset($_SESSION['error'])) // IF THE USER ENTER WRONG CREDENTIALS...DISPLAYING THE ERROR MESSAGE
                     echo $_SESSION['error']; ?></span><br/>
                <label for="UlbUserName" class="text-uppercase" >email</label>
                <input type="email" class="form-control" placeholder="" value="<?php if(isset($_COOKIE['remember'])){echo $_COOKIE['user'];} ?>" name="email" required>              
              </div>
              <div class="form-group">
                <label for="UlbPassword" class="text-uppercase">password</label>
                <input type="password" class="form-control" placeholder="" value="<?php if(isset($_COOKIE['remember'])){echo $_COOKIE['pwd'];} ?>" name="password" required>
              </div>            
              
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="remember">
                  <small>Remember Me</small>

                </label>
                <div class="g-recaptcha" data-sitekey="6LcOCFAUAAAAADCuPRwOpNB5DyI36vb3-87wkYYx"></div>
                <button type="submit" class="btn btn-login float-right" name="submit">Login</button>
                <a class="d-block small" href="forgotPass.html">Forgot Password?</a> 
                  <a class="d-block small mt-3" href="signUp.html">Register an Account</a>  
              </div>        
            </form>
        </div>

        <div class="col-md-8 banner-sec">
        <!--image is displayed-->          
        </div>
      </div>
</section>


<script src="other/jquery/jquery.min.js"></script>
<script src="other/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="other/jquery-easing/jquery.easing.min.js"></script>
<?php unset($_SESSION['error']); ?>
</body>
</html>