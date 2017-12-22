<?php
	session_start();
	$from_time1 = date('H:i:s');
	$to_time1 = $_SESSION["end_time"];
	
	$first_time = strtotime($from_time1);
	$second_time = strtotime($to_time1);
	
	$differenceinsecends = $second_time - $first_time;
        $_SESSION["exam_time"] = gmdate("H:i:s",$differenceinsecends);
	//echo gmdate("H:i:s",$differenceinsecends);
        echo  $_SESSION["exam_time"];
        if ($_SESSION["exam_time"] == "00:00:00"){
            include 'config.php';
            $id = $_SESSION["start_time"];
            $sql = "update contest_problem set contest_status = 'close' where contest_id = '$id'";
            mysqli_query($connection, $sql);
        }
?>