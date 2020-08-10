
</head>
<body <?php body_class(); ?>>

	<div id="header" class="">
		<div class="container">
			<div class="row is-flex">

				<div class="col-md-4 search col-xs-4">

<div class="hidden-sm hidden-xs">
					<?php echo do_shortcode('[woocommerce_product_search]'); ?>
					</div>

					<div class="mobile-menu-container" style="display:none;">
					<a class="mburger" href="#navmenu">
						<b></b>
						<b></b>
						<b></b>
					</a>
				</div>

				</div>


				
				<div class="col-md-4 logo col-xs-4">
					<a href="/">
						<img src="<?php bloginfo('template_url');?>/assets/img/logo.png" alt="" />
					</a> 
				</div>

				<div class="col-md-4 my-account col-xs-4"> 
					<nav>
						<ul>
							<li class=""><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><img src="<?php bloginfo('template_url');?>/assets/img/account.png" alt=""><span class="hidden-sm hidden-xs">Account</span></a></li>
							<li class="hidden-sm hidden-xs"><a href="/wishlist"><img src="<?php bloginfo('template_url');?>/assets/img/heart.png" alt=""><span class="hidden-sm hidden-xs">Wishlist</span></a></li>
							
							<li class="" id="shopping-basket"><a href="/checkout/cart">
								<div class="mini-cart-container">
									<img src="<?php bloginfo('template_url');?>/assets/img/bag.png" alt="">
										<div class="mini-cart">
								<?php 
								global $woocommerce;
								echo $woocommerce->cart->cart_contents_count;
								?>
							</div>
								</div>
								<span class="hidden-sm hidden-xs">Bag</span>
							</a>
						 
						</li>
					</ul>
				</nav>
			</div>


		</div> 
		<div class="row">
			<div class="col-md-12 main-navigation  col-xs-3"> 
				<nav id="navmenu">					
					<?php 
					wp_nav_menu(
						array(
							'container' => false,
							'menu' => 'Main', 
						) 
					); 
					?>
				</nav>

				
			</div> 
		</div>
	</div>
</div>
<div id="trust-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-12 trust-mark-container">
				<div class="trust-mark slick-slide">
					<div class="center">
						<a href="/customer_service/delivery/">
							<div class="image">					
								<img src="<?php bloginfo('template_url');?>/assets/img/door.png" alt="">
							</div>
							<div class="content">
								<h6>COVID-19 Secure Delivery</h6>
								<p>To Your Door Within 48 Hours!
								</p>
							</div>
						</a>
					</div>
				</div>
				<div class="trust-mark slick-slide">
					<div class="center">
						<a href="/customer_service/returns/">
							<div class="image">					
								<img src="<?php bloginfo('template_url');?>/assets/img/truck.png" alt="">
							</div>
							<div class="content">
								<h6>Free Delivery</h6>
								<p>Free Delivery Over AED100</p>
							</div>
						</a>
					</div>
				</div>
				<div class="trust-mark slick-slide">
					<div class="center">
						<a href="/customer-service/">
							<div class="image">					
								<img src="<?php bloginfo('template_url');?>/assets/img/help.png" alt="">
							</div>
							<div class="content">

								<h6>Need Help?</h6>
								<p>Visit Our Customer Service Hub</p>
							</div>
						</a>
					</div>
				</div>								
			</div>
		</div>
	</div>
</div>
