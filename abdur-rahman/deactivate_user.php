<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="../images/shosurbari-icon-admin.png" type="image/png">
  <title>Deactivated | ShosurBari</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
    .error-page-area{
    min-height:100vh;
    text-align:center;
    background:#00c292;
  }
  .error-page-area:before{
    content:'';
    height:100vh;
    width:1px;
  }
  .error-page-area:before{
    vertical-align: middle;
    display: inline-block;
  }
  .error-page-wrap{
    max-width:580px;
    padding:20px 0;
    width:60%;
    position:relative;
    margin: 0 auto;
    background:#fff;
    box-shadow:0 1px 1px rgba(0,0,0,.1);
    border-radius:2px;
    vertical-align: middle;
    display: inline-block;
  }
  .error-page-wrap h2{
    font-size: 27px;
    color: #333;
    margin-top: -15px;
    margin-bottom: 0px;
  }
  .error-page-wrap p{
    font-size:17px;
    color:#333;
    line-height:24px;
    padding: 10px;
  }
  .error-page-wrap .btn{
    background:#ff0080;
    color:#fff;
    border-radius:2px;
    box-shadow: 0 2px 5px rgba(0,0,0,.16), 0 2px 10px rgba(0,0,0,.12);
    outline:none;
    margin:0px 5px;
    font-size:14px;
    padding: 7px;
    text-decoration: none;
  }
  .error-page-wrap .btn:hover{
    background:#00bbff;
    color:#fff;
    padding: 7px;
  }
  .error-page-wrap .counter{
    color:#00c292;
  }
  .error-page-wrap i{
    font-size: 40px;
    color: #00c292;
    padding-bottom: 15px !important;
    display: block;
  }
  </style>
  <div class="error-page-area">
    <div class="error-page-wrap">
      <h2>Deactivated Success!</h2>
      <?php
        $id = $_GET['id'];
        include('includes/dbconn.php');
        // Set active to 0 and deactivated to 1
        $sql = "UPDATE users SET active = 0, deactivated = 1 WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
          echo "<p>Users ID Successfully Deactivated.</p>";
        } else {
          echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
        mysqli_close($conn);
      ?>
      <a href="users.php" class="btn">Go to Back User Page</a>
      <a href="index.html" class="btn error-btn-mg">Go to Back Dashboard</a>
    </div>
  </div>
</body>
</html>
