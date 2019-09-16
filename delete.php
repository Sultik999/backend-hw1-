<?php 
 
        require_once("connection.php ");
 
        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " DELETE FROM students WHERE id = '".$UserID."'";
            $result = mysqli_query($conn ,$query);
 
            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view.php");
        }
 
?>