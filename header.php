<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title();?></title>


	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/base.css">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="stylesheet" href="https://actors-temple.beta.parachute.digital/wp-content/themes/parachute-boilerplate-david/assets/js/lib/mmenu/mburger.css"> 


<style>
	
	.woocommerce-page .woocommerce, .woocommerce-account .woocommerce, #yith-wcwl-form, .page-id-1249 .woocommerce{
margin:0 auto;
padding-top:30px;
max-width:1280px;
padding-bottom:100px;
}

.horizontal-end{
	text-align:right;
}
.horizontal-start{
	text-align:left;
}

.horizontal-end .content-header{
text-align:right;

}

.horizontal-start .content-header{
text-align:left

}

.media-text-block .content{
padding:5em 0;
}

</style>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>