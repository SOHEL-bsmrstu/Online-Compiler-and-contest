<!DOCTYPE html>
<html>
    <head>
        <link href = "CSS/head.css" rel = "stylesheet" type = "text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
    </head>

    <body>
        <div class="whole_header" id="headerid">
            <div><b>Online Complier & Contest</b></div>
            <?php
            session_start();
            
            if(isset($_SESSION["Login"])){
                echo '<a href="../index.php">Home</a>';
                echo '<a href="online_compiler.php">Complier</a>';
                echo ' <a href="../practice.php">Practice</a>';
                echo ' <a href="../contest.php">Contest</a>';
                //echo '<a href="#about">News</a>';
                echo ' <a href="../logOut.php">LogOut</a>';
                echo ' <a href="../registration.php">Register</a>';
               // echo ' <a href="admin.php">Admin</a>';
                echo ' <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>';
            } 
            else {
                echo '<a href="../index.php">Home</a>';
                echo '<a href="online_compiler.php">Complier</a>';
                echo ' <a href="../practice.php">Practice</a>';
                echo ' <a href="../contest.php">Contest</a>';
                //echo '<a href="#about">News</a>';
                echo ' <a href="../logIn.php">LogIn</a>';
                echo ' <a href="../registration.php">Register</a>';
               // echo ' <a href="admin.php">Admin</a>';
                echo ' <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>';
            }
            ?>

        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("headerid");
                if (x.className === "whole_header") {
                    x.className += " responsive";
                } else {
                    x.className = "whole_header";
                }
            }
        </script>

    </body>
</html>