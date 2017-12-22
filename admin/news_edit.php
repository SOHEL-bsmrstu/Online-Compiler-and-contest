<?php
include 'time_controling.php';
include 'config.php';
$id = $_GET['id'];
//echo $id;
$sql = "select * from news where id = '$id'";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<head>
    <title>Update News</title>
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
        if (isset($_POST['news'])) {
            include 'config.php';
           // $news_name = $_GET['news_name'];
           // echo $news_name;
            $sql = "UPDATE news SET news_date = '$_POST[news_date]', news_type = '$_POST[news_type]', news_details = '$_POST[news_details]' WHERE  id = '$id'";
            $query = mysqli_query($connection, $sql);
            if ($query) {
                echo "<h2>" . "Successfully Updated" . "</h2>";
            } else
                echo "<h2>" . "Failed" . "</h2>";
        }
        ?>
        <!-- Data Insertion End -->

        <!-- News Update Form -->

        <form action="" method="post" enctype ="multipart/form-data">
            <div class="form-group">
                <label for="news_date">News Date :</label>
                <input type="text" class="form-control" id="news_date" name="news_date" placeholder="News Date" value="<?php echo $data['news_date']; ?>">
            </div>

            <div class="form-group">
                <label for="news_type">News Type:</label>
                <input type="text" class="form-control" id="news_type" placeholder="General or Update" name="news_type" value="<?php echo $data['news_type']; ?>">
            </div>

            <div class="form-group">
                <label for="news_name">News Heading:</label>
                <input type="text" class="form-control" id="news_name" placeholder="News Heading" name="news_name" value="<?php echo $data['news_name']; ?>">
            </div>

            <div class="form-group">
                <label for="news_details">News Details:</label>
                <textarea style="height : 220px; width: 470px;"type="text" class="form-control" id="news_details" placeholder="News Details" name="news_details"><?php echo $data['news_details']; ?></textarea>
            </div>
            <button type="submit" name="news" class="btn btn-default" onclick = "return checkvalidation();">Submit</button>
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
        var news_date = document.getElementById("news_date").value;
        var news_type = document.getElementById("news_type").value;
        var news_name = document.getElementById("news_name").value;
        var news_details = document.getElementById("news_details").value;

        if (!news_date) {
            alert("Insert News Date");
            document.getElementById('news_date').focus();
            document.getElementById('news_date').select();
            return false;
        }
        if (!news_type) {
            alert("Insert News Type");
            document.getElementById('news_type').focus();
            document.getElementById('news_type').select();
            return false;
        }
        if (!news_name) {
            alert("Insert News Heading");
            document.getElementById('news_name').focus();
            document.getElementById('news_name').select();
            return false;
        }
        if (!news_details) {
            alert("Insert News Details");
            document.getElementById('news_details').focus();
            document.getElementById('news_details').select();
            return false;
        }

        document.forms.registration_form.submit();
    }
</script>


</body>
</html>
