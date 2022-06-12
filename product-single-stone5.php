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
									<img class="media-object" src="images/shop/products/pull-stone-3.1.jpeg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">COTTON FLEECE_GARMENT DYED</a></h4>
									<div class="cart-price">
										<span>2 x</span>
										<span>290€</span>
									</div>
									<h5><strong>580€</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/products/pull-CP-2.1.jpeg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Light Fleece Zipped Hoodie</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>210€</span>
									</div>
									<h5><strong>210€</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->

							<div class="cart-summary">
								<span>Total</span>
								<span class="total-price">979 €</span>
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
										<li><a href="shop-bape.php">Bape</a></li>
									

									</ul>
								</div>


							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Elements -->


					<!-- Pages -->
					<li class="dropdown full-width dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Autres <span
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
                                        <li class="dropdown-header">Résumé</li>
										<li role="separator" class="divider"></li>
										<li><a href="cart.php">Mon Panier</a></li>
					
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

								
							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Pages -->

					
				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>
<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="shop.php">Stones Island</a></li>
					<li class="active">SOFT COTTON</li>
				</ol>
			</div>
			
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img src='images/shop/products/pull-stone-5.1.jpeg' alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/products/pull-stone-5.2.jpeg' alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
								</div>
								
								<div class='item'>
									<img src='images/shop/products/pull-stone-5.3.jpeg' alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/products/pull-stone-5.4.jpeg' alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
								</div>
							
								
								
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src='images/shop/products/pull-stone-5.1.jpeg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='1'>
								<img src='images/shop/products/pull-stone-5.2.jpeg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='2'>
								<img src='images/shop/products/pull-stone-5.3.jpeg'  alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='3'>
								<img src='images/shop/products/pull-stone-5.4.jpeg' alt='' />
							</li>
							
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2>SOFT COTTON</h2>
					<p class="product-price">320€</p>
					
					
					<div class="product-size">
						<span>Taille:</span>
						<select class="form-control">
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
						</select>
					</div>
					<div class="product-quantity">
						<span>Quantité:</span>
						<div class="product-quantity-slider">
							<input id="product-quantity" type="text" value="1" name="product-quantity">
						</div>
					</div>
					
					<a href="cart.php" class="btn btn-main mt-20">Ajouter au panier</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="tabCommon mt-20">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>
						<li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Avis (3)</a></li>
					</ul>
					<div class="tab-content patternbg">
						<div id="details" class="tab-pane fade active in">
							<h4>Description Produit</h4>
							<p> RECHERCHE ET TRAITEMENT DES TISSUS: </p>
							<p>RIBBED SOFT COTTON : Cardigan en coton souple. Point jersey. 100% coton.</p>
							
							<p>Col montant côtelé. Petite étoile Stone Island brodée sur la poitrine. Deux couches finement côtelées aux poignets. Petit passepoil sur les côtés et à l’intérieur de la manche. Bas côtelé. Fermeture zippée en métal à double curseur.</p>
						</div>
						<div id="reviews" class="tab-pane fade">
							<div class="post-comments">
						    	<ul class="media-list comments-list m-bot-50 clearlist">
								    <!-- Comment Item start-->
									<li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="images/blog/conor.jpg" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">
								            <div class="comment-info">
								                <h4 class="comment-author">
								                    <a href="#!">Conor McGregor</a>
								                	
								                </h4>
								                <time datetime="2013-04-06T13:53">6 juin 2022</time>
								     
								            </div>

								            <p>
								                This website is very useful and products are very clean !
								            </p>
								        </div>

								    </li>
								    <!-- End Comment Item -->

								    <!-- Comment Item start-->
								     <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="images/blog/ni.jpg" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">

								            <div class="comment-info">
								                <div class="comment-author">
								                    <a href="#!">Ninho</a>
								                </div>
								                <time datetime="2013-04-06T13:53">18 mai 2022</time>
								                
								            </div>

								            <p>
								                Vetements de hautes qualites que j'utilise pour mes clip. C'est parfait !
								            </p>

								        </div>

								    </li>
								    <!-- End Comment Item -->

								    <!-- Comment Item start-->
								  <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="images/blog/nikos.jpg" alt="" width="50" height="50">
								        </a>

								        <div class="media-body">

								            <div class="comment-info">
								                <div class="comment-author">
								                    <a href="#!">Nikos Aliagas</a>
								                </div>
								                <time datetime="2013-04-06T13:53">3 avril 2022</time>
								             
								            </div>

								            <p>
								                Articles conformes a la description. Mon equipe et moi meme vous remercions !
								            </p>

								        </div>

								    </li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="products related-products section">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Vous aimerez aussi</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
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
						<h4><a href="product-single.php">COTTON FLEECE_GARMENT DYED</a></h4>
						<p class="price">220€</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/pull-stone-2.1.jpeg" alt="product-img" />
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
						<h4><a href="product-single.php">MALFILE' FLEECE_GARMENT DYED 'OLD' EFFECT</a></h4>
						<p class="price">260€</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
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
						<h4><a href="product-single.php">COTTON FLEECE_GARMENT DYED</a></h4>
						<p class="price">290€</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/pull-stone-4.1.jpeg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<a href="product-single-stone4.php" ><i class="tf-ion-ios-search-strong"></i></a> 
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
						<h4><a href="product-single.php">LIGHT RAW COTTON</a></h4>
						<p class="price">320€</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>



<!-- Modal -->
<div class="modal product-modal fade" id="product-modal">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
  	<div class="modal-dialog " role="document">
    	<div class="modal-content">
	      	<div class="modal-body">
	        	<div class="row">
	        		<div class="col-md-8">
	        			<div class="modal-image">
		        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" />
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<div class="product-short-details">
	        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
	        				<p class="product-price">$200</p>
	        				<p class="product-short-description">
	        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
	        				</p>
	        				<a href="#!" class="btn btn-main">Add To Cart</a>
	        				<a href="#!" class="btn btn-transparent">View Product Details</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
    	</div>
  	</div>
</div>
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