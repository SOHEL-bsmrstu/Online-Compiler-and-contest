
<!DOCTYPE html>
<head>
    <title>Update Profile</title>
    <link rel="stylesheet" href="../css/registration.css">
    <style>
        .required{
            color:red;
        }

    </style>



</head>

<body>
    <?php include 'header_and_sidebar.php'; include 'time_controling.php';?>


    <?php
    $admin_name = $_SESSION["admin_name"];
    include 'config.php';
    $sql = "select * from admin where admin_name = '$admin_name'";
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>


    <div class="col-sm-8 text-left" style = "height: 568px;"> 

        <!-- Data Update -->

        <?php
        if (isset($_POST['submit'])) {
            $admin_name = $_SESSION["admin_name"];
            include 'config.php';
            $file_name = uniqid() . date("Y-m-d-H-i-s") . str_replace(" ", "_", $_FILES['image']['name']);
            $destination = "../images/" . $file_name;
            $filename = $_FILES['image']['tmp_name'];
            if (move_uploaded_file($filename, $destination)) {
                $sql = "UPDATE admin SET admin_name = '$_POST[name]', phone_number = '$_POST[phn]', email = '$_POST[email]', image_path = '$destination', password = '$_POST[password]' WHERE admin_name = '$admin_name'";
                $result = $connection->query($sql);
                if ($result)
                    echo '<h3>' . 'Successfull' . '</h3>';
                else
                    echo '<h3>' . 'Upadate Failed' . '</h3>';
            } else {
                $sql = "UPDATE admin SET admin_name = '$_POST[name]', phone_number = '$_POST[phn]', email = '$_POST[email]', password = '$_POST[password]' WHERE admin_name = '$admin_name'";

                $result = $connection->query($sql);
                if ($result)
                    echo '<h3>' . 'Successfull' . '</h3>';
                else
                    echo '<h3>' . 'Upadate Failed' . '</h3>';
            }
        }
        ?>

        <!-- Registration Form -->

        <form action="" method="post" enctype ="multipart/form-data" style="margin-top:30px; margin-left: 20%; width: 40%;">
            <div class="form-group">
                <label for="contest_id">Admin Name:</label>
                <input type="text" class="form-control" id="user_name" name="name" value="<?php echo $data['admin_name']; ?>">
            </div>

            <div class="form-group">
                <label for="phn_number">Phone Number:</label>
                <input type="text" class="form-control" id="phn_number" name="phn" value="<?php echo $data['phone_number']; ?>">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $data['email']; ?>">
            </div>

            <div class="form-group">
                <label for="upload_image">Upload Image:</label>
                <input type="file" id="image" name="image" >
                <input type = "hidden" name = "MAX_FILE_SIZE" value = " 4000000">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['password']; ?>">
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="<?php echo $data['password']; ?>">
            </div>

            <button type="submit" name="submit" class="btn btn-default" onclick = "return checkvalidation();">Update</button>
        </form>
    </div>
    <div class="col-sm-2 sidenav" style = "height : 568px;"></div>
</div>
</div>

<footer class="container-fluid text-center" style="margin-top: -9px; background: #203E6C;">
    <div>&copy;2018 All rights reserved.</div>
</footer>


<script type= "text/javascript">
    function checkvalidation() {
        var user_name = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        var phn_number = document.getElementById("phn_number").value;
        var email = document.getElementById("email").value;
        var confirm_password = document.getElementById("confirm_password").value;

        if (!user_name) {
            alert("Insert your name");
            document.getElementById('user_name').focus();
            document.getElementById('user_name').select();
            return false;
        }
        if (!phn_number) {
            alert("Insert your phone number");
            document.getElementById('phn_number').focus();
            document.getElementById('phn_number').select();
            return false;
        }
        if (!email) {
            alert("Insert your E-mail");
            document.getElementById('email').focus();
            document.getElementById('email').select();
            return false;
        }
        if (password === "") {
            alert("Insert a password");
            document.getElementById('password').focus();
            document.getElementById('password').select();
            return false;
        }
        else if (password.length < 6)
        {
            alert("Password must be more than 5 characters!");
            document.getElementById('password').focus();
            document.getElementById('password').select();
            return false;
        }
        if (password !== confirm_password)
        {
            alert("Password doesn't match!");
            document.getElementById('confirm_password').focus();
            document.getElementById('confirm_password').select();
            return false;
        }
        document.forms.registration_form.submit();
    }

</script>
</body>
</html>
<?php

