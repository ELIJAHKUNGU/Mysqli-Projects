<?php
if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'DB.php';
    $sql ="delete from customer where user_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);


    $_SESSION['Message']= "Records has been deleted successful!";
    $_SESSION['msg_type'] = "danger";

}
header("location:customeraccount.php"); //redirect to show.php