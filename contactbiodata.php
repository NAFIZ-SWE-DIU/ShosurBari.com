<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php biodata_sale_customer(); 
error_reporting(0);
?>

<?php
if (isset($_GET['ids'])) {
    $ids = $_GET['ids'];

    // Explode the IDs by comma and space to count them
    $idArray = explode(', ', $ids);

    // Limit the array to contain a maximum of 10 IDs
    $idArray = array_slice($idArray, 0, 10);

    $idCount = count($idArray);

    // Calculate the fee based on the number of IDs
    $fee = 0;

    if ($idCount === 1) {
        $fee = 145;
    } elseif ($idCount === 2) {
        $fee = 280;
    } elseif ($idCount === 3) {
        $fee = 390;
    } elseif ($idCount === 4) {
        $fee = 500;
    } elseif ($idCount === 5) {
        $fee = 600;
    } elseif ($idCount === 6) {
        $fee = 690;
    } elseif ($idCount === 7) {
        $fee = 770;
    } elseif ($idCount === 8) {
        $fee = 840;
    } elseif ($idCount === 9) {
        $fee = 900;
    } elseif ($idCount >= 10) {
        $fee = 980;
    }

} else {
    $ids = ''; // Set a default value if the parameter is not provided
    $idCount = 0;
    $fee = 0;
}

// Check if the browser cookie is set and use it to populate the input field
$cookieName = "choice_list_ids";
if (isset($_COOKIE[$cookieName])) {
    $numIdsFromCookie = $_COOKIE[$cookieName];
    // Automatically fill the input field with the number of IDs from the cookie
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Payment | ShosurBari</title>
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
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Add icon library end -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Country Code with Flag for Number input field -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />

</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;<|>&nbsp;</span>
        <li class="current-page"><h4>Payment</h4></li>
     </ul>
   </div>
</div>
</div>


<!-- -- -- -- -- -- -- -- -- -- -- -- -- ---- -- --
-- -- -- -- -- -- -- -- --- -- -- -- -- -- -- -- --
--                S  T  A  R  T                  --
--   SHOSURBARI BIODATA FORM FIELD ALL SECTION   --
--                                               --
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- ---
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
<div class="shosurbari-biodata">
  <form action="" method="POST" name="myForm" onsubmit="return validateForm()">
    <div class="flex-container">
      <div class="sb-register-login">

        <div class="soshurbari-animation-icon">
            <div class="sb-icon-laptop">
              <h3> <img src="images/shosurbari-icon.png"> শশুরবাড়ি </h3>
            </div>
        </div>

        <div class="sb-biodata-field">
          <h2>কাস্টমার তথ্য</h2>
        </div>

<?php
// Check if the user is logged in
session_start();
include("includes/basic_includes.php");

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    include("includes/dbconn.php");
    
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqlexec($sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fullname = $row['fullname'];
        $email = $row['email'];
        $pnumber = $row['number'];
    }
} else {
    $fullname = ''; // Set default values if the user is not logged in
    $email = '';
    $pnumber = '';
}
?>

<!-- HTML form with input fields -->
<div class="form-group">
    <label>নাম<span class="form-required" title="This field is required.">*</span></label>
    <input type="text" id="cust_name" placeholder="আপনার পুরো নাম" name="cust_name" value="<?php echo $fullname; ?>" size="60" maxlength="60" class="form-text required">
    <span id="name-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
</div>

<div class="form-group">
    <label>ই-মেইল<span class="form-required" title="This field is required.">*</span></label>
    <input type="email" id="cust_email" placeholder="আপনার ই-মেইল" name="cust_email" value="<?php echo $email; ?>" size="60" maxlength="60" class="form-text">
    <span id="email-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
</div>

<div class="form-group">
    <label>নাম্বার<span class="form-required" title="This field is required.">*</span></label>
    <input type="tel" id="pnumber" placeholder="আপনার ফোন নাম্বার" name="cust_number" value="<?php echo $pnumber; ?>" size="60" minlength="10" maxlength="15" class="form-text required">
    <span id="phone-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
</div>











  <script>
    $(document).ready(function() {
      var input = document.querySelector("#pnumber");
      window.intlTelInput(input, {
        separateDialCode: true,
        preferredCountries: ["bd"]
      });
    });
  </script>


  <div class="form-group">
    <label>ঠিকানা<span class="form-required" title="This field is required.">*</span></label>
    <input type="text" id="permanent_address" name="cust_permanent_address" placeholder="আপনার স্থায়ী ঠিকানা" value="" size="100" maxlength="100" class="form-text required">
    <span id="address-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
  </div>

  <div class="form-group">
    <label>পছন্দের বায়োডাটা <span style="color: #ccc; font-size: 12px;">(অপরিবর্তনশীল)</span></label>
    <textarea rows="4" id="contact_biodatas_number" name="request_biodata_number" class="form-text required" style="background: #ecfeff;" readonly><?php
      if (isset($_GET['profileid'])) {
          $profileid = $_GET['profileid'];
          echo htmlspecialchars($profileid);
      } else {
        if (is_array($idArray)) {
          echo htmlspecialchars(implode(', ', $idArray));
        }
      }?>
    </textarea>
    <span id="biodata-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
  </div>







        <div class="form-actions">
        <button type="button" class="next-btn">পেমেন্ট সম্পন্ন করুন</button>
        </div>

      </div>

    <style>
        /* Hide the default radio button */
        input[type="radio"] {
            display: none;
        }

        /* Create square-shaped custom radio options */
        .custom-radio-option {
            display: inline-block;
            width: 20px;
            height: 26px;
            margin: 5px 5px 7px 10px;
            background-color: #fff;
            border: 1px solid #06b6d4;
            cursor: pointer;
            position: relative;
        }

        /* Style the checked state of the custom radio options */
        input[type="radio"]:checked + label {
            background: #06b6d4;
            color: #fff;
            border: 2px solid #06b6d4;
        }

        /* Hide the radio input itself and style the label */
        input[type="radio"] + label {
            display: inline-block;
            line-height: 8px;
            border: 1px solid;
            padding: 10px;
            border-radius: 2px;
            width: auto;
        }

        input[type="radio"] + label:hover {
          background: #06b6d4;
          color: #fff;
          border: 2px solid #06b6d4;
          transition: transform 0.3s;
          transform: scale(1.1);
        }

        label {
          margin-bottom: 2px;
          color: #000;
          font-weight: 500;
          font-size: 16px;
      }

      .shosurbari-biodata-field {
          padding: 10px 0px;
          text-align: center;
      }








  .sb-biodata-field{
    background: none;
  }
  
.sb-register-login h2,
.sb-biodata-field h2{
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
  padding-bottom: 30px
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
    </style>

<script>
  $('.next-btn').click(function(){
    $('.payment-form').css('display', 'block');
    $('html, body').animate({
        scrollTop: $(".payment-form").offset().top - ($(window).height()/3)
    }, 500);
});
  </script>


<div class="payment-form" style="display: none;">


        <div class="soshurbari-animation-icon">
            <div class="sb-icon-laptop">
              <h3> <img src="images/shosurbari-icon.png"> শশুরবাড়ি </h3>
            </div>
        </div>

        <div class="sb-biodata-field">
          <h2>সেন্ড মানি করুন</h2>
        </div>


<!--         
    <div class="shosurbari-biodata-field" style="padding: 0px; margin-bottom: 20px;">
    <label for="edit-name" style="font-weight: bold;">আপনি কয়টি বায়োডাটার সাথে যোগাযোগ করতে চান?</label></br>
    <input type="radio" name="biodata_quantities" value="1 Biodata 145 Tk" id="biodata_quantity_1">
    <label for="biodata_quantity_1">১</label>

    <input type="radio" name="biodata_quantities" value="2 Biodata 270 Tk" id="biodata_quantity_2">
    <label for="biodata_quantity_2">২</label>

    <input type="radio" name="biodata_quantities" value="3 Biodata 375 Tk" id="biodata_quantity_3">
    <label for="biodata_quantity_3">৩</label>

    <input type="radio" name="biodata_quantities" value="4 Biodata 460 Tk" id="biodata_quantity_4">
    <label for="biodata_quantity_4">৪</label>

    <input type="radio" name="biodata_quantities" value="5 Biodata 525 Tk" id="biodata_quantity_5">
    <label for="biodata_quantity_5">৫</label>

    <input type="radio" name="biodata_quantities" value="10 Biodata 990 Tk" id="biodata_quantity_10">
    <label for="biodata_quantity_10">১০</label>

    <div id="payment-message" class="form-group" style="display: none;">মোট <span id="payment-amount">70</span> টাকা</div>
    <div id="error-message" style="color: red; display: none;">অনুগ্রহ করে বায়োডাটা পরিমাণ নির্বাচন করুন।</div>
</div> -->


<?php
function englishToBanglaNumber($number) {
    $english = range(0, 9);
    $bangla = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
    $banglaNumber = str_replace($english, $bangla, $number);
    return $banglaNumber;
}

if (isset($_GET['profileid'])) {
  $profileid = $_GET['profileid'];

  // Specific values for profileid
  $idCountOne = '1'; // Set the desired value
  $feeOne = '145';  // Set the desired value

  $idCountOneBD = englishToBanglaNumber($idCountOne);
  $feeOneBD = englishToBanglaNumber($feeOne);

  // Set idCount and fee to the specific values
  $idCount = $idCountOne;
  $fee = $feeOne;

  echo "<div id=\"payment-amount\" class=\"payment-amount\">$idCountOneBD টি বায়োডাটা, মোট $feeOneBD টাকা.</div>";
} elseif ($idCount > 0) {
  // Convert idCount and fee to Bangla numbers if needed
  $idCountBangla = englishToBanglaNumber($idCount);
  $feeBangla = englishToBanglaNumber($fee);

  echo "<div id=\"payment-amount\" class=\"payment-amount\">$idCountBangla টি বায়োডাটা, মোট $feeBangla টাকা.</div>";
}
?>




            
<div class="shosurbari-biodata-field" id="payment-border-error" style="border: 1px solid #ccc; border-radius: 5px;">
    <label for="edit-name" style="font-weight: bold;">পছন্দের পেমেন্ট পদ্ধতি বেছে নিন।<span class="form-required" title="This field is required.">*</span></label> <br>
    <input type="radio" name="payment_method" id="bkash_radio" value="bkash">
    <label class="custom-radio-option" for="bkash_radio">বিকাশ</label>

    <input type="radio" name="payment_method" id="nagad_radio" value="nagad">
    <label class="custom-radio-option" for="nagad_radio">নগদ</label>

    <input type="radio" name="payment_method" id="roket_radio" value="roket">
    <label class="custom-radio-option" for="roket_radio">রকেট</label>

    <div id="payment-method-error" style="font-size: 16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></div>
</div>


<div class="payment-method bkash" style="background: #e2136e; padding: 20px; border-radius: 5px; margin-top: 20px;">
        <div class="form-group">
            <p style="color: #fff; text-align: justify;">আপনার মোবাইলের বিকাশ এপ্স অথবা *247# ডায়েল করে মোট টাকা "Send Money" করুন পার্সোনাল বিকাশ নাম্বারে: 01737-226404</p>
            <label style="color: #fff;" >আপনার বিকাশ নাম্বার</label>
            <input style="background: #fff;" type="text" id="bkash_number" name="bkash_number" placeholder="01XX-XXX XXX" class="form-text" />
            <span id="bkashnumber-error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
        </div>
        <div class="form-group">
            <label style="color: #fff;" >ট্রানজেকশন আইডি (TrxID)</label>
            <input style="background: #fff;" type="text" id="bkash_trxid" name="bkash_transaction_id" placeholder="AHV6U3TJ5K" class="form-text" />
            <span id="bkash-error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
        </div>
    </div>

    <div class="payment-method nagad" style="background: #ec1c24; padding: 20px; border-radius: 5px; margin-top: 20px;">
        <div class="form-group">
        <p style="color: #fff; text-align: justify;">আপনার মোবাইলের নগদ এপ্স অথবা *167# ডায়েল করে মোট টাকা "Send Money" করুন পার্সোনাল নগদ নাম্বারে: 01737-226404</p>
            <label style="color: #fff;">আপনার নগদ নাম্বার</label>
            <input style="background: #fff;" type="text" id="nagad_number" name="nagad_number" placeholder="01XX-XXX XXX" class="form-text" />
            <span id="nagadnumber-error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
        </div>
        <div class="form-group">
            <label style="color: #fff;">ট্রানজেকশন আইডি (TxnId)</label>
            <input style="background: #fff;" type="text" id="nagad_trxid" name="nagad_transaction_id" placeholder="72449QUT" class="form-text" />
            <span id="nagad-error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
        </div>
    </div>

    <div class="payment-method roket" style="background: #8C3494; padding: 20px; border-radius: 5px; margin-top: 20px;">
        <div class="form-group">
        <p style="color: #fff; text-align: justify;">আপনার মোবাইলের রকেট এপ্স অথবা *322# ডায়েল করে মোট টাকা "Send Money" করুন পার্সোনাল রকেট নাম্বারে: 01737-226404-4</p>
            <label style="color: #fff;">আপনার রকেট নাম্বার</label>
            <input style="background: #fff;" type="text" id="roket_number" name="roket_number" placeholder="01XX-XXX XXX-X" class="form-text" />
            <span id="roketnumber-error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
        </div>
        <div class="form-group">
            <label style="color: #fff;">ট্রানজেকশন আইডি (TxnId)</label>
            <input style="background: #fff;" type="text" id="roket_trxid" name="roket_transaction_id" placeholder="3956466293" class="form-text" />
            <span id="roket-error" style="font-size:16px; margin-top: 0px; background: #ffddee; border-radius: 1px 2px 4px 4px; text-align: center; display: none;"></span>
        </div>
    </div>








    <div class="profile-btn">
      <div class="contact-bio">
        <a href="choice_list.php">
          <button class="chatbtn" id="back-btn">চয়েস লিস্ট</button>
        </a>
      </div>


      <input type="hidden" name="idCount" value="<?php echo $idCount; ?>">
      <input type="hidden" name="fee" value="<?php echo $fee; ?>">
      <div class="copy-sbbio-link">
        <button class="copylink" type="submit" id="edit-submit" name="op">কনফার্ম</button>
      </div>
    </div>


<!-- Popup message -->
<div class="popup-message">
<h3></h3>
<p></p>
</div>
<!-- Overlay -->
<div class="overlay"></div>


</div>
</div>
</form>
</div>




    <script>
    // JavaScript code to handle the payment form

    document.addEventListener('DOMContentLoaded', function () {
        // Add change event listeners to the radio buttons to show/hide input fields
        var radioButtons = document.querySelectorAll('input[name="payment_method"]');
        radioButtons.forEach(function (radio) {
            radio.addEventListener('change', function () {
                // Hide all payment method input fields
                var paymentMethodForms = document.querySelectorAll('.payment-method');
                paymentMethodForms.forEach(function (method) {
                    method.style.display = 'none';
                });

                // Show the input fields for the selected payment method
                var selectedMethod = document.querySelector('.payment-method.' + radio.value);
                if (selectedMethod) {
                    selectedMethod.style.display = 'block';
                }

                // Hide the error message
                var paymentMethodError = document.getElementById('payment-method-error');
                paymentMethodError.style.display = 'none';
            });
        });

        // Add a submit event listener to the form
        var form = document.querySelector('form');
        form.addEventListener('submit', function (e) {
            // Check if a payment option is selected
            var selectedOption = document.querySelector('input[name="payment_method"]:checked');
            var paymentMethodError = document.getElementById('payment-method-error');

            if (!selectedOption) {
                // Display the error message and prevent form submission
                paymentMethodError.style.display = 'block';
                e.preventDefault(); // Prevent the form from being submitted
            }
        });
    });
</script>






<!-- 

<script>
// Function to convert Arabic numerals to Bengali numerals
function convertToBengaliNumber(arabicNumber) {
    const arabicNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    const bengaliNumbers = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];

    return arabicNumber.replace(/[\d]/g, (match) => bengaliNumbers[arabicNumbers.indexOf(match)]);
}

let paymentOptions = {
    '1 Biodata 145 Tk': 145,
    '2 Biodata 270 Tk': 270,
    '3 Biodata 375 Tk': 375,
    '4 Biodata 460 Tk': 460,
    '5 Biodata 525 Tk': 525,
    '10 Biodata 990 Tk': 990
};

let paymentMessageElement = document.querySelector('#payment-message');
let paymentAmountElement = document.querySelector('#payment-amount');
let errorMessageElement = document.querySelector('#error-message');

const radioButtons = document.querySelectorAll('input[name="biodata_quantities"]');

radioButtons.forEach((radioButton) => {
    radioButton.addEventListener('change', function () {
        let paymentAmount = paymentOptions[this.value];
        let bengaliAmount = convertToBengaliNumber(paymentAmount.toString());
        paymentAmountElement.innerText = bengaliAmount;
        paymentMessageElement.style.display = 'block';
        errorMessageElement.style.display = 'none';
    });
});

// Add a submit event listener to check if an option is selected
document.querySelector('form').addEventListener('submit', function (e) {
    let selectedOption = document.querySelector('input[name="biodata_quantities"]:checked');
    if (!selectedOption) {
        errorMessageElement.style.display = 'block';
        e.preventDefault();
    }
});
</script> -->





<script>
  document.getElementById("back-btn").addEventListener("click", function() {
    // This code ensures that the "Back Choice Page" button works
    // and navigates to the choice page without form validation.
    // You can add any additional logic as needed.
    window.location.href = "choice_list.php";
});

  function validateForm() {
  var name = document.getElementById("cust_name").value.trim();
  var email = document.getElementById("cust_email").value.trim();
  var phone = document.getElementById("pnumber").value.trim();
  var address = document.getElementById("permanent_address").value.trim();
  var biodata = document.getElementById("contact_biodatas_number").value.trim();



  var nameError = document.getElementById("name-error");
  var emailError = document.getElementById("email-error");
  var phoneError = document.getElementById("phone-error");
  var addressError = document.getElementById("address-error");
  var biodataError = document.getElementById("biodata-error");


  // Validate name



//Full Name validation
        if (name == "") {
        document.getElementById('cust_name').style.borderColor = "red";
        document.getElementById('cust_name').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        var errorDiv = document.getElementById('name-error');
        errorDiv.innerHTML = "উফফ! আপনার পুরো নাম লিখুন।";
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
        document.getElementById('cust_name').style.borderColor = "green";
        document.getElementById('name-error').innerHTML = "";
      }






          
      //Email validation
      if (email == "") {
        document.getElementById('cust_email').style.borderColor = "red";
        document.getElementById('cust_email').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        var errorDiv = document.getElementById('email-error');
        errorDiv.innerHTML = "উফফ! আপনার ই-মেইল লিখুন।";
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
      }else if(! /^[a-zA-Z0-9._-]+@(gmail|outlook|hotmail|yahoo).com$/.test(email)){
        document.getElementById('cust_email').style.borderColor = "red";
        document.getElementById('cust_email').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        var errorDiv = document.getElementById('email-error');
        errorDiv.innerHTML = "উফফ! একটি বৈধ ই-মেইল প্রবেশ করুন। শুধুমাত্র ব্যবহার করতে পারবেন: @gmail, @outlook, @hotmail, @yahoo (.com)";
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
        document.getElementById('cust_email').style.borderColor = "green";
        document.getElementById('email-error').innerHTML = "";
      }





        //Phone number validation
        if (phone == "") {
        document.getElementById('pnumber').style.borderColor = "red";
        document.getElementById('pnumber').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        var errorDiv = document.getElementById('phone-error');
        errorDiv.innerHTML = "উফফ! আপনার মোবাইল নাম্বার লিখুন।";
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
        // } else if (!/^[0-9]{10,13}$/.test(pnumber)) {
        }else if(pnumber.length < 10 || pnumber.length > 14){
          document.getElementById('pnumber').style.borderColor = "red";
          document.getElementById('phone-error').innerHTML = "মোবাইল নাম্বার ১০ থেকে ১৪ ডিজিটের মধ্যে হতে হবে। স্পেস এবং প্লাস চিহ্ন ব্যবহার করবেন না।";
          document.getElementById('pnumber').scrollIntoView({
            behavior: 'smooth',
            block: 'center',
        });

        // Change color multiple times
        var colors = ['green', 'blue', 'red'];
        var colorIndex = 0;
        setInterval(function() {
          errorDiv.style.color = colors[colorIndex];
          colorIndex = (colorIndex + 1) % colors.length;
        }, 500);

        return false;
        }else{
          document.getElementById('pnumber').style.borderColor = "green";
          document.getElementById('phone-error').innerHTML = "";
        }









  // Validate address
  if (address == "") {
        document.getElementById('permanent_address').style.borderColor = "red";
        document.getElementById('permanent_address').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

  var errorDiv = document.getElementById('address-error');
  errorDiv.innerHTML = "উফফ! আপনার জেলা সহ স্থায়ী ঠিকানা লিখুন।";
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
        document.getElementById('permanent_address').style.borderColor = "green";
        document.getElementById('address-error').innerHTML = "";
      }



  // Validate biodata
  if (biodata == "") {
        document.getElementById('contact_biodatas_number').style.borderColor = "red";
        document.getElementById('contact_biodatas_number').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

  var errorDiv = document.getElementById('biodata-error');
  errorDiv.innerHTML = "উফফ! আপনার পছন্দের বায়োডাটার সাথে যোগাযোগ করতে বায়োডাটার প্রোফাইলে প্রবেশ করুন।";
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
        document.getElementById('contact_biodatas_number').style.borderColor = "green";
        document.getElementById('biodata-error').innerHTML = "";
      }






    // var selectedBiodataQuantities = document.querySelector('input[name="biodata_quantities"]:checked');
    var selectedPaymentMethod = document.querySelector('input[name="payment_method"]:checked');

    // Check if a biodata quantity is selected
    // if (!selectedBiodataQuantities) {
    //     document.getElementById('error-message').style.display = 'block';
    //     return false;
    // } else {
    //     document.getElementById('error-message').style.display = 'none';
    // }

    // Check if a payment method is selected
    if (!selectedPaymentMethod) {
        document.getElementById('payment-method-error').style.display = 'block';
        document.getElementById('payment-border-error').style.borderColor = "red";
        document.getElementById('payment-method-error').scrollIntoView({
        behavior: 'smooth',
        block: 'center',
        });

        var errorDiv = document.getElementById('payment-method-error');
        errorDiv.innerHTML = "উফফ! আপনার পেমেন্ট অপশন সিলেক্ট করুন।";
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
    } else {
        document.getElementById('payment-method-error').style.display = 'none';
        document.getElementById('payment-border-error').style.borderColor = "green";
    }

    

    

// Function to continuously change the error message color
function continuouslyChangeColor(element, message) {
  var colors = ['green', 'blue', 'red']; // Define a list of colors to cycle through
  var index = 0; // Initial color index

  element.innerText = message;
  element.style.display = 'block';

  // Function to change the color and schedule the next change
  function changeColor() {
    element.style.color = colors[index];
    index = (index + 1) % colors.length; // Cycle through colors

    // Schedule the next color change after a delay
    setTimeout(changeColor, 1000); // Adjust the duration for each color
  }

  // Start the color change loop
  changeColor();
}




// Determine which payment method is selected and validate the corresponding input fields
if (selectedPaymentMethod.value === 'bkash') {
  document.getElementById('bkash_number').style.borderColor = "red";
        document.getElementById('bkash_number').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        document.getElementById('bkash_trxid').style.borderColor = "red";
        document.getElementById('bkash_trxid').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

  var bkashNumber = document.getElementById('bkash_number').value;
  var bkashTrxId = document.getElementById('bkash_trxid').value;

  // Check if the input fields for the selected payment method are empty
  if (bkashNumber.trim() === '') {
    continuouslyChangeColor(document.getElementById('bkashnumber-error'), 'উফফ! আপনার বিকাশ নাম্বার লিখুন।');
    return false;
  } else {
    // document.getElementById('bkashnumber-error').style.display = 'none';
    document.getElementById('bkash_number').style.borderColor = "green";
    document.getElementById('bkashnumber-error').innerHTML = "";
  }
  if (bkashTrxId.trim() === '') {
    continuouslyChangeColor(document.getElementById('bkash-error'), 'উফফ! আপনার বিকাশ TrxId লিখুন।');
    return false;
  } else {
    // document.getElementById('bkash-error').style.display = 'none';
    document.getElementById('bkash_trxid').style.borderColor = "green";
    document.getElementById('bkash-error').innerHTML = "";
  }
}


    
    
  else if (selectedPaymentMethod.value === 'nagad') {
    document.getElementById('nagad_number').style.borderColor = "red";
        document.getElementById('nagad_number').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        document.getElementById('nagad_trxid').style.borderColor = "red";
        document.getElementById('nagad_trxid').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

  var nagadNumber = document.getElementById('nagad_number').value;
  var nagadTrxId = document.getElementById('nagad_trxid').value;

  // Check if the input fields for the selected payment method are empty
  if (nagadNumber.trim() === '') {
    continuouslyChangeColor(document.getElementById('nagadnumber-error'), 'উফফ! আপনার নগদ নাম্বার লিখুন।');
    return false;
  } else {
    // document.getElementById('nagadnumber-error').style.display = 'none';
    document.getElementById('nagad_number').style.borderColor = "green";
    document.getElementById('nagadnumber-error').innerHTML = "";

  }
  if (nagadTrxId.trim() === '') {
    continuouslyChangeColor(document.getElementById('nagad-error'), 'উফফ! আপনার নগদ TxnId লিখুন।');
    return false;
  } else {
    // document.getElementById('nagad-error').style.display = 'none';
    document.getElementById('nagad_trxid').style.borderColor = "green";
    document.getElementById('nagad-error').innerHTML = "";

  }
} 
    
    
    
    
    else if (selectedPaymentMethod.value === 'roket') {
      document.getElementById('roket_number').style.borderColor = "red";
        document.getElementById('roket_number').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

        document.getElementById('roket_trxid').style.borderColor = "red";
        document.getElementById('roket_trxid').scrollIntoView({
          behavior: 'smooth',
          block: 'center',
        });

  var roketNumber = document.getElementById('roket_number').value;
  var roketTrxId = document.getElementById('roket_trxid').value;

  // Check if the input fields for the selected payment method are empty
  if (roketNumber.trim() === '') {
    continuouslyChangeColor(document.getElementById('roketnumber-error'), 'উফফ! আপনার রকেট নাম্বার লিখুন।');
    return false;
  } else {
    // document.getElementById('roketnumber-error').style.display = 'none';
    document.getElementById('roket_number').style.borderColor = "green";
    document.getElementById('roketnumber-error').innerHTML = "";

  }
  if (roketTrxId.trim() === '') {
    continuouslyChangeColor(document.getElementById('roket-error'), 'উফফ! আপনার রকেট TxnId লিখুন।');
    return false;
  } else {
    // document.getElementById('roket-error').style.display = 'none';
    document.getElementById('roket_trxid').style.borderColor = "green";
    document.getElementById('roket-error').innerHTML = "";

  }
  }

    // You can add additional validation logic here if needed.

    return true; // Form will be submitted if all conditions are met.
}
  </script>






<script> 
function showSuccessMessage() {
  // Show the overlay
  document.querySelector('.overlay').style.display = 'block';

  // Show the popup message
  var popup = document.querySelector('.popup-message');
  popup.style.display = 'block';

  // Set the message text
  popup.querySelector('h3').innerHTML = 'ধন্যবাদ!';
  popup.querySelector('p').innerHTML = 'আপনার তথ্য সফলভাবে জমা হয়েছে। পেমেন্ট তথ্য যাচাই বাছাইয়ের পর ২৪ ঘন্টার মধ্যে যোগাযোগের কাঙ্ক্ষিত তথ্য আপনার নাম্বারে অথবা ইমেইল পাঠিয়ে দেয়া হবে।';


  // Add a close button to the popup message
  var closeButton = document.createElement('button');
  closeButton.innerHTML = 'ঠিক আছে';
  closeButton.classList.add('close-button');
  popup.appendChild(closeButton);

  // Hide the popup and overlay when the close button is clicked
  closeButton.addEventListener('click', function() {
    popup.style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
  });
}

// Change the form submission code to the following
$('form[name="myForm"]').submit(function(e) {
  e.preventDefault(); // Prevent the default form submission

  if (validateForm()) {
    // Submit the form data using AJAX
    $.ajax({
      url: 'contactbiodata.php', // Replace this with the URL of your server-side script
      type: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        // Show the success message
        showSuccessMessage();

        // Clear the form
        $('form[name="myForm"]')[0].reset();
      },
      error: function(jqXHR, textStatus, errorThrown) {
        // Handle errors here
      }
    });
  }
});
</script>


<script>
const nextBtn = document.querySelector('.next-btn');
const paymentForm = document.querySelector('.payment-form');

nextBtn.addEventListener('click', () => {
  paymentForm.style.display = 'block';
});
</script>


<style>

.shosurbari-biodata form{
  margin-left: auto;
  margin-right: auto;
  margin-bottom: auto;
  margin-top: 0px;
}

.form-actions button{
  display: block;
  margin: 25px auto 0px auto;
  width: 100%;
  color: #fff;
  border: 1px solid #ccc;
  padding: 6px;
  border-radius: 4px;
  background: #06b6d4;
  cursor: pointer;
  position: relative;
  transition: all .2s ease;
  white-space: nowrap;
  font-size: 0.60em;
  height: 40px;
  line-height: 27px;
}

.form-actions button:hover{
  color: #fff;
  background: #0aa4ca;
}

.flex-container{
  padding-top: 50px;
  padding-bottom: 50px;
}

@media(max-width: 930px){
  .flex-container{
    display: block;
  }
}
</style>


  <!--=======================================
  How Many Visitors View This Page.
  This Script Connected to get_view_count.php
  and page_views Database Table
  ========================================-->
  <script>
  $(document).ready(function() {
  // Define an array of page names (without the .php extension)
  var pages = ["contactbiodata"];

  // Fetch and display view counts for each page
  for (var i = 0; i < pages.length; i++) {
    var page = pages[i];
    $.ajax({
    url: 'get_view_count.php?page=' + page, // Adjust the URL to your PHP script
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

</body>
</html>	
