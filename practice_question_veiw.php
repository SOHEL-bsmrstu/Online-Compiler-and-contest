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
        $problem_id = $_GET['problem_id'];
        $sql = "SELECT * FROM practice_problem WHERE problem_id = '$problem_id'";
        $result = $connection->query($sql);
        $data = mysqli_fetch_assoc($result);
        ?>
    
         <?php
        $file = $data['problem_path'];
        $filename = $data['problem_path'];
        header('Content-type:application/pdf');
        header('Content-Disposition: inline; filename = "' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        readfile($file);
        ?>﻿

    </body>
</html>
