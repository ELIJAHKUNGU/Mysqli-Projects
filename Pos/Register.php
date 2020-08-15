<?php
if (isset($_POST["password"])) {
    require "DB.php";
    extract($_POST);
    $sql = "INSERT INTO users(`user_id`, `username`, `email`, `password`) 
                      VALUES (null,'$username','$email','$password')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header('location:index.php');
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabs...Registering </title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header bg-info">Register Here</div>


                <div class="card-body">
                    <form action="Register.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Your Username" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"  placeholder="Enter Your Password" required>
                        </div>
                        <div align="center">
                            <button class="btn btn-info btn-block col-7" >Sign Up</button>
                        </div>


                    </form>
                </div>
            </div>
            <br>
            <div align="center">
                <span>Already have an Account?</span>
                <a href="Login.php"><button class="btn btn-info btn-block col-4">Sign In</button></a>
            </div>

        </div>

    </div>
</div>
</body>
</html>