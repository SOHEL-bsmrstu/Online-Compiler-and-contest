<?php
include 'config.php';
 $sql = "insert into contest_program_submission_result(user_name, contest_id, problem_name, output)
         values('$_POST[user_name]','$_POST[contest_id]','$_POST[problem_name]','error')";
    $chk = mysqli_query($connection, $sql);

    //Delete program for this user form contest_problem_submission table

    $sql = "DELETE FROM contest_program_submission WHERE user_name = '$_POST[user_name]'";
    mysqli_query($connection, $sql);
    echo "Insertion Failed";
    header('Location:contest_veiw.php');
?>