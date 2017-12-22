<!DOCTYPE html>
<html>
    <head>
        <title>Online Contest</title>
        <link href="css/contest.css" rel="stylesheet" type="text/css"/>
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

        <div class="contest_schedule" style="margin-top:13%; ">
            <div class="" align="center" style=" display:table;  width: 90%; margin-top: 2%; margin-left: 5%;margin-bottom: 50px;">
                <div class="heading" style=" color: blue;margin-bottom: 20px;">
                    <b><i>Upcoming Contest</i></b>
                </div>
                <div class="row">
                    <div class="col">Contest Id</div>
                    <div class="col">Contest Start Time</div>
                </div>

                <?php
                include 'config.php';
                $sql = "select * from contest_problem order by contest_id desc";
                $result = $connection->query($sql);
                $flag = 0;
                while ($data = mysqli_fetch_assoc($result)) {
                    $flag++;
                    if ($flag >= 2)
                        break;
                    ?>
                    <div class="row">
                        <div class="col"><a style="color: #6325C9;" href = "contest_veiw.php?contest_id=<?php echo $data['contest_id']; ?>"><?php echo $data['contest_id']; ?></a></div>
                        <div class="col" style="color: #6325C9;" ><?php echo $data['start_time']; ?></div>
                    </div>

                <?php }
                ?>


            </div>
        </div>

        <div class="contest_history" style="width: 80%;margin-top: 2%;margin-left: 20%; margin-bottom: 30px;">
            <div class="table_history" align="center">
                <div class="heading_history" style=" color: blue;">
                    <b><i><p>Contest History</i></b></p>
                </div>
                <div class="row_history">
                    <div class="col_history">Contest Id</div>
                    <div class="col_history">Contest Start Time</div>
                    <div class="col_history">Duration</div>
                    <div class="col_history">Final Standing</div>
                </div>
                <!--<div class="row_history">
                    <div class="col_history">Contest 1001</div>
                     <div class="col_history">----</div>
                      <div class="col_history">---</div>
                       <div class="col_history">----</div>
                </div>-->
                <?php
                include 'config.php';
                $sql = "select * from contest_problem where contest_status = 'close'";
                $result = $connection->query($sql);
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="row_history">
                        <div class="col_history"><a style="color: #6325C9;" href = "view_contest_result.php?contest_id=<?php echo $data['contest_id']; ?>"><?php echo $data['contest_id']; ?></a></div>
                        <div class="col_history" style="color: #6325C9;"><?php echo $data['start_time']; ?></div>
                        <div class="col_history" style="color: #6325C9;" ><?php echo $data['duration'].'m'; ?></div>
                        <div class="col_history"><a style="color: #6325C9;" href = "view_contest_result.php?contest_id=<?php echo $data['contest_id']; ?>">Show Result</a></div>

                    </div>

                <?php }
                ?>
            </div>
        </div>


        <div><?php include 'foot.php'; ?></div>
    </body>
</html>