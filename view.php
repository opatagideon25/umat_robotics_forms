<?php 
    require_once("include/connection.php");
    $query = "SELECT * FROM user_info ";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMaT Robotics Club</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <style>
        body {
            background-image:url(img/bg.jpg) ;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>

    <!-- Creating Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="#"><img src="img\University_of_Mines_and_Technology_logo.jpg" alt="Home Page" width="30"></a>
        <button class="navbar-toggler" type="button" data-target="#navbarNavAltMarkup" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-lg-auto">
                <a class="nav-item nav-link text-white" href="index.php">logout</a>
            </div>
        </div>
    </nav>

    <!-- Crating container to hold the content -->
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-secondary text-white text-center py-3"> Current Robotics Members </h3>
                    </div>
                    <div class="card-body">
                        <p><a class="btn btn-success text-white" href="signup.php">+ Add Member</a></p>
                        <table class="table table-bordered">
                            <tr>
                                <td>User Id</td>
                                <td>Full Name</td>
                                <td>Username</td>
                                <td>Email</td>
                                <td>Action</td>
                            </tr>
                            <?php 
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $User_ID = $row['ID'];
                                    $FullName = $row['fullname'];
                                    $Username = $row['username'];
                                    $Email = $row['email'];
                                    ?>

                                    <tr>
                                        <td><?php echo $User_ID ?></td>
                                        <td><?php echo $FullName ?></td>
                                        <td><?php echo $Username ?></td>
                                        <td><?php echo $Email ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $User_ID ?>" class="btn btn-success text-white">Edit</a> | <a href="delete.php?Del=<?php echo $User_ID ?>" class="btn btn-danger text-white">Delete</a></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>