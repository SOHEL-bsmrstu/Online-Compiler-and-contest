
<?php
include 'time_controling.php';
include 'config.php';
$user_name = $_GET['user_name'];
$sql = "select * from user where user_name = '$user_name'";
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
        if (isset($_POST['user_status_update'])) {
            include 'config.php';
            $user_name = $_GET['user_name'];
            $sql = "UPDATE user SET user_status = '$_POST[user_status]' WHERE user_name = '$user_name'";
            $query = mysqli_query($connection, $sql);
            if ($query) {
                echo "<h2>" . "Successfull" . "</h2>";
                
            } else
                echo "<h2>" . "Failed" . "</h2>";
        }
        ?>


        <!-- Contest Update Form -->

        <form action="" method="post" enctype ="multipart/form-data">
            <div class="form-group">
                <label for="user_status">User Status:</label>
                <input type="text" class="form-control" id="user_status" name="user_status" value="<?php echo $data['user_status']; ?>">
            </div>

            <button type="submit" name="user_status_update" class="btn btn-default" onclick = "return checkvalidation();">Submit</button>
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
        var user_status = document.getElementById("user_status").value;
        if (!user_status) {
            alert("Insert your User Status");
            document.getElementById('user_status').focus();
            document.getElementById('user_status').select();
            return false;
        }
        document.forms.registration_form.submit();
    }
</script>


</body>
</html>
