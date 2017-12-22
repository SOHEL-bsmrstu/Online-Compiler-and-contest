<!DOCTYPE html>
<head>
    <title>Contest Status</title>
</head>

<body>
    <?php include 'header_and_sidebar.php';?>

    <div class="col-sm-8 text-left" style = "height : 550px;"> 

        <?php
        include 'config.php';
        if (isset($_POST["start_contest"])) {

            $_SESSION["start_time"] = $_POST['contest_start_id'];
            $sql = "select * from contest_problem where contest_id = '$_POST[contest_start_id]' and contest_status = 'coming'";
            $result = mysqli_query($connection, $sql);
            $data = mysqli_fetch_assoc($result);
            $duration = $data['duration'];
            $_SESSION["duration"] = $duration;
            $_SESSION["stat_time"] = date("H:i:s");
            $end_time = date('H:i:s', strtotime('+' . $_SESSION["duration"] . 'minutes', strtotime($_SESSION["stat_time"])));
            $_SESSION["end_time"] = $end_time;

            //contest start           
            $sql = "update contest_problem set contest_status = 'start' where contest_id = '$_POST[contest_start_id]'";
            mysqli_query($connection, $sql);
            echo '<h3>'.'Successfully Contest Started'.'<h3>';
        }
        ?> 

        <div id = "response" style="font-size: 25px;" ></div>


        <script type="text/javascript">
           /* var setInterval = setInterval(function ()
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

            }, 1000);*/
        </script>

        <!-- Contest Status Form -->

        <form action="" method="post" enctype ="multipart/form-data" style=" margin-left: 20%; width: 300px; margin-top: 50px;">
            <div class="form-group">
                <label for="contest_id">Contest Id:</label>
                <input type="text" class="form-control" id="contest_id" name="contest_start_id" placeholder="Contest Id">
            </div>
            <button type="submit" name="start_contest" class="btn btn-default" onclick = "return checkvalidation();">Submit</button>
        </form> 
    </div>
    <div class="col-sm-2 sidenav" style = "height : 568px;"></div>
</div>
</div>

<footer class="container-fluid text-center" style="margin-top: -9px; background: #203E6C;">
    <div>&copy;2018 All rights reserved.</div>
</footer>

<script type="text/javascript">
    function checkvalidation() {
        var contest_id = document.getElementById("contest_id").value;

        if (!contest_id) {
            alert("Insert Contest Id");
            document.getElementById('contest_id').focus();
            document.getElementById('contest_id').select();
            return false;
        }
        else {
            document.forms.registration_form.submit();

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
        }
    }
</script>

</body>
</html>
