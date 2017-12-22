
<!DOCTYPE html>
<html>
    <head>
        <title>contest Problem View</title>
        <link href="css/contest_veiw.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <!-- Contest Active or Not Check -->

        <?php
        include 'config.php';
        $sql = "select * from contest_problem where contest_id = '$_GET[contest_id]' and contest_status = 'start'";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_assoc($result);
        $str1 = $data['contest_status'];
        // echo $str1;
        if (strcmp($str1, "start") != 0)
            header("Location:contest.php");
        ?>


        <div style="width: 103%; margin-left: -1%;"><b><?php include 'contest_veiw_head.php'; ?></b></div>

        <!-- Exam CountDown Time>-->
        <div id = "response" style="font-size: 25px; text-align: right; margin-right: 50px; margin-top: 50px;"></div>

        <script type="text/javascript">
            var setInterval = setInterval(function ()
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET", "exam_time.php", false);
                xmlhttp.send(null);
                var time_finish = xmlhttp.responseText;
                if (time_finish !== "00:00:00") {
                    document.getElementById("response").innerHTML = xmlhttp.responseText;

                }
                else {
                    document.getElementById("response").innerHTML = xmlhttp.responseText;
                    clearInterval(setInterval);

                }

            }, 1000);
        </script>


    <!-- contest id identify -->

    <?php
    include 'config.php';
    $user_name = $_SESSION["user_name"];
    $sql = "select * from  contest_program_submission_result where  user_name = '$user_name'";
    $result = $connection->query($sql);
    $data = mysqli_fetch_assoc($result);
    if ($data) {
        $contest_id = $_GET['contest_id'];
        $_SESSION["id"] = $contest_id;
        //$contest_id = $data['contest_id'];
    } else {
        $contest_id = $_GET['contest_id'];
         $_SESSION["id"] = $contest_id;

    }
    ?>


   <!-- <div>
        <a style="margin-left: 30%;" href = "view_contest_result.php?contest_id=<?php //echo $contest_id; ?>">Submission Result</a>
    </div>-->

   <div class="contest_question_view" style="margin-bottom: 100px;">
        <div class="table" align="center">
            <div class="heading">
                <p><?php echo $contest_id; ?></p>
            </div>
            <div class="row">
                <div class="col">Problem Id</div>
                <div class="col">View problem</div>
                <div class="col">Online Coding</div>
                <div class="col">Submission</div>
            </div>

            <?php
            $sql = "select * from contest_problem where contest_id = '$contest_id'";
            $result = $connection->query($sql);
            while ($data = mysqli_fetch_assoc($result)) {
                ?>
                <div class="row">
                    <div class="col"><a href = "contest_question_veiw.php?contest_id=<?php echo $data['contest_id']; ?>&contest_problem_name=<?php echo $data['contest_problem_name']; ?>"><?php echo $data['contest_problem_name']; ?></a></div>
                    <div class="col"><a href = "contest_question_veiw.php?contest_id=<?php echo $data['contest_id']; ?>&contest_problem_name=<?php echo $data['contest_problem_name']; ?>">View Question</a></div>
                    <div class="col"><a href = "online_compile.php?contest_id=<?php echo $data['contest_id']; ?>&contest_problem_name=<?php echo $data['contest_problem_name']; ?>">Complier</a></div>
                    <div class="col"><a href = "problem_submission.php?user_name=<?php echo $user_name; ?>&contest_id=<?php echo $data['contest_id']; ?>&problem_name=<?php echo $data['contest_problem_name']; ?>">Submit</a></div>

                </div>

            <?php }
            ?>


        </div>
    </div>

    <div><?php include 'foot.php'; ?></div>
</body>
</html>