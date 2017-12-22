<!DOCTYPE html>
<head>
    <title>Admin Profile</title>
</head>

<body>
    <?php include 'header_and_sidebar.php'; include 'time_controling.php';?>
    <div class="col-sm-8 text-left" style = "height : 550px;"> 
        <h1>Welcome <?php echo $_SESSION["admin_name"]; ?></h1><br><br><br>
        <?php
        $admin_name = $_SESSION["admin_name"];
        include 'config.php';
        $sql = "select * from admin where admin_name = '$admin_name'";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_assoc($result);
        ?>

        <!-- Admin Profile View -->
        <div class="admin_profile">
            <h2 style="margin-left: 40%; color: #0284E6;">Admin Profile </h2>
            <img src="<?php echo $data['image_path']; ?>" style="width: 100px; height: 100px; border-radius: 50%; margin-left: 43%;"/>
            <h4 style="margin-left: 40%; margin-top: 20px;">Name : <?php echo $data['admin_name']; ?></h4>
            <h4 style="margin-left: 40%;">Phone Number : <?php echo $data['phone_number']; ?></h4>
            <h4 style="margin-left: 40%;">Email : <?php echo $data['email']; ?></h4>
            <h4 style="margin-left: 40%;">Gender : <?php echo $data['gender']; ?></h4>
            <h4 style="margin-left: 40%;">Country : <?php echo $data['country']; ?></h4>

        </div>
    </div>
    <div class="col-sm-2 sidenav" style = "height : 568px;"></div>
</div>
</div>

<footer class="container-fluid text-center" style="margin-top: -9px; background: #203E6C;">
    <div>&copy;2018 All rights reserved.</div>
</footer>

</body>
</html>
