<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['id'];
        $UserName = $_POST['name'];
        $UserSurname = $_POST['surname'];
        $UserEmail = $_POST['email'];

        $query = " UPDATE students SET name = '".$UserName."', surname = '".$UserSurname."', email = '".$UserEmail."' WHERE id = '".$UserID."' ";
        $result = mysqli_query($conn, $query);

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