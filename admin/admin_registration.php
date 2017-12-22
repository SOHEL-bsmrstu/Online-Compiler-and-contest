<!-- Have a Admin Account Lies or not -->


<?php
include 'time_controling.php';
if (isset($_POST['submit'])) {
    include 'config.php';

    $sql = "select * from admin";
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);
    if ($data) {
        echo "All Ready Have a Admin Account";
       // header("Location:admin_logIn.php");
    } 
    else {

        $file_name = uniqid() . date("Y-m-d-H-i-s") . str_replace(" ", "_", $_FILES['image']['name']);
        $destination = "../images/" . $file_name;
        $size = $_FILES['image']['size'];
        $type = $_FILES['image']['type'];
        $filename = $_FILES['image']['tmp_name'];
        $extension = substr(basename($file_name), strrpos(basename($file_name), ".") + 1);
        $allowedExtention = array("jpg", "gif", "png", "jpeg", "JPG", "PNG");
        $allowedType = array("image/jpg", "image/gif", "image/png", "image/jpeg", "image/JPG", "image/PNG");
        if ($size > $_POST['MAX_FILE_SIZE'])
            echo "File size is bigger than allowed file...";
        else if (!in_array($extension, $allowedExtention))
            echo "Extension not allow";
        else if (!in_array($type, $allowedType))
            echo "Type not allow";
        else if (move_uploaded_file($filename, $destination)) {
            $sql = "insert into  admin(admin_name, phone_number, email,image_path, password, gender,	country) 
						values('$_POST[name]','$_POST[phn]','$_POST[email]','$destination','$_POST[password]','$_POST[gender]','$_POST[country]')";
            $query = mysqli_query($connection, $sql);
            if ($query)
                header("Location:admin_logIn.php");
            else
                echo 'Registration Failed....Try Again';
        } else
            echo "Registration Failed";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>


        <title>This is a registration form</title>
        <link href="../css/registration.css" rel="stylesheet" type="text/css"></link>
        <style>
            .required{
                color:red;
            }

        </style>

        <script src="../js/registrationformvalidation.js"></script>


    </head>


    <body>
        <div class="main">

            <!--Registration Form-->

            <div class="wholetable" align="center">
                <form action="#" method="post" enctype = "multipart/form-data">
                    <table>
                        <tr>
                            <td><div class="col1">Name :</div></td>
                            <td><div class="col1"><input type="text" id = "user_name" placeholder="Name" name="name"><td><p class = "required">*</p></td></div></td>
                        </tr>
                        <tr>
                            <td><div class="col1">Phone Number :</div></td>
                            <td><div class="col1"><input type="text" id = "phn_number" placeholder="Phone Number" name="phn"><td><p class = "required">*</p></td></div></td>
                        </tr>
                        <tr>
                            <td><div class="col1">E-mail :</div></td>
                            <td><div class="col1"><input type="text" id = "email" placeholder="E-mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/><td><p class = "required">*</p></td></div></td>
                        </tr>
                        <tr>
                            <td><div class="col1">Upload Image :</div></td>
                            <td><div class="col1"><input type="file" id = "image" name="image"><td><p class = "required">*</p></td></div></td>
                            <td><div class="col1"><input type = "hidden" name = "MAX_FILE_SIZE" value = " 4000000"></div></td>
                        </tr>
                        <tr>
                            <td><div class="col1">Password :</div></td>
                            <td><div class="col1"><input type="password" id = "password" placeholder=" Password" name="password"><td><p class = "required">*</p></td></div></td>
                        </tr>
                        <tr>
                            <td><div class="col1">Confirm Password :</div></td>
                            <td><div class="col1"><input type="password" id = "confirm_password" placeholder=" Password" name="confirm_password"><td><p class = "required">*</p></td></div></td>
                        </tr>
                        <tr>
                            <td><div class="col1">Gender :</div></td>
                            <td><div class="col1"><input type="radio"id = "gender" name="gender" value="male"/>Male</div></td>
                            <td><div class="col1"><input type="radio" id = "gender" name="gender" value="female"/>Female</div></td>	
                        </tr>
                        <tr>
                            <td><div class="col1">Country :</div></td>
                            <td><div class="col1">
                                    <select name="country">
                                        <option value="select">Select Country</option>
                                        <option value="bangladesh">Bangladesh</option>
                                        <option value="india">India</option>
                                        <option value="nepal">Nepal</option>
                                        <option value="pakisthan">Pakistan</option>
                                        <option value="bhutan">Bhutan</option>
                                        <option value="america">America</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><div class="col1"></div></td>
                            <td><div class="col1"><input type="submit" name="submit" value = "Submit" onclick = "return checkvalidation();" /></div></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>


