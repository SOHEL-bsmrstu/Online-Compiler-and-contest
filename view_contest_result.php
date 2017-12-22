<!DOCTYPE html>
<html>
    <head>
        <title>Contest Submission Result</title>
        <link href="css/view_contest_result.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        include 'head.php';
        include 'time_controling.php';
        $contest_id = $_GET['contest_id'];
        ?>
      
    <div class="contest_submission_result">
        <div class="table" align="center">
              <div class="contest_name" style=" color: blue; text-align: center;">
            <b><i><p style="text-align: center;"><?php echo 'Contest Id : '.$contest_id; ?></i></b></p>
    </div>
            <div class="row">
                <div class="col">User Name</div>
                <div class="col">Problem Name</div>
                <div class="col">Result</div>
            </div>

            <?php
            include 'config.php';
            $contest_id = $_GET['contest_id'];
            $sql = "select * from contest_program_submission_result where contest_id = '$contest_id'";
            $result = $connection->query($sql);
            while ($data = mysqli_fetch_assoc($result)) {
                ?>
                <div class="row">
                    <div class="col"><?php echo $data['user_name']; ?></div>
                    <div class="col"><?php echo $data['problem_name']; ?></div>
                    <div class="col"><?php echo $data['output']; ?></div>

                </div>

            <?php }
            ?>


        </div>
    </div>

<?php include 'foot.php'; ?>
</body>
</html>

