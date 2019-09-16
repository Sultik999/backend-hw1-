<?php
    require_once("connection.php");
 
    if(isset($_POST['create']))
    {
        if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $UserName = $_POST['name'];
            $UserSurname = $_POST['surname'];
            $UserEmail = $_POST['email'];
 
            $query = " INSERT into students (name, surname, email) values('$UserName','$UserSurname','$UserEmail')";
            $result = mysqli_query($conn, $query);
 
            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }
?>