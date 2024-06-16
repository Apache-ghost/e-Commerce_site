<?php
/**
 * @package Ecommerce Watch Store 
 * Setup the WordPress core custom header feature.
 *
 * @uses ecommerce_watch_store_header_style()
*/
function ecommerce_watch_store_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'ecommerce_watch_store_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 70,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'ecommerce_watch_store_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'ecommerce_watch_store_custom_header_setup' );

if ( ! function_exists( 'ecommerce_watch_store_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see ecommerce_watch_store_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'ecommerce_watch_store_header_style' );

function ecommerce_watch_store_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .page-template-custom-home-page .home-page-header, .home-page-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'ecommerce-watch-store-basic-style', $custom_css );
	endif;
}
endif;