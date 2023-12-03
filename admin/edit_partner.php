<?php
// Include necessary files and initialize the session
include_once("includes/basic_includes.php");
include_once("functions.php");
require_once("includes/dbconn.php");
?>
<?php
error_reporting(0);
require_once("includes/dbconn.php");
if (!isset($_SESSION['id'])) {
  // Redirect the user to the login page or display an error message
  header("location: ../admin/admin_login.php");
  exit;
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Update Partner | ShosurBari</title>
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


<?php
if (isset($_GET['id'])) {
    // Get the user ID from the URL
    $userId = $_GET['id'];

    // Establish a database connection (update these values with your database credentials)
    require_once("includes/dbconn.php");


    // Fetch user data for the specified user ID
    $sql = "SELECT * FROM 9bd_expected_life_partner WHERE id = $userId";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

		// Display the user data in input fields/options
		$partner_religius = $row['partner_religius'];
		$partner_district = $row['partner_district'];
		$partner_maritialstatus = $row['partner_maritialstatus'];
		$partner_age = $row['partner_age'];
		$partner_skintones = $row['partner_skintones'];
		$partner_height = $row['partner_height'];
		$partner_education = $row['partner_education'];
		$partner_profession = $row['partner_profession'];
		$partner_financial = $row['partner_financial'];
		$partner_attributes = $row['partner_attributes'];
    $parents_permission = $row['parents_permission'];
		$real_info_commited = $row['real_info_commited'];
		$authorities_no_responsible = $row['authorities_no_responsible'];
            
    } else {
        echo 'User not found.';
        mysqli_close($conn);
        exit;
    }

// Handle form submission to update user data
if (isset($_POST['update'])) {
    // Retrieve the updated data from the form
    $partner_religius = mysqli_real_escape_string($conn, $_POST['partner_religius']);
    $partner_district = mysqli_real_escape_string($conn, $_POST['partner_district']);
    $partner_maritialstatus = mysqli_real_escape_string($conn, $_POST['partner_maritialstatus']);
    $partner_age = mysqli_real_escape_string($conn, $_POST['partner_age']);
    $partner_skintones = mysqli_real_escape_string($conn, $_POST['partner_skintones']);
    $partner_height = mysqli_real_escape_string($conn, $_POST['partner_height']);
    $partner_education = mysqli_real_escape_string($conn, $_POST['partner_education']);
    $partner_profession = mysqli_real_escape_string($conn, $_POST['partner_profession']);
    $partner_financial = mysqli_real_escape_string($conn, $_POST['partner_financial']);
    $partner_attributes = mysqli_real_escape_string($conn, $_POST['partner_attributes']);
    $parents_permission = mysqli_real_escape_string($conn, $_POST['parents_permission']);
    $real_info_commited = mysqli_real_escape_string($conn, $_POST['real_info_commited']);
    $authorities_no_responsible = mysqli_real_escape_string($conn, $_POST['authorities_no_responsible']);


    // Update user data in the database
    $updateSql = "UPDATE 9bd_expected_life_partner SET
        partner_religius = '$partner_religius',
        partner_district = '$partner_district',
        partner_maritialstatus = '$partner_maritialstatus',
        partner_age = '$partner_age',
        partner_skintones = '$partner_skintones',
        partner_height = '$partner_height',
        partner_education = '$partner_education',
        partner_profession = '$partner_profession',
        partner_financial = '$partner_financial',
        partner_attributes = '$partner_attributes',
        parents_permission = '$parents_permission',
        real_info_commited = '$real_info_commited',
        authorities_no_responsible = '$authorities_no_responsible'

        WHERE id = $userId";

    if (mysqli_query($conn, $updateSql)) {
        echo 'User data updated successfully.';
    } else {
        echo 'Error updating user data: ' . mysqli_error($conn);
    }
}

    mysqli_close($conn);
} else {
    echo 'User ID not specified.';
    exit;
}
?>




<div class="shosurbari-biodata">
  <form action="" method="POST" id="biodataForm">
    <!--Fieldsets start-->
    <fieldset>
      <div class="sb-biodata" id="expectedPartner">
        <div class="sb-biodata-field">
          <h2>প্রত্যাশিত জীবনসঙ্গীর বিবরণ</h2>
        </div>

        <div class="sb-biodata-option">
          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গীর <span style="color: black; font-size: 15px;">ধর্মীয় বিষয়াবলী</span> যেমনটা আশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <input type="text" id="edit-name" name="partner_religius"  value="<?php echo $partner_religius; ?>"  size="200" maxlength="200" class="form-text" required>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গী যেই <span style="color: black; font-size: 15px;">জেলার</span> আশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <input type="text" id="edit-name" name="partner_district" value="<?php echo $partner_district; ?>"  size="100" maxlength="100" class="form-text" required>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গীর <span style="color: black; font-size: 15px;">বৈবাহিক অবস্থা</span> যেমনটা আশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <input type="text" id="edit-name" name="partner_maritialstatus"  value="<?php echo $partner_maritialstatus; ?>"  size="100" maxlength="100" class="form-text" required>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গীর <span style="color: black; font-size: 15px;">বয়স</span> যেমনটা আশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <input type="text" id="edit-name" name="partner_age" value="<?php echo $partner_age; ?>"  size="100" maxlength="100" class="form-text" required>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গীর <span style="color: black; font-size: 15px;">শারীরিক বর্ণ</span> যেমনটা আশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <input type="text" id="edit-name" name="partner_skintones"  value="<?php echo $partner_skintones; ?>" size="100" maxlength="100" class="form-text" required>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গীর <span style="color: black; font-size: 15px;">উচ্চতা</span> যেমনটা আশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <input type="text" id="edit-name" name="partner_height"  value="<?php echo $partner_height; ?>"  size="100" maxlength="100" class="form-text" required>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গীর <span style="color: black; font-size: 15px;">শিক্ষাগত যোগ্যতা</span> যেমনটা আশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <input type="text" id="edit-name" name="partner_education"  value="<?php echo $partner_education; ?>"  size="100" maxlength="100" class="form-text" required>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গীর <span style="color: black; font-size: 15px;">পেশা</span> যেমনটা আশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <input type="text" id="edit-name" name="partner_profession"  value="<?php echo $partner_profession; ?>"  size="200" maxlength="200" class="form-text" required>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গীর <span style="color: black; font-size: 15px;">অর্থনৈতিক অবস্থা</span> যেমনটা আশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <input type="text" id="edit-name" name="partner_financial"  value="<?php echo $partner_financial; ?>"  size="100" maxlength="100" class="form-text" required>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">জীবনসঙ্গীর যেসব <span style="color: black; font-size: 15px;">বৈশিষ্ঠ বা গুণাবলী </span>প্রত্যাশা করেন<span class="form-required" title="This field is required.">*</span></label>
            <textarea rows="8" id="edit-name" name="partner_attributes" placeholder="Describe Expected Qualities or Attributes of Your Life Partner" class="form-text-describe" required><?php echo $partner_attributes; ?></textarea>
          </div>
          
          <div class="sb-biodata-field" style="margin-top: 15px;">
            <h2>প্রতিশ্রুতি গ্রহণ</h2>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">পরিবারের অনুমতি নিয়ে বায়োডাটা জমা দিচ্ছেন?<span class="form-required" title="This field is required.">*</span></label>
            <select name="parents_permission" required>
              <option hidden selected><?php echo $parents_permission;?></option>
              <option value="হ্যাঁ">হ্যাঁ</option>
            </select>
          </div>

          <div class="shosurbari-biodata-field">
            <label for="edit-name">সৃষ্টিকর্তার শপথ করে সাক্ষ্য দিন, শুরু থেকে শেষ পর্যন্ত যে তথ্যগুলো দিয়েছেন সব সত্য?<span class="form-required" title="This field is required.">*</span></label>
            <select name="real_info_commited" required>
              <option hidden selected><?php echo $real_info_commited;?></option>
              <option value="আমি সাক্ষ্য দিচ্ছিযে সকল তথ্য সত্য।">আমি সাক্ষ্য দিচ্ছিযে সকল তথ্য সত্য।</option>
            </select>
          </div>

          <div class="shosurbari-biodata-field">
            <label>কোনো মিথ্যা তথ্য প্রদান করলে দুনিয়াবী আইনগত এবং পরকালের দায়ভার ShosurBri.com কর্তৃপক্ষ নিবে না। আপনি কি সম্মত?<span class="form-required" title="This field is required.">*</span></label>
            <select name="authorities_no_responsible" required>
              <option hidden selected><?php echo $authorities_no_responsible;?></option>
              <option value="হ্যাঁ">হ্যাঁ</option>
            </select>
          </div>

        </div>
      </div>
      <input type="submit" name="update" value="Update">
    </fieldset> 
  </form>
</div>




<style>
input[type=submit] {
    cursor: pointer;
    height: 35px;
	width: 400px;
    margin-top: 10px;
    background: linear-gradient(#06b6d4, #0ea5e9);
    border: 1px solid #ccc;
	border-radius: 4px;
    color: #fff;
    box-shadow: 1px 1px 4px #888;
    /* margin-left: auto;
    margin-right: auto;
    display: block; */
}

html, body { /* Monitor Navigation Bar top Padding 0px */
    padding-top: 0px;
}

fieldset {
	margin-bottom: 100px;
}
</style>


 


<!-- ===== Admin Panel Footer Area ===== -->
<?php include("admin_footer.php"); ?>
<!-- =================================== -->


</body>

</html>