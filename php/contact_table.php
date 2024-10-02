<?php 


require_once('db.php');
$query = "select * from contact";
$result = mysqli_query($conn,$query);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Table</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-success" style="color: white;">
                        <h2>Contact Data</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php 
                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td>
                            <!-- <a href="update_admissionRecord.php?id=<?php echo $row['id'] ?>">
                                     <i class="fa fa-pencil fa-lg" title="Edit" style="color: blue;"></i> -->
                               <a href="delete_contactRecord.php?id=<?php echo $row['id']?>"> 
                                     <i class="fa fa-trash fa-2x" title="Delete" style="color: red;"></i></a>
                            </td>
                            </tr>
                            <?php

                            }

                            ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <a href="/pizza/index.html"><button type="submit" class="btn btn-outline-success">Back to Home</button></a>
    </div>
</body>

</html>