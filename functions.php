<?php 

// Wordpress customisation and modification of vanilla features and functionality
require_once('src/wp/init.php');
require_once('src/wp/custom-post-types.php');
require_once('src/wp/custom-taxonomies.php');
require_once('src/wp/shortcodes.php');
require_once('src/wp/acf.php');

// Bespoke code and extensions, new functionality
require_once('src/parachute/helpers.php');
require_once('src/parachute/flexible-content.php');


add_theme_support( 'post-thumbnails' );

add_theme_support( 'woocommerce', array(
'thumbnail_image_width' => 500,
'gallery_thumbnail_image_width' => 500,
'single_image_width' => 900,
) );


/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 4; // 3 products per row
	}
}

add_filter( 'woocommerce_product_add_to_cart_text', function( $text ) {
	global $product;
	if ( $product->is_type( 'variable' ) ) {
		$text = $product->is_purchasable() ? __( 'Add to bag', 'woocommerce' ) : __( 'Read more', 'woocommerce' );
	}
	return $text;
}, 10 );

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Add to bag', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Add to bag', 'woocommerce' );
}

function custom_related_products_text( $translated_text, $text, $domain ) {
  switch ( $translated_text ) {
    case 'Related products' :
      $translated_text = __( 'Other items you might like', 'woocommerce' );
      break;
  }
  return $translated_text;
}
add_filter( 'gettext', 'custom_related_products_text', 20, 3 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );


remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
