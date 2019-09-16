<?php 
 
    require_once("connection.php");
    $query = " SELECT * FROM students ";
    $result = mysqli_query($conn, $query);
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Students</title>
</head>
<body class="bg-dark">
 
        <div class="container">
            
            <div class="row">
                <div class="col-md-12 text-center mt-5 mb-3 text-color-white">
                    <a class="text-white" href="http://localhost:1234/hw1/">
                        <b>Return to the Registration Form</b>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col m-auto">
                    <div class="card">
                        <table class="table table-bordered">
                            <tr>
                                <td> ID </td>
                                <td> Name </td>
                                <td> Surname </td>
                                <td> Email </td>
                                <td> Edit </td>
                                <td> Delete </td>
                            </tr>
 
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['id'];
                                        $UserName = $row['name'];
                                        $UserSurname = $row['surname'];
                                        $UserEmail = $row['email'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserSurname ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   
 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>