
<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link href="css/contest_veiw.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <div style="width: 103%; margin-left: -1%;"><b>
                <?php
                include 'contest_veiw_head.php';
                include 'time_controling.php';
                ?>
            </b></div>

        <!-- Profile View -->
        <div class="user_profile" style="width: 100%;margin-left: 45%; margin-top: 2%; margin-bottom: 100px;">
            <div class="heading">Profile</div>
            <?php
            if (!isset($_SESSION["Login"])) {
                header('Location: logIn.php');
            } else {
                include 'config.php';
                $user_name = $_SESSION["user_name"];
                $sql = "select * from user where  user_name = '$user_name'";
                $result = $connection->query($sql);
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="profile" style="margin-top: 1%;"><a href="profile.php" style="text-decoration: none;">
                            <img src="<?php echo $data['image_path']; ?>" style="width: 10%;border-radius: 50%;">
                            <div style="font-size: 20px; color: #cc00cc;"><?php echo $data['user_name']; ?></div>
                            <div style="font-size: 20px; color: #cc00cc;"><?php echo $data['phone_number']; ?></div>
                            <div style="font-size: 20px; color: #cc00cc; margin-top: 5px;"><?php echo $data['email']; ?></div>
                            <div style="font-size: 20px; color: #cc00cc;"><?php echo $data['gender']; ?></div>
                            <div style="font-size: 20px; color: #cc00cc;"><?php echo $data['country']; ?></div>
                    </div></a>

                <?php
            }
        }
        ?>
    </div>

    <div><?php include 'foot.php'; ?></div>
</body>
</html>