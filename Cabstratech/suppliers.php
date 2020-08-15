<?php
if (isset($_POST["email"])) {
    require "DB.php";
    extract($_POST);
    $sql = "INSERT INTO `suppliers`(`user_id`, `name`, `phonenumber`, `address`, `email`, `description`) 
             VALUES (null,'$name','$phonenumber','$address','$email','$description')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header('location:fetchsupplier.php');
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
require_once 'navbar.php'
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card-header" style="height: 80px">
                <h1 align="center" class="text-info"> Suppliers</h1>
            </div>
            <br><br>
            <div class="card">
                <div class="card-body">
                    <form action="suppliers.php" method="post">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" name="phonenumber" required>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>More Details</label>
                            <input type="text" class="form-control" name="description">

                        </div>
                        <div align="center">

                        <button  class="btn btn-info btn-block col-6" >Register Supplier</button>
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
</html>
