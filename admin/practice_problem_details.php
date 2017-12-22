<!DOCTYPE html>
<head>
    <title>Practice Problem Details</title>
</head>

<body>
    <?php include 'header_and_sidebar.php';include 'time_controling.php'; ?>

    <div class="col-sm-8 text-left" style = "height : 550px;"> 

        <!-- Retrives data data from database -->
        <div class="container">
            <h2 style="margin-left: 30%;margin-top: 50px;">Practice Problem Details Table</h2>
            <table class="table table-striped table-bordered table-hover table-condensed" style="width: 95%;">
                <thead>
                    <tr>
                        <th>Problem Id</th>
                        <th>Problem Name</th>
                        <th>Problem Directory</th>
                        <th>Input Set</th>
                        <th>Output Set</th>
                        <th>Modify</th>
                    </tr>
                </thead>

                <?php
                include 'config.php';
                $sql = "select * from practice_problem";
                $result = mysqli_query($connection, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $data['problem_id']; ?></td>
                            <td><?php echo $data['problem_name']; ?></td>
                            <td><?php echo $data['problem_path']; ?></td>
                            <td><?php echo $data['input_set']; ?></td>
                            <td><?php echo $data['output_set']; ?></td>
                            <td>
                                <a href = "practice_problem_edit.php?problem_id=<?php echo $data['problem_id']; ?>">Edit</a> || 
                                <a href = "practice_problem_delete.php?problem_id=<?php echo $data['problem_id']; ?>" onclick = "return confirm('Are you sure to delete ?');">Delete</a>
                            </td>
                        </tr>
                    </tbody>

                <?php }
                ?>
            </table>
        </div>


    </div>

</div>
</div>

<footer class="container-fluid text-center" style="margin-top: -9px; background: #203E6C;">
    <div>&copy;2018 All rights reserved.</div>
</footer>

</body>
</html>
