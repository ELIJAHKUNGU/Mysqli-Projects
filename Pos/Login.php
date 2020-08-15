<?php

if (isset($_POST["password"])) {
    require "DB.php";
    extract($_POST);
    $sql = "select * from users where email='$email' and password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) ==1){
        //success
        $info = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["info"] = $info;
        header("location:index.php");
    }else{
        $message = "Wrong username or password";
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabs....Login...</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header bg-info">Sign In</div>
                <div class="card-body">
                    <form action="Login.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                        </div>
                        <div align="center">
                            <button class="btn btn-info btn-block col-7" >Sign In</button>
                        </div>
                    </form>

                </div>

            </div>
            <br>
            <div align="center">
                <span>Create an Account?</span>
                <a href="Register.php"><button class="btn btn-info btn-block col-4">Sign Up</button></a>
            </div>

        </div>
    </div>
</div>
</body>
</html>