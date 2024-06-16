<?php
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ecommerce_watch_store_logo_customize_register( $wp_customize ) {
	// Logo Resizer additions
	$wp_customize->add_setting( 'logo_size', array(
		'default'              => 50,
		'type'                 => 'theme_mod',
		'theme_supports'       => 'custom-logo',
		'transport'            => 'refresh',
		'sanitize_callback'    => 'ecommerce_watch_store_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );

	$wp_customize->add_control( 'logo_size', array(
		'label'       => esc_html__( 'Logo Size','ecommerce-watch-store' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'range',
		'settings'    => 'logo_size',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 100,
			'aria-valuemin'    => 0,
			'aria-valuemax'    => 100,
			'aria-valuenow'    => 50,
			'aria-orientation' => 'horizontal',
		),
	) );

	$wp_customize->add_setting('ecommerce_watch_store_logo_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('ecommerce_watch_store_logo_width',array(
		'label'	=> __('Logo Width','ecommerce-watch-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','ecommerce-watch-store'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'ecommerce-watch-store' ),),
		'section'=> 'title_tagline',
		'type'=> 'text'
		));

	$wp_customize->add_setting('ecommerce_watch_store_logo_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ecommerce_watch_store_logo_height',array(
		'label'	=> __('Logo Height','ecommerce-watch-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','ecommerce-watch-store'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'ecommerce-watch-store' ),),
		'section'=> 'title_tagline',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ecommerce_watch_store_logo_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ecommerce_watch_store_logo_padding',array(
		'label'	=> __('Logo Padding','ecommerce-watch-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','ecommerce-watch-store'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'ecommerce-watch-store' ),
    ),
		'section'=> 'title_tagline',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ecommerce_watch_store_logo_margin',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ecommerce_watch_store_logo_margin',array(
		'label'	=> __('Logo Margin','ecommerce-watch-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','ecommerce-watch-store'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'ecommerce-watch-store' ),
    ),
		'section'=> 'title_tagline',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'ecommerce_watch_store_logo_title_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'ecommerce_watch_store_switch_sanitization'
    ));  
    $wp_customize->add_control( new Ecommerce_Watch_Store_Toggle_Switch_Custom_Control( $wp_customize, 'ecommerce_watch_store_logo_title_hide_show',array(
		'label' => esc_html__( 'Show / Hide Site Title','ecommerce-watch-store' ),
		'priority'    => 10,
		'section' => 'title_tagline'
    )));

    $wp_customize->add_setting('ecommerce_watch_store_site_title_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ecommerce_watch_store_site_title_font_size',array(
		'label'	=> __('Site Title Font Size','ecommerce-watch-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','ecommerce-watch-store'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'ecommerce-watch-store' ),
    ),
		'section'=> 'title_tagline',
		'type'=> 'text',
		'active_callback' => 'ecommerce_watch_store_logo_title_hide_show'
	));

	$wp_customize->add_setting('ecommerce_watch_store_site_title_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ecommerce_watch_store_site_title_color', array(
		'label'    => __('Site Title Color', 'ecommerce-watch-store'),
		'section'  => 'title_tagline',
		'active_callback' => 'ecommerce_watch_store_logo_title_hide_show'
	)));

	// Tagline

    $wp_customize->add_setting( 'ecommerce_watch_store_tagline_hide_show',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'ecommerce_watch_store_switch_sanitization'
    ));  
    $wp_customize->add_control( new Ecommerce_Watch_Store_Toggle_Switch_Custom_Control( $wp_customize, 'ecommerce_watch_store_tagline_hide_show',array(
		'label' => esc_html__( 'Show / Hide Site Tagline','ecommerce-watch-store' ),
		'section' => 'title_tagline'
    )));

    $wp_customize->add_setting('ecommerce_watch_store_site_tagline_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ecommerce_watch_store_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size','ecommerce-watch-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','ecommerce-watch-store'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'ecommerce-watch-store' ),
    ),
		'section'=> 'title_tagline',
		'type'=> 'text',
		'active_callback' => 'ecommerce_watch_store_tagline_hide_show'
	));

	$wp_customize->add_setting('ecommerce_watch_store_site_tagline_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ecommerce_watch_store_site_tagline_color', array(
		'label'    => __('Site Tagline Color', 'ecommerce-watch-store'),
		'section'  => 'title_tagline',
		'active_callback' => 'ecommerce_watch_store_tagline_hide_show'
	)));
}
add_action( 'customize_register', 'ecommerce_watch_store_logo_customize_register' );

/**
 * Add support for logo resizing by filtering `get_custom_logo`
 */
function ecommerce_watch_store_customize_logo_resize( $html ) {
	$size = get_theme_mod( 'logo_size' );
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	// set the short side minimum
	$min = 48;

	// don't use empty() because we can still use a 0
	if ( is_numeric( $size ) && is_numeric( $custom_logo_id ) ) {

		// we're looking for $img['width'] and $img['height'] of original image
		$logo = wp_get_attachment_metadata( $custom_logo_id );
		if ( ! $logo ) return $html;

		// get the logo support size
		$sizes = get_theme_support( 'custom-logo' );

		// Check for max height and width, default to image sizes if none set in theme
		$max['height'] = isset( $sizes[0]['height'] ) ? $sizes[0]['height'] : $logo['height'];
		$max['width'] = isset( $sizes[0]['width'] ) ? $sizes[0]['width'] : $logo['width'];

		// landscape or square
		if ( $logo['width'] >= $logo['height'] ) {
			$output = ecommerce_watch_store_min_max( $logo['height'], $logo['width'], $max['height'], $max['width'], $size, $min );
			$img = array(
				'height'	=> $output['short'],
				'width'		=> $output['long']
			);
		// portrait
		} else if ( $logo['width'] < $logo['height'] ) {
			$output = ecommerce_watch_store_min_max( $logo['width'], $logo['height'], $max['width'], $max['height'], $size, $min );
			$img = array(
				'height'	=> $output['long'],
				'width'		=> $output['short']
			);
		}

		// add the CSS
		$css = '
<style>
.custom-logo {
	height: ' . $img['height'] . 'px;
	max-height: ' . $max['height'] . 'px;
	max-width: ' . $max['width'] . 'px;
	width: ' . $img['width'] . 'px;
}
</style>';

		$html = $css . $html;
	}

	return $html;
}
add_filter( 'get_custom_logo', 'ecommerce_watch_store_customize_logo_resize' );

/* Helper function to determine the max size of the logo */
function ecommerce_watch_store_min_max( $short, $long, $short_max, $long_max, $percent, $min ){
	$ratio = ( $long / $short );
	$max['long'] = ( $long_max >= $long ) ? $long : $long_max;
	$max['short'] = ( $short_max >= ( $max['long'] / $ratio ) ) ? floor( $max['long'] / $ratio ) : $short_max;

	$ppp = ( $max['short'] - $min ) / 100;

	$size['short'] = round( $min + ( $percent * $ppp ) );
	$size['long'] = round( $size['short'] / ( $short / $long ) );

	return $size;
}

/**
 * JS handlers for Customizer Controls
 */
function ecommerce_watch_store_customize_controls_js() {
	wp_enqueue_script( 'ecommerce-watch-store-customizer-controls', esc_url(get_template_directory_uri()) . '/inc/logo/js/customize-controls.js', array( 'jquery', 'customize-preview' ), '201709071000', true );
}
add_action( 'customize_controls_enqueue_scripts', 'ecommerce_watch_store_customize_controls_js' );

/**
 * Adds CSS to the Customizer controls.
 */
function ecommerce_watch_store_customize_css() {
	wp_add_inline_style( 'customize-controls', '#customize-control-logo_size input[type=range] { width: 100%; }' );
}
add_action( 'customize_controls_enqueue_scripts', 'ecommerce_watch_store_customize_css' );

/**
 * Testing function to remove logo_size theme mod
 */
function ecommerce_watch_store_remove_theme_mod() {
	if ( isset( $_GET['remove_logo_size'] ) && 'true' == $_GET['remove_logo_size'] ){
		set_theme_mod( 'logo_size', '' );
	}
}
add_action( 'wp_loaded', 'ecommerce_watch_store_remove_theme_mod' );