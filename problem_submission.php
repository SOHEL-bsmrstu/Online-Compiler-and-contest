
<?php
include 'time_controling.php';
$user_name = $_GET['user_name'];
$contest_id = $_GET['contest_id'];
$problem_name = $_GET['problem_name'];
?>

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

<!DOCTYPE html>
<html>
    <head>


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Program Submission</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
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
        <div class="main">
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
            <div class="row log">
                <div class="col-sm-10">
                    <div class=""><h3 style="text-align:center;">Program Submission</h3></div>
                </div>

                <div class="col-sm-1">

                </div>

                <div class="col-sm-1">

                </div>

            </div>




            <div class="row cspace">
                <div class="col-sm-8">
                    <div class="form-group">
                        <form action="contest_submission_program_veiw.php" id="form" name="f2" method="POST" >
                            <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
                            <input type="hidden" name="contest_id" value="<?php echo $contest_id; ?>">
                            <input type="hidden" name="problem_name" value="<?php echo $problem_name; ?>">

                            <label for="lang">Choose Language</label>

                            <select class="form-control" name="language">
                                <option value="c">C</option>
                                <option value="cpp">C++</option>
                                <option value="cpp11">C++11</option>
                                <option value="java">Java</option>


                            </select><br><br>

                            <label for="ta">Write Your Code</label>
                            <textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
                            <input type="submit" id="st" class="btn btn-success" name="submit" value="Submit"><br><br><br>
                        </form>

                    </div>
                </div>
            </div>
           <div style="width: 103%; margin-left: -2%;"><b>
                <?php
                include 'foot.php';
                ?>
            </b></div>
        </div>
    </body>
</html>
