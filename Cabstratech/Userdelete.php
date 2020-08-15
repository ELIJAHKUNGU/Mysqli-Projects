<?php
if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="delete from users where user_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);

}
header("location:user.php"); //redirect to user.php