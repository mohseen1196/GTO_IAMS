<!DOCTYPE html>
<html>
<head>
<title>Green Top Organics - Inventory and Management System</title>
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
	<div class="banner">
		<!--header-->
		<div class="header">
			<div class="container">
				<div class="logo">
					<a href="index.php"> <!-- <img src="images/logo.png" alt=""/> --> </a>
					<h1> Green Top Organics </h1>
				</div>
				<div class="top-nav">
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
						<h3>Menu</h3>
						<a href="index.php" class="active">Home</a>
						<a href="about.php">About us</a>
						<!--<a href="products.php">Products</a>-->
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
			</div>
		</div>
		<!--//header-->
		<div class="banner-text">
			<h1>Green Top Organics - Who Are We?</h1>
			<p>We are the people who initiated the manufacturing of this product with the intention of helping Indian farmers with quality products for their soil. We provide an eco friendly product without any noxious chemicals which will not cause any loss to the fertility of the soil. </p>
		</div>
	</div>
	<!--//banner-->
	<div class="hm-about">
		<div class="container">
			<div class="col-md-5 hm-about-left">
				<img src="images/img1.jpg" alt="">
			</div>
			<div class="col-md-7 hm-about-left">
				<h5>Amit ullam consectetur tristique fermentum</h5>
				<p>Proin eget ipsum ultrices, aliquet velit eget  Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable
				tempus tortor Phasellus non velit sit amet diam faucibus molestie. Mauris sapien eros, mattis et elit non, tincidunt efficitur nisi augue dui iaculis nulla, a pretium nisl turpis vel augue auctor viverra aliquam .</p>
				<a class="btn btn-1 btn-1d" href="#"> Read More </a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<h3 class="title">What is Farming</h3>
			<p class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
			<h4>Finibus Bonorum et Malorum Lorem Ipsum passage</h4>
			<div class="bottom-grids">
				<div class="col-md-4 bttm-grids-info">
					<h5> Lorem Ipsum simply random</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
				<div class="col-md-4 bttm-grids-info">
					<h5> Lorem Ipsum simply random</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
				<div class="col-md-4 bttm-grids-info">
					<h5> Lorem Ipsum simply random</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//banner-bottom-->
	<!--slid-->
	<div class="slid">
		<div class="container">
			<h3 class="title">Pricing</h3>
			<p class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
			<div class="slid-row">
				<!-- <div class="col-md-4 slid-grids">
					<h4>Perspici</h4>
					<h5>$540</h5>
					<a class="btn btn-1 btn-1d" href="#"> Read More </a>
				</div> -->
				<div class="col-md-4 slid-grids">
					<h4>EcoMeal</h4>
					<h5>Rs.***</h5>
					<a class="btn btn-1 btn-1d" href="#"> Read More </a>
				</div>
				<!--<div class="col-md-4 slid-grids">
					<h4>Acusam</h4>
					<h5>$379</h5>
					<a class="btn btn-1 btn-1d" href="#"> Read More </a>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//slid-->
	<!--services-->
	<div class="services" id="services">
		<div class="container">
			<h3 class="title">Services Overview</h3>
			<p class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
			<div class="service-grids">
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<img src="images/icon2.png" alt="">
					</div>
					<h5>Exemplary Quality</h5>
					<p>Claritas est etiam processus dynaicus qui sequitur mutationem consuetudium lectorum. Mirum est notare quam </p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<img src="images/icon3.png" alt="">
					</div>
					<h5>Faster Delivery</h5>
					<p>Claritas est etiam processus dynaicus qui sequitur mutationem consuetudium lectorum. Mirum est notare quam </p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<img src="images/icon4.png" alt="">
					</div>
					<h5>Improves soil life cycle</h5>
					<p>Claritas est etiam processus dynaicus qui sequitur mutationem consuetudium lectorum. Mirum est notare quam </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!--slid-->
	<div class="testi">
		<div class="container">
			<h3 class="title">Testimonials</h3>
			<p class="title">What our Customers say about our product..!</p>
			<!-- banner-text Slider starts Here -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
				// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 3
						$("#slider3").responsiveSlides({
						auto: true,
						pager:true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<p class="title">" I've been using this for my lawn and I have to say it works wonders. I purchased a house with a shared front lawn which looked quite frail and green-yellowish colored. I applied this product and about a month later my neighbor asked if I was putting steroids into my lawn. My half of the lawn looked absolutely beautiful compared to his side of the lawn. The best thing about this product is that it's dummy proof. You WILL NOT burn your grass if you put more than the recommended amount since it's organic. "</p>
						<h4>Mammu </h4>
					</li>
					<li>
						<p class="title">" Excellent product and it has Not been discontinued by the manufacturer. It is readily available at about 1/3 the price shown. This takes a few weeks to work its wonders but limey-green spots, resulting from over watering / iron deficiency will disappear. It does not promote burning and you can overdo the spread rate without worry. "</p>
						<h4>Wazia </h4>
					</li>
					<li>
						<p class="title">"One of the best types of fertilizer you can get.
							having a degree in Agriculture and owning my own lawn care business, I try to use only the best products. available not only is milorganite great for plants and soil its organic and slow release, Everything you want from a fertilizer. and it wont burn the grass if you screw up your spreading calculations. love this stuff even if it is just Sewer sludge  "</p>
						<h4>Etiamy </h4>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--//slid-->
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
					<p>We are the people who initiated the manufacturing of this product with the intetion of helping Indian farmers with quality products for their soil. We provide an eco friendly product without any noxious chemicals which will not cause any loss to the fertility of the soil.  </p>
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