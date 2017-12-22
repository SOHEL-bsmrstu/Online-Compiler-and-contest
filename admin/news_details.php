<!DOCTYPE html>
<head>
    <title>News Details</title>
</head>

<body>
    <?php include 'header_and_sidebar.php';
    include 'time_controling.php'; ?>

    <div class="col-sm-8 text-left" style = ""> 

        <!-- Retrives data data from database -->
        <div class="container">
            <h2 style="margin-left: 30%;margin-top: 50px;">News Details Table</h2>
            <table class="table table-striped table-bordered table-hover table-condensed" style="width: 95%;">
                <thead>
                    <tr>
                        <th>News Date</th>
                        <th>News Type</th>
                        <th>News Heading</th>
                        <th>News Details</th>
                    </tr>
                </thead>

                <?php
                include 'config.php';
                $sql = "select * from news";
                $result = mysqli_query($connection, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $data['news_date']; ?></td>
                            <td><?php echo $data['news_type']; ?></td>
                            <td><?php echo $data['news_name']; ?></td>
                            <td><?php echo $data['news_details']; ?></td>                          
                            <td>
                                <a href = "news_edit.php?id=<?php echo $data['id']; ?>">Edit</a> || 
                                <a href = "news__delete.php?id=<?php echo $data['id']; ?>" onclick = "return confirm('Are you sure to delete ?');">Delete</a>
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
