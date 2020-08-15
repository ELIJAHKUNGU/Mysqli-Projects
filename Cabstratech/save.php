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
<?php
require 'navbar.php';
?>
<br><br>

<div class="container">
    <?php

    require_once 'process.php';
    ?>
    <div class="row justify-content-center">
        <div class="col-sm-6 card">
            <div class="" style="border: dotted">
                <div class="card-header bg-info" style="height: 100px" align="center">

                    <h1>Add NEW PRODUCT</h1>
                </div>
              </div>
              <div class="card-body">

                <form action="process.php" method="post"">

                    <div class="form-group">
                        <label for="title" class="text-success text-bold">NAME OF ITEM</label>
                        <input type="text" class="form-control" name="title" required placeholder="Enter the Name of item">
                    </div>
                    <div class="form-group">
                        <label for="title" class="text-success">PRICE</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter the price per item">
                        <div class="form_group">
                            <label for="title" class="text-success">DISCOUNT</label>
                            <input type="number" step="0.5" class="form-control" name="discount" placeholder="if there is any">
                        </div>
                        <div class="form_group">
                            <label for="title" class="text-success">Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="Pc">Pc</option>
                                <option value="Bags">Bags</option>
                                <option value="Bales">Bales</option>
                                <option value="Dozens">Dozens</option>
                                <option value="Dozens">cotton</option>
                            </select>

                        </div>
                        <div class="form_group">
                            <label for="title" class="text-success">QUANTITY</label>
                            <input type="number" class="form-control" name="quantity" required placeholder="Enter the quantity">

                        </div>
                    </div>
                    <button class="btn btn-dark btn-block" name="save" type="submit">Add Product </button>
                </form>
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