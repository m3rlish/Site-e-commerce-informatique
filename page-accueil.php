<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<!DOCTYPE php>
<php lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>SNKRS</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>03 20 48 34 56</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="index.php">
						<!-- replace logo here -->
						<svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
								font-family="AustinBold, Austin" font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="AVIATO">
										<tspan x="108.94" y="325">SNKRS</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
					<li class="dropdown cart-nav dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-android-cart"></i>Panier</a>
						<div class="dropdown-menu cart-dropdown">
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-2.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->

							<div class="cart-summary">
								<span>Total</span>
								<span class="total-price">$1799.00</span>
							</div>
							<ul class="text-center cart-buttons">
								<li><a href="cart.php" class="btn btn-small">Voir Panier</a></li>
								<li><a href="checkout.php" class="btn btn-small btn-solid-border">Commander</a></li>
							</ul>
						</div>

					</li><!-- / Cart -->

					<!-- Search -->
					<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong"></i> Recherche</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>
					</li><!-- / Search -->

			

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="index.php">Accueil</a>
					</li><!-- / Home -->


					<!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Articles <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Basic -->
								<div class="col-lg-10 col-md-6 mb-sm-3">
									<ul>
										<li class="dropdown-header">Marques</li>
										<li role="separator" class="divider"></li>
										<li><a href="shop.php">Stone Island</a></li>
										<li><a href="shop-CP.php">CP Company</a></li>
										<li><a href="shop.php">Bape</a></li>
									

									</ul>
								</div>


							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Elements -->


					<!-- Pages -->
					<li class="dropdown full-width dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">pages <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Introduction -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Introduction</li>
										<li role="separator" class="divider"></li>
										<li><a href="contact.php">Nous Contacter</a></li>
										<li><a href="about.php">A Propos de Nous</a></li>
										
									</ul>
								</div>

								<!-- Contact -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Dashboard</li>
										<li role="separator" class="divider"></li>
										<li><a href="dashboard.php">User Interface</a></li>
										<li><a href="order.php">Orders</a></li>
										<li><a href="address.php">Address</a></li>
					
									</ul>
								</div>

								
								<!-- Utility -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Identification</li>
										<li role="separator" class="divider"></li>
										<li><a href="http://localhost:8888/connection/index.php">Conection</a></li>
										<li><a href="http://localhost:8888/connection/inscription.php">Inscription</a></li>
										
									</ul>
								</div>

								<!-- Mega Menu -->
								<div class="col-sm-3 col-xs-12">
									<a href="shop.php">
										<img class="img-responsive" src="images/shop/header-img.jpg" alt="menu image" />
									</a>
								</div>
							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Pages -->

				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>

<div class="hero-slider">
  <div class="slider-item th-fullpage hero-area" style="background-image: url(images/shop/products/STONE.jpeg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUITS</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">STONE ISLAND <br> </h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="shop.php">Acheter Maintenant</a>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-item th-fullpage hero-area" style="background-image: url(images/shop/products/CP.jpeg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-left">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUITS</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">CP COMPAGNY <br> </h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="shop-CP.php">Acheter Maintenant</a>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-item th-fullpage hero-area" style="background-image: url(images/shop/products/BAPE.jpeg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-right">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUITS</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">BAPE <br> </h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="shop.php">SAcheter Maintenant</a>
        </div>
      </div>
    </div>
  </div>
</div>



<section class="products section bg-gray">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Produit tendande</h2>
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Acheter</span>
						<img class="img-responsive" src="images/shop/products/pull-stone-1.1.jpeg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<a href="product-single-stone1.php" ><i class="tf-ion-ios-search-strong"></i></a> 
								</li>
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">Moleton</a></h4>
						<p class="price">220€</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/pull-CP-2.1.jpeg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<a href="product-single-stone2.php" ><i class="tf-ion-ios-search-strong"></i></a> 
								</li>
								<li>
			                        <a href="#" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="#!"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">Sweat à capuche</a></h4>
						<p class="price">240€</p>
					</div>
				</div>
			</div>
				<div class="col-md-4">
					<div class="product-item">
						<div class="product-thumb">
							<img class="img-responsive" src="images/shop/products/pull-stone-3.1.jpeg" alt="product-img" />
							<div class="preview-meta">
								<ul>
									<li>
										<a href="product-single-stone3.php" ><i class="tf-ion-ios-search-strong"></i></a> 
									</li>
									<li>
										<a href="#" ><i class="tf-ion-ios-heart"></i></a>
									</li>
									<li>
										<a href="#!"><i class="tf-ion-android-cart"></i></a>
									</li>
								</ul>
							  </div>
						</div>
						<div class="product-content">
							<h4><a href="product-single.php">Gilet à capuche</a></h4>
							<p class="price">260€</p>
						</div>
					</div>
				</div>
					
		
		</div>
	</div>
</section>

  <section class="product-category section">
	  <div class="container">
		  <div class="row">
			  <div class="col-md-12">
				  <div class="title text-center">
					  <h2>Différentes Marques</h2>
				  </div>
			  </div>
			  <div class="col-md-6">
				  <div class="category-box">
					  <a href="#!">
						  <img src="images/shop/products/Accueil-stone.jpeg" alt="" />
						  <div class="content">
							  <h4>Stone Island</h4>
							  <p></p>
						  </div>
					  </a>	
				  </div>
				  <div class="category-box">
					  <a href="#!">
						  <img src="images/shop/products/accueil-cp.jpeg" alt="" />
						  <div class="content">
							  <h4>CP Company</h4>
							  <p></p>
						  </div>
					  </a>	
				  </div>
			  </div>
			  <div class="col-md-6">
				  <div class="category-box category-box-2">
					  <a href="#!">
						  <img src="images/shop/products/accueil-bape.jpeg" alt="" />
						  <div class="content">
							  <h3>Bape</h3>
							  <p></p>
						  </div>
					  </a>	
				  </div>
			  </div>
		  </div>
	  </div>
  </section>

<!--
Start Call To Action
==================================== -->
<section class="call-to-action bg-gray section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="title">
					<h2>NEWSLETTER</h2>
					<p>Inscrivez vous a notre newsletter pour recevoir des exclusivité, des nouveautés, et le restock de nos produits.</p>
				</div>
				<div class="col-lg-6 col-md-offset-3">
				    <div class="input-group subscription-form">
				      <input type="text" class="form-control" placeholder="Entre ton adresse mail">
				      <span class="input-group-btn">
				        <button class="btn btn-main" type="button">Inscris Toi</button>
				      </span>
				    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->

			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->




<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="index.php">Accueil</a>
					</li>				
					
					<li>
						<a href="contact.php">Nous Contacter</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </php>
