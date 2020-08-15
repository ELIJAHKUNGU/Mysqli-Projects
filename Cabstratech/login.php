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
    <title>Cabstratech</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
</head>
<body>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 card">
            <div class="">
                <div class="card-header bg-info">Sign In</div>
                <div class="card-body">
                    <br><br>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button class="btn btn-info btn-block">Sign In</button>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
<div class="footer_copyright" align="center">
					<span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Cabstratech</a>
</span>
</div>
</body>
</html>