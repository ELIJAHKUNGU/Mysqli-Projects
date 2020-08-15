<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabstatech</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


</head>
<?php
require 'navbar.php';
?>
<body>

<div class="container">
    <br><br>
    <div class="card-header" style="height: 80px">

        <h1 align="center">Supplier Details </h1>

    </div>
    <div class="card-header" style="height: 80px">
        <form action="">
            <input type="search" placeholder="search" class="form-control">
        </form>

    </div>
    <div class="card">

        <table class="table" id="suppliers" >
            <div>
                <thead class="card-header bg-info">
                <tr>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Description</th>
                    <th>Delete</th>

                </tr>

                </thead>
            </div>
            <div class="card-body" >
                <tbody>
                <?php
                require 'DB.php';
                $sql="select * from suppliers order by user_id desc";
                $results=mysqli_query($conn,$sql);
                while ($row =mysqli_fetch_assoc($results))
                {
                    extract($row);
                    echo "<tr>
                    <td>$user_id</td>
                    <td class=''>$name</td>
                    <td>$phonenumber</td>
                    <td>$address</td>
                    <td>$email</td>
                    <td>$description</td>
                     <td> <a href='Sdelete.php?id=$user_id' class='btn btn-danger'>Delete Supplier</a> </td>
                   
              
                </tr>";
                }
                ?>
                </tbody>
        </table>
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
<script>
    $(document).ready( function () {
        $('#cabs').DataTable();
    } );$(document).ready( function () {
        $('#cabs').DataTable();
    } );
</script>

</body>
</html>
