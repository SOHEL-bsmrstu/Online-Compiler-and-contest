<?php
if (isset($_POST['submit'])) {
   
    $con = new mysqli("localhost", "root", "", "test") or die("connection failed");
    //$sql = "insert into result(output) values('$output')";
    $sql = "insert into contest_program_submission(user_name, contest_id, problem_name, output)
         values('$_POST[user_name]','$_POST[contest_id]','$_POST[problem_name]','30')";
    $chk = mysqli_query($con, $sql);
}
?>