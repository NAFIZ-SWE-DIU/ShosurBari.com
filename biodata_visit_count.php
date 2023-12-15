<?php
require_once("includes/dbconn.php");
$user_id = $_GET['/Biodata'];
$sql = "UPDATE page_views SET view_count = view_count + 1, last_update = DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p') WHERE page_name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_id);
if ($stmt->execute()) {
} else {
    echo "Error updating view count: " . $conn->error;
}
$select_sql = "SELECT view_count FROM page_views WHERE page_name = ?";
$select_stmt = $conn->prepare($select_sql);
$select_stmt->bind_param("s", $user_id);
$select_stmt->execute();
$select_stmt->bind_result($viewCount);
$select_stmt->fetch();
if ($viewCount === null) {
    $insert_sql = "INSERT INTO page_views (page_name, view_count, last_update) VALUES (?, 1, DATE_FORMAT(NOW(), '%e %M %Y, %h:%i:%s %p'))";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("s", $user_id);
    if ($insert_stmt->execute()) {
        $viewCount = 1;
    } else {
        echo "Error inserting new user ID: " . $conn->error;
    }
}
$conn->close();
echo "View Count for User ID " . $user_id . ": " . $viewCount;
?>
