<?php
if (isset($_POST["price"])) {
    require 'DB.php';
    extract($_POST);
    //echo "$title $price $genre $quantity";

    $target_dir = "uploads/";
    $unik = rand(100000000, 2000000);
    $unik_2 = rand(100000000, 399999999999);
    $join = $unik . "-" . $unik_2;
    $text = pathinfo(basename($_FILES["cover"]["name"]), 4);
    // if ($ext !="png" or $ext !="jpeg" or  $ext !="jpg" );
    //echo $text;
    //die();
    $target_file = $target_dir . $join . "." . $text;
    if (move_uploaded_file($_FILES["cover"]["tmp_
 
    
     name"], $target_file)) {
        $sql = "INSERT INTO `movies`(`movie_id`, `title`, `genre`, `quantity`, `price`, `cover`, `user_id`) VALUES 
                (null,'$title','$genre','$quantity',$price,'$target_file',1)";
        mysqli_query($conn, $sql);
    } else {
        $message = "failed to upload";

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
    <title>Add movie</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Add A NEW MOVIE
                </div>
            </div>
            <div class="card-body">
                <?php
                if (isset($message))
                    echo "<p class='text-danger'>$message</p>"


                ?>

                <form action="save.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" required>


                    </div>

                    <div class="form-group">

                        <label for="title">Genre</label>
                        <select name="genre" id="" class="form-control">
                            <option value="Horror">Horror</option>
                            <option value="Documentary">Documentary</option>
                            <option value="Action">Action</option>
                            <option value="Romance">Romance</option>
                            <option value="soaps">soaps</option>
                            <option value="Afrosinema">Afrosinema</option>
                            <option value="history">History</option>
                            <option value="sports">sports</option>
                        </select>
                        <div class="form_froup">
                            <label for="title">Price</label>
                            <input type="number" step="0.5" class="form-control" name="price" required>

                        </div>
                        <div class="form_froup">
                            <label for="title">quantity</label>
                            <input type="number" class="form-control" name="quantity" required>

                        </div>


                        <div class="form_froup">
                            <label for="title">cover Photo</label>
                            <input type="file" accept="image/jpeg,image/x-png,image/jpg" class="form-control"
                                   name="cover" required>

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