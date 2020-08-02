<?php
/**
 * Template Name: Home
 */

get_header();

?>


<?php echo get_template_part('toolbar'); ?>


<div class="banner-block content-block background-colour-black">
	<div class="container-fluid">
		<div class="row">
			<div class="banner-carousel full ">
				<div class="banner">
					<div class="container  text-align-center container-height-medium vertical-center horizontal-center">
						<div class="image" style="background-image:url('<?php bloginfo('template_url');?>/assets/img/banner.png')">
						</div> 
						<div class="content">
							<div class="col-xs-12">
								<h1 >Sale Now On</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<a href="/shop" class="button">Shop Now</a>  
							</div>           
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="category-callout-block content-block content-block-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header class="content-header text-align-left">
					<h3>Our Products</h3>
				</header>
			</div>
		</div>
		<div class="row">
			<div class="callout-carousel">
				<div class="col-md-4">
					<div class="category-callout">
						<a href="/product-category/face/">
							<div class="image" style="background-image:url('<?php bloginfo('template_url');?>/assets/img/product-1.png')">
							</div>
							<div class="content">
								<h4>Face</h4>
								<h5>Foundation Highlighter and More</h5>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="category-callout">
						<a href="/product-category/eyes/">
							<div class="image" style="background-image:url('<?php bloginfo('template_url');?>/assets/img/product-2.png')">
							</div>
							<div class="content">

								<h4>Eyes</h4>  
								<h5>Mascara, Eye Shadow, Eye Liner</h5>

							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="category-callout">
						<a href="/product-category/lips/">
							<div class="image" style="background-image:url('<?php bloginfo('template_url');?>/assets/img/product-3.png')">
							</div>
							<div class="content">
								<h4>Lips</h4>
								<h5>Lip Sticks, Liners and Gloss</h5>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="banner-block content-block background-colour-white">
	<div class="container-fluid">
		<div class="row">
			<div class="banner-carousel full ">
				<div class="banner">
					<div class="container  text-align-left container-height-large vertical-center horizontal-end">
						<div class="image" style="background-image:url('<?php bloginfo('template_url');?>/assets/img/banner-2.png')">
						</div> 
						<div class="content">
							<div class="col-xs-12">
								<h2 class="h2">New Arrivals</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<a href="/shop" class="button">Shop Now</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="banner-block content-block background-colour-black">
	<div class="container-fluid">
		<div class="row">
			<div class="banner-carousel full ">
				<div class="banner">
					<div class="container  text-align-left container-height-large vertical-center horizontal-start">
						<div class="image" style="background-image:url('<?php bloginfo('template_url');?>/assets/img/banner-3.png')">
						</div> 
						<div class="content">
							<div class="col-xs-12">
								<h2 >About 9Makeup</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<a href="#" class="button">Discover</a>  
							</div>           
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer() ;?>

