<!DOCTYPE html>
<html>
    <head>
        <title>Practice Problem</title>
        <link href="css/practice.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <style>
            .nbar {
                min-height: 68px;
                padding-top: 0px;
                color: white;
                font-size: 15px;
                font-weight: bold;
            }
            body {
                font-family: "";
                font-size: 14px;
                line-height: 1.42857143;
                color: #333;
            }
            .col-sm-10 {
                width: 83.33333333%;
                margin-top: 5%;
            }
            
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-inverse navbar-fixed-top nbar">
                    <?php
                    include'head.php';
                    include 'time_controling.php';
                    ?>
                </nav>
            </div>
        </div>
        <div class="page_name" style="margin-top : 13%; color: blue;"><b><i>Online Practice Problem</i></b></div>


        <div class="problem_veiw">

            <div class="" style=" display:table;  width: 90%; margin-top: 2%; margin-left: 5%;">
                <div class="row">
                    <div class="col" style=" width: 20%; font-size: 20px;">Question Id</div>
                    <div class="col" style="width: 20%; font-size: 20px;">Problem Name</div>
                    <div class="col" style="width: 20%; font-size: 20px;">View Question</div>
                    <div class="col" style="width: 20%; font-size: 20px;">Compile</div>
                </div>
                <?php
                include 'time_controling.php';
                include 'config.php';
                $sql = "select * from practice_problem";
                $result = $connection->query($sql);
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>

                    <div class="row">
                        <div class="col" style="width: 20%; color: #6325C9;"><?php echo $data['problem_id']; ?></div>
                        <div class="col" style="width: 20%; color: #6325C9;"><?php echo $data['problem_name']; ?></div>
                        <div class="col" style="width: 20%;"> <a style="text-decoration: none; color: #6325C9;" href = "practice_question_veiw.php?problem_id=<?php echo $data['problem_id']; ?>">View</a></div>
                        <div class="col" style="width: 20%;"><a style="text-decoration: none; color: #6325C9;" href = "compiler/online_compiler.php?problem_id=<?php echo $data['problem_id']; ?>">Practice</a></div>

                    </div>

                <?php }
                ?>

            </div>
        </div>

        <div> <?php include 'foot.php'; ?></div>
    </body>
</html>