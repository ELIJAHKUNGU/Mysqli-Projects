<link rel="stylesheet" href="css/bootstrap.css">
<?php
//get the id
//retrieve the movie
//dispaly
//update the movie
if (isset($_GET["id"]))
{
    $id = $_GET["id"];
    require 'DB.php';
    $sql="select * from users where user_id = $id";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);

}
if (isset($_POST["email"]))
{
    $email =$_REQUEST["email"];
    $password  =$_REQUEST["password"];


    $id =$_REQUEST["id"];
    require 'DB.php';
    $sql ="UPDATE `users` SET `email`='$email',`password`='$password' WHERE user_id=$id";
    mysqli_query($conn ,$sql) or die (mysqli_error($conn));
    header("location:user.php");

}



?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>updating</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header" align="center" style="height:  100px">
                    <h1 align="center">Updating User</h1>


                </div>

            </div>
            <div class="card-body">
                <div class="card-header">
                    <?="$username";?>
                </div>
                <?php

                if (isset($message))
                    echo "<p class='text-danger'>$message</p>"



                ?>

                <form action="Userupdate.php" method="post">
                    <input type="hidden" name="id" value="<?=$user_id?>">


            </div>

            <div class="form-group">


                <div class="form_group">
                    <label for="title">Email</label>
                    <input value="<?=$email?>" type="email"  name="email" class="form-control" required>

                </div>

                <div class="form_group">
                    <label for="title">Password</label>
                    <input value="<?=$password?>" type="text"  class="form-control" name="password" required>

                </div>





            </div>


            <button class="btn btn-dark btn-block">Update User</button>

            </form>

        </div>
    </div>

</div>








<div class="footer_copyright" align="center">
					<span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Cabstratech</a>
</span>
</div>

</div>
</body>
</html>
