<?php

//Load the Global Options
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}

// Save local JSON
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/src/wp/acf-json';
    
    
    // return
    return $path;
    
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {

    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $path[] = get_stylesheet_directory() . '/src/wp/acf-json';
    
    
    // return
    return $paths;
    
}



add_action('acf/init', 'my_acf_init');
function my_acf_init() {

    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'banner',
            'title'             => __('Banner'),
            'description'       => __('Banner'),
            'render_template'   => '/templates/blocks/banner.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Banner' ),
        )); 
    }
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'icon-block',
            'title'             => __('Icon Block'),
            'description'       => __('Icon Block'),
            'render_template'   => '/templates/blocks/icon-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Banner' ),
        )); 
    }

    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'faq',
            'title'             => __('FAQs'),
            'description'       => __('FAQs'),
            'render_template'   => '/templates/blocks/faq.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'FAQs' ),
        )); 
    }

    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'callout-block',
            'title'             => __('Callout Block'),
            'description'       => __('Callout Block'),
            'render_template'   => '/templates/blocks/callout-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Callout Block' ),
        )); 
    }

    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'latest-products',
            'title'             => __('Latest Products'),
            'description'       => __('Latest Products'),
            'render_template'   => '/templates/blocks/latest-products.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Latest Products' ),
        )); 
    }

    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'media-text-block',
            'title'             => __('Media Text Block'),
            'description'       => __('Media Text Block'),
            'render_template'   => '/templates/blocks/media-text-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Media Text Block' ),
        )); 
    } 
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'contact-form',
            'title'             => __('Contact Form'),
            'description'       => __('Contact Form'),
            'render_template'   => '/templates/blocks/contact-form.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact form' ),
        )); 
    } 

    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'testimonials',
            'title'             => __('Testimonials'),
            'description'       => __('Testimonials'),
            'render_template'   => '/templates/blocks/testimonials.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Testimonials' ),
        )); 
    } 
}


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}