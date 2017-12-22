<!DOCTYPE html>
<html>
    <head>
        <title>News</title>
    </head>

    <body>
       <div style="width: 103%; margin-left: -1%;"><b>
                <?php
                include 'head.php';
                include 'time_controling.php';
                ?>
            </b></div>

        <div style="margin-top: 30px; text-align: center;">
            <h2><i><?php echo $_GET['news_name']; ?></i></h2>
        </div>

        <div style="margin-left: 150px;margin-bottom: 100px; margin-top: 50px; margin-right: 150px;font-size: 20px; border: 1px solid blue; text-align: justify;">
            <pre style="text-align: justify;"><blockquote style="width: 900px;">
                    <?php
                    $news_name = $_GET['news_name'];
                   // echo $news_name;
                    include 'config.php';
                    $sql = "select * from news where news_name like '%$news_name%'";
                    $result = mysqli_query($connection, $sql);
                    $data = mysqli_fetch_assoc($result);
                    if ($data){
                    //echo $data['news_details'];
                    }
                else {
                    echo 'data not found';    
                }
                    ?>
<?php echo $data['news_details'];?></blockquote> </pre>

        </div>

        <?php include 'foot.php'; ?>
    </body>
</html>

