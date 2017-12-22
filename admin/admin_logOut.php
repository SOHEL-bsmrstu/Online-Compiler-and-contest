<?php
include 'time_controling.php';
session_start();
unset($_SESSION["AdminLogIn"]);
header("Location:admin_logIn.php");
?>