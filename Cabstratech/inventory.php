<?php
require "security.php";
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>

<?php
require "navbar.php";
?>

<div class="container">
    <table class="display" id="product">
        <thead>
        <tr>

            <th>Name of Item</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Type</th>
            <th>Total</th>
            <th>Date Sold</th>


        </tr>
        </thead>
        <tbody>
        <?php
        require "DB.php";
        $sql = "SELECT product.title,product.price,product.type,.quantity,sales.total,sales.date_sold 
                FROM product 
                JOIN sales 
                ON product.movie_id =sales.movie_id";
        $results = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($results)){
            extract($row);
            echo "<tr>
                     
                       <td>$title</td>
                       <td>$quantity</td>
                       <td>$price</td>
                       <td>$type</td>
                       <td>$total</td>
                       <td>$date_sold</td>
                      
                      </tr>";
        }
        ?>



        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#movies').DataTable();
    } );
</script>

</body>
</html>