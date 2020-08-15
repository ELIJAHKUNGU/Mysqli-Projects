<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row"><br><br><br>
						<!--Store pages-->
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<ul class="footer-links" style="font-size:10px; margin-top:50px">
								<li style="margin-top:-30px"><a href="#">Contact Us.</a></li>
									<li style="margin-top:-30px"><a href="#">How to shop on #name</a></li>
									<li style="margin-top:-30px"><a href="#">Corporate and Bulk purchase.</a></li>
									<li style="margin-top:-30px"><a href="#">Return Policy.</a></li>
									<li style="margin-top:-30px"><a href="#">Shipping and delivery.</a></li>
									<li style="margin-top:-30px"><a href="#">Join our online community.</a></li>
									<u><li style="margin-top:-30px"><a href="#">LET US HELP YOU</a></li></u>
								</ul>
								<div class="col-md-6 text-center" style="font-size:12px; margin-top:20px; margin-left:-29px">
						<h7 style="color:white;">TALK TO US</h7>
							<ul class="footer-payments">
							<a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
                            <a href="#" class="w3-hover-text-red"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-google"></i></a>
                            <a href="#" class="w3-hover-text-grey"><i class="fa fa-envelope"></i></a>
                            <a href="#" class="w3-hover-text-indigo"><i class="fa fa-google-plus"></i></a>
  							</ul>
							
							</div>
						</div>
</div><!--Store pages-->
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<ul class="footer-links" style="font-size:10px; margin-top:50px">
									<li style="margin-top:-30px"><a href="#">Privacy Policy.</a></li>
									<li style="margin-top:-30px"><a href="#">Terms and Conditions.</a></li>
									<li style="margin-top:-30px"><a href="#">About Us.</a></li>
									<u><li style="margin-top:-30px"><a href="#">KNOW US MORE</a></li></u>
								</ul>
								<div class="col-md-6 text-center" style="font-size:12px; margin-top:20px; margin-left:-29px">
						<h7 style="color:white;">PAY US WITH</h7>
							<ul class="footer-payments">
							<a href="#" class="w3-hover-text-indigo"><i class="fa fa-paypal"></i></a>
                            <a href="#" class="w3-hover-text-red"><i class="fa fa-m-pesa"></i></a>
                            <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-bitcoin"></i></a>
                            <a href="#" class="w3-hover-text-grey"><i class="fa fa-envelope"></i></a>
                            <a href="#" class="w3-hover-text-indigo"><i class="fa fa-google-plus"></i></a>
  							</ul>
							
							</div>
						</div>
</div>

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
