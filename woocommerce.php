<?php

get_header(); ?>

<!-- Page Specific Header Start -->

<!-- Page Specific Header End  -->

<?php include (get_stylesheet_directory() . '/toolbar.php'); ?>
 
<div class="container"> 
	<div class="row">
		<div class="col-md-12">

		<?php woocommerce_content(); ?>

	 </div>
	</div>
</div>
<?php get_footer(); ?>