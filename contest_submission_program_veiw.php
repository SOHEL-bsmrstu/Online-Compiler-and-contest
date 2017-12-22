<?php
include 'time_controling.php';
if (isset($_POST['submit'])) {
    include 'config.php';
    //data insertion

    $sql = "insert into contest_program_submission(user_name, contest_id, problem_name, choose_language, program)
         values('$_POST[user_name]','$_POST[contest_id]','$_POST[problem_name]','$_POST[language]','$_POST[code]')";
    $query = mysqli_query($connection, $sql);

    //code retrive

    $sql = "select * from contest_program_submission where user_name = '$_POST[user_name]' and contest_id = '$_POST[contest_id]' and problem_name = '$_POST[problem_name]'";
    $result = $connection->query($sql);
    $data = mysqli_fetch_assoc($result);

    //input set retrive

    $sql = "select * from contest_problem where contest_id = '$_POST[contest_id]' and contest_problem_name = '$_POST[problem_name]'";
    $result = $connection->query($sql);
    $value = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
    <head>


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script>
            function load()
            {
                document.getElementById('form').submit();
            }
        </script>

    </head>


    <body onload="load()">
        <div class="main">

            <div class="row cspace">
                <div class="col-sm-8">
                    <div class="form-group">
                        <form action="oj_compile.php" id="form" name="f2" method="POST" >
                           <!-- <label for="lang">Choose Language</label>

                            <select class="form-control" name="language">
                                <option value="c">C</option>
                                <option value="cpp">C++</option>
                                <option value="cpp11">C++11</option>
                                <option value="java">Java</option>


                            </select><br><br> -->
                           <input type="hidden" name="language" value="<?php echo $data['choose_language'];?>"/>
                            <input type="hidden" name="user_name" value="<?php echo $data['user_name']; ?>"/>
                            <input type="hidden" name="contest_id" value="<?php echo $data['contest_id']; ?>"/>
                            <input type="hidden" name="problem_name" value="<?php echo $data['problem_name']; ?>"/>
                            <textarea name="code" rows="10" cols="50" style="display: none;"><?php echo $data['program']; ?></textarea><br><br>
                            <textarea name="input" rows="10" cols="50" style="display: none;"><?php echo $value['input_set']; ?></textarea><br><br>



                        </form>


                    </div>
                </div>

            </div>
        </div>

    </body>
</html>


