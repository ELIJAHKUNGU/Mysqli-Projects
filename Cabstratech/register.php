<?php
if (isset($_POST["password"])) {
    require "DB.php";
    extract($_POST);
    //existing email address in our database
    $sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
    $check_query = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($check_query);
    if ($count_email > 0) {
        echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
			</div>
		";
        exit();
    } else {
        $sql = "INSERT INTO users(`user_id`, `username`, `email`, `password`) 
                      VALUES (null,'$username','$email','$password')";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
        header('location:user.php');

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
</head>
<body>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 card">
            <div class="card-header bg-info" style="height: 80px">

                <h2> Register Here</h2>


                  </div>
            <br><br>
            <div>
                <div class="card-body">
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button class="btn btn-info btn-block">Register</button>
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