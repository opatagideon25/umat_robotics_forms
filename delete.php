<?php 
    require_once("include/connection.php");

    if(isset($_GET['Del']))
    {
        $UserID = $_GET['Del'];

        $query = "DELETE FROM user_info WHERE ID='".$UserID."'";

        $result = mysqli_query($con, $query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo "Please check your Query";
        }
    }
    else
    {
        header("location:view.php");
    }
?>
