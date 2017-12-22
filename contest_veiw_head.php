<!DOCTYPE html>
<html>
    <head>
        <link href = "css/head.css" rel = "stylesheet" type = "text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="whole_header" id="headerid">
            <div><b>Online Complier</b></div>
            <?php
            session_start();

            if (isset($_SESSION["Login"])) {
                echo '<a href="index.php">Home</a>';
                echo '<a href="online_compile.php">Complier</a>';
                echo ' <a href="practice.php">Practice</a>';
                echo ' <a href="contest.php">Contest</a>';
                echo ' <a href="logOut.php">LogOut</a>';
                echo ' <a href="profile.php">Profile</a>';
                echo ' <a href="contest_result.php">Result</a>';
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