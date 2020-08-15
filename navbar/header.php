<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="js/jquery.min.js">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<br>
<div class="container">
    <h2 align="center">Inventory</h2>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Home</a>
            </div>
            <ul class="nav navbar-nav">
                <?php
                if ($_SESSION['type']== 'master')
                {
                ?>
                    <li><a href="user.php">User</a></li>
                    <li><a href="category.php">Category</a></li>
                    <li><a href="brand.php">Brand</a></li>
                    <li><a href="product.php">Product</a></li>
                    <?php
                }
                ?>
                <li><a href="order.php">Order</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle = "dropdown"><span class="label label-pill label-danger count"></span>
                            <?php
                            echo $_SESSION['user_name'];
                            ?>
                          </a>
                    <ul class="dropdown-menu"
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>


                </ul>
                </li>


            </ul>
            
        </div>
        

    </nav>

</div>

</body>
</html>