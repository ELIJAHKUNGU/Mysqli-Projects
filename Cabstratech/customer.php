<?php
if (isset($_POST["email"])) {
    require "DB.php";
    extract($_POST);
    $sql = "INSERT INTO `customer`(`user_id`, `name`, `phonenumber`,  `email`, `location`) 
             VALUES (null,'$name','$phonenumber','$email','$location')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header('location:customer.php');
    $msg = 'record added successfull';
}else{
    $msg = 'record were not added';
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
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<?php
require_once 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card-header" style="height: 80px">

                <h1 align="center" class="text-info">Customer</h1>

            </div>
            <br><br>

            <div class="card">



                <div class="card-body">
                    <form action="customer.php" method="post">
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" name="phonenumber" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" name="location">

                        </div>
                        <div align="center">

                            <button  class="btn btn-info btn-block col-6" >Register Customer</button>
                        </div>
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
</html>l>