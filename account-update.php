<?php
include_once("includes/basic_includes.php");
include_once("functions.php");
    function englishToBanglaNumber($number) {
    $englishDigits = range(0, 9);
    $banglaDigits = ["০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯"];
    return $number !== null ? str_replace($englishDigits, $banglaDigits, $number) : '';
}
if (isloggedin()) {
    $userId = $_SESSION['id'];
    require_once("includes/dbconn.php");
    $statusSql = "SELECT deactivated FROM users WHERE id = $userId";
    $result = mysqli_query($conn, $statusSql);
    // Check if the result is not null before accessing the 'deactivated' key
    if ($result !== null) {
        $row = mysqli_fetch_assoc($result);
        $deactivated = isset($row['deactivated']) ? $row['deactivated'] : null;
    } else {
        // Handle the case where $result is null
        $deactivated = null;
    }
    $totalViewCountSql = "SELECT view_count FROM `1bd_personal_physical` WHERE user_id = $userId";
    $result = mysqli_query($conn, $totalViewCountSql);
    // Check if the result is not null before accessing the 'view_count' key
    if ($result !== null) {
        $row = mysqli_fetch_assoc($result);
        $totalViewCount = isset($row['view_count']) ? $row['view_count'] : null;
        $totalViewCountInBangla = englishToBanglaNumber($totalViewCount);
    } else {
        // Handle the case where $result is null
        $totalViewCountInBangla = '';
    }
    } else {
        header("location:login.php");
    }
    $conn->close();
?>
<?php
    include("includes/dbconn.php");
    $sql="SELECT * FROM users WHERE id = $userId";
    $result = mysqlexec($sql);
    if($result){
    $row=mysqli_fetch_assoc($result);
    if($row){
    $fullname=$row['fullname'];
    }
    if($row){
    $username=$row['username'];
    }
    if($row){
    $password=$row['password'];
    }
    if($row){
    $email=$row['email'];
    }
    if($row){
    $country_code=$row['country_code'];
    }
    if($row){
    $pnumber=$row['number'];
    }
    if($row){
    $gender=$row['gender'];
    }
    if($row){
    $userId=$row['id'];
    }
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2Q53085HTX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2Q53085HTX');
</script>
<title>Account Update | ShosurBari</title>
<meta name="description" content="Effortlessly manage your ShosurBari account. Update key account details for a personalized experience. Keep your information current and ensure your profile reflects the best version of you.">
<link rel="icon" href="images/shosurbari-icon.png" type="image/png">
<meta property="og:image" content="https://www.shosurbari.com/images/shosurbari-social-share.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!-- Country Code with Flag for Number input field -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" /><!-- eye icon password show -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- ===========  Navigation Start =========== -->
	<?php include_once("includes/navigation.php");?>
	<!-- ===========  Navigation End ============= -->
    <style>
    .form-group input{
        font-family: 'Ubuntu';
    }
    .dropdown-menu li a {
        padding: 5px 15px;
        font-weight: 410;
        font-size:14px;
        height: 40px;
        line-height: 32px;
        color: #000;
    }
    .shosurbari-biodata-form {
        align-items: center;
        flex-wrap: wrap;
        width: 1400px;
        margin: auto;
        padding-top: 30px;
        padding-bottom: 20px
    }
    .soshurbari-animation-icon,
    .shosurbari-animation-form {
        flex-basis: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    /* Gender Start */
    .gender-radio-group input[type="radio"] {
        display: none;
    }
    .gender-radio-group{
        margin: 25px auto 15px auto;
        border: 1px solid #ccc;
        border-radius: 3px;
        padding: 3px 10px;
        background: #4cafe809;
        display: flex;
		box-shadow: inset 0 2px 1px #22222217;
    }
    .gender-radio-group label {
        display: inline-block;
        transition: all 0.5s;
        font-weight: 500;
        cursor: pointer;
    }
    .gender-radio-group input[type="radio"]:checked + label {
        background: #0aa4ca;
        border: 1px solid #ccc;
        color: #fff;
        border-radius: 3px;
    }
    .sb-gender-label{
        border: 1px solid #ccc;
        border-radius: 3px;
        background: white;
        padding: 3px;
        margin-right: 5px;
        margin-left: 5px;
    }
    .sb-update-gender{
        display: flex;
        align-items: center;
        float: inline-end;
        margin: auto;
        margin-right: 0;
    }
    /* Gender End */
    @media (max-width: 1280px){
        .shosurbari-biodata-form{
            width: auto;
        }
    }
    @media (max-width: 1024px) {
        .shosurbari-biodata-form {
            width: auto;
        }
    }
    @media (max-width: 768px){
    .shosurbari-userhome-status h3,
    .shosurbari-userhome-status h4 {
        text-align: left;
    }
    .sb-gender-label{
        margin-right: 5px;
        margin-left: 5px;
    }
    }
    @media (max-width: 736px){
    .dropdown-menu li a {
        color: #000 !important;
    }
    .dropdown-menu li a:hover{
        background: linear-gradient(#0aa4ca, #06b6d4);
        color: #fff !important;
    }
    }
    </style>
    <div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.php"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page"><h4>Account Update</h4></li>
                </ul>
                <?php
                include("includes/dbconn.php");
                $sql="SELECT * FROM users WHERE id = $userId";
                $result = mysqlexec($sql);

                if($result){
                $row=mysqli_fetch_assoc($result);
                if($row){
                $username=$row['username'];
                }
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['updateMessage'])) {
        $messageType = ($_SESSION['messageType'] == 'success') ? 'success' : 'error';
        $updateMessage = $_SESSION['updateMessage'];
        echo "<div id='updateMessage' style='
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: " . ($messageType == 'success' ? '#22c55e' : '#ffddee') . ";
            color: " . ($messageType == 'success' ? '#fff' : 'red') . ";
            box-shadow: 0 0 13px 0 rgba(82,63,105,.05);
            border: 1px solid rgba(0,0,0,.05);
            border-radius: 2px;
            padding: 10px;
            width: 263px;
            text-align: center;
            z-index: 9999;
        '>$updateMessage</div>";
        //auto-hide the message after 7 seconds
        echo "<script>
                setTimeout(function() {
                    var updateMessage = document.getElementById('updateMessage');
                    if (updateMessage) {
                        updateMessage.style.display = 'none';
                    }
                }, 7000);
            </script>";
        unset($_SESSION['updateMessage']);
        unset($_SESSION['messageType']);
    }
    ?>
    <div class="shosurbari-sidebar">
        <div class="leftarea-sidebar">
			
			
			<div class="shosurbari-userhome-status">
			<p><i class="fa fa-address-book"></i> <?php echo "User: $username"; ?></p>
			<!-- Display the account status -->
			<p><i class="fa fa-gears"></i> Account Status:
				<?php
				if ($deactivated == 0) {
					echo '<span style="color: #00d400;">Active</span>';
				} else {
					echo '<span style="color: red;">Deactivated</span>';
				}
				?>
			</p>
				<form id="deactivateForm" action="deactivate_account.php" method="post" style="
				font-size: 17px;
				font-weight: bold;
				color: #fff;
				padding: 15px 10px;
				background: linear-gradient(180deg, #00bbff61 0%, rgba(238, 246, 253, 0) 100%);
				border-radius: 5px;
				border: 1px solid #0aa4ca;">
					<span style="font-size: 17px;font-weight: bold;"><i class="fa fa-recycle"></i> Switch Status:</span>
					<?php if ($deactivated == 1) { ?>
						<button type="submit" name="action" value="activate">Activation</button>
					<?php } else { ?>
						<button type="button" onclick="showReasonInput()">Deactivate</button>
					<?php } ?>
					<div id="reasonInput" style="display: none;">
						<textarea style="max-width: 168px;margin-top: 7px;margin-bottom: 0px;padding: 5px 7px;color: #000;font-size: 13px;font-weight: 500;" name="reason" id="reason" rows="3" cols="25" placeholder="বায়োডাটা Deactivate / গোপন করতে চান কেন? কারণ লিখুন..."></textarea> <br>
						<span id="reasonError" style="color: #ffda00; display: none; max-width: 168px; font-size: 13px; font-weight: 500; margin: auto;">অনুগ্রহ করে কমপক্ষে ৫০টি অক্ষর দিয়ে কারণ টি লিখুন৷</span>
						<button type="button" onclick="confirmAction()">কনফার্ম</button>
					</div>
				</form>
			</div>

				<script>
					function showReasonInput() {
						var reasonInput = document.getElementById('reasonInput');
						reasonInput.style.display = 'block';
					}
					function confirmAction() {
						var action = "<?php echo ($deactivated == 1) ? 'প্রকাশিত/Activate' : 'গোপন/Deactivate'; ?>";
						var reasonInput = document.getElementById('reasonInput');
						var reason = reasonInput.querySelector('textarea[name="reason"]').value.trim();

						if (reason.length < 50) {
							document.getElementById('reasonError').style.display = 'block';
							return false;
						} else {
							document.getElementById('reasonError').style.display = 'none';
						}
						// AJAX request to submit the form data
						var xhr = new XMLHttpRequest();
						xhr.onreadystatechange = function () {
							if (xhr.readyState === XMLHttpRequest.DONE) {
								if (xhr.status === 200) {
									// Reload the page to display the latest reason
									window.location.reload();
								} else {
									alert('Error: Unable to submit the form. Server responded with status: ' + xhr.status);
								}
							}
						};
						xhr.onerror = function () {
							alert('সমস্যা দেখা দিয়েছে, অনুগ্রহ করে এডমিনের সাথে যোগাযোগ করুন।');
						};
						xhr.open('POST', 'deactivate_account.php', true);
						xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
						xhr.send('action=deactivate&reason=' + encodeURIComponent(reason));

						return confirm("আপনার বায়োডাটা সফল ভাবে " + action + " হয়েছে।");
					}
				</script>

			
            <div class="shosurbari-account-sidebar" id="bs-megadropdown-tabs">
                <ul class="shosurbari-my-account">
                    <li><a href="my-account.php"><i class="fa fa-dashboard"></i> ড্যাশবোর্ড</a></li>
                    <li><a href="biodata-post.php"><i class='fa fa-file-text-o'></i> বায়োডাটা পোস্ট করুন</a></li>
                    <li><a href="profile-photo.php?id=<?php echo $id;?>"><i class="fa fa-image"></i> বায়োডাটার ছবি</a></li>
                    <li><a href="profile.php?/Biodata=<?php echo $id;?>"><i class='fa fa-address-card-o'></i> সম্পূর্ণ বায়োডাটা</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> বায়োডাটা আপডেট<span class="caret"></span> </a>
                        <ul class="dropdown-menu" role="menu">
                        <li><a href="update-physical-marital.php">শারীরিক/বৈবাহিক তথ্য</a></li>
                        <li><a href="update-personalInfo.php">ব্যক্তিগত তথ্য</a></li>
                        <li><a href="update-education.php">শিক্ষাগত তথ্য</a></li>
                        <li><a href="update-address.php">ঠিকানা</a></li>
                        <li><a href="update-family.php">পারিবারিক/সামাজিক</a></li>
                        <li><a href="update-religion.php">ধর্মীয় বিষয়</a></li>
                        <li><a href="update-partnerInfo.php">জীবনসঙ্গীর-বিবরণ</a></li>
                        </ul>
                    </li>
                    <li><a href="search.php"><i class="fa fa-search"></i> বায়োডাটা খুঁজুন</a></li>
                    <li><a href="account-update.php" style="background: linear-gradient(#06b6d4, #0aa4ca); color: #fff;"><i class="fa fa-gear fa-spin" style="color: #fff;"></i> একাউন্ট আপডেট</a></li>
                </ul>
            </div>
            <div class="shosurbari-biodata-view">
                <form action="" method="post" name="SbLogForm" onsubmit="return SbLogineForm()">
                    <div class="sb-biodata-total-view">
						<h3><i class="fa fa-eye"></i> বায়োডাটাটি দেখা হয়েছে:
						<?php
						  // Display the view count for the logged-in user's profile
						  if (isset($totalViewCountInBangla)) { echo "$totalViewCountInBangla বার"; } ?>
						</h3>
                    </div>
                </form>
            </div> 
        </div>
        <div class="shosurbari-user-account">
            <div class="soshurbari-animation-icon">
                <div class="sb-icon-laptop">
                    <h3> <img src="images/shosurbari-logo-form.png"></h3>
                </div>
            </div>
            <div class="sb-biodata-field">
                <h2>Your Account</h2>
            </div>
            <form action="" method="POST" name="myForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <label>Full Name <span style="color: #ccc; font-size:12px;"></span></label>
                    <input type="text" name="fullname" class="form-text" value="<?php echo $fullname; ?>" />
                </div>
                <div class="form-group">
                    <label>Username <span style="color: #ccc; font-size:12px;">(Fixed)</span> </label>
                    <input type="text" name="uname" style="background: #ecfeff" class="form-text" value="<?php echo $username; ?>" disabled />
                </div>
                <div class="form-group">
                    <label>Email Address <span style="color: #ccc; font-size:12px;"> (Fixed)</span> </label>
                    <input type="text" name="email" style="background: #ecfeff" class="form-text" value="<?php echo $email; ?>" disabled />
                </div>
                <div class="form-group">
                    <label>Phone Number <span style="color: #ccc; font-size:12px;"> (Fixed)</span></label><br>
                    <input type="text" id="pnumber" name="pnumber" style="background: #ecfeff" value="<?php echo "$country_code $pnumber"; ?>" size="60" minlength="10" maxlength="15" class="form-text" disabled>
                </div>
                <div class="form-group gender-radio-group">
                    <label style="font-weight: bold; margin-top: 6px;">Gender:<span style="color: #ccc; font-size:12px;"></span></label>
                    <div class="sb-update-gender">
                        <input type="radio" id="male" name="gender" value="Male" <?php echo ($gender === 'Male') ? 'checked' : ''; ?>>
                        <label class="sb-gender-label" for="male"><i class="fa fa-male"></i> Male</label>
                        <input type="radio" id="female" name="gender" value="Female" <?php echo ($gender === 'Female') ? 'checked' : ''; ?>>
                        <label class="sb-gender-label" for="female"><i class="fa fa-female"></i> Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>New Password <span style="color: #ccc; font-size:12px;"></span> </label>
                    <input type="password" id="pass_1" name="pass_1" class="form-text" />
                    <span class="show-password" style="font-size:15px; top:26px;"><i style="font-size:15px;" class="fa fa-eye-slash" aria-hidden="true"></i></span> 
                    <span  id="pass_1_error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
                </div>
                <div class="form-group">
                    <label>Confirm Password <span style="color: #ccc; font-size:12px;"></span> </label>
                    <input type="password" id="pass_2" name="pass_2" class="form-text" />
                    <span class="show-password" style="font-size:15px; top:26px;"><i style="font-size:15px;" class="fa fa-eye-slash" aria-hidden="true"></i></span> 
                    <span  id="pass_2_error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
                </div>
                <script>
                    let showPass = document.querySelectorAll('.show-password');
                    showPass.forEach(function(el) {
                    el.addEventListener('click', function(){
                    let input = this.previousElementSibling;
                    if (input.type === "password") {
                    input.type = "text";
                    this.innerHTML = "<i class='fa fa-eye'></i>";
                    } else {
                    input.type = "password";
                    this.innerHTML = "<i class='fa fa-eye-slash'></i>";
                    }
                    });
                    });
                </script>
                <div class="form-actions">
                    <?php if (isset($_SESSION['id'])) { ?>
                        <input type="hidden" id="edit-remember" name="remember" value="1">
                    <?php } else { ?>
                    <div class="form-group">
                        <label><input type="checkbox" id="edit-remember" name="remember" value="1" <?php if(isset($_COOKIE['remember']) && $_COOKIE['remember'] == 1) { echo 'checked'; } ?>> Remember me</label>
                    </div>
                    <?php } ?>
                    <button type="submit" name="update_account" value="Update Account" class="btn_1 submit">
                        <span>Update Account</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validateForm(){
        var pass_1 = document.forms["myForm"]["pass_1"].value;
        var pass_2 = document.forms["myForm"]["pass_2"].value;
        //New Password validation
        if (pass_1 == "") {
            document.getElementById('pass_1').style.borderColor = "red";
            document.getElementById('pass_1').scrollIntoView({
            behavior: 'smooth',
            block: 'center',
            });
            var errorDiv = document.getElementById('pass_1_error');
            errorDiv.innerHTML = "Please enter your New Password!";
            errorDiv.style.display = 'block';
            errorDiv.classList.add('fade-in');
            // Change color multiple times
            var colors = ['green', 'blue', 'red'];
            var colorIndex = 0;
            setInterval(function() {
            errorDiv.style.color = colors[colorIndex];
            colorIndex = (colorIndex + 1) % colors.length;
            }, 500);
            return false;
        }else{
            document.getElementById('pass_1').style.borderColor = "green";
            document.getElementById('pass_1').style.backgroundColor = "#ecfeff";
            document.getElementById('pass_1_error').innerHTML = "";
        }
        //Confirm Password validation
        if (pass_2 == "") {
            document.getElementById('pass_2').style.borderColor = "red";
            document.getElementById('pass_2').scrollIntoView({
            behavior: 'smooth',
            block: 'center',
            });
            var errorDiv = document.getElementById('pass_2_error');
            errorDiv.innerHTML = "Please enter your Confirm Password!";
            errorDiv.style.display = 'block';
            errorDiv.classList.add('fade-in');
            // Change color multiple times
            var colors = ['green', 'blue', 'red'];
            var colorIndex = 0;
            setInterval(function() {
            errorDiv.style.color = colors[colorIndex];
            colorIndex = (colorIndex + 1) % colors.length;
            }, 500);
            return false;
        }else if(pass_2 != pass_1){
            document.getElementById('pass_2').style.borderColor = "red";
            document.getElementById('pass_2').scrollIntoView({
            behavior: 'smooth',
            block: 'center',
            });
            var errorDiv = document.getElementById('pass_2_error');
            errorDiv.innerHTML = "Your Password do not match!";
            errorDiv.style.display = 'block';
            errorDiv.classList.add('fade-in');
            // Change color multiple times
            var colors = ['green', 'blue', 'red'];
            var colorIndex = 0;
            setInterval(function() {
            errorDiv.style.color = colors[colorIndex];
            colorIndex = (colorIndex + 1) % colors.length;
            }, 500);
            return false;
        }else{
            document.getElementById('pass_2').style.borderColor = "green";
            document.getElementById('pass_2').style.backgroundColor = "#ecfeff";
            document.getElementById('pass_2_error').innerHTML = "";
        }
        }
    </script>
	<!--View This Page. Connected to get view count -->
    <script>
        $(document).ready(function() {
        var pages = ["account-update"];
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
    <!--=======  Footer Start ========-->
    <?php include_once("footer.php");?>
    <!--=======  Footer End  =========-->
    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
        });
    </script> 
</body>
</html>	
