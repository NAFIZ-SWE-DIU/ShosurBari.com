<?php
include_once("includes/basic_includes.php");
require_once("includes/dbconn.php");
include_once("edit-biodata-update.php");
include_once("functions.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	address_update();
}
error_reporting(0);
if (!isset($_SESSION['admin_id'])) {
  header("location: ../abdur-rahman/admin_login.php");
  exit;
}
?>
<!doctype html>
<html class="no-js" lang="">
<head>
	<link rel="icon" href="../images/shosurbari-icon-admin.png" type="image/png">
	<title>Edit Address-Admin | ShosurBari</title>
</head>
<body>
<!-- ====== Admin Panel Navigation Bar ====== -->
<?php include("admin_navigation.php"); ?>
<!-- ========================================= -->
<?php
    session_start();
    if (isset($_SESSION['updateMessage'])) {
        $messageType = ($_SESSION['messageType'] == 'success') ? 'success' : 'error';
        $updateMessage = $_SESSION['updateMessage'];
        echo "<div style='
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: " . ($messageType == 'success' ? '#22c55e' : '#ff0080') . ";
        color: #fff;
        box-shadow: 0 0 13px 0 rgba(82,63,105,.05);
        border: 1px solid rgba(0,0,0,.05);
        border-radius: 2px;
        padding: 10px;
        width: 262px;
        text-align: center;
        z-index: 9999;
        '>$updateMessage
        <button class='cancel-button' style='
        position: absolute;
        cursor: pointer;
        right: 3px;
        margin-right: -20px;
        margin-top: -67px;
        margin-bottom: 15px;
        padding-bottom: 5px;
        line-height: 5px;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: 1px solid #ccc;
        font-size: 20px;
        font-weight: 600;
        color: white;
        background: " . ($messageType == 'success' ? '#0aa4ca' : '#0aa4ca') . ";
        ' onclick='this.parentNode.style.display = \"none\";'>x</button>
        </div>";
        unset($_SESSION['updateMessage']);
        unset($_SESSION['messageType']);
    }
    ?>
	<div class="shosurbari-biodata">
		<form action="" method="POST" id="biodataForm">
			<?php
			include("includes/dbconn.php");
			$id = $_GET['id'];
			$sql = "SELECT * FROM 4bd_address_details WHERE user_id = $id";
			$result = mysqlexec($sql);
			if ($result) {
				$row = mysqli_fetch_assoc($result);
				$permanent_division = isset($row['permanent_division']) ? $row['permanent_division'] : '';
				$home_district_under_barishal = isset($row['home_district_under_barishal']) ? $row['home_district_under_barishal'] : '';
				$home_district_under_chattogram = isset($row['home_district_under_chattogram']) ? $row['home_district_under_chattogram'] : '';
				$home_district_under_dhaka = isset($row['home_district_under_dhaka']) ? $row['home_district_under_dhaka'] : '';
				$home_district_under_khulna = isset($row['home_district_under_khulna']) ? $row['home_district_under_khulna'] : '';
				$home_district_under_mymensingh = isset($row['home_district_under_mymensingh']) ? $row['home_district_under_mymensingh'] : '';
				$home_district_under_rajshahi = isset($row['home_district_under_rajshahi']) ? $row['home_district_under_rajshahi'] : '';
				$home_district_under_rangpur = isset($row['home_district_under_rangpur']) ? $row['home_district_under_rangpur'] : '';
				$home_district_under_sylhet = isset($row['home_district_under_sylhet']) ? $row['home_district_under_sylhet'] : '';
				$country_present_address = isset($row['country_present_address']) ? $row['country_present_address'] : '';
				$present_address_location = isset($row['present_address_location']) ? $row['present_address_location'] : '';
				$present_address_living_purpose = isset($row['present_address_living_purpose']) ? $row['present_address_living_purpose'] : '';
				$childhood = isset($row['childhood']) ? $row['childhood'] : '';
				// Show or hide fields based on the existence of data
				$displayPermanentDivision = $permanent_division ? 'block' : 'none';
				$displayHomeDistrictBarishal = $home_district_under_barishal ? 'block' : 'none';
				$displayHomeDistrictChattogram = $home_district_under_chattogram ? 'block' : 'none';
				$displayHomeDistrictDhaka = $home_district_under_dhaka ? 'block' : 'none';
				$displayHomeDistrictkhulna = $home_district_under_khulna ? 'block' : 'none';
				$displayHomeDistrictMymensingh = $home_district_under_mymensingh ? 'block' : 'none';
				$displayHomeDistrictRajshahi = $home_district_under_rajshahi ? 'block' : 'none';
				$displayHomeDistrictRangpur = $home_district_under_rangpur ? 'block' : 'none';
				$displayHomeDistrictSylhet = $home_district_under_sylhet ? 'block' : 'none';
			}
			?>
			<fieldset>
				<div class="sb-biodata" id="addressDetails">
					<div class="soshurbari-animation-icon">
                        <div class="sb-icon-laptop">
                        <h3> <img src="../images/shosurbari-icon.png"> শ্বশুরবাড়ি </h3>
                        </div>
                    </div>
					<div class="sb-biodata-field">
						<h2>বর্তমান এবং স্থায়ী ঠিকানা</h2>		
						<h2>বায়োডাটা নং: <?php echo $id;?></h2>
					</div>
					<div class="sb-biodata-option">
						<div class="shosurbari-biodata-field">
							<label for="edit-name">আপনি কোন দেশের স্থায়ী নাগরিক/সিটিজেন<span class="form-required" title="This field is required.">*</span></label>
							<select name="country_present_address" required>
                            <option hidden selected><?php echo $country_present_address;?></option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option> 
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Bahrain">Bahrain</option> 
								<option value="Bangladesh">Bangladesh</option> 
								<option value="Belgium">Belgium</option>
								<option value="Bhutan">Bhutan</option> 
								<option value="Brazil">Brazil</option>
								<option value="Canada">Canada</option>
								<option value="China">China</option> 
								<option value="Colombia">Colombia</option>
								<option value="Denmark">Denmark</option> 
								<option value="Egypt">Egypt</option>
								<option value="Finland">Finland</option> 
								<option value="France">France</option>
								<option value="Germany">Germany</option> 
								<option value="Greece">Greece</option>
								<option value="Hungary">Hungary</option> 
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option> 
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option> 
								<option value="Ireland">Ireland</option>
								<option value="Italy">Italy</option> 
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option> 
								<option value="Kazakhstan">Kazakhstan</option> 
								<option value="Korea, North">Korea, North</option>
								<option value="Korea, South">Korea, South</option> 
								<option value="Kuwait">Kuwait</option>
								<option value="Libya">Libya</option> 
								<option value="Luxembourg">Luxembourg</option>
								<option value="Malaysia">Malaysia</option> 
								<option value="Maldives">Maldives</option> 
								<option value="Mexico">Mexico</option>
								<option value="Morocco">Morocco</option>
								<option value="Myanmar">Myanmar</option>  
								<option value="Nepal">Nepal</option>
								<option value="Netherlands">Netherlands</option> 
								<option value="New Zealand">New Zealand</option>
								<option value="Norway">Norway</option> 
								<option value="Oman">Oman</option> 
								<option value="Pakistan">Pakistan</option>
								<option value="Palestine">Palestine</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Philippines">Philippines</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option> 
								<option value="Qatar">Qatar</option> 
								<option value="Russia">Russia</option> 
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Singapore">Singapore</option>
								<option value="South Africa">South Africa</option>  
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="Sudan">Sudan</option> 
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option> 
								<option value="Taiwan">Taiwan</option>  
								<option value="Tajikistan">Tajikistan</option>   
								<option value="Thailand">Thailand</option> 
								<option value="Turkey">Turkey</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Emirates">United Arab Emirates</option>  
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States of America">United States of America</option> 
								<option value="Uruguay">Uruguay</option>
								<option value="Vietnam">Vietnam</option>
								<option value="Yemen">Yemen</option>
								<option value="Others">Others</option>    
							</select>
						</div>
						<div class="shosurbari-biodata-field" style="display: <?php echo $displayPermanentDivision; ?>;">
							<label>বাংলাদেশে স্থায়ী ঠিকানা-বিভাগ<span class="form-required" title="This field is required.">*</span></label>
							<select name="permanent_division" required onchange="showSection(this.value)">
                            <option hidden selected><?php echo $permanent_division;?></option>
								<option value="ঢাকা">ঢাকা</option>
								<option value="চট্টগ্রাম">চট্টগ্রাম</option>
								<option value="খুলনা">খুলনা</option>
								<option value="ময়মনসিংহ">ময়মনসিংহ</option>
								<option value="রাজশাহী">রাজশাহী</option>
								<option value="রংপুর">রংপুর</option>
								<option value="বরিশাল">বরিশাল</option>
								<option value="সিলেট">সিলেট</option>
							</select>
						</div>
						<div class="shosurbari-biodata-field section" id="বরিশাল" style="display: <?php echo $displayHomeDistrictBarishal; ?>;">
							<label>বাংলাদেশে স্থায়ী ঠিকানা-জেলা<span class="form-required" title="This field is required.">*</span></label>
							<select name="home_district_under_barishal">
                            	<option hidden selected><?php echo $home_district_under_barishal;?></option>
								<option></option>
								<option value="ঝালকাঠী">ঝালকাঠী</option>
								<option value="পটুয়াখালী">পটুয়াখালী</option> 
								<option value="পিরোজপুর">পিরোজপুর</option>
								<option value="বরিশাল">বরিশাল</option> 
								<option value="বরগুনা">বরগুনা</option>
								<option value="ভোলা">ভোলা</option>
							</select>
						</div>
						<div class="shosurbari-biodata-field section" id="চট্টগ্রাম" style="display: <?php echo $displayHomeDistrictChattogram; ?>;">
							<label>বাংলাদেশে স্থায়ী ঠিকানা-জেলা<span class="form-required" title="This field is required.">*</span></label>
							<select name="home_district_under_chattogram">
                            	<option hidden selected><?php echo $home_district_under_chattogram;?></option>
								<option></option>
								<option value="কক্সবাজার">কক্সবাজার</option>  
								<option value="কুমিল্লা">কুমিল্লা</option>
								<option value="খাগড়াছড়ি">খাগড়াছড়ি</option>
								<option value="চট্টগ্রাম">চট্টগ্রাম</option>
								<option value="চাঁদপুর">চাঁদপুর</option>
								<option value="নোয়াখালী">নোয়াখালী</option>
								<option value="ফেনী">ফেনী</option>
								<option value="বান্দরবান">বান্দরবান</option>
								<option value="ব্রাহ্মনবাড়ীয়া">ব্রাহ্মনবাড়ীয়া</option> 
								<option value="লক্ষীপুর">লক্ষীপুর</option>
								<option value="রাঙ্গামাটি">রাঙ্গামাটি</option>
							</select>
						</div>
						<div class="shosurbari-biodata-field section" id="ঢাকা" style="display: <?php echo $displayHomeDistrictDhaka; ?>;">
							<label>বাংলাদেশে স্থায়ী ঠিকানা-জেলা<span class="form-required" title="This field is required.">*</span></label>
							<select name="home_district_under_dhaka">
							<option hidden selected><?php echo $home_district_under_dhaka;?></option>
							<option></option>
							<option value="কিশোরগঞ্জ">কিশোরগঞ্জ</option>
							<option value="গাজীপুর">গাজীপুর</option>
							<option value="গোপালগঞ্জ">গোপালগঞ্জ</option>
							<option value="টাঙ্গাইল">টাঙ্গাইল</option>
							<option value="ঢাকা">ঢাকা</option>
							<option value="নরসিংদী">নরসিংদী</option>
							<option value="নারায়ণগঞ্জ">নারায়ণগঞ্জ</option>
							<option value="ফরিদপুর">ফরিদপুর</option>
							<option value="মাদারীপুর">মাদারীপুর</option>
							<option value="মানিকগঞ্জ">মানিকগঞ্জ</option>
							<option value="মুন্সীগঞ্জ">মুন্সীগঞ্জ</option>
							<option value="রাজবাড়ী">রাজবাড়ী</option>
							<option value="শরীয়তপুর">শরীয়তপুর</option>
							</select>
						</div>
						<div class="shosurbari-biodata-field section" id="খুলনা" style="display: <?php echo $displayHomeDistrictkhulna; ?>;">
							<label>বাংলাদেশে স্থায়ী ঠিকানা-জেলা<span class="form-required" title="This field is required.">*</span></label>
							<select name="home_district_under_khulna">
                            	<option hidden selected><?php echo $home_district_under_khulna;?></option>
								<option></option>
								<option value="কুষ্টিয়া">কুষ্টিয়া</option>
								<option value="খুলনা">খুলনা</option>
								<option value="চুয়াডাঙ্গা">চুয়াডাঙ্গা</option>
								<option value="ঝিনাইদহ">ঝিনাইদহ</option>
								<option value="নড়াইল">নড়াইল</option>
								<option value="বাগেরহাট">বাগেরহাট</option>
								<option value="মাগুরা">মাগুরা</option>
								<option value="মেহেরপুর">মেহেরপুর</option>
								<option value="যশোর">যশোর</option>
								<option value="সাতক্ষীরা">সাতক্ষীরা</option>
							</select>
						</div>
						<div class="shosurbari-biodata-field section" id="ময়মনসিংহ" style="display: <?php echo $displayHomeDistrictMymensingh; ?>;">
							<label>বাংলাদেশে স্থায়ী ঠিকানা-জেলা<span class="form-required" title="This field is required.">*</span></label>
							<select name="home_district_under_mymensingh">
                            	<option hidden selected><?php echo $home_district_under_mymensingh;?></option>
								<option></option>
								<option value="জামালপুর">জামালপুর</option>
								<option value="নেত্রকোনা">নেত্রকোনা</option>
								<option value="ময়মনসিংহ">ময়মনসিংহ</option> 
								<option value="শেরপুর">শেরপুর</option>
							</select>
						</div>
						<div class="shosurbari-biodata-field section" id="রাজশাহী" style="display: <?php echo $displayHomeDistrictRajshahi; ?>;">
							<label>স্বাংলাদেশে থায়ী ঠিকানা-জেলা<span class="form-required" title="This field is required.">*</span></label>
							<select name="home_district_under_rajshahi">
                            	<option hidden selected><?php echo $home_district_under_rajshahi;?></option>
								<option></option>
								<option value="চাঁপাই-নবাবগঞ্জ">চাঁপাই-নবাবগঞ্জ</option>
								<option value="জয়পুরহাট">জয়পুরহাট</option>
								<option value="নওগাঁ">নওগাঁ</option>
								<option value="নাটোর">নাটোর</option>
								<option value="পাবনা">পাবনা</option>
								<option value="বগুড়া">বগুড়া</option>
								<option value="রাজশাহী">রাজশাহী</option>
								<option value="সিরাজগঞ্জ">সিরাজগঞ্জ</option>
							</select>
						</div>
						<div class="shosurbari-biodata-field section" id="রংপুর" style="display: <?php echo $displayHomeDistrictRangpur; ?>;">
							<label>বাংলাদেশে স্থায়ী ঠিকানা-জেলা<span class="form-required" title="This field is required.">*</span></label>
							<select name="home_district_under_rangpur">
                            	<option hidden selected><?php echo $home_district_under_rangpur;?></option>
								<option></option>
								<option value="কুড়িগ্রাম">কুড়িগ্রাম</option>
								<option value="গাইবান্ধা">গাইবান্ধা</option>
								<option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option>
								<option value="দিনাজপুর">দিনাজপুর</option>
								<option value="নীলফামারী">নীলফামারী</option>
								<option value="পঞ্চগড়">পঞ্চগড়</option>
								<option value="রংপুর">রংপুর</option>
								<option value="লালমনিরহাট">লালমনিরহাট</option>
							</select>
						</div>
						<div class="shosurbari-biodata-field section" id="সিলেট" style="display: <?php echo $displayHomeDistrictSylhet; ?>;">
							<label>বাংলাদেশে স্থায়ী ঠিকানা-জেলা<span class="form-required" title="This field is required.">*</span></label>
							<select name="home_district_under_sylhet">
                            	<option hidden selected><?php echo $home_district_under_sylhet;?></option>
								<option></option>
								<option value="মৌলভীবাজার">মৌলভীবাজার</option>
								<option value="সুনামগঞ্জ">সুনামগঞ্জ</option>
								<option value="সিলেট">সিলেট</option>
								<option value="হবিগঞ্জ">হবিগঞ্জ</option> 
							</select>
						</div>
						<script>
							function showSection(division) {
							// Hide all district sections
							var districtSections = document.getElementsByClassName("section");
							for (var i = 0; i < districtSections.length; i++) {
								districtSections[i].style.display = "none";
							}
							// Show the selected division's district section
							var selectedDivisionSection = document.getElementById(division);
							if (selectedDivisionSection) {
								selectedDivisionSection.style.display = "block";
							}
							var selects = selectedDivisionSection.getElementsByTagName("select");
							for (var k = 0; k < selects.length; k++) {
							selects[k].selectedIndex = 0; 
							}
							}
						</script>
						<div class="shosurbari-biodata-field">
							<label for="edit-name">বর্তমানে যেখানে থাকেন পুরো ঠিকানা লিখুন<span class="form-required" title="This field is required.">*</span></label>
							<input type="text" name="present_address_location" id="edit-name"  value="<?php echo $present_address_location; ?>" class="form-text required" required>
						</div>
						<div class="shosurbari-biodata-field">
							<label>উক্ত বর্তমান ঠিকানায় কোন উদ্দেশ্যে থাকা হয়, আপনার সাথে পরিবারের সদস্য থাকছে কিনা এবং সেখানে কত দিন যাবৎ থাকছেন?<span class="form-required" title="This field is required.">*</span><span style="color: gray; font-size: 14px;" class="form-required" title="This field is required."> (বিস্তারিত লিখুন)</span> </label>
							<textarea type="text" rows="8" name="present_address_living_purpose" class="form-text-describe" required><?php echo $present_address_living_purpose; ?></textarea>
						</div>
						<div class="shosurbari-biodata-field">
							<label for="edit-name">বাল্যকালে কোন ঠিকানায় বড় হয়েছেন?<span class="form-required" title="This field is required.">*</span></label>
							<input type="text" id="edit-name" name="childhood" value="<?php echo $childhood; ?>" class="form-text required" required>
						</div>
					</div>
				</div>
				<input type="submit" name="update" value="Update">
			</fieldset>
		</form>
	</div>
<!-- ===== Admin Panel Footer Area ===== -->
<?php include("admin_footer.php"); ?>
<!-- =================================== -->
</body>
</html>

