<?php

include("../db.php");

if (isset($_GET["product_id"])) {


    /*$product_id = $_REQUEST['product_id'];*/

    $result = "select product_id, product_title, product_price, oldprize, product_desc, product_cat, product_brand 
            from products where product_id='$product_id'"
    or die ("query 1 incorrect.......");
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);

    /*list($product_id,$product_title,$product_price,$oldprize,$product_desc,$product_cat, $product_brand)=mysqli_fetch_array($result);*/
}
if(isset($_POST['btn_save'])) 
{
    $product_title=$_POST['product_title'];
    $product_price=$_POST['product_price'];
    $oldprize=$_POST['oldprize'];
    $product_desc=$_POST['product_desc'];
    $product_cat=$_POST['product_cat'];
    $product_brand=$_POST['product_brand'];
        
mysqli_query($con,"update products set product_title='$product_title', product_price='$product_price', oldprize='$oldprize', product_desc='$product_desc', product_cat='$product_cat', product_brand='$product_brand' where product_id='$product_id'")or die("Query 2 is inncorrect..........");

header("location: manage_pdts.php");
mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="style/js/jquery-1.11.1.min.js"></script>

</head>
<body style="background-image: url('../img/cdgfx.jpg')">
 
   	 <?php include("include/header.php");?>
   	<div class="container-fluid">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px;background-image: url('../img/cdgfx.jpg')">
  	<div class="panel panel-default" style="background-image: url('../img/cdgfx.jpg')">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1><span class="glyphicon glyphicon-edit"></span> Edit product details  </h1></div><br>
	<div class="panel-body" style="background-image: url('../img/cdgfx.jpg');">
		<div class="col-lg-7">
        <div class="well">
        <form action="edit_pdts.php" method="post" name="form" enctype="multipart/form-data">
        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id;?>" />
<p>Existing Product Title</p>
        <input class="input-lg thumbnail form-control text-uppercase" type="text" name="product_title" id="product_title" autofocus style="width:100%; color:red" value="<?php echo $product_title; ?>" requiredautofocus>
<p>Existing Description</p>
<textarea class="input-lg thumbnail form-control" name="product_desc" id="product_desc" style="width:100%; height:100px; color:red" value="<?php echo $product_desc; ?>"><?php echo $product_desc; ?></textarea>
<!--<p>Add Images | All dimensions</p>-->
<!--<div style="background-color:#CCC">-->
<!--<input class="input-lg" type="file" style="width:100%" name="product_image" class="btn thumbnail" id="product_image" >-->
<!--<input type="file" style="width:100%" name="product_image" class="btn thumbnail" id="product_image" >-->
<!--<input type="file" style="width:100%" name="product_image" class="btn thumbnail" id="product_image" >-->
<!--<input type="file" style="width:100%" name="product_image" class="btn thumbnail" id="product_image" >-->
<!--</div>-->
</div>
<div class="well">
<h3>Pricing</h3>
<p>Existing Price</p>
<div class="input-group">
      <div class="input-group-addon">Ksh</div>
      <p>Current actual Price</p><input type="input-lg text" class="form-control" name="product_price" id="product_price" style="color:red" value="<?php echo $product_price; ?>">
	  <p>Existing old Price</p><input type="input-lg text" class="form-control" name="oldprize" id="oldprize" style="color:red" value="<?php echo $oldprize; ?>">
     </div>
	   
	  <br>


    </div>
        </div>  
        <div class="col-lg-5">
        <div class="well">
<h3>Category</h3>  
<p>Product type</p>
<input type="input-lg number" name="product_type" id="product_type" class="form-control" style="color:red"  value="<?php echo $product_cat; ?>">
<br>
<p>Vendor / Brand</p>
<input type="input-lg number" name="brand" id="brand" class="form-control" style="color:red"  value="<?php echo $product_brand; ?>">
<br>

<p>Size</p>
<input type="input-lg text" name="size" id="priced" class="btn form-control" style="width:15%; border:2px; color:red"  placeholder="List">
<input type="input-lg text" name="size1" id="size1" class="btn form-control" style="width:15%; color:red"  placeholder="availa">
<input type="input-lg text" name="size2" id="size2" class="btn form-control" style="width:15%; color:red"  placeholder="ilable">
<input type="input-lg text" name="size3" id="size3" class="btn form-control" style="width:15%; color:red"  placeholder="le s">
<input type="input-lg text" name="size4" id="size4" class="btn form-control" style="width:15%; color:red"  placeholder="izes">
<input type="input-lg text" name="size5" id="size5" class="btn form-control" style="width:15%; color:red"  placeholder="here">
<p>Colors</p>
<input type="input-lg text" name="color" id="color" class="btn form-control" style="width:25%; color:red" placeholder="List">
<input type="input-lg text" name="color1" id="color1" class="btn form-control" style="width:25%; color:red"  placeholder="availa">
<input type="input-lg text" name="color2" id="color2" class="btn form-control" style="width:25%; color:red"  placeholder="ble co">
<input type="input-lg text" name="color3" id="color3" class="btn form-control" style="width:25%; color:red"  placeholder="lors">
<input type="input-lg text" name="color4" id="color4" class="btn form-control" style="width:25%; color:red"  placeholder="here">
<input type="input-lg text" name="color5" id="color5" class="btn form-control" style="width:25%; color:red"  placeholder="^__^">
</div>          
</div>
<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
    <button type="submit" class="btn btn-success " name="btn_save" id="btn_save" style="font-size:18px">Submit</button></div>
</div>
        </form>
 
	</div>
</div></div></div>
<?php include("include/js.php"); ?>
</body>
</html>