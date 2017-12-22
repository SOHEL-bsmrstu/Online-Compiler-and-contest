<?php
include 'time_controling.php';
include 'config.php';
$user_name = $_GET['user_name'];
$sql = "DELETE FROM user WHERE user_name = '$user_name'";
$result = $connection->query($sql);
header("Location:user_details.php");
?>