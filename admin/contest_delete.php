<?php
include 'time_controling.php';
include 'config.php';
$contest_id = $_GET['contest_id'];
$problem_name = $_GET['contest_problem_name'];
$sql = "DELETE FROM contest_problem WHERE contest_id = '$contest_id' and contest_problem_name = '$problem_name'";
$result = $connection->query($sql);
header("Location:contest_details.php");
?>