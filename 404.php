<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php
$result=search();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>User 404 | ShosurBari</title>
<link rel="icon" href="images/shosurbari-icon.png" type="image/png">
</head>
<body>
<style>
body {
  margin: 0;
  margin-top: 40px;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}
.shosurbari-error-form {
  text-align: center;
  width: 100%;
}
.soshurbari-animation-icon {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 0px; 

}
.sb-icon-laptop img {
  height: 300px;
  width: 300px;
}
.error-page-area {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 500px;
  margin: auto;
}
.error-page-area h2 {
  width: 710px;
  font-size: 28px;
  line-height: 50px;
  margin-top: 5px;
  margin-bottom: 0;
  margin-left: 50px;
  margin-right: 50px;
  font-weight: 500;
}
.error-page-area p {
  font-size: 15px;
  line-height: 30px;
  margin-bottom: 5px;
  margin-top: -5px;
}
.button-container {
  display: flex;
  justify-content: center;
  align-items: center;
}
.btn {
  display: flex;
  padding: 10px;
  background: #06b6d4;
  color: #fff;
  text-decoration: none;
  border-radius: 2px;
  margin: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, .16), 0 2px 10px rgba(0, 0, 0, .12);
  font-size: 1rem;
  width: auto;
  text-align: center;
}
.btn:hover{
	background:#0aa4ca;
	color:#fff;
}
</style>
<div class="shosurbari-error-form">
  <div class="soshurbari-animation-icon">
      <div class="sb-icon-laptop">
        <img src="images/shosurbari-error.png">
      </div>
  </div>
  <div class="error-page-area">
    <h2>Page Not Found!</h2>
    <p>Please check the URL, refresh your browser, or explore other content on our site.</p>
    <div class="button-container">
      <a href="index.php" class="btn">Home Page</a>
      <a href="contact.php" class="btn error-btn-mg">Problem Report</a>
    </div>
  </div>
</div>
<!--=======================================
How Many Visitors View This Page.
This Script Connected to get_view_count.php
and page_views Database Table
========================================-->
<script>
	$(document).ready(function() {
	// Define an array of page names (without the .php extension)
	var pages = ["404"];

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
</body>
</html>	