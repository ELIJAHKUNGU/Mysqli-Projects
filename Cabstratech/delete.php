<?php
if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="delete from product where movie_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);


    $_SESSION['Message']= "Records has been deleted successful!";
    $_SESSION['msg_type'] = "danger";

}
header("location:show.php"); //redirect to show.php