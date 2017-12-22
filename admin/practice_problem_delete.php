<?php
include 'time_controling.php';
include 'config.php';
$problem_id = $_GET['problem_id'];
$sql = "DELETE FROM practice_problem WHERE problem_id = '$problem_id'";
$result = $connection->query($sql);
header("Location:practice_problem_details.php");
?>