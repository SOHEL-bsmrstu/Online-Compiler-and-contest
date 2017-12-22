<!DOCTYPE html>
<head>
    <title>Contest Details</title>
</head>

<body>
    <?php include 'header_and_sidebar.php'; include 'time_controling.php';?>

    <div class="col-sm-8 text-left" style = "height : 550px;"> 

        <!-- Retrives data data from database -->
        <div class="container">
            <h2 style="margin-left: 30%;margin-top: 50px;">Contest Details Table</h2>
            <table class="table table-striped table-bordered table-hover table-condensed" style="width: 94%;">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>User Status</th>
                        <th>Modify</th>
                    </tr>
                </thead>

                <?php
                include 'config.php';
                $sql = "select * from user";
                $result = mysqli_query($connection, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $data['user_name']; ?></td>
                            <td><?php echo $data['phone_number']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['password']; ?></td>
                            <td><?php echo $data['gender']; ?></td>
                            <td><?php echo $data['country']; ?></td>
                            <td><?php echo $data['user_status']; ?></td>
                            <td>
                                <a href = "user_edit.php?user_name=<?php echo $data['user_name']; ?>">Edit</a> || 
                                <a href = "user_delete.php?user_name=<?php echo $data['user_name']; ?>" onclick = "return confirm('Are you sure to delete ?');">Delete</a>
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
