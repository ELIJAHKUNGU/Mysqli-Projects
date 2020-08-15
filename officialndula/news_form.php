<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>

	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="container-fluid">
				<!-- row -->
				

						
						<div class="newsletter">
							<p>Sign Up for our <strong>newsletter to receive updates on offers and new products</strong></p>
							<form id="offer_form" onsubmit="return false">
								<input class="input" type="email" id="email" name="email" placeholder="Enter Your Email">
								<button class="newsletter-btn" value="Sign Up" name="signup_button" type="submit"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<div class="" id="offer_msg">
                                <!--Alert from signup form-->
                            </div>
							<a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
                            <a href="#" class="w3-hover-text-red"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-google"></i></a>
                            <a href="#" class="w3-hover-text-grey"><i class="fa fa-envelope"></i></a>
                            <a href="#" class="w3-hover-text-indigo"><i class="fa fa-google-plus"></i></a>
  
						</div>
                                    
                                    	
                                        
                                    

                                </div>
                                
								</form>
                           
						<!-- Shiping Details -->
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					
					<!-- /Order Details -->
				
				<!-- /row -->
			</div>