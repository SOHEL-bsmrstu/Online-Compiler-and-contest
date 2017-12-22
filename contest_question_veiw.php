<!DOCTYPE html>
<html>
    <head>
        <title>Problem</title>
        <style>
            body{
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php
        include 'time_controling.php';
        include 'config.php';
        $contest_id = $_GET['contest_id'];
        $contest_problem_name = $_GET['contest_problem_name'];
        $sql = "SELECT * FROM contest_problem WHERE contest_id = '$contest_id' and contest_problem_name = '$contest_problem_name'";
        $result = $connection->query($sql);
        $data = mysqli_fetch_assoc($result);
        echo $data['contest_problem_path'];
        ?>
       
        <!--problem show in pdf format -->
        
        <?php
        $file = $data['contest_problem_path'];
        $filename = $data['contest_problem_path'];
        header('Content-type:application/pdf');
        header('Content-Disposition: inline; filename = "' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        readfile($file);
        ?>﻿

    </body>
</html>
