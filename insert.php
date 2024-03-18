<?php 

    require_once("include/connection.php");

    if(isset($_POST['submit']))
    {
        if (empty($_POST['full_name']) || empty($_POST['user_name']) || empty($_POST['email']) || empty($_POST['password']))
        {
            echo "Please fill in the blank spaces";
        }
        else
        {
            $FullName = $_POST['full_name'];
            $Username = $_POST['user_name'];
            $Email = $_POST['email'];
            $Password = hash('md5', $_POST['password']);

            $query = "INSERT INTO user_info (fullname, username, email, password) VALUES ('$FullName', '$Username', '$Email', '$Password')";

            $result = mysqli_query($con, $query);

            if($result)
            {
                header("location:view.php");
            }

            else
            {
                echo "There might be an error in your sql syntax. Please check and try again";
            }
        }
    }
    else
    {
        header("location:index.php");
    }


?>