<?php 
    require_once("include/connection.php");

    if(isset($_POST['login']))
    {
        $uname = $_POST['user_name'];
        $password = hash('md5', $_POST['password']);

        $query = "SELECT password FROM user_info WHERE username='".$uname."'";
        if(mysqli_query($con, $query))
        {
            $result = mysqli_query($con, $query);
            $catch = mysqli_fetch_assoc($result)['password'];

            if($password==$catch)
            {
                header("location:view.php");
            }
            else
            {
                header("location:login.php");
            }
        }
        else
        {
            header("location:login.php");
        }
    }
    else
    {
        header("location:login.php");
    }

?>