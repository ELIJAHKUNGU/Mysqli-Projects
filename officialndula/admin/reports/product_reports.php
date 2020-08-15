<?php
global $userClass,$uid;
echo '  
    <ul id="cat_menu">
        <li><a class="itmmnu_" href="?p=admin&cat=products&itm=">All Products</a></li>
        <li><a class="itmmnu_add" href="?p=admin&cat=products&itm=add">Add New Product</a></li>
        <li><a class="itmmnu_edit" href="?p=admin&cat=products&itm=edit">Edit Product</a></li>
        <br clear="left"/>
    </ul>
';

if(getIfSet($_GET['itm'])==""){
    echo '
        <div >  
                            <h3> All Products</h3>
                            <table width="100%" id="pm" >
                            <thead>
                                <tr>
                                    <th>Option</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Date Added</th>
                                </tr>
                            </thead>
                            <tbody>';
                                $sql = "SELECT * FROM `products` order by date DESC ";
                                if($result = $db->db_query($sql)) {
                                    $no_rows = $db->db_num($sql);				
                                    if($no_rows){
                                        while($row = $result->fetch_assoc()){
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $description = $row['specs'];
                                            $price = $row['price'];
                                            $added = $row['date']; 
                                            
                                            echo '<tr>
                                                    <td><input type="button" class="button2" onclick="javascript:document.location=\'?p=admin&cat=products&itm=edit&opt='.$id.'\'" class="editproduct" data-id="'.$id.'" data-name="'.$name.'" value="Edit"/></td>
                                                    <td>'.$name.'</td>
                                                    <td>'.$description.'</td>
                                                    <td>'.$price.'</td>
                                                    <td>'.$added.'</td>
                                                </tr> ';
                                        }
                                    }
                                }
                      echo '</tbody>
                            </table>
                        </div>
        ';
}else if(getIfSet($_GET['itm'])=="add"){
    echo '
            <div class="settings_widget">
                <h3>Add New Product</h3>
                <form id="addprod">
                    <table border="0">
                            <tr>
                                    <td>Product Name</td>
                                    <td>
                                    <input type="text" id="product_name" />
                                    </td>
                            </tr>
                            <tr>
                                    <td>Description</td>
                                    <td>
                                    <input type="text" id="product_specs" />
                                    </td>
                            </tr>
                            <tr>
                                    <td>Price</td>
                                    <td>
                                    <input type="text" id="product_price" />
                                    </td>
                            </tr>
                            <tr>
                                    <td>Category <input type="button" class="addnew button2" data-id="categories" value="+"/></td>
                                    <td>
                                    <select id="product_category">
                                        <option></option>
                                    ';

                                    $sql = "SELECT id, name FROM `categories` where id != '".$r['category']."' ";
                                    if($result = $db->db_query($sql)) {
                                        $no_rows = $db->db_num($sql);				
                                        if($no_rows){
                                            while($row = $result->fetch_assoc()){
                                                $id = $row['id'];
                                                $name = $row['name'];
                                                echo '<option value="'.$id.'">'.$name.'</option>';
                                            }
                                        }
                                    }

                                    echo '
                                    </select>
                                    </td>

                            </tr>
                            <tr>
                                    <td></td>
                                    <td>
                                    <input type="button" id="submit"
                                     onclick="javascript:addProduct(product_name.value,product_specs.value,product_price.value,product_category.value)" 
                                     value="Add product" />
                                    </td>
                            </tr>
                    </table>
                    <br />
                            <div id="add_status"></div>


            </form>
            </div>
        ';
        
}else{
    if(getIfSet($_GET['opt'])){
    $productID = $_GET['opt'];
        if($r=$db->db_select("SELECT * FROM products WHERE id = '$productID'")){
            echo '
            <div class="settings_widget">
                            <h3>Edit Product</h3>
                            <div align="center">
                            <style>
                                #titlesuploadform{
                                    border:1px #333 dashed;
                                    padding:10px;
                                    background:#f4edae;
                                }
                            </style>
                            <script type="text/javascript" src="jx/jquery.form.js"></script>
                                <form action="plgs/sb_fileupload.php?id='.$productID .'&item=plot&title='.$productID.'" id="titlesuploadform" method="post">
                                            <div align="center">
                                    <h1>Upload Image</h1>
                                    File Name:<input type="filename" class="input2" id="filename" value=""/>
                                    <input type="file" id="newimage" name="newimage"/>
                                    <div id="upload_progress"></div>
                                    <input type="hidden" value="Upload" id="upload" />
                                    <div id="upload_percentage"></div>
                                    <div id="status"></div>
                                </form>
                            </div>

                            <form id="addprod">
                                <div style="width:350px;" data-id="'.$productID.'" data-typ="refresh_image" align="center" class="image_box">
                                    <img src="uplds/prdcts/'.$r['image'].'" width="100%" />
                                </div> 
                                    
                                
                                <br clear="left">
                                <table border="0">
					<tr>
						<td>Product Image</td>
						<td>
						<input type="text" data-id="'.$productID.'" data-typ="refresh_image_name" id="product_image" value="'.$r['image'].'" />
						</td>
					</tr>
                                        <tr>
						<td>Product Name</td>
						<td>
						<input type="text" id="product_name" value="'.$r['name'].'" />
						</td>
					</tr>
					<tr>
						<td>Description</td>
						<td>
						<input type="text" id="product_specs" value="'.$r['specs'].'" />
						</td>
					</tr>
					<tr>
						<td>Price</td>
						<td>
						<input type="text" id="product_price" value="'.$r['price'].'" />
						</td>
					</tr>
					<tr>
						<td>Category <input type="button" class="addnew button2" data-id="categories" value="+"/></td>
						<td>
						<select id="product_category">
                                                    <option value="'.$r['category'].'">'.$userClass->getCategoryName($r['category']).'</option>
						';
                                                
                                                $sql = "SELECT id, name FROM `categories` where name !=  '' ";
						if($result = $db->db_query($sql)) {
                                                    $no_rows = $db->db_num($sql);				
                                                    if($no_rows){
                                                        while($row = $result->fetch_assoc()){
                                                            $id = $row['id'];
                                                            $name = $row['name'];
                                                            echo '<option value="'.$id.'">'.$name.'</option>';
							}
                                                    }
						}
						
						echo '
						</select>
						</td>
                                                
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="button" id="submit"
						 onclick="javascript:editProduct('.$r['id'].',product_image.value,product_name.value,product_specs.value,product_price.value,product_category.value)" 
						 value="Edit product" />
						</td>
					</tr>
				</table>
				<br />
					<div id="add_status"></div>
                                        
                                        
			</form>
                        </div>
            </div>
            ';
        }else{
            echo '<div style="padding:10px"><img src="imgx/alert.gif"> Oops! Product not found</div>';
        }
    }else{
        echo '<div style="padding:10px"><img src="imgx/alert.gif">
            Oops! Product not selected. <a href="?p=admin&cat=products">Select product</a>
         </div>';
    }
}

?>

<br clear="left"/>


<script>
$(document).ready(function(){
$('#newimage').click(function(){
		 console.log("Choose file");
	});
        
        $('#newimage').change(function(e) {
		 $('#upload').submit();
	 });
	
	 
	 $('#titlesuploadform').submit(function(e) {
                fname = $("#filename").val();
		 console.log("Attempt to upload");	
	 	var status = $('#status');
		if($('#newimage').val()) {			
			e.preventDefault();
			var fileExtension = ['jpg'];
			$(this).ajaxSubmit({ 
				target:'#status', 
				beforeSubmit: function(file , ext) {
					 if ($.inArray($("#newimage").val().split( '.' ).pop().toLowerCase(), fileExtension) == - 1) {
						status.html('<span class="star">* Only .jpg files are allowed</span>');
						return false;
       				 }else{
						 status.html('');
						}
					 
				  $("#upload_percentage").show();
				   $("#upload_percentage").html("0%");
				  //$("#upload_percent").fadeIn('slow');
				  $("#upload_progress").width('0%');
				  console.log("Start upload");
				},
				uploadProgress: function (event, position, total, percentComplete){	
					$("#upload_progress").width(percentComplete + '%');
					$("#upload_percentage").html(percentComplete + '%');
					//console.log("Loaded "+percentComplete);
					//$("#prgbr").html('<div id="prgstt">' + percentComplete +' %</div>')
					$(".progress-percentage").html(percentComplete + '%');;
				},
				success:function (data){
					console.log("Success!!");
					$('.progress-text').html('Success');
					$('#upload_percent').fadeOut('slow');           
                        image_file = $('.image_box');
                        product_image = $('#product_image');
                        $.post('inx/data.php',
                            {type:'get_new',ACS:2,id:image_file.attr('data-id'),typ:image_file.attr('data-typ')}, 
                            function(data){
                                image_file.html(data); 
                            });
                        $.post('inx/data.php',
                        {type:'get_new',ACS:2,id:product_image.attr('data-id'),typ:product_image.attr('data-typ')}, 
                        function(data){
                            product_image.val(data); 
                        });
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
    

});
</script>