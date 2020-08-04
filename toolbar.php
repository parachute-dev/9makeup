
</head>
<body <?php body_class(); ?>>

	<div id="header" class="">
		<div class="container">
			<div class="row is-flex">
				<div class="col-md-2 logo col-xs-6">
					<a href="/">
						<img src="<?php bloginfo('template_url');?>/assets/img/logo.png" alt="" />
					</a> 
				</div>
				<div class="col-md-7 main-navigation  col-xs-3"> 
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

					<div class="mobile-menu-container" style="display:none;">
						<a class="mburger" href="#navmenu">
							<b></b>
							<b></b>
							<b></b>
						</a>
					</div>

				</div> 
				<div class="col-md-3 my-account col-xs-3"> 
					<nav>
						<ul>
							<li class="" id="search"><i class="fa fa-search"></i>
								<div class="search-container">
								<?php echo do_shortcode('[woocommerce_product_search]'); ?>
								</div>
							</li>
							
							<li class="hidden-sm hidden-xs"><a href="/wishlist"><i class="fa fa-heart-o"></i></a></li>
							<li class="hidden-sm hidden-xs"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="fa fa-user"></i></a></li>
							<li class="" id="shopping-basket"><a href="/checkout/cart"><i class="fa fa-shopping-basket"></i></a>
								<div class="mini-cart">
									<?php 
									global $woocommerce;
									echo $woocommerce->cart->cart_contents_count;
									?>
								</div> 
							</li>
						</ul>
					</nav>
				</div>
			</div> 
		</div>
	</div>
	<div class="top-message">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h5>COVID secure delivery to your door within 48 hours!</h5>
				</div>
			</div>
		</div>
	</div>
