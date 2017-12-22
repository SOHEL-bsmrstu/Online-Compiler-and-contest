<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "CSS/admin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom: 0;
                background: #16164A;
                height: 100px;
            }

            .navbar-inverse {
                border: none;
                border-radius: 0px 0px 0px 0px;
            }
            .container-fluid{
                margin-top: 20px;
            }
            .navbar-inverse .navbar-nav > li{
                font-size:25px;

            }
            .navbar-inverse .navbar-nav > li > a {
                color: white;
            }
            .navbar-inverse .navbar-nav > li > a:hover {
                color: #FE86A1;
            }


            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */


            element {

            }
            .sidenav {

                padding-top: 20px;
                background-color: #f1f1f1;
                height: 570px;

            }
            .panel{
                margin-bottom: 5px;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;} 
            }
        </style>
    </head>
    <body>

        <?php
        session_start();
        ?>


        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="../upload/logo.png" alt = "logo" style=" width: 120px; height: 120px; margin-top: -45px;margin-left: 60px;"/></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" style=" margin-left: 200px;">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">About</a></li>
                        <li><a href="index.php">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin_logOut.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid text-center" style=" margin-top: 0px;">    
            <div class="row content">
                <div class="col-sm-2 sidenav" id = "sidenav" style = "background: #00304B;">

                    <!-- DashBoard Details -->

                    <div class="panel panel-default">
                        <div class="panel-heading"  style=" background: #00304B;">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" href="#dashboard" style=" text-decoration: none; color: white;">DashBoard</a>
                            </h3>
                        </div> 
                        <div id="dashboard" class="panel-collapse collapse">
                            <h4 class="panel-body"   style=" background: #00304B;"><a href = "admin_profile.php" style=" text-decoration: none; color: white;">Profile</a></h4>
                            <h4 class="panel-footer"   style=" background: #00304B;"><a href = "admin_profile_update.php" style=" text-decoration: none; color: white;">Update</a></h4>
                        </div>
                    </div>

                    <!-- User Details -->
                    <div class="panel panel-default">
                        <div class="panel-heading"  style=" background: #00304B;">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" href="#user_details" style=" text-decoration: none; color: white;">User Details</a>
                            </h3>
                        </div> 
                        <div id="user_details" class="panel-collapse collapse">
                            <h4 class="panel-body"   style=" background: #00304B;"><a href = "user_details.php" style=" text-decoration: none; color: white;">Details</a></h4>
                        </div>
                    </div>

                    <!-- Practice Problem Button -->
                    <div class="panel panel-default">
                        <div class="panel-heading"  style=" background: #00304B;">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" href="#practice_problem" style=" text-decoration: none; color: white;">Practice Problem</a>
                            </h3>
                        </div> 
                        <div id="practice_problem" class="panel-collapse collapse">
                            <h4 class="panel-body"   style=" background: #00304B;"><a href = "add_practice_problem.php" style=" text-decoration: none; color: white;">Add Problem</a></h4>
                            <h4 class="panel-footer"   style=" background: #00304B;"><a href = "practice_problem_details.php" style=" text-decoration: none; color: white;">Problem Details</a></h4>
                        </div>
                    </div>
                    <!-- End Practice Problem -->

                    <!-- Online Contest -->

                    <div class="panel panel-default">
                        <div class="panel-heading"  style=" background: #00304B;">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" href="#online_contest" style=" text-decoration: none; color: white;">Online Contest</a>
                            </h3>
                        </div> 
                        <div id="online_contest" class="panel-collapse collapse">
                            <h4 class="panel-body"   style=" background: #00304B;"><a href = "add_contest.php" style=" text-decoration: none; color: white;">Add Contest</a></h4>
                            <h4 class="panel-footer"   style=" background: #00304B;"><a href = "contest_details.php" style=" text-decoration: none; color: white;">Contest Details</a></h4>
                            <h4 class="panel-footer"   style=" background: #00304B;"><a href = "contest_status.php" style=" text-decoration: none; color: white;">Contest Status</a></h4>
                        </div>
                    </div>

                    <!--News -->

                    <div class="panel panel-default">
                    <div class="panel-heading"  style=" background: #00304B;">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" href="#news" style=" text-decoration: none; color: white;">News</a>
                        </h3>
                    </div> 
                    <div id="news" class="panel-collapse collapse">
                        <h4 class="panel-body"   style=" background: #00304B;"><a href = "add_news.php" style=" text-decoration: none; color: white;">Add News</a></h4>
                        <h4 class="panel-footer"   style=" background: #00304B;"><a href = "news_details.php" style=" text-decoration: none; color: white;">News Details</a></h4>
                    </div>
                    </div>

                </div>