
<?php
include 'time_controling.php';
include 'config.php';
$contest_id = $_GET['contest_id'];
$problem_name = $_GET['contest_problem_name'];
$sql = "select * from contest_problem where contest_id = '$contest_id' and contest_problem_name = '$problem_name'";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<head>
    <title>Add Contest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        h4{
            color: blue;
            margin-top: 30%;
        }
        #sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 670px;
        }
    </style>
</head>

<body>

    <?php include 'header_and_sidebar.php'; ?>
    <div class="col-sm-8 text-left" style = "height : 650px; width: 500px; margin-left: 15%; margin-top: 30px;"> 

        <!-- Update Contest Details -->

        <?php
        include 'config.php';
        if (isset($_POST['contest'])) {
            include 'config.php';
            $file_name = $_FILES['file']['name'];
            $destination = "../upload/" . $file_name;
             $directory = "upload/" . $file_name;
            $size = $_FILES['file']['size'];
            $type = $_FILES['file']['type'];
            $filename = $_FILES['file']['tmp_name'];
            //echo "<pre>";
            //print_r($_FILES);
            $extension = substr(basename($file_name), strrpos(basename($file_name), ".") + 1);
            $allowedType = array("upload/pdf");

            if (move_uploaded_file($filename, $destination)) {
                $sql = "UPDATE contest_problem SET contest_id = '$_POST[contest_id]', contest_problem_path = '$directory', start_time = '$_POST[start_time]',  duration = '$_POST[contest_duration]', contest_status = '$_POST[contest_status]' ,input_set = '$_POST[input_set]', output_set = '$_POST[output_set]' WHERE contest_id = '$contest_id' and contest_problem_name = '$problem_name'";
                $query = mysqli_query($connection, $sql);
                if ($query) {
                    echo "<h2>" . "Successfully" . "</h2>";
                } else
                    echo "<h2>" . "Failed" . "</h2>";
            } else {
                $sql = "UPDATE contest_problem SET contest_id = '$_POST[contest_id]', start_time = '$_POST[start_time]',  duration = '$_POST[contest_duration]', contest_status = '$_POST[contest_status]' ,input_set = '$_POST[input_set]', output_set = '$_POST[output_set]' WHERE contest_id = '$contest_id' and contest_problem_name = '$problem_name'";
                $query = mysqli_query($connection, $sql);
                if ($query) {
                    echo "<h2>" . "Successfully" . "</h2>";
                } else
                    echo "<h2>" . "Failed" . "</h2>";
            }
        }
        ?>


        <!-- Contest Update Form -->

        <form action="" method="post" enctype ="multipart/form-data">
            <div class="form-group">
                <label for="contest_id">Contest Id:</label>
                <input type="text" class="form-control" id="contest_id" name="contest_id" placeholder="Contest Id" value="<?php echo $data['contest_id']; ?>">
            </div>
            <div class="form-group">
                <label for="problem_name">Problem Name:</label>
                <input type="text" class="form-control" id="problem_name" placeholder="Problem Name" name="problem_name" value="<?php echo $data['contest_problem_name']; ?>">
            </div>

            <label for="file">Upload File:</label>
            <input type = "file" id = "pdf" name="file">

            <div class="form-group">
                <label for="contest_duration">Contest Duration:</label>
                <input type="text" class="form-control" id="contest_duration" placeholder="Contest Duration" name="contest_duration" value="<?php echo $data['duration']; ?>">
            </div>
            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="text" class="form-control" id="start_time" placeholder="Start Time" name="start_time" value="<?php echo $data['start_time']; ?>">
            </div>
            <div class="form-group">
                <label for="contest_status">Contest Status:</label>
                <input type="text" class="form-control" id="contest_status" placeholder="Contest Status" name="contest_status" value="<?php echo $data['contest_status']; ?>">
            </div>
            <div class="form-group">
                <label for="input_set">Input Set:</label>
                <input type="text" class="form-control" id="input_set" placeholder="Input Set" name="input_set" value="<?php echo $data['input_set']; ?>">
            </div>
            <div class="form-group">
                <label for="output_set">Output Set:</label>
                <input type="text" class="form-control" id="output_set" placeholder="Output Set" name="output_set" value="<?php echo $data['output_set']; ?>">
            </div>
            <button type="submit" name="contest" class="btn btn-default" onclick = "return checkvalidation();">Submit</button>
        </form>
    </div>

</div>
</div>
</div>

<footer class="container-fluid text-center" style="margin-top: -9px; background: #203E6C;">
    <div>&copy;2018 All rights reserved.</div>
</footer>

<script type="text/javascript">
    function checkvalidation() {
        var contest_id = document.getElementById("contest_id").value;
        var problem_name = document.getElementById("problem_name").value;
        var contest_duration = document.getElementById("contest_duration").value;
        var start_time = document.getElementById("start_time").value;
        var contest_status = document.getElementById("contest_status").value;
        var input_set = document.getElementById("input_set").value;
        var output_set = document.getElementById("output_set").value;

        if (!contest_id) {
            alert("Insert Contest Id");
            document.getElementById('contest_id').focus();
            document.getElementById('contest_id').select();
            return false;
        }
        if (!problem_name) {
            alert("Insert Problem Name");
            document.getElementById('problem_name').focus();
            document.getElementById('problem_name').select();
            return false;
        }
        if (!contest_duration) {
            alert("Insert Contest Duration");
            document.getElementById('contest_duration').focus();
            document.getElementById('contest_duration').select();
            return false;
        }
        if (!start_time) {
            alert("Insert Contest Start Time");
            document.getElementById('start_time').focus();
            document.getElementById('start_time').select();
            return false;
        }
        if (!contest_status) {
            alert("Insert Contest Status");
            document.getElementById('contest_status').focus();
            document.getElementById('contest_status').select();
            return false;
        }
        if (!input_set) {
            alert("Insert Input Set");
            document.getElementById('input_set').focus();
            document.getElementById('input_set').select();
            return false;
        }
        if (!output_set) {
            alert("Insert Output Set");
            document.getElementById('output_set').focus();
            document.getElementById('output_set').select();
            return false;
        }
        document.forms.registration_form.submit();
    }
</script>


</body>
</html>
