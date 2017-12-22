<?php
include 'time_controling.php';
	if(isset($_POST['submit'])){
		session_start();
		$email = $_POST['email'];
		$password = $_POST['password'];
		include 'config.php';
		$sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
		$result = $connection->query($sql);
		$count = mysqli_num_rows($result);
		$data = mysqli_fetch_assoc($result);
		$user_id = $data['user_id'];
		$user_name = $data['user_name'];
                $email = $data['email'];
		if($count > 0){
			$_SESSION["Login"] = "0";
			$_SESSION["user_name"] = "$user_name";
			header("Location:index.php");
		}
		else{
			echo "E-mail or Password is Invalid...";
		}
	}
	
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/login.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div style="width: 103%; margin-left: -1%;"><b>
                    <?php
                    include 'head.php';
                    ?>
                </b></div>
        
        <form action="#" method="post">
            <div class="imgcontainer">
                <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>User Email</b></label>
                <input type="text" placeholder="User Email"  name="email" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">LogIn</button>
                
                <input type="checkbox" > Remember me
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <a style=" text-decoration: none; " href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        
        <?php include 'foot.php';?>
    </body>
</html>
