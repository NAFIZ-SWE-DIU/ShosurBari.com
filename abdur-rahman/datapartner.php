<?php
include_once("includes/basic_includes.php");
include_once("functions.php");
require_once("includes/dbconn.php");
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
  <title>Partner-Admin | ShosurBari</title>
</head>
<body>
  <!-- ====== Admin Panel Navigation Bar ====== -->
  <?php include("admin_navigation.php"); ?>
  <!-- ========================================= -->
  <?php
  echo '<style>
  h1{
    padding: 10px 0;
    padding-top:120px;
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
    min-width: 2500px;
    padding: 20px;
    border: 2px solid #f0f0f0;
    margin-bottom: 20px;
  }  
  th, td {
    border: 2px solid #f0f0f0;
    padding: 8px;
    text-align: center;
  }
  th {
    background-color: #00c292;
    color: white;
    border: 2px solid #ccc;
  }
  tr:hover {
    background-color: #ddd;
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
    max-height: 90vh;
    width: 90%;
    margin: auto;
  }
  .table-wrapper {
    overflow: hidden;
    margin: 20px auto 0px auto;
    width: 90%;
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
  .pagination{
    display: block;
    padding: 0;
    list-style: none;
    width: 90%;
    margin: 50px auto 120px auto;
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
  require_once("includes/dbconn.php");
  // Number of profiles to display per page
  $profilesPerPage = isset($_GET['per_page']) ? intval($_GET['per_page']) : 25;
  $limit = ($profilesPerPage == 'all') ? '' : "LIMIT $profilesPerPage";
  // Pagination variables
  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  $start = ($page - 1) * $profilesPerPage;
  // Execute the SQL query to count the total number of user profiles
  $sql = "SELECT COUNT(DISTINCT user_id) AS user_count FROM 9bd_expected_life_partner";
  $result = $conn->query($sql);
  // Check if the query was successful
  if ($result) {
    $row = $result->fetch_assoc();
    $userCount = $row["user_count"];
  } else {
    echo "Error: " . $conn->error;
  }
  // Fetch user data from the database with pagination
  $sql = "SELECT * FROM 9bd_expected_life_partner $limit OFFSET $start";
  $result = mysqli_query($conn, $sql);
    echo "<h1>প্রত্যাশিত জীবনসঙ্গীর বিবরণ</h1>";
    echo '<div class="table-wrapper">';
      echo "<h3>সর্বমোট পোস্ট করেছে: " . $userCount . "</h3>";
      echo '<div id="search-form">
        <form method="POST">
          <input type="text" id="search-user-id" name="search-user-id" placeholder="বায়োডাটা নং" required>
          <button class="search-admin" type="submit" name="search">Search</button>
          <button class="search-clear-admin" type="submit" name="clear" >Clear Search</button></br>
        </form>
        <form method="GET">
          <label for="per-page" style="margin-top: 20px;">প্রতি পেজে কয়টি প্রোফাইল দেখতে চান</label>
          <select id="per-page" name="per_page" onchange="updateProfilesPerPage()">
            <option value="">.....??</option>
            <option value="50" ' . ($profilesPerPage == 50 ? 'selected' : '') . '>50</option>
            <option value="100" ' . ($profilesPerPage == 100 ? 'selected' : '') . '>100</option>
            <option value="500" ' . ($profilesPerPage == 500 ? 'selected' : '') . '>500</option>
            <option value="1000" ' . ($profilesPerPage == 1000 ? 'selected' : '') . '>1000</option>
            <option value="10000" ' . ($profilesPerPage == 10000 ? 'selected' : '') . '>10000</option>
            <option value="20000" ' . ($profilesPerPage == 20000 ? 'selected' : '') . '>20000</option>
          </select>
        </form>
      </div>';
      echo '</div>'; // Close the table-wrapper div
      if (isset($_POST['search'])) {
        $searchUserId = mysqli_real_escape_string($conn, $_POST['search-user-id']);
        $sql = "SELECT * FROM 9bd_expected_life_partner WHERE user_id = $searchUserId $limit";
        $result = mysqli_query($conn, $sql);
      }
      if (mysqli_num_rows($result) > 0) {
      echo '<div class="table-container">';
      echo '<table>';
        echo '<tr>
        <th>বায়োডাটা নং</th>
        <th> নাগরিকত্ব/সিটিজেনশিপ কোন দেশ আশা করেন</th>
        <th>জীবনসঙ্গী যেই জেলার আশা করেন</th>
        <th>জীবনসঙ্গীর বৈবাহিক অবস্থা আশা করেন</th>
        <th>জীবনসঙ্গীর বয়স যেমনটা আশা করেন</th>
        <th>জীবনসঙ্গীর গাত্র বর্ণ আশা করেন</th>
        <th>জীবনসঙ্গীর উচ্চতা আশা করেন</th>
        <th>জীবনসঙ্গীর শিক্ষাগত যোগ্যতা আশা করেন</th>
        <th>জীবনসঙ্গীর পেশা আশা করেন</th>
        <th>জীবনসঙ্গীর অর্থনৈতিক অবস্থা আশা করেন</th>
        <th>জীবনসঙ্গীর বৈশিষ্ঠ ও গুণাবলী আশা করেন</th>
        <th>পরিবারের অনুমতি নিয়ে বায়োডাটা জমা দিচ্ছেন?</th>
        <th>সৃষ্টিকর্তার শপথ করে সাক্ষ্য দিন, তথ্যগুলো সব সত্য?</th>
        <th>মিথ্যা তথ্য প্রদান করলে দায়ভার কর্তৃপক্ষ নিবে না। আপনি কি সম্মত?</th>
        <th>তারিখ সময়</th>
        <th>ডাটা ইডিট</th>
        </tr>';
        $query = "SELECT * FROM users";
        $deactivatedResult = mysqli_query($conn, $query);
        $deactivatedUsers = array();
        while ($deactivatedRow = mysqli_fetch_assoc($deactivatedResult)) {
            if ($deactivatedRow['deactivated'] == 1) {
                $deactivatedUsers[] = $deactivatedRow['id'];
            }
        }
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
        $count++;
        if ($profilesPerPage !== 'all' && $count > $profilesPerPage) {
          // Hide profiles beyond the selected per page limit
          continue;
        }
        echo '<tr';
        if (in_array($row['user_id'], $deactivatedUsers)) {
          echo ' style="background: #ff0080; color: #fff;"';
        }
        echo '>';
        echo '<td><a target="_blank" href="../profile.php?/Biodata=' . $row['user_id'] . '">' . $row['user_id'] .  " " . "View" . '</a></td>';
        echo '<td>' . $row['partner_citizen'] . '</td>';
        echo '<td>' . $row['partner_district'] . '</td>';
        echo '<td>' . $row['partner_maritialstatus'] . '</td>';
        echo '<td>' . $row['partner_age'] . '</td>';
        echo '<td>' . $row['partner_skintones'] . '</td>';
        echo '<td>' . $row['partner_height'] . '</td>';
        echo '<td>' . $row['partner_education'] . '</td>';
        echo '<td>' . $row['partner_profession'] . '</td>';
        echo '<td>' . $row['partner_financial'] . '</td>';
        echo '<td>' . $row['partner_attributes'] . '</td>';
        echo '<td>' . $row['parents_permission'] . '</td>';
        echo '<td>' . $row['real_info_commited'] . '</td>';
        echo '<td>' . $row['authorities_no_responsible'] . '</td>';
        echo '<td>' . $row['profilecreationdate'] . '</td>';
        echo '<td><a target="_blank" href="edit_partner.php?id=' . $row['user_id'] . '">Edit</a></td>';
        echo '</tr>';
        }
      echo '</table>';
      echo '</div>'; // Close the table-container div
      // Calculate the total number of pages
      $total_pages = ceil($userCount / $profilesPerPage);
      // Define how many pages to show before and after the current page
      $pages_to_show = 1;
    // Pagination links
    echo "<div class='pagination'>";
      if ($total_pages > 1) {
      if ($page > 1) {
      echo "<a href='?page=" . ($page - 1) . "&per_page=$profilesPerPage' class='page-link'><i class='fa fa-angle-double-left'></i></a>";
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
      echo "<a href='?page=" . ($page + 1) . "&per_page=$profilesPerPage' class='page-link'><i class='fa fa-angle-double-right'></i></a>";
      }
      }
      echo "</div>";
      } else {
        echo 'No users found.';
      }
  mysqli_close($conn);
  ?>
  <script>
  function updateProfilesPerPage() {
    const perPageSelect = document.getElementById('per-page');
    const selectedValue = perPageSelect.value;
    window.location.href = `?per_page=${selectedValue}`;
  }
  </script>
  <!-- ===== Admin Panel Footer Area ===== -->
  <?php include("admin_footer.php"); ?>
  <!-- =================================== -->
</body>
</html>