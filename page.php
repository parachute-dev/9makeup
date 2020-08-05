<?php

get_header(); ?>

<!-- Page Specific Header Start -->
<style>
	.container-content{
		float:left;
		clear:both;
		width:100%;
	}
</style>
<!-- Page Specific Header End  -->

<?php include (get_stylesheet_directory() . '/toolbar.php'); ?>

<?php if (is_account_page() || $post->ID == 12 || is_cart() || is_checkout() || $post->ID == 1249 || is_single('customer_service')) { ?>
	<div class="banner-block content-block background-colour-black" style="margin-bottom:2em;">
		<div class="container-fluid">
			<div class="row">
				<div class="banner-carousel full ">
					<div class="banner">
						<div class="container  text-align-center container-height-small vertical-center horizontal-center">
							<div class="image" style="background-image:url('<?php bloginfo('template_url');?>/assets/img/banner.png')">
							</div> 
							<div class="content">
								<div class="col-xs-12">
									<h1><?php the_title(); ?></h1>
								</div>           
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>
<div class="div container-content">
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
</div>

<?php get_footer(); ?>