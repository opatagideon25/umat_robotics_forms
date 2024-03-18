<?php
    require_once("include/connection.php");

    if(isset($_POST['update']))
    {
        $User_ID = $_GET['ID'];
        $FullName = $_POST['full_name'];
        $Username = $_POST['user_name'];
        $Email = $_POST['email'];
        $Password = hash('md5', $_POST['password']);

        $query = "UPDATE user_info SET fullname ='".$FullName."',  username ='".$Username."', email='".$Email."', password='".$Password."' WHERE ID= '".$User_ID."'";

        $result = mysqli_query($con, $query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo "Please check your QUERY";
        }
    }
    else
    {
        header("location:view.php");
    }
?>