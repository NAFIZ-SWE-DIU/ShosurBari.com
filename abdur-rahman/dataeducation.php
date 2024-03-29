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
  <title>Education-Admin | ShosurBari</title>
</head>
<body>
  <!-- ====== Admin Panel Navigation Bar ====== -->
  <?php include("admin_navigation.php"); ?>
  <!-- ========================================= -->
  <?php
  echo '<style>
  @media (max-width:990px){
    h1{
      margin-top: -100px;
    }
    }
  h1{
    padding: 170px 0 10px 0;
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
  //Count the total number of user profiles
  $sql = "SELECT COUNT(DISTINCT user_id) AS user_count FROM 3bd_secondaryedu_method";
  $result = $conn->query($sql);
  if ($result) {
    $row = $result->fetch_assoc();
    $userCount = $row["user_count"];
  } else {
    echo "Error: " . $conn->error;
  }
  $sql = "SELECT
    s.user_id,
    s.scndry_edu_method,
    s.maxedu_qulfctn,
    s.gnrl_mdrs_secondary_pass,
    s.gnrl_mdrs_secondary_pass_year,
    s.gnrl_mdrs_secondary_end_year,
    s.gnrlmdrs_secondary_running_std,
    s.profilecreationdate,
    h.higher_secondary_edu_method,
    h.gnrlmdrs_hrsecondary_pass,
    h.gnrlmdrs_hrsecondary_pass_year,
    h.gnrlmdrs_hrsecondary_exam_year,
    h.gnrlmdrs_hrsecondary_group,
    h.gnrlmdrs_hrsecondary_rningstd,
    h.diploma_hrsecondary_pass,
    h.diploma_hrsecondary_pass_year,
    h.diploma_hrsecondary_sub,
    h.diploma_hrsecondary_endingyear,
    u.varsity_edu_method,
    u.uvarsity_pass,
    u.varsity_passing_year,
    u.university_subject,
    u.varsity_ending_year,
    u.uvarsity_name,
    u.others_edu_qualification,
    k.qawmi_madrasa_hafez,
    k.qawmimadrasa_dawrapass,
    k.kowmi_dawrapas_year,
    k.kowmi_current_edu_level
  FROM 3bd_secondaryedu_method AS s
  LEFT JOIN 3bd_higher_secondaryedu_method AS h ON s.user_id = h.user_id
  LEFT JOIN 3bd_universityedu_method AS u ON s.user_id = u.user_id
  LEFT JOIN 3bd_kowmi_madrasaedu_method AS k ON s.user_id = k.user_id
  $limit OFFSET $start";
  $result = $conn->query($sql);
    echo "<h1>শিক্ষাগত যোগ্যতা</h1>";
    echo '<div class="table-wrapper">';
      echo "<h3>সর্বমোট পোস্ট করেছে: " . $userCount . "</h3>";
      echo '<div id="search-form">
        <form method="POST">
          <input type="text" id="search-user-id" name="search-user-id" placeholder="বায়োডাটা নং"  required>
          <button class="search-admin" type="submit" name="search">Search</button>
          <button class="search-clear-admin" type="submit" name="clear">Clear Search</button></br>
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
      $sql = "SELECT
        s.user_id,
        s.scndry_edu_method,
        s.maxedu_qulfctn,
        s.gnrl_mdrs_secondary_pass,
        s.gnrl_mdrs_secondary_pass_year,
        s.gnrl_mdrs_secondary_end_year,
        s.gnrlmdrs_secondary_running_std,
        s.profilecreationdate,
        h.higher_secondary_edu_method,
        h.gnrlmdrs_hrsecondary_pass,
        h.gnrlmdrs_hrsecondary_pass_year,
        h.gnrlmdrs_hrsecondary_exam_year,
        h.gnrlmdrs_hrsecondary_group,
        h.gnrlmdrs_hrsecondary_rningstd,
        h.diploma_hrsecondary_pass,
        h.diploma_hrsecondary_pass_year,
        h.diploma_hrsecondary_sub,
        h.diploma_hrsecondary_endingyear,
        u.varsity_edu_method,
        u.uvarsity_pass,
        u.varsity_passing_year,
        u.university_subject,
        u.varsity_ending_year,
        u.uvarsity_name,
        u.others_edu_qualification,
        k.qawmi_madrasa_hafez,
        k.qawmimadrasa_dawrapass,
        k.kowmi_dawrapas_year,
        k.kowmi_current_edu_level
      FROM 3bd_secondaryedu_method AS s
      LEFT JOIN 3bd_higher_secondaryedu_method AS h ON s.user_id = h.user_id
      LEFT JOIN 3bd_universityedu_method AS u ON s.user_id = u.user_id
      LEFT JOIN 3bd_kowmi_madrasaedu_method AS k ON s.user_id = k.user_id
      WHERE s.user_id = $searchUserId
      ORDER BY s.user_id DESC $limit OFFSET $start";
      } else {
      $sql = "SELECT
        s.user_id,
        s.scndry_edu_method,
        s.maxedu_qulfctn,
        s.gnrl_mdrs_secondary_pass,
        s.gnrl_mdrs_secondary_pass_year,
        s.gnrl_mdrs_secondary_end_year,
        s.gnrlmdrs_secondary_running_std,
        s.profilecreationdate,
        h.higher_secondary_edu_method,
        h.gnrlmdrs_hrsecondary_pass,
        h.gnrlmdrs_hrsecondary_pass_year,
        h.gnrlmdrs_hrsecondary_exam_year,
        h.gnrlmdrs_hrsecondary_group,
        h.gnrlmdrs_hrsecondary_rningstd,
        h.diploma_hrsecondary_pass,
        h.diploma_hrsecondary_pass_year,
        h.diploma_hrsecondary_sub,
        h.diploma_hrsecondary_endingyear,
        u.varsity_edu_method,
        u.uvarsity_pass,
        u.varsity_passing_year,
        u.university_subject,
        u.varsity_ending_year,
        u.uvarsity_name,
        u.others_edu_qualification,
        k.qawmi_madrasa_hafez,
        k.qawmimadrasa_dawrapass,
        k.kowmi_dawrapas_year,
        k.kowmi_current_edu_level
      FROM 3bd_secondaryedu_method AS s
      LEFT JOIN 3bd_higher_secondaryedu_method AS h ON s.user_id = h.user_id
      LEFT JOIN 3bd_universityedu_method AS u ON s.user_id = u.user_id
      LEFT JOIN 3bd_kowmi_madrasaedu_method AS k ON s.user_id = k.user_id
      ORDER BY s.user_id DESC $limit OFFSET $start";
      }
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      echo '<div class="table-container">';
      echo '<table>';
      echo "<tr>
        <th>বায়োডাটা নং</th>
        <th>মাধ্যমিক শিক্ষার মাধ্যম</th>
        <th>সর্বোচ্চ শিক্ষাগত যোগ্যতা</th>
        <th>মাধ্যমিক পাস করেছেন?</th>
        <th>মাধ্যমিক পাসের বর্ষ</th>
        <th>মাধ্যমিক বোর্ড পরীক্ষার বর্ষ</th>
        <th>মাধ্যমিক বর্তমান অধ্যায়নরত ক্লাস</th>
        <th style='color: #9817a3;'>উচ্চমাধ্যমিক শিক্ষার মাধ্যম</th>
        <th style='color: #9817a3;'>উচ্চমাধ্যমিক পাস করেছেন?</th>
        <th style='color: #9817a3;'>উচ্চমাধ্যমিক পাসের বর্ষ</th>
        <th style='color: #9817a3;'>উচ্চমাধ্যমিক বোর্ড পরীক্ষার বর্ষ</th>
        <th style='color: #9817a3;'>উচ্চমাধ্যমিক গ্রুপ</th>
        <th style='color: #9817a3;'>উচ্চমাধ্যমিক বর্তমান অধ্যায়নরত ক্লাস</th>
        <th style='color: #9817a3;'>ডিপ্লোমা পাস করেছেন?</th>
        <th style='color: #9817a3;'>ডিপ্লোমা পাসের বর্ষ</th>
        <th style='color: #9817a3;'>ডিপ্লোমায় আপনার সাবজেক্ট</th>
        <th style='color: #9817a3;'>ডিপ্লোমা অধ্যায়ন সম্পন্ন হবে</th>
        <th style='color: blue;'>স্নাতক শিক্ষার মাধ্যম</th>
        <th style='color: blue;'>স্নাতক পাস করেছেন?</th>
        <th style='color: blue;'>স্নাতক পাসের বর্ষ</th>
        <th style='color: blue;'>স্নাতক আপনার সাবজেক্ট</th>
        <th style='color: blue;'>স্নাতক অধ্যায়ন সম্পন্ন হবে</th>
        <th style='color: blue;'>স্নাতকে শিক্ষা প্রতিষ্ঠান</th>
        <th style='color: #057e22;'>অন্যান্য শিক্ষাগত যোগ্যতা</th>
        <th style='color: #057e22;'>আপনি কি হাফেজ</th>
        <th style='color: #057e22;'>দাওরায়ে হাদিস পাস করেছেন?</th>
        <th style='color: #057e22;'>দাওরায়ে হাদিস পাসের বর্ষ</th>
        <th style='color: #057e22;'>মাদ্রাসায় বর্তমান অধ্যায়নরত জামাত</th>
        <th>তারিখ সময়</th>
        <th>ডাটা ইডিট</th>
      </tr>";
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
        echo '<td>' . $row['scndry_edu_method'] . '</td>';
        echo '<td>' . $row['maxedu_qulfctn'] . '</td>';
        echo '<td>' . $row['gnrl_mdrs_secondary_pass'] . '</td>';
        echo '<td>' . $row['gnrl_mdrs_secondary_pass_year'] . '</td>';
        echo '<td>' . $row['gnrl_mdrs_secondary_end_year'] . '</td>';
        echo '<td>' . $row['gnrlmdrs_secondary_running_std'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['higher_secondary_edu_method'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['gnrlmdrs_hrsecondary_pass'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['gnrlmdrs_hrsecondary_pass_year'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['gnrlmdrs_hrsecondary_exam_year'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['gnrlmdrs_hrsecondary_group'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['gnrlmdrs_hrsecondary_rningstd'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['diploma_hrsecondary_pass'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['diploma_hrsecondary_pass_year'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['diploma_hrsecondary_sub'] . '</td>';
        echo '<td style="color: #9817a3;">' . $row['diploma_hrsecondary_endingyear'] . '</td>';
        echo '<td style="color: blue;">' . $row['varsity_edu_method'] . '</td>';
        echo '<td style="color: blue;">' . $row['uvarsity_pass'] . '</td>';
        echo '<td style="color: blue;">' . $row['varsity_passing_year'] . '</td>';
        echo '<td style="color: blue;">' . $row['university_subject'] . '</td>';
        echo '<td style="color: blue;">' . $row['varsity_ending_year'] . '</td>';
        echo '<td style="color: blue;">' . $row['uvarsity_name'] . '</td>';
        echo '<td style="color: #057e22;">' . $row['others_edu_qualification'] . '</td>';
        echo '<td style="color: #057e22;">' . $row['qawmi_madrasa_hafez'] . '</td>';
        echo '<td style="color: #057e22;">' . $row['qawmimadrasa_dawrapass'] . '</td>';
        echo '<td style="color: #057e22;">' . $row['kowmi_dawrapas_year'] . '</td>';
        echo '<td style="color: #057e22;">' . $row['kowmi_current_edu_level'] . '</td>';
        echo '<td>' . $row['profilecreationdate'] . '</td>';
        echo '<td><a target="_blank" href="edit_education.php?id=' . $row['user_id'] . '">Edit</a></td>';
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