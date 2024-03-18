<?php 
    require_once("include/connection.php");
    $UserID = $_GET['GetID'];

    $query = "SELECT * FROM user_info WHERE ID='".$UserID."'";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_assoc($result))
    {
        $User_ID = $row['ID'];
        $FullName = $row['fullname'];
        $Username = $row['username'];
        $Email = $row['email'];
        $Password = hash('md5', $row['password']);
    }
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
                <a class="nav-item nav-link text-white" href="#">Home <span class="sr-only"></span></a>
                <a class="nav-item nav-link text-white" href="login.php">Login</a>
                <a class="nav-item nav-link text-white" href="signup.php">Sign Up</a>
                <a class="nav-item nav-link text-white" href="view.php">View Info</a>
            </div>
        </div>
    </nav>

    <!-- Crating container to hold the content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3"> Update Form For Rgistered Members</h3>
                    </div>
                    <div class="card-body">
                        <form action="update.php?ID=<?php echo $UserID?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder="Full Name" name="full_name" value="<?php echo $FullName ?>" required>
                            <input type="text" class="form-control mb-2" placeholder="Username" name="user_name" value="<?php echo $Username ?>" required>
                            <input type="email" class="form-control mb-2" placeholder="Email" name="email" value="<?php echo $Email ?>" required>
                            <input type="password" class="form-control mb-2" placeholder="Password" name="password"  value="" required>
                            <button class="btn btn-info" name="update">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>