<?php
include 'time_controling.php';
	if(isset($_POST['submit'])){
		session_start();
		$email = $_POST['email'];
		$password = $_POST['password'];
		include 'config.php';
		$sql = "SELECT * FROM admin WHERE email = '$email' and password = '$password'";
		$result = $connection->query($sql);
		$count = mysqli_num_rows($result);
		$data = mysqli_fetch_assoc($result);
		$user_name = $data['admin_name'];
                $email = $data['email'];
		if($count > 0){
			$_SESSION["AdminLogIn"] = "0";
			$_SESSION["admin_name"] = "$user_name";
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
        <link href="../css/login.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <form action="#" method="post">
            <div class="imgcontainer">
                <img src="../images/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>User Email</b></label>
                <input type="text" placeholder="User Email"  name="email" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">LogIn</button>
             </div>

            <div class="container" style="background-color:#f1f1f1">
                <a href="admin_registration.php" style="text-decoration: none;"><button type="button"  style=" font-size: 18px; background: blue; border-radius: 3px 3px 3px 3px; width: 100px;">SignUp</button></a>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        
    </body>
</html>
