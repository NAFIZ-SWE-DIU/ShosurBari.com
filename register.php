<?php 
include_once("includes/basic_includes.php");
include_once("functions.php");
register(); 
error_reporting(0);
session_start();
if (isset($_SESSION['id'])) {
  header("location: my-account.php");
  exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Register | ShosurBari</title>
<link rel="icon" href="images/shosurbari-icon.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" /><!-- eye icon password show -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script src="js/optionsearch.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!-- Country Code with Flag for Number input field -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
</head>
<body>
	<!-- ===========  Navigation Start =========== -->
	<?php include_once("includes/navigation.php");?>
	<!-- ===========  Navigation End ============= -->
  <div class="grid_3">
    <div class="container">
      <div class="breadcrumb1">
        <ul>
          <a href="index.php"><i class="fa fa-home home_1"></i></a>
          <span class="divider">&nbsp;|&nbsp;</span>
          <li class="current-page"><h4>Register</h4></li>
        </ul>
      </div>
    </div>
  </div>
  <style>
  .sb-biodata-field{
    background: none;
  }
  .sb-register-login h2{
    color: #000;
    font-size: 23px;
    font-weight: bold;
    background: none;
    text-align: left;
  }
  .shosurbari-biodata-form {
    align-items: center;
    flex-wrap: wrap;
    width: 1400px;
    margin: auto;
    padding-top: 30px;
    padding-bottom: 30px;
    margin-bottom: 70px;
  }
  .soshurbari-animation-icon,
  .shosurbari-animation-form {
    flex-basis: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .soshurbari-animation-icon h3 {
    font-size: 23px;
    font-weight: bold;
    margin-bottom: 15px;
    margin-top: 15px;
  }
  .soshurbari-animation-icon img {
    justify-content: flex-end;
    margin: auto;
    width: 37px;
    height: 35px;
  }
  .shosurbari-form-error{
    font-size: 16px;
    margin-top: 0px;
    background: rgb(255, 221, 238);
    border-radius: 2px 2px 4px 4px;
    text-align: center;
    display: none;
  }
  @media (max-width: 1400px){
  .shosurbari-biodata-form{
    width: auto;
  }
  }
  @media (max-width: 1024px) {
  .shosurbari-animation-form {
    flex-basis: 100%;
    justify-content: center;
  }
  .shosurbari-biodata-form {
    width: auto;
  }
  }
  .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: linear-gradient(180deg,#00bbff 0%,rgb(246 246 246) 100%);
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1;
  }
  .popup-content {
    text-align: center;
    color: #000;
  }
  .popup-buttons {
    margin-top: 10px;
  }
  </style>
  <?php
  if (isset($_SESSION['error_message'])) {
    echo '<div class="shosurbari-register-error">' . $_SESSION['error_message'] . '</div>';
    unset($_SESSION['error_message']);
  }
  ?>
<div class="shosurbari-biodata-form">
  <div class="shosurbari-animation-form">
    <form action="" method="POST" name="myForm" onsubmit="return validateForm()">
      <div class="flex-container">
        <div class="sb-register-login">
          <div class="soshurbari-animation-icon">
            <div class="sb-icon-laptop">
              <h3> <img src="images/shosurbari-icon.png"> ShosurBari </h3>
            </div>
          </div>
          <div class="sb-biodata-field">
            <h2>Create new account</h2>
          </div>
          <div class="form-group">
            <input type="text" id="fname" placeholder="Full Name" name="fname" value="" maxlength="60" class="form-text required">
            <span id="fname_error"  class="shosurbari-form-error"></span>
          </div>
          <div class="form-group">
            <input type="text" id="uname" placeholder="Username" name="uname" value="" maxlength="60" class="form-text required">
            <span id="uname_error" class="shosurbari-form-error"></span>
          </div>
          <div class="form-group">
            <input type="text" id="email" placeholder="Email" name="email" value="" maxlength="60" class="form-text required">
            <span id="email_error" class="shosurbari-form-error"></span>
          </div>
          <div class="form-group">
            <input type="pnumber" id="pnumber" placeholder="Phone Number" name="pnumber" value="" size="50" maxlength="15" class="form-text required">
            <span id="pnumber_error" class="shosurbari-form-error"></span>
          </div>
          <div class="form-group">
            <input type="password" id="pass_1" placeholder="New Password" name="pass_1" maxlength="128" class="form-text required">
            <span class="show-password" style="color:#0aa4ca;  font-size:15px; top:2px;"> <i style="color:black;  font-size:15px;" class="fa fa-eye" aria-hidden="true"></i></span> 
            <span  id="pass_1_error" class="shosurbari-form-error"></span>
          </div>
          <div class="form-group">
            <input type="password" id="pass_2" placeholder="Confirm Password" name="pass_2" maxlength="128" class="form-text required">
            <span class="show-password" style="color:#0aa4ca;  font-size:15px; top:2px;"> <i style="color:black;  font-size:15px;" class="fa fa-eye" aria-hidden="true"></i></span> 
            <span  id="pass_2_error" class="shosurbari-form-error"></span>
          </div>
          <div class="gender-select-reg" id="gender-select-reg">
            <label class="sb-profile-gender" for="sex">Your Gender<span class="form-required" title="This field is required."></span></label>
            <div class="gender-option">
              <input type="radio" name="gender" id="male" value="Male" onclick="genderSelected(this);"/>
              <label for="male"><i class="fa fa-male"></i> Male</label>
            </div>
            <div class="gender-option">
              <input type="radio" name="gender" id="female" value="Female" onclick="genderSelected(this);"/>
              <label for="female"><i class="fa fa-female"></i> Female</label><br>
		        </div>
          </div>
          <div class="gender-error">
            <span class="shosurbari-form-error" id="gender-error"></span>
          </div>
          <div class="form-actions">
            <?php if(isset($_COOKIE['username'])) { ?>
              <input type="hidden" id="edit-remember" name="remember" value="1">
              <?php } else { ?>

              <div class="form-group" style="display: none;">
                <label><input type="checkbox" id="edit-remember" name="remember" value="1" checked> Remember me</label>
              </div>
            <?php } ?>
            <div class="sb-terms-privacy-checkbox">
              <input type="checkbox" id="terms-checkbox" name="terms" value="1" onclick="toggleSubmitButton(this.checked);" required>
              <label class="checkbox-label" for="terms-checkbox">I agree to the <a target="_blank" href="terms.php">Terms and Conditions</a> and have read the <a target="_blank" href="privacy.php">Privacy Policy.</a></label>
            </div>
            <button type="submit" id="edit-submit" name="op" class="btn_1 submit"><span></span> Create Account</button>
          </div>
			    <div class="or">
		        <p><span class="sb-or">OR</span></p>
          </div>
	  	    <div class="form-actions" style="text-align: center;">
			      <p>Do you have an account?</p>
			      <a href="login.php"> Login Your Account</a>
	        </div>
        </div>
      </div>
	  </form>
    </div>
  </div>
  <!--=======================================
  How Many Visitors View This Page.
  This Script Connected to get_view_count.php
  and page_views Database Table
  ========================================-->
  <script>
    $(document).ready(function() {
    var pages = ["register"];
      for (var i = 0; i < pages.length; i++) {
      var page = pages[i];
      $.ajax({
      url: 'get_view_count.php?page=' + page,
      type: 'GET',
      success: function(data) {
      $('#viewCount' + page.replace("_", "")).html(data);
      }
      });
      }
    });
  </script>
  <script>
    // Phone Number Country Code With Country Flag
    $(document).ready(function() {
      var input = document.querySelector("#pnumber");
      window.intlTelInput(input, {
      separateDialCode: true,
      preferredCountries: ["bd"]
      });
    });
    // Password Slash Start
    let showPass = document.querySelectorAll('.show-password');
    showPass.forEach(function(el) {
      el.addEventListener('click', function(){
      let input = this.previousElementSibling;
      if (input.type === "password") {
      input.type = "text";
      this.innerHTML = "<i class='fa fa-eye-slash'></i>";
      } else {
      input.type = "password";
      this.innerHTML = "<i class='fa fa-eye'></i>";
      }
      });
    });
    //Register Input Field Error Start
    function validateForm(){
    var fname = document.forms["myForm"]["fname"].value;
    var uname = document.forms["myForm"]["uname"].value;
    var email = document.forms["myForm"]["email"].value;
    var pnumber = document.forms["myForm"]["pnumber"].value;
    var pass_1 = document.forms["myForm"]["pass_1"].value;
    var pass_2 = document.forms["myForm"]["pass_2"].value;
    // Full Name validation
    if (fname == "") {
      var errorDiv = document.getElementById('fname_error');
      // Apply styles for error display
      document.getElementById('fname').style.borderColor = "red";
      document.getElementById('fname').scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      errorDiv.innerHTML = "উফফ! আপনার সম্পূর্ণ নাম লিখুন।";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else {
      // Reset styles for a valid input
      document.getElementById('fname').style.borderColor = "green";
      var errorDiv = document.getElementById('fname_error');
      // Remove error message and hide padding
      errorDiv.innerHTML = "";
      errorDiv.style.display = 'none';
      errorDiv.style.padding = '0';
    }
    // Username validation
    if (uname == "") {
      var errorDiv = document.getElementById('uname_error');
      document.getElementById('uname').style.borderColor = "red";
      document.getElementById('uname').scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      errorDiv.innerHTML = "উফফ! আপনার ডাকনাম লিখুন।";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else if (!/^[A-Za-z0-9]+$/.test(uname)) {
      var errorDiv = document.getElementById('uname_error');
      document.getElementById('uname').style.borderColor = "red";
      document.getElementById('uname').scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      errorDiv.innerHTML = "উফফ! নামের মধ্যে কোন চিহ্ন, বাংলা বা স্পেস গ্রহণ যোগ্য নয়। নাম্বার গ্রহণ যোগ্য।";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else {
      document.getElementById('uname').style.borderColor = "green";
      var errorDiv = document.getElementById('uname_error');
      errorDiv.innerHTML = "";
      errorDiv.style.display = 'none';
      errorDiv.style.padding = '0';
    }
    // Email validation
    if (email == "") {
      var errorDiv = document.getElementById('email_error');
      document.getElementById('email').style.borderColor = "red";
      document.getElementById('email').scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      errorDiv.innerHTML = "উফফ! আপনার ই-মেইল লিখুন।";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else if (!/^[a-zA-Z0-9._-]+@(gmail|outlook|hotmail|yahoo)\.com$/.test(email)) {
      var errorDiv = document.getElementById('email_error');
      document.getElementById('email').style.borderColor = "red";
      document.getElementById('email').scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      errorDiv.innerHTML = "উফফ! ই-মেইল হিসাবে শুধুমাত্র ব্যবহার করা যাবে: '@' gmail, outlook, hotmail, yahoo '.com'";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else {
      document.getElementById('email').style.borderColor = "green";
      var errorDiv = document.getElementById('email_error');
      errorDiv.innerHTML = "";
      errorDiv.style.display = 'none';
      errorDiv.style.padding = '0';
    }
    // Phone number validation
    if (pnumber == "") {
      var pnumberElement = document.getElementById('pnumber');
      pnumberElement.style.borderColor = "red";
      pnumberElement.scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      var errorDiv = document.getElementById('pnumber_error');
      errorDiv.innerHTML = "উফফ! আপনার মোবাইল নাম্বার লিখুন।";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else if (!/^[0-9]{9,15}$/.test(pnumber)) {
      var pnumberElement = document.getElementById('pnumber');
      pnumberElement.style.borderColor = "red";
      pnumberElement.scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      var errorDiv = document.getElementById('pnumber_error');
      errorDiv.innerHTML = "উফফ! নাম্বারের মধ্যে কোন চিহ্ন বা স্পেস গ্রহণ যোগ্য নয় এবং এর সীমা ৯ থেকে ১৫ ডিজিট।";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else {
      document.getElementById('pnumber').style.borderColor = "green";
      var errorDiv = document.getElementById('pnumber_error');
      errorDiv.innerHTML = "";
      errorDiv.style.display = 'none';
      errorDiv.style.padding = '0';
    }
    // Password validation
    if (pass_1 == "") {
      var passElement = document.getElementById('pass_1');
      passElement.style.borderColor = "red";
      passElement.scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      var errorDiv = document.getElementById('pass_1_error');
      errorDiv.innerHTML = "উফফ! আপনার নতুন পাসওয়ার্ড লিখুন।";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else {
      document.getElementById('pass_1').style.borderColor = "green";
      var errorDiv = document.getElementById('pass_1_error');
      errorDiv.innerHTML = "";
      errorDiv.style.display = 'none';
      errorDiv.style.padding = '0';
    }
    // Confirm Password validation
    if (pass_2 == "") {
      var passElement = document.getElementById('pass_2');
      passElement.style.borderColor = "red";
      passElement.scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      var errorDiv = document.getElementById('pass_2_error');
      errorDiv.innerHTML = "উফফ! আপনার উক্ত পাসওয়ার্ডটি পুনরায় লিখুন।";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else if (pass_2 != pass_1) {
      var passElement = document.getElementById('pass_2');
      passElement.style.borderColor = "red";
      passElement.scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      var errorDiv = document.getElementById('pass_2_error');
      errorDiv.innerHTML = "উফফ! আপনার উক্ত পাসওয়ার্ডটির সাথে মিলছে না।";
      errorDiv.style.display = 'block';
      errorDiv.classList.add('fade-in');
      errorDiv.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      errorDiv.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      return false;
    } else {
      document.getElementById('pass_2').style.borderColor = "green";
      var errorDiv = document.getElementById('pass_2_error');
      errorDiv.innerHTML = "";
      errorDiv.style.display = 'none';
      errorDiv.style.padding = '0';
    }
    // Gender validation
    const maleRadio = document.querySelector('#male');
    const femaleRadio = document.querySelector('#female');
    const genderSelectReg = document.querySelector('#gender-select-reg');
    const genderError = document.querySelector('#gender-error');
    if (!maleRadio.checked && !femaleRadio.checked) {
      genderSelectReg.style.borderColor = "red";
      genderError.innerHTML = 'উফফ! আপনার লিঙ্গ নির্বাচন করুন।';
      genderError.style.display = 'block';
      genderError.classList.add('fade-in');
      genderError.style.padding = '5px';
      var colors = ['green', 'blue', 'red'];
      var colorIndex = 0;
      setInterval(function () {
      genderError.style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
      }, 500);
      genderError.scrollIntoView({
      behavior: 'smooth',
      block: 'center',
      });
      genderError.style.position = 'relative';
      return false;
    } else {
      genderError.innerHTML = '';
      genderError.style.display = 'none';
      genderError.style.padding = '0';
      genderSelectReg.style.borderColor = 'green';
    }
    // Gender Select End
    return true;
    }
    // Agree with Term & Conditions + Privacy & Policy Check Box
    function toggleSubmitButton(checked) {
      var submitButton = document.getElementById("edit-submit");
      submitButton.style.display = checked ? "block" : "none";
    }
  </script>
	<!--=======  Footer Start ========-->
	<?php include_once("footer.php");?>
	<!--=======  Footer End  =========-->
</body>
</html>	
