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
    <title>Admin - Customer | ShosurBari</title>
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

echo '<style>
h1{
  padding: 10px 0;
  margin: 150px auto 0px auto;
  text-align: center;
  font-size: 35px;
  color: #00c292;
}

h3{
  padding: 10px 0;
  margin: 20px auto 0px auto;
  font-size: 25px;
  color: #00c292;
}
    table {
        border-collapse: collapse;
        width: 100%;
        padding: 20px;
        border: 2px solid #00c292;
        margin-bottom: 20px;
    }
    
    th, td {
        border: 2px solid #00c292;
        padding: 8px;
        text-align: center;
    }
    
    th {
        background-color: #00c292;
        color: white;
        border: 2px solid #ccc;
    }

    #search-form {
        margin-bottom: 20px;
    }

    form{
        margin-left: 0px;
        margin-top: 0px;
        padding: 10px 0px;
    }

    label {
        font-size: 16px;
        color: #00c292;
    }

    .input-group input[type="text"], select {
      font-size: 17px;
      width: 110px;
    }

    .table-container {
        padding: 0 20px;
        border: 10px solid #00c292;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    .table-wrapper {
      overflow: hidden;
      width: 3080px;
      margin: auto;
    }

    .table-wrapper table {
        border-collapse: collapse;
        width: 100%;
        padding: 20px;
        border: 2px solid #00c292;
        border-radius: 10px;
        margin-bottom: 20px;
        margin-top: -30px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    /* Progress bar styling */
    .progress-container {
        height: 8px;
        background-color: #ddd;
    }

    .progress-bar {
        height: 100%;
        width: 100%;
        background-color: #00c292;
    }

    .pagination{
      display: inline-block;
      margin-top: 30px;
      margin-bottom: 30px;
      margin-left:  auto;
      margin-right: auto;
      padding: 0;
      list-style: none;
      align-items: center;
      justify-content:center;
    }
    
    .page-link{
      color: #000;
      padding: 8px 12px;
      text-decoration: none;
      font-size: 14px;
      background-color: #eee;
      border-radius: 50%;
      margin: 0 3px;
    }
    
    .page-link:hover{
        background: #00c292;
      color: #fff;
    }
    
    .page-link.active{
      background: #00c292;
      color: #fff;
    }
</style>';



// Include the database connection code from datalifestyle.php
require_once("includes/dbconn.php");

// Number of profiles to display per page
$profilesPerPage = isset($_GET['per_page']) ? intval($_GET['per_page']) : 2;
$limit = ($profilesPerPage == 'all') ? '' : "LIMIT $profilesPerPage";

// Pagination variables
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $profilesPerPage;

// Execute the SQL query to count the total number of user profiles
$sql = "SELECT COUNT(*) AS user_count FROM customer";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $userCount = $row["user_count"];
} else {
    echo "Error: " . mysqli_error($conn);
}

echo '<div class="table-container">';
echo "<h1>কাস্টমার ও পেমেন্ট</h1>";

echo '<div class="table-wrapper">';
echo "<h3>Total number of user profiles: " . $userCount . "</h3>";

echo '<div id="search-form">
<form method="POST">
    <input type="text" id="search-user-id" name="search-user-id" placeholder="Search Customer ID">
    <button class="search-admin" type="submit" name="search">Search</button>

    <select style="margin-top: 20px;" name="search-criteria" id="search-criteria">
        <option value="cust_email">User Email</option>
        <option value="cust_name">Name</option>
        <option value="cust_number">Phone Number</option>
    </select>

    <input type="text" id="search-keyword" name="search-keyword" placeholder="Email / Name / Number">

    <button class="search-admin" type="submit" name="search">Search</button>
    <button class="search-clear-admin" type="submit" name="clear">Clear Search</button></br>
    
    <label for="per-page" style="margin-top: 20px;">Profiles Show</label>
    <select name="per_page" id="per-page" onchange="this.form.submit()">
        <option value=""> </option>
        <option value="10" ' . ($profilesPerPage == 10 ? 'selected' : '') . '>10</option>
        <option value="50" ' . ($profilesPerPage == 50 ? 'selected' : '') . '>50</option>
        <option value="100" ' . ($profilesPerPage == 100 ? 'selected' : '') . '>100</option>
        <option value="500" ' . ($profilesPerPage == 500 ? 'selected' : '') . '>500</option>
        <option value="1000" ' . ($profilesPerPage == 1000 ? 'selected' : '') . '>1000</option>
        <option value="10000" ' . ($profilesPerPage == 10000 ? 'selected' : '') . '>10000</option>
    </select>
</form>
</div>';

$searchUserId = isset($_POST['search-user-id']) ? $_POST['search-user-id'] : '';
$searchCriteria = isset($_POST['search-criteria']) ? $_POST['search-criteria'] : '';
$searchKeyword = isset($_POST['search-keyword']) ? mysqli_real_escape_string($conn, $_POST['search-keyword']) : '';

if (!empty($searchKeyword)) {
    if ($searchCriteria == 'cust_email') {
        $sql = "SELECT * FROM customer WHERE cust_email LIKE '%$searchKeyword%' $limit";
    } elseif ($searchCriteria == 'cust_name') {
        $sql = "SELECT * FROM customer WHERE cust_name LIKE '%$searchKeyword%' $limit";
      } elseif ($searchCriteria == 'cust_number') {
        // Remove non-numeric characters from the search keyword
        $searchKeyword = preg_replace("/[^0-9]/", "", $searchKeyword);
        $sql = "SELECT * FROM customer WHERE REPLACE(cust_number, ' ', '') LIKE '%$searchKeyword%' $limit";
    }
    
} elseif (!empty($searchUserId)) {
    $searchUserId = mysqli_real_escape_string($conn, $searchUserId);
    $sql = "SELECT * FROM customer WHERE id_customer = $searchUserId $limit";
} else {
  $sql = "SELECT * FROM customer ORDER BY id_customer DESC $limit OFFSET $start";
}

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // Display user data
    echo "<table>";
    echo '<tr>
    <th>অর্ডার আইডি</th>
    <th>রেজিস্টার ইউজার /</br> বায়োডাটা নং</th>
    <th>কাস্টমার নাম</th>
    <th>কাস্টমার মোবাইল নম্বর</th>
    <th>কাস্টমার ইমেইল</th>
    <th>কাস্টমার স্থায়ী ঠিকানা</th>
    <th>রিকোয়েস্ট বায়োডাটা</th>
    <th>কয়টি বায়োডাটা</th>
    <th>মোট টাকা</th>
    <th>পেমেন্ট মেথড</th>
    <th>বিকাশ নাম্বার</th>
    <th>বিকাশ ট্রানজেকশন আইডি</th>
    <th>নগদ নাম্বার</th>
    <th>নগদ ট্রানজেকশন আইডি</th>
    <th>রকেট নাম্বার</th>
    <th>রকেট ট্রানজেকশন আইডি</th>
    <th>Status</th>
    <th>Active Status</th>
    <th>তারিখ সময়</th>
</tr>';
    while ($row = mysqli_fetch_assoc($result)) {
      // Determine and set the CSS class based on the status
      $statusClass = '';
      if ($row['processing'] == 1) {
          $statusClass = 'processing';
      } elseif ($row['sent'] == 1) {
          $statusClass = 'sent';
      } elseif ($row['cancel'] == 1) {
          $statusClass = 'cancel';
      } else {
          $statusClass = 'unknown';
      }

      echo '<tr class="' . $statusClass . '">';
      echo '<td>' . $row['id_customer'] . '</td>';
      echo '<td>' . $row['user_id'] . '</td>';
      echo '<td>' . $row['cust_name'] . '</td>';
      echo '<td>' . $row['cust_number'] . '</td>';
      echo '<td>' . $row['cust_email'] . '</td>';
      echo '<td>' . $row['cust_permanent_address'] . '</td>';
      echo '<td>' . $row['request_biodata_number'] . '</td>';
      echo '<td>' . $row['biodata_quantities'] . '</td>';
      echo '<td>' . $row['total_fee'] . '</td>';
      echo '<td>' . $row['payment_method'] . '</td>';
      echo '<td>' . $row['bkash_number'] . '</td>';
      echo '<td>' . $row['bkash_transaction_id'] . '</td>';
      echo '<td>' . $row['nagad_number'] . '</td>';
      echo '<td>' . $row['nagad_transaction_id'] . '</td>';
      echo '<td>' . $row['roket_number'] . '</td>';
      echo '<td>' . $row['roket_transaction_id'] . '</td>';
      
      echo '<td>';
      echo '<form action="update_status.php" method="post">'; // Specify the correct action and method
      echo '<input type="hidden" name="customer_id" value="' . $row['id_customer'] . '">'; // Include a hidden input for the customer ID
      echo '<select name="new_status">';
      echo '<option value="processing">Processing</option>';
      echo '<option value="sent">Sent</option>';
      echo '<option value="cancel">Cancel</option>';
      echo '</select>';
      echo '<input type="submit" value="Update">';
      echo '</form>';
      echo '</td>';
      
      echo '<td>';
      if ($row['processing'] == 1) {
          echo 'Processing';
      } elseif ($row['sent'] == 1) {
          echo 'Sent';
      } elseif ($row['cancel'] == 1) {
          echo 'Cancel';
      } else {
          echo 'Unknown Status';
      }
      echo '</td>';

      echo '<td>' . $row['request_date'] . '</td>';
      echo '</tr>';
    }
    
    echo '</table>';

    // Progress bar at the bottom
    echo '<div class="progress-container">
    <div class="progress-bar"></div>
    </div>';

    

    // Calculate the total number of pages
    $total_pages = ceil($userCount / $profilesPerPage);

    // Define how many pages to show before and after the current page
    $pages_to_show = 1; // You can adjust this number as needed

    // Pagination links
    echo "<div class='pagination'>";
    if ($total_pages > 1) {
        if ($page > 1) {
            echo "<a href='?page=" . ($page - 1) . "&per_page=$profilesPerPage' class='page-link'>Previous</a>";
        }

        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == 1 || $i == $total_pages || ($i >= $page - $pages_to_show && $i <= $page + $pages_to_show)) {
                $active = $i == $page ? "active" : "";
                echo "<a href='?page=$i&per_page=$profilesPerPage' class='page-link $active'>$i</a>";
            } elseif ($i == $page - $pages_to_show - 1 || $i == $page + $pages_to_show + 1) {
                // Add "dot dot" nodes
                echo "<span class='page-link'>...</span>";
            }
        }

        if ($page < $total_pages) {
            echo "<a href='?page=" . ($page + 1) . "&per_page=$profilesPerPage' class='page-link'>Next</a>";
        }
    }
    echo "</div>";
} else {
    echo 'No users found.';
}

echo '</div>'; // Close the table-wrapper div
echo '</div>'; // Close the table-container div

mysqli_close($conn);
?>





<script>
function updateProfilesPerPage() {
    const perPageSelect = document.getElementById('per-page');
    const selectedValue = perPageSelect.value;
    window.location.href = `?per_page=${selectedValue}`;
}
</script>


<style>
tr.processing {
    background-color: orange;
}

tr.sent {
    background-color: green;
}

tr.cancel {
    background-color: red;
}

tr.unknown {
    background-color: lightgray;
}

</style>
 


<!-- ===== Admin Panel Footer Area ===== -->
<?php include("admin_footer.php"); ?>
<!-- =================================== -->


</body>

</html>