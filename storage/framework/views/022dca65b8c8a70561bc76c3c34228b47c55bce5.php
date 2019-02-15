
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Alen Ethiopia</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo e(route('theme.css',['name'=>'linearicons.css'])); ?>">
			<link rel="stylesheet" href="<?php echo e(route('theme.css',['name'=>'font-awesome.min.css'])); ?>">
			<link rel="stylesheet" href="<?php echo e(route('theme.css',['name'=>'bootstrap.css'])); ?>">
			<link rel="stylesheet" href="<?php echo e(route('theme.css',['name'=>'magnific-popup.css'])); ?>">
			<link rel="stylesheet" href="<?php echo e(route('theme.css',['name'=>'nice-select.css'])); ?>">
			<link rel="stylesheet" href="<?php echo e(route('theme.css',['name'=>'animate.min.css'])); ?>">
			<link rel="stylesheet" href="<?php echo e(route('theme.css',['name'=>'owl.carousel.css'])); ?>">
			<link rel="stylesheet" href="<?php echo e(route('theme.css',['name'=>'main.css'])); ?>">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    			<span>
			    				የሰው ልጆች የለውጥ ማእከል<br>
								A center for humanity improvement
			    			</span>
			    		</div>
			    		<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
							<a href="<?php echo e(route('theme.page.index')); ?>">
								
								<img class="img-fluid" src="img/logo.png" alt="">	
							</a>			    			
			    		</div>
			    		<div class="col-lg-4 col-sm-4 menu-top-right">
			    			<a class="tel" href="tel:+880 123 12 658 439">+880 123 12 658 439</a>
			    			<a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
			    		</div>
			    	</div>
			    </div>	
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
							<?php if(url()->current() == route('theme.page.index')): ?>	<li class="menu-active">
							<?php else: ?>	<li>
							<?php endif; ?>
							<a href="<?php echo e(route('theme.page.index')); ?>">Home </a></li>

							<?php if(url()->current() == route('theme.page.about')): ?>	<li class="menu-active">
							<?php else: ?>	<li>
							<?php endif; ?>
							<a href="<?php echo e(route('theme.page.about')); ?>">About </a></li>

							<?php if(url()->current() == route('theme.page.gallery')): ?>	<li class="menu-active">
							<?php else: ?>	<li>
							<?php endif; ?>
							<a href="<?php echo e(route('theme.page.gallery')); ?>">Gallery </a></li>

							<?php if(url()->current() == route('blog')): ?>	<li class="menu-active">
							<?php else: ?>	<li>
							<?php endif; ?>
							<a href="<?php echo e(route('blog')); ?>">Blog </a></li>

							<?php if(url()->current() == route('theme.page.resources')): ?>	<li class="menu-active">
							<?php else: ?>	<li>
							<?php endif; ?>
							<a href="<?php echo e(route('theme.page.resources')); ?>">Resources </a></li>
							
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<?php echo $__env->yieldContent('content'); ?>
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>About Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Contact Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="number">
									012-6532-568-9746 <br>
									012-6532-569-9748
								</p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on align-items-center d-flex">
									      	<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>
								</div>
							</div>
						</div>						
					</div>
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6 col-md-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Template by <a href="https://colorlib.com" target="_blank">Colorlib</a> | Web development by <a href="https://askual.com" target="_blank"> AskualTech</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="footer-social col-lg-6 col-md-12">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->
			<script src="<?php echo e(route('theme.js',['name'=>'jquery-2.2.4.min.js'])); ?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'bootstrap.min.js'])); ?>"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			
			<script src="<?php echo e(route('theme.js',['name'=>'easing.min.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'hoverIntent.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'superfish.min.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'jquery.ajaxchimp.min.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'jquery.magnific-popup.min.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'owl.carousel.min.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'jquery.sticky.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'jquery.nice-select.min.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'parallax.min.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'waypoints.min.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'jquery.counterup.min.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'mail-script.js'])); ?>"></script>
			<script src="<?php echo e(route('theme.js',['name'=>'main.js'])); ?>"></script>
		</body>
	</html>



