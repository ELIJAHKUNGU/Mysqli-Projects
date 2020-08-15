<?php

include("../db.php");
session_start();


if(isset($_POST['submit']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$oldprize=$_POST['oldprize'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$size=$_POST['size'];
$size1=$_POST['size1'];
$size2=$_POST['size2'];
$size3=$_POST['size3'];
$size4=$_POST['size4'];
$size5=$_POST['size5'];
$color=$_POST['color'];
$color1=$_POST['color1'];
$color2=$_POST['color2'];
$color3=$_POST['color3'];
$color4=$_POST['color4'];
$color5=$_POST['color5'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
        move_uploaded_file($picture_tmp_name,"../images/product_images/".$pic_name);
}
//picture1 coding
$picture_name1=$_FILES['picture1']['name'];
$picture_type1=$_FILES['picture1']['type'];
$picture_tmp_name1=$_FILES['picture1']['tmp_name'];
$picture_size1=$_FILES['picture1']['size'];

if($picture_type1=="image/jpeg" || $picture_type1=="image/jpg" || $picture_type1=="image/png" || $picture_type1=="image/gif")
{
	if($picture_size1<=50000000)
	
		$pic_name1=time()."_".$picture_name1;
		move_uploaded_file($picture_tmp_name1,"../images/product_images1/".$pic_name);
}
//picture2 coding
$picture_name2=$_FILES['picture2']['name'];
$picture_type2=$_FILES['picture2']['type'];
$picture_tmp_name2=$_FILES['picture2']['tmp_name'];
$picture_size2=$_FILES['picture2']['size'];

if($picture_type2=="image/jpeg" || $picture_type2=="image/jpg" || $picture_type2=="image/png" || $picture_type2=="image/gif")
{
	if($picture_size2<=50000000)
	
		$pic_name2=time()."_".$picture_name2;
		move_uploaded_file($picture_tmp_name2,"../images/product_images2/".$pic_name);
}
        
//picture3 coding
$picture_name3=$_FILES['picture3']['name'];
$picture_type3=$_FILES['picture3']['type'];
$picture_tmp_name3=$_FILES['picture3']['tmp_name'];
$picture_size3=$_FILES['picture3']['size'];

if($picture_type3=="image/jpeg" || $picture_type3=="image/jpg" || $picture_type3=="image/png" || $picture_type3=="image/gif")
{
	if($picture_size3<=50000000)

		$pic_name3=time()."_".$picture_name3;
		move_uploaded_file($picture_tmp_name3,"../images/product_images3/".$pic_name);

mysqli_query($con,"insert into products (product_cat, product_brand,product_title,product_price, product_desc, product_image, product_image1,
 product_image2, product_image3, oldprize, size, size1, size2, size3, size4, size5, color, color1, color2, color3, color4, color5) 
values ('$product_type','$brand','$product_name','$price','$details','$pic_name','$pic_name',
'$pic_name','$pic_name','$oldprize','$size','$size1','$size2','$size3','$size4','$size5','$color','$color1','$color2','$color3','$color4','$color5')")
or die ("Unable to conect to server database...Please chek your details and try again!");

 header("location: sumit_form.php?success=1");
}

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
 
   	 <?php include("include/header.php");?>
   	<div class="container-fluid">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1><span class="glyphicon glyphicon-tag"></span> Product / Add Product  </h1></div><br>
	<div class="panel-body" style="background-color:#E6EEEE;">
		<div class="col-lg-7">
        <div class="well">
        <form action="add_product.php" method="post" name="form" enctype="multipart/form-data">
        <p>Title</p>
        <input class="input-lg thumbnail form-control text-uppercase" type="text" name="product_name" id="product_name" autofocus style="width:100%" placeholder="Product Name" required>
<p>Description</p>
<textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder="Full product description goes here..." required></textarea>
<p>Add Images | All dimensions</p>
<div style="background-color:#CCC">
<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
<input type="file" style="width:100%" name="picture1" class="btn thumbnail" id="picture1" >
<input type="file" style="width:100%" name="picture2" class="btn thumbnail" id="picture2" >
<input type="file" style="width:100%" name="picture3" class="btn thumbnail" id="picture3" >
</div>
</div>
<div class="well">
<h3>Pricing</h3>
<p>Price</p>
<div class="input-group">
      <div class="input-group-addon">Ksh</div>
      <input type="text" class="form-control" name="price" id="price"  placeholder="0.00" required>
	  <input type="text" class="form-control" name="oldprize" id="oldprize"  placeholder="Previous price...">
     </div>
	   
	  <br>


    </div>
        </div>  
        <div class="col-lg-5">
        <div class="well">
<h3>Category</h3>  
<p>Product type</p>
<input type="number" name="product_type" id="product_type" class="form-control" placeholder="1 Sneakers,2 Ladies Wears,3 Mens Wear">
<br>
<p>Vendor / Brand</p>
<input type="number" name="brand" id="brand" class="form-control" placeholder="1 Nike,2 Vans,3 Fila,4 Adidas">
<br>

<p>Available Sizes</p>
<input type="text" name="size" id="priced" class="btn form-control" style="width:15%; border:2px"  placeholder="number">
<input type="text" name="size1" id="size1" class="btn form-control" style="width:15%"  placeholder="number">
<input type="text" name="size2" id="size2" class="btn form-control" style="width:15%"  placeholder="number">
<input type="text" name="size3" id="size3" class="btn form-control" style="width:15%"  placeholder="number">
<input type="text" name="size4" id="size4" class="btn form-control" style="width:15%"  placeholder="number">
<input type="text" name="size5" id="size5" class="btn form-control" style="width:15%"  placeholder="number">
<p>Available Colors</p>
<input type="text" name="color" id="color" class="btn form-control" style="width:25%" placeholder="color">
<input type="text" name="color1" id="color1" class="btn form-control" style="width:25%"  placeholder="color">
<input type="text" name="color2" id="color2" class="btn form-control" style="width:25%"  placeholder="color">
<input type="text" name="color3" id="color3" class="btn form-control" style="width:25%"  placeholder="color">
<input type="text" name="color4" id="color4" class="btn form-control" style="width:25%"  placeholder="hcolor">
<input type="text" name="color5" id="color5" class="btn form-control" style="width:25%"  placeholder="color">
</div>          
</div>
<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Add Product</button>
    </div>
        </form>
 
	</div>
</div></div></div>
<?php include("include/js.php"); ?>
</body>
</html>