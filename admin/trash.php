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
                                    <li><a href="trash.php">Trash</a>
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
                            <li><a href="trash.php">Trash</a>
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




    


    <div class="sbbiodata_profile_recentview">
    <h1>Trash File Profile Pictures</h1>

    <?php
    // Function to sanitize user input
    function sanitize($input) {
        return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }

    // Get search query and per_page from URL parameters
    $search = isset($_GET['search']) ? sanitize($_GET['search']) : '';
    $per_page = isset($_GET['per_page']) ? intval($_GET['per_page']) : 50; // Default to 10 profiles per page

    // Check if the trash folder exists
    if (!is_dir("../profile")) {
        echo "<p>Trash folder does not exist.</p>";
    } else {
        // Open the profile folder
        $profile_folders = scandir("../profile");

        // Create an array to keep track of user IDs that have already been displayed
        $displayedUserIDs = array();

        // Initialize a variable to count the total user IDs in the trash folder
        $totalUserIDsInTrash = 0;

        // Loop through each user's folder
        foreach ($profile_folders as $user_folder) {
            if ($user_folder !== "." && $user_folder !== "..") {
                $trash_folder = "../profile/{$user_folder}/trash/";

                // Check if the user's trash folder exists
                if (is_dir($trash_folder)) {
                    $deleted_images = scandir($trash_folder);

                    // Check if there are deleted images in the trash folder
                    if (count($deleted_images) > 2) { // 2 because . and .. are also counted
                        // Filter profiles based on the search query
                        if (empty($search) || strpos($user_folder, $search) !== false) {
                            // Increment the total user count
                            $totalUserIDsInTrash++;
                        }
                    }
                }
            }
        }

        // Display the total number of user profiles found in this page/file at the top
        echo '<h3>Total number of user profiles in this page: ' . $totalUserIDsInTrash . '</h3>';

        // Start the main table
        echo '<table>';

        echo '<div id="search-form">
        <form method="GET" action="">
            <label for="search">Search User ID:</label>
            <input type="text" name="search" id="search" value="' . (isset($_GET['search']) ? htmlspecialchars($_GET['search'], ENT_QUOTES, 'UTF-8') : '') . '" />
            <button type="submit" />Search</button>
            <button type="button" style="margin-left: 10px;" onclick="clearSearch()" />Clear Search</button></br>

            <label for="per-page">Profiles Show</label>
            <select name="per_page" id="per_page">
              <option value="10" ' . (isset($_GET['per_page']) && $_GET['per_page'] == 10 ? 'selected' : '') . '>10</option>
              <option value="50" ' . (isset($_GET['per_page']) && $_GET['per_page'] == 50 ? 'selected' : '') . '>50</option>
              <option value="100" ' . (isset($_GET['per_page']) && $_GET['per_page'] == 100 ? 'selected' : '') . '>100</option>
              <option value="500" ' . (isset($_GET['per_page']) && $_GET['per_page'] == 500 ? 'selected' : '') . '>500</option>
              <option value="1000" ' . (isset($_GET['per_page']) && $_GET['per_page'] == 1000 ? 'selected' : '') . '>1000</option>
              <option value="10000" ' . (isset($_GET['per_page']) && $_GET['per_page'] == 10000 ? 'selected' : '') . '>10000</option>
            </select>
        </form>
    </div>';

        echo "<tr>";
        echo "<th>বায়োডাটা নং</th>"; // Left heading

        // Dynamically generate column headings for images
        for ($i = 1; $i <= 20; $i++) {
            echo "<th>Image-$i</th>";
        }

        echo "</tr>";

        // Counter to keep track of displayed profiles
        $displayedCount = 0;

        // Loop through each user's folder
        foreach ($profile_folders as $user_folder) {
            if ($user_folder !== "." && $user_folder !== "..") {
                $trash_folder = "../profile/{$user_folder}/trash/";

                // Check if the user's trash folder exists
                if (is_dir($trash_folder)) {
                    $deleted_images = scandir($trash_folder);

                    // Check if there are deleted images in the trash folder
                    if (count($deleted_images) > 2) { // 2 because . and .. are also counted
                        // Filter profiles based on the search query
                        if (empty($search) || strpos($user_folder, $search) !== false) {
                            // Display the user ID in the left column only if it hasn't been displayed before
                            if (!in_array($user_folder, $displayedUserIDs)) {
                                echo '<tr>';
                                echo '<td>' . sanitize($user_folder) . '</td>'; // Display User ID
                                $displayedUserIDs[] = $user_folder; // Add the user ID to the displayed list
                            } else {
                                // If the user ID has been displayed, show an empty cell in the left column
                                echo '<tr><td></td>';
                            }

                            // Display User ID in a new column for each deleted image
                            foreach ($deleted_images as $deleted_image) {
                                if ($deleted_image !== "." && $deleted_image !== "..") {
                                    // Display each profile picture as a column
                                    echo "<td><img src='" . htmlspecialchars($trash_folder . $deleted_image, ENT_QUOTES, 'UTF-8') . "' alt='Profile Image'>";
                                   
                                    // Add a permanent delete button
                                    echo "<form method='POST' action='permanent_delete_img.php'>";
                                    echo "<input type='hidden' name='image_path' value='" . sanitize($trash_folder . $deleted_image) . "' />";
                                    echo "<input type='hidden' name='user_id' value='" . sanitize($user_folder) . "' />";
                                    echo "<input style=\"background: red;\" type='submit' name='permanent_delete_image' value='Delete' />";
                                    echo "</form>";

                                    // Add a restore button below each image
                                    echo "<form method='POST' action='restore_img.php'>";
                                    echo "<input type='hidden' name='image_path' value='" . sanitize($trash_folder . $deleted_image) . "' />";
                                    echo "<input type='hidden' name='user_id' value='" . sanitize($user_folder) . "' />";
                                    echo "<input type='submit' name='restore_image' value='Restore' />";
                                    echo "</form>";

                                    echo "</td>";
                                }
                            }

                            echo '</tr>';

                            // Increment the displayed count
                            $displayedCount++;

                            // Check if the displayed count reaches the per_page limit
                            if ($displayedCount >= $per_page) {
                                break;
                            }
                        }
                    }
                }
            }
        }

        // Close the table
        echo '</table>';
    }
    ?>
</div>










<script>
    // JavaScript function to clear the search query
    function clearSearch() {
        document.getElementById("search").value = "";
        // Reload the page without the search query
        window.location.href = window.location.pathname;
    }

    // JavaScript to auto-reload the page when the "Profiles Per Page" option is changed
    document.getElementById("per_page").addEventListener("change", function () {
        var selectedValue = this.value;
        // Reload the page with the selected per_page value as a URL parameter
        window.location.href = updateQueryStringParameter(window.location.href, "per_page", selectedValue);
    });

    // Function to update or add a URL parameter
    function updateQueryStringParameter(uri, key, value) {
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf("?") !== -1 ? "&" : "?";
        if (uri.match(re)) {
            return uri.replace(re, "$1" + key + "=" + value + "$2");
        } else {
            return uri + separator + key + "=" + value;
        }
    }
</script>





<style>



    #search-form{
        width: 100%;
        padding-top: 10px;
    }


    h1 {
    padding: 10px 0;
    margin: 150px auto 0px auto;
    text-align: center;
    font-size: 35px;
    color: #00c292;
  }

  .sbbiodata_profile_recentview  h3{
  margin: 20px auto 0px auto;
  padding: 10px 0;
  font-size: 25px;
  color: #00c292;
  text-align: left;
}


  .sbbiodata_profile_recentview {
    margin: 0px auto; 
    padding: 0 20px;
    border: 10px solid #00c292;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow-x: auto;
  }


  table {
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  tr{
    border: 2px solid #00c292;
  }

  th {
    background-color: #00c292;
    color: white;
    border: 2px solid #ccc;
    text-align: center;
    white-space: nowrap;
    padding: 10px; /* Add padding to the table headers for spacing */
  }

  td {
    border: 2px solid #00c292;
    padding: 15px;
    text-align: center;
    font-size: 25px;
    color: #00c292;
    font-weight: bold;
  }

  td p{
    font-size: 14px;
    color: #00c292;
    margin: -5px auto 10px auto;
  }

    label {
        font-size: 16px;
        color: #00c292;
    }

.input-group input[type="text"], select {
    border-radius: 4px;
    border: 1px solid #ccc;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    font-size: 17px;
    width: 110px;
    padding: 5px;
    display: block;
    color: black;
    outline: none;
    height: 33px;
    background-color: #fff;
    background: linear-gradient(#fff 20%,#f6f6f6 50%,#eee 52%,#f4f4f4 100%);
    background-clip: padding-box;
    -webkit-box-shadow: 0 0 3px #fff inset, 0 1px 1px rgb(0 0 0 / 10%);
    box-shadow: 0 0 3px #fff inset, 0 1px 1px rgb(0 0 0 / 10%);
}

  img {
    height: 175px;
    width: 220px;
    object-fit: fill;
    border: 4px solid #fff;
    position: relative;
    top: -5px;
    z-index: 5;
    background: rgb(245, 242, 242);
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    margin: 0 auto;
    display: block;
  }

  td form{
    margin: 5px 5px -20px 5px;
    text-align: center;
    justify-content: center;
    align-items: center;
    width: 50%;
    display: inline;
  }

  /* Optionally, you can style the buttons for better visibility */
  td form input[type="submit"] {
    border: none;
    cursor: pointer;
    text-align: center;
    cursor: pointer;
    width: 75px;
    height: 30px;
    /* margin: 0px auto 15px auto; */
    background: green;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 1px 1px 4px #888;
    font-size: 14px;
    color: #fff;
    font-weight: 400;
  }


  td form input[type="submit"]:hover{
    color: white;
    background: linear-gradient(#0aa4ca, #0acef1);
  }

</style>




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
