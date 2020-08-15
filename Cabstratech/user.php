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

        <h1 align="center"> USERS</h1>

    </div>
    <div class="card-header" style="height: 80px">
        <form action="">
            <input type="search" placeholder="search" class="form-control">
        </form>

    </div>
    <div class="card">

        <table class="table" id="users">
            <div>
                <thead class="card-header">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>

                </tr>

                </thead>
            </div>
            <div class="card-body">
                <tbody>
                <?php
                require 'DB.php';
                $sql="select * from users order by user_id desc";
                $results=mysqli_query($conn,$sql);
                while ($row =mysqli_fetch_assoc($results))
                {
                    extract($row);
                    echo "<tr>
                    <td>$user_id</td>
                    <td>$username</td>
                    <td>$email</td>
                    <td>$password</td>
                     <td><button class=\"btn btn-danger btn-group\" data-toggle=\"modal\" data-target=\"#myModal\">Delete user</button></td>
                     
                      <td> <a href='Userupdate.php?id=$user_id' class='btn btn-info'>Update User </a> </td>
                </tr>";
                }

                ?>
                </tbody>
        </table>
    </div>
</div>
</div>
<br><br>
<a href="register.php">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header" >
                        <h3>+Add user</h3>



                    </div>
                </div>
            </div>
        </div>
    </div>
</a>


<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body ">
                    <h6 class="text-danger" >Are sure you want Delete the User</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>

                    <?php
                    require 'DB.php';
                    $sql="select * from users order by user_id desc";
                    $results=mysqli_query($conn,$sql);

                    echo "<button> <a href='Userdelete.php?id=$user_id' class='btn btn-danger'>Delete User </a> </button>";



                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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