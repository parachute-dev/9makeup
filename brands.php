<?php
/**
 * Template Name: Brands
 */

get_header();

?>

<style>
	.callout-carousel{
		padding:5em 0;

	}
</style>
<?php echo get_template_part('toolbar'); ?>


<div class="banner-block content-block background-colour-black">
	<div class="container-fluid">
		<div class="row">
			<div class="banner-carousel full ">
				<div class="banner">
					<div class="container  text-align-center container-height-small vertical-center horizontal-center">
						<div class="image" style="background-image:url('<?php bloginfo('template_url');?>/assets/img/banner.png')">
						</div> 
						<div class="content">
							<div class="col-xs-12">
								<h1>Our Brands</h1>
							</div>           
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div style="float:left;clear:both;width:100%;">
<div class="brand-container container">
	<div class="row">
		<div class="callout-carousel">
	

<?php 
$brands = get_terms(array(
    'taxonomy' => 'product_brand',
    'hide_empty' => false,
)
) ;

foreach ($brands as $brand) { 
$thumbnail = get_brand_thumbnail_url( $brand->term_id );


					
	?>
	<div class="col-md-3">
					<div class="category-callout">
						<a href="<?php echo get_term_link($brand); ?>">
							<div class="image" style="background-image:url('<?php bloginfo('template_url');?>/assets/img/product-1.png')">
							</div>
							<div class="content">
								<h4><?php echo $brand->name; ?></h4>
								
							</div>
						</a>
					</div>
				</div>


<?php }?>
</div>
</div>
	</div></div>

<?php get_footer() ;?>

