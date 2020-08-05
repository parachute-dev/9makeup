<?php

get_header(); ?>

<!-- Page Specific Header Start -->

<!-- Page Specific Header End  -->

<?php include (get_stylesheet_directory() . '/toolbar.php'); ?>
 
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
	
<div class="container"> 
	<div class="row">
		<div class="col-md-12">
	 <?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	 <?php endwhile; ?>
	 </div>
	</div>
</div>
<?php get_footer(); ?>