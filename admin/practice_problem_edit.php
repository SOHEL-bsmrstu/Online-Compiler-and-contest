

<?php
include 'time_controling.php';
include 'config.php';
$problem_id = $_GET['problem_id'];
$sql = "select * from practice_problem where problem_id = '$problem_id'";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<head>
    <title>Add Practice Problem</title>
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
    </style>
</head>

<body>

    <?php include 'header_and_sidebar.php'; ?>
    <div class="col-sm-8 text-left" style = "height : 550px; width: 500px; margin-left: 15%; margin-top: 30px;"> 

        <!-- Data Insertion -->
        <?php
        if (isset($_POST['problem'])) {
            include 'config.php';
            $problem_id = $_GET['problem_id'];
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
                $sql = "UPDATE practice_problem SET problem_id = '$_POST[problem_id]', problem_name = '$_POST[problem_name]', problem_path = '$directory' ,input_set = '$_POST[input_set]', output_set = '$_POST[output_set]' WHERE problem_id = '$problem_id'";
                $query = mysqli_query($connection, $sql);
                if ($query) {
                    echo "<h2>" . "Successfully" . "</h2>";
                } else
                    echo "<h2>" . "Failed" . "</h2>";
            } else {
                $sql = "UPDATE practice_problem SET problem_id = '$_POST[problem_id]', problem_name = '$_POST[problem_name]', input_set = '$_POST[input_set]', output_set = '$_POST[output_set]' WHERE problem_id = '$problem_id'";
                $query = mysqli_query($connection, $sql);
                if ($query) {
                    echo "<h2>" . "Successfully" . "</h2>";
                } else
                    echo "<h2>" . "Failed" . "</h2>";
            }
        }
        ?>
        <!-- Data Insertion End -->

        <!-- Contest Upload Form -->

        <form action="" method="post" enctype ="multipart/form-data">
            <div class="form-group">
                <label for="problem_id">Problem Id:</label>
                <input type="text" class="form-control" id="problem_id" name="problem_id" value="<?php echo $data['problem_id']; ?>">
            </div>

            <div class="form-group">
                <label for="problem_name">Problem Name:</label>
                <input type="text" class="form-control" id="problem_name" name="problem_name" value="<?php echo $data['problem_name']; ?>">
            </div>

            <div class="form-group">
                <label for="file">Upload File:</label>
                <input type = "file" id = "pdf" name="file">
            </div>
            <div class="form-group">
                <label for="input_set">Input Set:</label>
                <input type="text" class="form-control" id="input_set" name="input_set" value="<?php echo $data['input_set']; ?>">
            </div>
            <div class="form-group">
                <label for="output_set">Output Set:</label>
                <input type="text" class="form-control" id="output_set" name="output_set" value="<?php echo $data['output_set']; ?>">
            </div>
            <button type="submit" name="problem" class="btn btn-default" onclick = "return checkvalidation();">Submit</button>
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
        var problem_id = document.getElementById("problem_id").value;
        var problem_name = document.getElementById("problem_name").value;
        var input_set = document.getElementById("input_set").value;
        var output_set = document.getElementById("output_set").value;

        if (!problem_id) {
            alert("Insert Problem Id");
            document.getElementById('problem_id').focus();
            document.getElementById('problem_id').select();
            return false;
        }
        if (!problem_name) {
            alert("Insert Problem Name");
            document.getElementById('problem_name').focus();
            document.getElementById('problem_name').select();
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
