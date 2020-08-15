<?php
if (isset($_POST["rate"])) {


    require 'db.php';
    extract($_POST);



  $sql="INSERT INTO `form`(`name`, `email`, `age`, `role`, `rate`, `choice`, `checkbox`) VALUES 
                 ('$name','$email','$age','$role','$rate','$choice','$checkbox')";

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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <script src="js/popper.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<h1>Survey Form</h1>


    <?php
    if (isset($message))
        echo "<p class='text-danger'>$message</p>"


    ?>
Let us know how we can improve the FreeCodeCamp
    <form action="index.php" method="post" enctype="multipart/form-data">

     Name:  <input type="text" name="name"  placeholder="Enter your name">
    <br><br>
      Email: <input type="text" name="email" placeholder="Enter your Email">
    <br><br>
   Age: <input type="text" name="age" placeholder="Age">
    <br><br>
    <p>Which option best describe your current role?
        <select name="role" id="">
            <option value="">Occupation </option>
            <option value="">Student </option>

        </select>
    </p>
    <p>How likely is that you would recommend freeCodeCamp to a friend ?
        <br><br>
        <input type="radio" name="rate" value="definitely" >
        <label for="" id="rate">Definitely</label>

        <br><br>
        <input type="radio" name="rate" value="maybe">
        <label for="" id="rate">Maybe</label>

        <br><br>
        <input type="radio" name="rate" value="notsure" >
        <label for="">Not sure</label>

    </p>
    <p>What do you like most in FCC:
        <select name="choice" id="choice">
            <option value="">Select an Option</option>
        </select>
    </p>
    <p>Things that should be improved in the feature (Check all that apply)
        <br><br>
        <input type="checkbox" name="checkbox" value="fronted_end">
        <label for="" id="checkbox">Fronted_end Projects</label>

        <br><br>
        <input type="checkbox" name="checkbox" value="back_end">
        <label for="" id="checkbox">Back_end Projects</label>

        <br><br>
        <input type="checkbox" name="checkbox" value="data_visualization">
        <label for="" id="checkbox">Data Visualization</label>


    </p>
        <button type="submit" value="submit" class="btn-outline-primary bg-warning">submit</button>
</form>



</div>
</body>
</html>