<?php
if (isset($_POST["price"])) {
    require 'DB.php';
    extract($_POST);

        $sql = "INSERT INTO `movies`(`movie_id`, `title`, `discount`, `quantity`, `price`, `user_id`) VALUES 
                (null,'$title','$price','$quantity',$discount,1)";
        mysqli_query($conn, $sql);
    } else {
        $message = "";

    }




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabs Stocks</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header bg-info" style="height: 100px" align="center">

                    <h1>Add NEW PRODUCT</h1>
                </div>
            </div>
            <div class="card-body">
                <?php
                if (isset($message))
                    echo "<p class='text-danger'>$message</p>"


                ?>

                <form action="save.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="title" class="text-success text-bold">NAME OF ITEM</label>
                        <input type="text" class="form-control" name="title" required placeholder="Enter the Name of item">
                    </div>
                    <div class="form-group">
                        <label for="title" class="text-success">PRICE</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter the price per item">
                        <div class="form_group">
                            <label for="title" class="text-success">DISCOUNT</label>
                            <input type="number" step="0.5" class="form-control" name="discount" placeholder="if there is any" required>
                        </div>
                        <div class="form_group">
                            <label for="title" class="text-success">QUANTITY</label>
                            <input type="number" class="form-control" name="quantity" required placeholder="Enter the quantity">

                        </div>
                        <div class="form_group">
                            <label for="title" class="text-success">Date</label>
                            <input type="date" class="form-control" name="date" value="<?php echo date("d-m-y")?>" required >

                        </div>

                    </div>
                    <button class="btn btn-dark btn-block">save movie</button>
                </form>
            </div>
        </div>


    </div>
</div>


</body>
</html>