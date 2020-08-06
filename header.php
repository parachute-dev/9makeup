<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title();?></title>


	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/base.css?v=2">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="stylesheet" href="https://actors-temple.beta.parachute.digital/wp-content/themes/parachute-boilerplate-david/assets/js/lib/mmenu/mburger.css"> 


<style>
	

.trust-mark-container .slick-slide{
    display: none;
}
 .trust-mark-container .slick-slide:first-child{
    display: block;
}
.slick-initialized.trust-mark-container .slick-slide,
.slick-initialized.trust-mark-container .slick-slide:first-child{
    display: block;
}





</style>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>