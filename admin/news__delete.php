<?php
include 'time_controling.php';
include 'config.php';
$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM news WHERE  id = '$id'";
$result = mysqli_query($connection, $sql);
header("Location:news_details.php");
?>