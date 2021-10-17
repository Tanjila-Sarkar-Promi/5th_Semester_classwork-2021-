<html>
<head>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12" style="height: 200px;">
            <form action="save1.php" method="post">
        <div class="card">
            <div class="card-header">
                <h3>Student Registration Form</h3>
            </div>
            <div class="card-body">

                            <div class="form-group">
                            <lebel>Student Name</lebel>
                            <input class="form-control" type="text" name="studentName" id="studentName">

                        </div>
                        <div class="form-group">
                            <lebel>Student Id</lebel>
                            <input class="form-control" type="text" name="studentId" id="studentId">

                        </div>
                        <div class="form-group">
                            <lebel>Gender</lebel>
                            <select class="form-control" name="gender" id="gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                    </div>
                </div>

            <div class="card-footer">
                <div class="form-group">
                    <lebel></lebel>
                    <input class="btn btn-primary" type="submit" name="submitButton" id="submitButton">

                </div>

            </div>
                 </form>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12" style="height: 200px;">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>Student Name</td>
                    <td>Student Id</td>

                    <td>Delete</td>
                    <td>Edit</td>
                </tr>
                <?php
                include 'database_connection.php';
                $select_query="SELECT * FROM students_tb ";
                $result= mysqli_query($connection,$select_query);

                while($row_array=mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row_array['id'] ?></td>
                        <td><?php echo $row_array['studentName'] ?></td>
                        <td><?php echo $row_array['studentId'] ?></td>
                        <td>
                            <form action="delete.php" method="post">
                                <input hidden name="id" value="<?php echo $row_array['id']?>">
                                <input onclick="confirm('Do you want to delete?')" class="btn btn-danger" type="submit" value="Delete">

                            </form>

                        </td>
                        <td>
                            <a class="btn btn-success" href="edit.php?id=<?php echo $row_array['id']?>">Edit</a>
                        </td>
                    </tr>

                    <?php
                }
                ?>


            </table>

        </div>

    </div>

</div>

</body>
</html>
