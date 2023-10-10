<?php include_once("includes/basic_includes.php");?>
<?php require_once("includes/dbconn.php"); ?>
<?php include_once("functions.php"); ?>
<?php admin_login(); 
    error_reporting(0);
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Login | ShosurBari</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
<!-- fa fa icon / logout icon
    ============================================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


 <!-- ====== Admin Panel Navigation Bar ====== -->
 <?php include("admin_navigation.php"); ?>
<!-- ========================================= -->








  <style>
.shosurbari-biodata-form {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  width: 1400px;
  margin: auto;
  padding-top: 30px;
  padding-bottom: 30px
}

.soshurbari-animation-icon,
.shosurbari-animation-form {
  flex-basis: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.soshurbari-animation-icon img{
  justify-content: flex-end;
  margin: auto;
}

@media (max-width: 1400px){
  .shosurbari-biodata-form{
    width: auto;
  }
}

@media (max-width: 1024px) {
  .soshurbari-animation-icon {
    display: none;
  }

  .shosurbari-animation-form {
    flex-basis: 100%;
    justify-content: center;
  }

  .shosurbari-biodata-form {
    width: auto;
  }
}
</style>

<div class="shosurbari-biodata-form">

  <div class="soshurbari-animation-icon">
    <div class="sb-icon-laptop">
      <img src="images/shosurbari-login.png">
    </div>
  </div>

  
  <div class="shosurbari-animation-form">
  <form action="" method="post" name="SbLogForm" onsubmit="return SbLogineForm()">
		  <div class="flex-container">
        <div class="sb-register-login">

          <div class="sb-biodata-field">
            <h2>Login Admin <span>Account</span></h2>
          </div>

          <div class="form-group">
            <!--  <label for="edit-name">Email or Username <span class="form-required" title="This field is required.">*</span></label> -->
            <input type="text" id="username_email" placeholder="Your Email or Username" name="username" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>" size="60" maxlength="60" class="form-text required">
            <span id="uname_email_error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
          </div>


			<div class="form-group">
            <!-- <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label> -->
            <!-- <input type="password" id="sb_log_pass" placeholder="Your Password" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" size="60" maxlength="128" class="form-text required"> -->
            <input type="password" id="sb_log_pass" placeholder="Your Password" name="password" value="" size="60" maxlength="128" class="form-text required">
            <span class="show-password" style="color:#0aa4ca;  font-size:15px; top: 2px;"><i style="color:black;  font-size:15px;" class="fa fa-eye" aria-hidden="true"></i></span> 
            <span id="password_error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
          </div>

          <!-- If the user clicks the Remember Me box when they login, the user's login information will be saved in their cookie.-->
			    <div class="remember-forgot">
            <label><input type="checkbox" id="edit-remember" name="remember" value="1" <?php if(isset($_COOKIE['username'])) { echo "checked"; } ?>> Remember me</label>
            <a href="forgot_password.php">Forgot password?</a>
          </div>

		    <div class="form-actions">
                <button  type="submit" id="edit-submit" name="op"  class="btn_1 submit"  > <span> </span>Admin Login</button>
            </div>

            <div class="or">
		        <p><span class="sb-or">OR</span></p>
            </div>

            <div class="form-actions" style="text-align: center;">
                <p>Don't have an account?</p>
                <a href="admin_register.php">Create Admin Account</a>
            </div>

        </div>
      </div>
	  </form>
</div>
  
</div>








   <!-- Start Footer area-->
   <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/jquery.flot.pie.js"></script>
    <script src="js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot/jquery.flot.orderBars.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  Chat JS
		============================================ -->
	<script src="js/chat/moment.min.js"></script>
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <!-- <script src="js/tawk-chat.js"></script> -->
</body>

</html>