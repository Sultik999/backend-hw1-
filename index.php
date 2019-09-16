<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>hw1</title>
</head>
<body class="bg-dark">
 
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-secondary text-white text-center py-3"> Registration Form in PHP</h3>
                        </div>
                        <div class="card-body">
 
                            <form action="insert.php" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name">
                                <input type="text" class="form-control mb-2" placeholder=" User Surname " name="surname">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email">
                                <button class="btn btn-primary" name="create">Create</button>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>