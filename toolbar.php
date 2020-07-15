
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
							<li class="" id="search"><a href=""><i class="fa fa-search"></i></a></li>
							<li class="hidden-sm hidden-xs"><a href="/customer/account/wishlist"><i class="fa fa-heart-o"></i></a></li>
							<li class="hidden-sm hidden-xs"><a href="/customer/account/"><i class="fa fa-user"></i></a></li>
							<li class="" id="shopping-basket"><a href="/checkout/cart"><i class="fa fa-shopping-basket"></i></a>
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
					<h5>Get Free Shipping Today</h5>
				</div>
			</div>
		</div>
	</div>
