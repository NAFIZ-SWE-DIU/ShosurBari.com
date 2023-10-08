<?php
// Include necessary files and initialize the session
include_once("includes/basic_includes.php");
include_once("functions.php");
require_once("includes/dbconn.php");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin | ShosurBari</title>
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
</head>

<body>


    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                    </ul>
                                </li>

                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul class="notika-main-menu-dropdown">
                                      <li><a href="admin_login.php">Login</a>
                                      </li>
                                      <li><a href="customer.php">Customer</a>
                                      </li>
                                      <li><a href="contact_us.php">ContactUs</a>
                                      </li>
                                      <li><a href="photos.php">Photos</a>
                                      </li>
                                      <li><a href="users.php">Users</a>
                                      </li>
                                      <li><a href="dataphysical_marital.php">PysicalMarital</a>
                                      </li>
                                      <li><a href="datalifestyle.php">LifeStyle</a>
                                      </li>
                                      <li><a href="dataeducation.php">Edcation</a>
                                      </li>
                                      <li><a href="dataaddress.php">Address</a>
                                      </li>
                                      <li><a href="datareligion.php">Religion</a>
                                      </li>
                                      <li><a href="datafamily.php">Family</a>
                                      </li>
                                      <li><a href="datapartner.php">Partner</a>
                                      </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->



    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Manage</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane active in notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.html">Dashboard</a>
                                </li>
                                <li><a href="analytics.html">Analytics</a>
                                </li>
                            </ul>
                        </div>

                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="admin_login.php">Login</a>
                                </li>
                                <li><a href="customer.php">Customer</a>
                                </li>
                                <li><a href="contact_us.php">ContactUs</a>
                                </li>
                                <li><a href="photos.php">Photos</a>
                                </li>
                                <li><a href="users.php">Users</a>
                                </li>
                                <li><a href="dataphysical_marital.php">PysicalMarital</a>
                                </li>
                                <li><a href="datalifestyle.php">LifeStyle</a>
                                </li>
                                <li><a href="dataeducation.php">Edcation</a>
                                </li>
                                <li><a href="dataaddress.php">Address</a>
                                </li>
                                <li><a href="datareligion.php">Religion</a>
                                </li>
                                <li><a href="datafamily.php">Family</a>
                                </li>
                                <li><a href="datapartner.php">Partner</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->


    <style>
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
        text-align: left;
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
      width: 2080px;
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
  display: flex;
  margin-top: 30px;
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

/* Apply linear gradient background to deactivated user rows */
tr.inactive {
    background: linear-gradient(#06b6d4, #0ea5e9);
    color: white; 
}
</style>


  <?php
  // Include the database connection code from datalifestyle.php
  require_once("includes/dbconn.php");

  // Number of users to display per page
  $num_rows = isset($_POST['num_rows']) ? $_POST['num_rows'] : 10;
  $limit = ($num_rows == 'all') ? '' : "LIMIT $num_rows";

  // Pagination variables
  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  $start = ($page - 1) * $num_rows;

  // Execute the SQL query to count the total number of users
  $sql = "SELECT COUNT(*) AS user_count FROM users";
  $result = mysqli_query($conn, $sql);

  if ($result) {
      $row = mysqli_fetch_assoc($result);
      $userCount = $row["user_count"];
  } else {
      echo "Error: " . mysqli_error($conn);
  }

  // Fetch user data from the database
  $sql = "SELECT * FROM users $limit OFFSET $start";
  $result = mysqli_query($conn, $sql);

  echo '<div class="table-container">';
  echo "<h1>বর্তমান এবং স্থায়ী ঠিকানা</h1>";

  echo '<div class="table-wrapper">';
  echo "<h3>Total number of user profiles: " . $userCount . "</h3>";

  echo '<div id="search-form">
  <form method="POST">
      <label for="search-user-id">Search User ID:</label>
      <input type="text" id="search-user-id" name="search-user-id">
      <button type="submit" name="search">Search</button>
      <button type="submit" name="clear" style="margin-left: 10px;">Clear Search</button></br>
      
      <!-- Dropdown for profiles per page -->
      <label for="per-page">Profiles Show</label>
      <select name="num_rows" id="num_rows" onchange="this.form.submit()">
        <option value=""> </option>
          <option value="10" ' . ($num_rows == 10 ? 'selected' : '') . '>10</option>
          <option value="50" ' . ($num_rows == 50 ? 'selected' : '') . '>50</option>
          <option value="100" ' . ($num_rows == 100 ? 'selected' : '') . '>100</option>
          <option value="500" ' . ($num_rows == 500 ? 'selected' : '') . '>500</option>
          <option value="1000" ' . ($num_rows == 1000 ? 'selected' : '') . '>1000</option>
          <option value="10000" ' . ($num_rows == 10000 ? 'selected' : '') . '>10000</option>
      </select>
    </form>
</div>';

// User ID search functionality
$searchUserId = isset($_POST['search-user-id']) ? $_POST['search-user-id'] : '';
if (!empty($searchUserId)) {
    $searchUserId = mysqli_real_escape_string($conn, $searchUserId);
    $sql = "SELECT * FROM users WHERE id = $searchUserId $limit";
} else {
    $sql = "SELECT * FROM users $limit OFFSET $start";
}
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {

    // Display user data
    echo "<table>";
    echo "<tr>
              <th>User ID</th>
              <th>FullName</th>
              <th>UserName</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Reg.Date</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Deactivate/Activate</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $class = $row['active'] == 1 ? "active" : "inactive";
        echo "<tr class='" . $class . "'><td>" . $row['id'] . "</td>
        <td>" . $row['fullname'] . "</td>
        <td>" . $row['username'] . "</td>
        <td>" . $row['gender'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['number'] . "</td>
        <td>" . $row['register_date'] . "</td>
        <td><a href='../userhome.php?id=$id'>Edit</a></td>
        <td><a href='#' onclick='confirmDelete($id)'>Delete</a></td><td>";

        if ($row['active'] == 1) {
            echo "<a href='#'  onclick='confirmDeactivate($id)'>Deactivate</a>";
        } else {
            echo "<a href='#' style=\"color: #fff;\" onclick='confirmActivate($id)'>Activate</a>";
        }
        echo "</td></tr>";
    }
    echo "</table>";

      // Progress bar at the bottom
      echo '<div class="progress-container">
      <div class="progress-bar"></div>
      </div>';

      
    // Pagination links
    echo "<div class='pagination'>";
    if ($total_pages > 1) {
        if ($page > 1) {
            echo "<a href='?page=" . ($page - 1) . "&num_rows=$num_rows' class='page-link'>Previous</a>";
        }
        for ($i = 1; $i <= $total_pages; $i++) {
            $active = $i == $page ? "active" : "";
            echo "<a href='?page=$i&num_rows=$num_rows' class='page-link $active'>$i</a>";
        }
        if ($page < $total_pages) {
            echo "<a href='?page=" . ($page + 1) . "&num_rows=$num_rows' class='page-link'>Next</a>";
        }
    }
echo "</div>";

} else {
    echo "No users found.";
}

echo '</div>'; // Close the table-wrapper div
echo '</div>'; // Close the table-container div

mysqli_close($conn);
?>



<script>
  function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this user?")) {
      window.location.href = "delete_user.php?id=" + id;
    }
  }

  function confirmDeactivate(id) {
    if (confirm("Are you sure you want to deactivate this user?")) {
      window.location.href = "deactivate_user.php?id=" + id;
    }
  }

  function confirmActivate(id) {
    if (confirm("Are you sure you want to activate this user?")) {
      window.location.href = "activate_user.php?id=" + id;
    }
  }  
</script>


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