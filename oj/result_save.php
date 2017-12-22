<?php
include 'config.php';

    //Output Match

    $sql = "select * from contest_problem where contest_id = '$_POST[contest_id]' and contest_problem_name = '$_POST[problem_name]'";
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);
    $s1 = $output;
    $s2 =  $data['output_set'];
    $d = $s1 - $s2;
    //echo $d;
    if($d == 0){
        //echo $output;
         $sql = "insert into contest_program_submission_result(user_name, contest_id, problem_name, output)
         values('$_POST[user_name]','$_POST[contest_id]','$_POST[problem_name]','Accept')";
    $chk = mysqli_query($connection, $sql);
    if ($chk) {
        //Delete program for this user form contest_problem_submission table

        $sql = "DELETE FROM contest_program_submission WHERE user_name = '$_POST[user_name]'";
        mysqli_query($connection, $sql);
        header('Location:contest_veiw.php');
    } else {
        //Delete program for this user form contest_problem_submission table

        $sql = "DELETE FROM contest_program_submission WHERE user_name = '$_POST[user_name]'";
        mysqli_query($connection, $sql);
        echo "Insertion Failed";
       header('Location:contest_veiw.php');
    }
    }
    
 else {
         $sql = "insert into contest_program_submission_result(user_name, contest_id, problem_name, output)
         values('$_POST[user_name]','$_POST[contest_id]','$_POST[problem_name]','Wrong')";
    $chk = mysqli_query($connection, $sql);
    if ($chk) {
        //Delete program for this user form contest_problem_submission table

        $sql = "DELETE FROM contest_program_submission WHERE user_name = '$_POST[user_name]'";
        mysqli_query($connection, $sql);
        header('Location:contest_veiw.php');
    } else {
        //Delete program for this user form contest_problem_submission table

        $sql = "DELETE FROM contest_program_submission WHERE user_name = '$_POST[user_name]'";
        mysqli_query($connection, $sql);
        echo "Insertion Failed";
        header('Location:contest_veiw.php');
}
 }
     
?>