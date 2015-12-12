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
						<a href="about.php" class="active">About us</a>
						<a href="products.php">Products</a>
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
	<!--about-->
	<div class="about">
		<div class="container">			
			<div class="about-info">
				<div class="col-md-6 about-grids">	
					<h3>Who are we? </h3>
					<img src="images/img2.jpg" alt=""/>
					<h5>Aenean pulvinar ac enimet posuere tincidunt velit Utin Integer in tincidunt velit</h5>
					<p>In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt velit sapien est, 
						molestie sit amet metussit amet malesuada Integer in tincidunt velit.</p>
					<a href="#" class="btn btn-1 btn-1d"> Read More </a>
				</div>				
				<div class="col-md-6 about-grids">
					<h3>Our Speacials</h3>
					<h5>Aenean pulvinar acenimet amet malesuada</h5>
					<p>In sit amet sapien eros.Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages sed do  Integer in tincidunt velit. Ut in tincidunt velit sapien est </p>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
										Tincidunt
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Malesuada
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Reprehen
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Heiusmod
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Repreiusmod
									</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--team-->
			<div class="team">
				<h3>Owner</h3>
				<div class="team-info">
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="images/Bhabhi - Dad 20151209_122222.jpg" alt="">
							<div class="captn">
								<h4>Rajesab Teli</h4>
								<p>Shri.Rajesab Teli Owner of Green Top Organics</p>
							</div>
						</a>
					</div>					
					<!-- <div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="images/img4.jpg" alt="">
							<div class="captn">
								<h4>Velit uti</h4>
								<p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="images/img5.jpg" alt="">
							<div class="captn">
								<h4>Posuere</h4>
								<p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="images/img6.jpg" alt="">
							<div class="captn">
								<h4>Augc sfe</h4>
								<p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
							</div>
						</a>
					</div> -->
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//team-->
		</div>
	</div>
	<!--about-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-4 footer-grids">
					<h3>Navigation</h3>					
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="products.php">Products</a></li>
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