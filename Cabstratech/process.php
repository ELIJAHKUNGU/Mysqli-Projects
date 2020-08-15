<?php

$mysqli = new mysqli('localhost' , 'root','','cabs')or
die(mysqli_error($mysqli));
$message = 'Discount should be less than price';

if (isset($_POST['save'])){
    $title  =$_POST['title'];
    $price  =$_POST['price'];
    $type  =$_POST['type'];
    $discount  =$_POST['discount'];
    $quantity  =$_POST['quantity'];
    $_SESSION['Message']= "Records has been saved!";
    $_SESSION['msg_type'] = "Success";


    $mysqli-> query("INSERT INTO `product`(`movie_id`, `title`, `price`, `discount`, `type`, `quantity`) 
                VALUES (null ,'$title','$price','$discount','$type','$quantity')")
    or
    die($mysqli->error);
    header("location:show.php"); //redirect to show.php
}

/*user update*/


