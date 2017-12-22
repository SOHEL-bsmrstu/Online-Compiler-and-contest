<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>online compiler</title>
        <link href="css/icon.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <script src="js/scrollrevel/scrollreveal.js"></script>
        <script src="js/scrollrevel/scrollreveal.min.js"></script>
        <style>
            .nbar {
                min-height: 68px;
                padding-top: 0px;
                color: white;
                font-size: 15px;
                font-weight: bold;
            }
            body {
                font-family: "";
                font-size: 14px;
                line-height: 1.42857143;
                color: #333;
            }
            .col-sm-10 {
                width: 83.33333333%;
                margin-top: 5%;
            }
        </style>
    </head>

    <body>
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-inverse navbar-fixed-top nbar">
                    <?php
                    include'head.php';
                    include 'time_controling.php';
                    ?>
                </nav>
            </div>
        </div>

        <!--About This Web site-->

        <div class="about_website" style="width: 100%; height: 600px; margin-top: 200px;">
            <h2 class="about" style="margin-left: 10%; font-family: 'Asap', sans-serif; margin-top: 35px;">About <br> <i>Online Compiler & Contest</i></h2>
            <div class="about_compiler" style="width: 48%; float: left; height: 250px; margin-left:  15%; font-size:25px; text-align: justify; margin-top: 20px;">
                <p style=""><blockquote style="border: none;">A compiler is a special program that processes statements written in a particular programming language and turns them into machine language or "code" that a computer's processor uses. Typically, a programmer writes language statements in a language such as Pascal or C one line at a time using an editor. The file that is created contains what are called the source statements. The programmer then runs the appropriate language compiler, specifying the name of the file that contains the source statements.</blockquote>
                <blockquote  style="border: none;"> When executing (running), the compiler first parses (or analyzes) all of the language statements syntactically one after the other and then, in one or more successive stages </blockquote</p>
                <br><br>

                <div class="btn_about" style="text-align: center; width: 150px; height: 40px; border: 1px solid #03375A; border-radius: 3px 3px 3px 3px;">
                    <a href="compiler_details.php" style=" text-align: center; text-decoration : none;">Read More</a>
                </div>
            </div>

            <!--Slider Tag-->

            <div class="slider" style="width: 30%; height: 450px;float: left;">
                <div class="slider" style="width: 350px; height: 450px;">
                    <?php include 'slider.php'; ?>
                </div>
            </div>
        </div>

        <!--Massage Why you practice programming and attend contest -->

        <div class="inispire_massage" style="width: 100%;height: 530px;background: #4E4C9A;margin-top: 2%; background-image: url(upload/massage_bcak.png);">
            <div class="massage">
                <div class="website_logo">
                    <img src="upload/logo.png" alt = "logo" title="Online Compiler Logo" style="width:150px; height: 150px; margin-left: 45%; margin-top: 2%;"/>
                    <p style="text-align: center; font-size: 18px; color: white;">Online Compiler and Contest</p>
                </div>
                <h1 class="head_of_massage" style="text-align: center; color: white; font-size: 40px;"><i>Massage Of This Website</i></h1>
                <p class="head_of_massage" style="text-align:center;  font-size: 30px; color: white;"><b><i>“Welcome to the website of Online Compiler and Programming Contest . Why need online compiler and contest....</i></b> </p>
                <div class="btn_massage" style="text-align: center; width: 150px; height: 40px; border: 1px solid white; border-radius: 3px 3px 3px 3px; margin-left: 40%; margin-top: 3%;">
                    <a href="website_massage.php" style=" text-align: center; text-decoration: none;font-size: 25px;color: white;">Read More</a>
                </div>
            </div>
        </div>



        <!-- Icon Hover Effect-->

        <div class="IconEffect">
            <div class="main_icon_design1">
                <div class="icon_font"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div>
                <div class="icon_head_text" style=" text-align: center; font-size: 25px; color: white;">Online Compiler</div>
                <div class="icon_text_details" style=" color: white; margin: 5px; text-align: justify; font-size: 20px;">Online compilers are tools which allows you to compile source code and execute it online in many programming languages.....</div>
                <div class="btn_icon_read" style="text-align: center; width: 150px; height: 40px; border: 1px solid  white; border-radius: 3px 3px 3px 3px; margin-left: 25%; margin-top: 30px;">
                    <a href="online_compiler_details.php" style=" text-align: center; text-decoration: none;font-size: 25px;color:  white;">Read More</a>
                </div>
            </div>


            <div class="main_icon_design1">
                <div class="icon_font"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                <div class="icon_head_text" style=" text-align: center; font-size: 25px; color: white;">Online Programming</div>
                <div class="icon_text_details" style=" color:  white; text-align: justify; font-size: 20px; margin: 5px;">Online Programming is the way to practice programming on online without help of any platform, software, compiler, books etc.....</div>
                <div class="btn_icon_read" style="text-align: center; width: 150px; height: 40px; border: 1px solid  white; border-radius: 3px 3px 3px 3px;  margin-left: 25%; margin-top: 30px;">
                    <a href="online_programming_details.php" style=" text-align: center; text-decoration: none;font-size: 25px;color:  white;">Read More</a>
                </div>
            </div>



            <div class="main_icon_design1">
                <div class="icon_font"><i class="fa fa-newspaper-o" aria-hidden="true"></i></div>
                <div class="icon_head_text" style=" text-align: center; font-size: 23px; color: white;">Competitive Programming</div>
                <div class="icon_text_details" style=" text-align: justify; margin: 5px; color:  white; font-size: 20px;">Programming Contest is a mind sport held over the Internet, involving participants trying to program according to provided specifications....</div>
                <div class="btn_icon_read" style="text-align: center; width: 150px; height: 40px; border: 1px solid  white; border-radius: 3px 3px 3px 3px;  margin-left: 25%; margin-top: 30px;">
                    <a href="competitive_programming_details.php" style=" text-align: center; text-decoration: none;font-size: 25px;color:  white;">Read More</a>
                </div>
            </div>
        </div>

        <!-- Events -->

        <div class="events"style=" height: 380px; background: #00304B; margin-top: 3%;">

            <div class="whole_event_text">
                <div class="events_head" style="padding-top: 1%; margin-left: 8%; font-size: 50px; color: white;"><b><i>EVENTS</i></b></div>


                <a href="online_compile.php" style="text-decoration: none;"><div class="events_name" style=" background: #8B072F;"><b><i> Online Compilers</i></b></div></a>

                <a href="practice.php" style="text-decoration: none;"><div class="events_name" style=" background: #8B072F;"><b><i>Practice Problem</i></b></div></a>

                <a href="contest.php" style="text-decoration: none;"><div class="events_name" style=" background: #8B072F;"><b><i> Online Contest</i></b></div></a>

                <a href="contest.php" style="text-decoration: none;"><div class="events_name" style=" background: #8B072F;"><b><i>Contest Details</i></b></div></a>
            </div>
        </div>

        <!-- News Type -->

        <div class="whole_news" style="height: 550px; margin-top: 3%;">
            <div class="general_news" style="font-size: 40px; margin-left: 5%; height: 550px; width: 42%; float: left; margin-right: 2%;">
                <i>General <br> <b>NEWS</b></i>

                <!-- News Name View -->
                <div>
                    <?php
                    include 'config.php';
                    $sql = "select * from news where news_type = 'general'";
                    $result = mysqli_query($connection, $sql);
                    while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="row">
                            <div class="col"><?php echo $data['news_date']; ?></div>
                            <div class="col2"><a style="color: #494D70;" href="news.php?news_name=<?php echo $data['news_name']; ?>"> <?php echo $data['news_name']; ?></a></div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>

            <!-- vertical line draw -->

            <hr style="width: 1px; height: 500px; float: left; color: #ccccff">


            <!-- update News -->

            <div class="update_news" style="font-size: 40px; margin-left: 3%; height: 550px; width: 42%; float: left;">

                <i>Latest <br> <b>News & Updates</b></i>

                <!-- News Name View -->
                <div>
                    <?php
                    include 'config.php';
                    $sql = "select * from news where news_type = 'update'";
                    $result = mysqli_query($connection, $sql);
                    while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="row">
                            <div class="col"><?php echo $data['news_date']; ?></div>
                            <div class="col2"><a style="color: #494D70;" href="news.php?news_name=<?php echo $data['news_name']; ?>"> <?php echo $data['news_name']; ?></a></div>
                        </div>
                    <?php }
                    ?>
                </div>

            </div>
        </div>

    </div>

    <div class = "foot"><?php include'foot.php'; ?></div>


    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.about', {
            duration: 1000,
            origin: 'top',
            distance: '200px'
        });
        sr.reveal('.about_compiler', {
            duration: 2000,
            origin: 'left',
            distance: '400px'
        });
        sr.reveal('.btn_about', {
            duration: 3000,
            origin: 'bottom',
            distance: '200px'
        });
        sr.reveal('.slider', {
            duration: 3000,
            origin: 'bottom',
            distance: '400px'
        });
        sr.reveal('.website_logo', {
            duration: 2000,
            origin: 'top'
        });
        sr.reveal('.head_of_massage', {
            duration: 2000,
            origin: 'top'
        });
        sr.reveal('.btn_massage', {
            duration: 2000,
            origin: 'top'
        });
        sr.reveal('.main_icon_design1', {
            duration: 2000,
            origin: 'top',
            distance: '200px'
        });
        sr.reveal('.whole_event_text', {
            duration: 2000,
            origin: 'bottom'
        });
        sr.reveal('.general_news', {
            duration: 2000,
            origin: 'left',
            distance: '300px'
        });
        sr.reveal('.update_news', {
            duration: 2000,
            origin: 'right',
            distance: '300px'
        });
    </script>

</body>
</html>