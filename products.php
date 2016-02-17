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
						<a href="products.php" class="active">Products</a>
						<a href="contact.php">Contact</a>
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
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<h3>Our Products</h3>
			<!--light-box-js -->
			<script src="js/jquery.chocolat.js"></script>
			<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all" charset="utf-8" />
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
			$(function() {
				$('.moments-bottom a').Chocolat();
			});
			</script> 
			<!--//end-gallery js-->
			<div class="row gallery-info">			
				<div class="col-sm-6 col-md-4 gallery-grids ">
					<div class="thumbnail moments-bottom">
						<a href="images/img7.jpg" title="">
							<img src="images/img7.jpg" class="img-responsive zoom-img " alt="">				
						</a>						
					</div>
					<div class="caption gallery-caption">
						<h5><a href="#">Facilisis dignissimos luptat</a></h5>
						<p>Cras justo odioda pibus facilisis dignissimos voluptatem accusantium</p>				
					</div>
				</div>
				<div class="col-sm-6 col-md-4 gallery-grids">
					<div class="thumbnail moments-bottom">
						<a href="images/img8.jpg" title="">
							<img src="images/img8.jpg" class="img-responsive zoom-img" alt="">				
						</a>						
					</div>
					<div class="caption gallery-caption">
						<h5><a href="#">Facilisis dignissimos luptat</a></h5>
						<p>Cras justo odioda pibus facilisis dignissimos voluptatem accusantium</p>				
					</div>
				</div>
				<div class="col-sm-6 col-md-4 gallery-grids">
					<div class="thumbnail moments-bottom">
						<a href="images/img9.jpg" title="" class="moments-bottom">
							<img src="images/img9.jpg" class="img-responsive zoom-img " alt="">				
						</a>						
					</div>
					<div class="caption gallery-caption">
						<h5><a href="#">Facilisis dignissimos luptat</a></h5>
						<p>Cras justo odioda pibus facilisis dignissimos voluptatem accusantium</p>				
					</div>
				</div>			
				<div class="col-sm-6 col-md-4 gallery-grids">
					<div class="thumbnail moments-bottom">
						<a href="images/img10.jpg" title="">
							<img src="images/img10.jpg" class="img-responsive zoom-img " alt="">				
						</a>						
					</div>
					<div class="caption gallery-caption">
						<h5><a href="#">Facilisis dignissimos luptat</a></h5>
						<p>Cras justo odioda pibus facilisis dignissimos voluptatem accusantium</p>				
					</div>
				</div>
				<div class="col-sm-6 col-md-4 gallery-grids">
					<div class="thumbnail moments-bottom">
						<a href="images/img11.jpg" title="">
							<img src="images/img11.jpg" class="img-responsive zoom-img " alt="">				
						</a>						
					</div>
					<div class="caption gallery-caption">
						<h5><a href="#">Facilisis dignissimos luptat</a></h5>
						<p>Cras justo odioda pibus facilisis dignissimos voluptatem accusantium</p>				
					</div>
				</div>
				<div class="col-sm-6 col-md-4 gallery-grids">
					<div class="thumbnail moments-bottom">
						<a href="images/img12.jpg" title="">
							<img src="images/img12.jpg" class="img-responsive zoom-img " alt="">				
						</a>					
					</div>
					<div class="caption gallery-caption">
						<h5><a href="#">Facilisis dignissimos luptat</a></h5>
						<p>Cras justo odioda pibus facilisis dignissimos voluptatem accusantium</p>				
					</div>
				</div>				
				<div class="col-sm-6 col-md-4 gallery-grids">
					<div class="thumbnail moments-bottom">
						<a href="images/img13.jpg" title="">
							<img src="images/img13.jpg" class="img-responsive zoom-img " alt="">				
						</a>					
					</div>
					<div class="caption gallery-caption">
						<h5><a href="#">Facilisis dignissimos luptat</a></h5>
						<p>Cras justo odioda pibus facilisis dignissimos voluptatem accusantium</p>				
					</div>
				</div>
				<div class="col-sm-6 col-md-4 gallery-grids">
					<div class="thumbnail moments-bottom">
						<a href="images/img14.jpg" title="">
							<img src="images/img14.jpg" class="img-responsive zoom-img " alt="">				
						</a>						
					</div>
					<div class="caption gallery-caption">
						<h5><a href="#">Facilisis dignissimos luptat</a></h5>
						<p>Cras justo odioda pibus facilisis dignissimos voluptatem accusantium</p>				
					</div>
				</div>
				<div class="col-sm-6 col-md-4 gallery-grids">
					<div class="thumbnail moments-bottom">
						<a href="images/img15.jpg" title="">
							<img src="images/img15.jpg" class="img-responsive zoom-img " alt="">				
						</a>					
					</div>
					<div class="caption gallery-caption">
						<h5><a href="#">Facilisis dignissimos luptat</a></h5>
						<p>Cras justo odioda pibus facilisis dignissimos voluptatem accusantium</p>				
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
	<!--//gallery-->
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