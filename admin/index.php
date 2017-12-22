<?php
session_start();
include 'time_controling.php';
if (isset($_SESSION["AdminLogIn"])) {
    header("Location:admin_profile.php");
} else {
    header("Location:admin_logIn.php");
}
?>