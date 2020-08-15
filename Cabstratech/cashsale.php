<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/popper.min.js">
    <script src="images"></script>
    <title>Cabs Cashsale</title>
</head>
<?php
require 'navbar.php';
?>
<body>
<div class="container">

    <br><br>
    <div class="justify-content-center" style="">
        <div align="center">
            <div class="card card-header col-5 bg-warning" style="height:100px">
                <h1>Cashsale Dashboard</h1>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                CASHSALE
            </div>
            <div class="card-body">
                <form action="cashsale.php" method="get">
                        <div class="container">
                        <label for="">Account Name:</label>
                        <input type="text" placeholder="Account Name">


                        <label for="">Customer Name:</label>
                        <input type="text" placeholder="Account Name">
                            <span  class="text-info float-right">
                            <?php
                            echo date("d-m-y");

                            ?>
                                </span>
                            <label for="" class="float-right">DateTime : </label>

                        </div>
                    </form>
                    <br></div>
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
