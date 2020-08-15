<?php
include ('database_connection.php');

if (isset($_SESSION['type'])){
    header("location: index.php");

}

$message = '';
if(isset($_POST['login']))
{
    $query = "
    SELECT * FROM user_details where user_emai = :user_email
    ";
    $statement = $connect -> prepare($query);
    $statement -> execute(array(
            'user_email' => $_POST["user_email"])
    );
    $count = $statement->rowCount();
    if ($count > 0){
        $result = $statement->fetchAll();
        foreach ($result as $row){
            if (password_verify($_POST['user_password'],$row['user_password']))
            {
                if ($row['user_status'] == 'Active')
                {
                    $_SESSION['type'] = $row['user_type'];
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['user_name'] = $row['user_name'];
                    header("location:index.php ");

                }else{
                    $message = "<label> Your account is disabled, contact Master </label>";



                }

            }
            else{
                $message = "<label> wrong Password</label>";

            }

        }


    }else{
        $message = "<label>wrong Email Address</label>";
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
    <link rel="stylesheet" href="js/popper.min.js">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<br>
<div class="container card">
    <h2 align="center" class="card-header">Inventory Management System</h2>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading card-header">Login</div>
            <div class="panel-body">
                <?php
                echo $message;
                ?>
                <form action="" method="post">
                    <div class="form-group ">
                    <label>User Email</label>
                     <input type="email" name="user_email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="user_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-danger">

                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>