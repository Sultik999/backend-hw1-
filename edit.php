<?php 
 
    require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = " SELECT * FROM students where id = '".$UserID."'";
    $result = mysqli_query($conn, $query);
 
    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['id'];
        $UserName = $row['name'];
        $UserSurname = $row['surname'];
        $UserEmail = $row['email'];
    }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>hw1</title>
</head>
<body class="bg-dark">
 
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-secondary text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">
 
                            <form action="update.php?id=<?php echo $UserID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $UserName ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Surname " name="surname" value="<?php echo $UserSurname ?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $UserEmail ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>