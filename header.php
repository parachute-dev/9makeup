<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title();?></title>


	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/base.css?v=12122">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.ico" />
	<link rel="stylesheet" href="https://actors-temple.beta.parachute.digital/wp-content/themes/parachute-boilerplate-david/assets/js/lib/mmenu/mburger.css"> 


	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>favicom/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>favicom/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>favicom/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>favicom/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>favicom/safari-pinned-tab.svg" color="#DF2C62">
	<meta name="msapplication-TileColor" content="#DF2C62">
	<meta name="theme-color" content="#DF2C62">

	<style>




	</style>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>