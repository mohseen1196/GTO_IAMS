<!DOCTYPE html>
<html>
<head>
<title>Green Top Organics</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Farming Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
</head>
<body class="cbp-spmenu-push">
	<!--banner-->
	<div class="banner abt-bnr">
		<!--header-->		
		<div class="header">
			<div class="container">	
				<div class="logo">
					<a href="index.php"> <img src="images/logo.png" alt=""/></a>
				</div>
				<!-- menu -->
				<div class="top-nav">
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
						<h3>Menu</h3>
						<a href="index.php">Home</a>
						<a href="about.php">About us</a>
						<!--<a href="products.php">Products</a>-->
						<a href="contact.php" class="active">Contact</a>
						<a href="admin/login.php">Login</a>
					</nav>
					<div class="main buttonset">	
							<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
							<button id="showRightPush"><img src="images/menu-icon.png" alt=""/></button>
							<!--<span class="menu"></span>-->
					</div>
					<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
					<script src="js/classie.js"></script>
					<script>
						var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
						showRightPush = document.getElementById( 'showRightPush' ),
						body = document.body;

						showRightPush.onclick = function() {
							classie.toggle( this, 'active' );
							classie.toggle( body, 'cbp-spmenu-push-toleft' );
							classie.toggle( menuRight, 'cbp-spmenu-open' );
							disableOther( 'showRightPush' );
						};

						function disableOther( button ) {
							if( button !== 'showRightPush' ) {
								classie.toggle( showRightPush, 'disabled' );
							}
						}
					</script>
					<!-- /script-for-menu -->
				</div>	
				<!-- //menu -->
			</div>
		</div>
		<!--//header-->
	</div>
	<!--//banner-->
	<!--contact-->
	<div class="contact">
		<div class="container">				
			<div class="contact-grids">
				<div class="col-md-8 map">
					<h3>How to find us</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11945.362788646225!2d73.98177519993898!3d18.419760978080685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2e91d2900aee1%3A0x9c2dc8ef02c7ae60!2sWadki%2C+Maharashtra+412308!5e1!3m2!1sen!2sin!4v1449588537003" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-4 address">
					<h3>Contact info</h3>
					<p class="cnt-p">Search us in Pune. Map provided to u to the left of this content </p>
					<p>Green Top Organics</p>
					<p>Wanowrie, Pune</p>
					<p>Telephone : 0231</p>
					<p>FAX : +91 9921009169, 9921009162</p>
					<p>Email : <a href="mailto:example@mail.com">mail@example.com</a></p>
				</div>									
				<div class="clearfix"> </div>		
			</div>
			<div class=" contact-form">
				<h3>Contact form</h3>
				<form>
					<div class="col-md-6 form-grids">
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					</div>
					<div class="col-md-6 form-grids">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>	
						<button class="btn btn-1 btn-1d"> Submit </button>
					</div>
					<div class="clearfix"> </div>					
				</form>
			</div>
		</div>		
	</div>
	<!--//contact-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-4 footer-grids">
					<h3>Navigation</h3>					
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About us</a></li>
						<li><!--<a href="products.php">Products</a>--></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids">
					<h3>Services</h3>
					<ul>
						<li><a href="#">Free Home Delivery</a></li>
						<li><a href="#">Packed In Well Bags</a></li>
						<li><a href="#">Discounts On Different Packages</a></li>
						<li><a href="#">Organic Manure -> Eco-Friendly</a></li>
						<li><a href="#">The Best In Market</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids">
					<h2><a href="index.php">Who are we?</a></h2>
					<p>We are the people who initiated the manufacturing of this product with the intetion of helping Indian farmers with quality products for their soil. We provide an eco friendly product without any noxious chemicals which will not cause any loss to the fertility of the soil.  <p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-left">
				<p>Green Top Organics | Designed By Mr.Mohseen Mulla</a></p>
			</div>
			<div class="footer-right">
				<ul class="icons">
					<li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"> </a></li>
					<li><a class="twt" href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"> </a></li>
					<li><a class="drbl" href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"> </a></li>
					<li><a class="be" href="#" data-toggle="tooltip" data-placement="top" title="Behance"> </a></li>
				</ul>
			</div>
			<script>$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})</script>
		</div>
	</div>
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"> </script>
</body>
</html>