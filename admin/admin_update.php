<?php

session_start();
include 'time_controling.php';
$admin_name = $_SESSION["admin_name"];
include 'config.php';
$file_name = uniqid() . date("Y-m-d-H-i-s") . str_replace(" ", "_", $_FILES['image']['name']);
$destination = "../images/" . $file_name;
$filename = $_FILES['image']['tmp_name'];
if (move_uploaded_file($filename, $destination)) {
    $sql = "UPDATE admin SET admin_name = '$_POST[name]', phone_number = '$_POST[phn]', email = '$_POST[email]', image_path = '$destination', password = '$_POST[password]' WHERE admin_name = '$admin_name'";
    $result = $connection->query($sql);
    if ($result)
        header("Location:admin_profile.php");
    else
        echo 'Update Failed';
} else {
    $sql = "UPDATE admin SET admin_name = '$_POST[name]', phone_number = '$_POST[phn]', email = '$_POST[email]', password = '$_POST[password]' WHERE admin_name = '$admin_name'";

    $result = $connection->query($sql);
    if ($result)
        header("Location:admin_profile.php");
    else
        echo 'Update Failed';
}
?>