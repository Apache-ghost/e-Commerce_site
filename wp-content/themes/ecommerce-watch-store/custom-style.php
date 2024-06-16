<?php

	$ecommerce_watch_store_custom_css= "";

	/*-------------------- First Highlight Color -------------------*/

	$ecommerce_watch_store_first_color = get_theme_mod('ecommerce_watch_store_first_color');

	if($ecommerce_watch_store_first_color != false){
		$ecommerce_watch_store_custom_css .='.principle-box:hover .principle-box-inner-img,#comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #footer input[type="submit"], #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .scrollup i:hover, #sidebar .custom-social-icons a,#footer .custom-social-icons a, #sidebar h3,  #sidebar .widget_block h3, #sidebar h2, .pagination span, .pagination a, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, .scrollup i, .pagination a:hover, .pagination .current, #sidebar .tagcloud a:hover, #main-product button.tablinks.active, .main-product-section .pro-button, .main-product-section:hover .the_timer, nav.woocommerce-MyAccount-navigation ul li:hover, #preloader, .event-btn-1 a, .event-btn-2 a:hover,.wp-block-tag-cloud a:hover,#sidebar h3, #sidebar .widget_block h3, #sidebar h2, #sidebar label.wp-block-search__label, #sidebar .wp-block-heading,.bradcrumbs a,.bradcrumbs span,.wp-block-button__link,#sidebar .wp-block-tag-cloud a:hover,#footer .wp-block-tag-cloud a:hover,#footer-2,.read-more a,#banner .slider-nav .slick-slide.slick-current.slick-active,.compare-btn a, .compare-btn-banner a, .about-btn a:hover, .topbar-button a:hover,#comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce a.added_to_cart.wc-forward:hover,#slider .more-btn a:hover,.more-btn a, .middle-header .cart-value,.bradcrumbs a, .post-categories li a{';
			$ecommerce_watch_store_custom_css .='background: '.esc_attr($ecommerce_watch_store_first_color).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	if($ecommerce_watch_store_first_color != false){
		$ecommerce_watch_store_custom_css .='#sidebar ul li::before,#footer-2{';
			$ecommerce_watch_store_custom_css .='background: '.esc_attr($ecommerce_watch_store_first_color).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	if($ecommerce_watch_store_first_color != false){
		$ecommerce_watch_store_custom_css .='a, .main-header span.donate a:hover, .main-header span.volunteer a:hover, .main-header span.donate i:hover, .main-header span.volunteer i:hover, .box-content h3, .box-content h3 a, .woocommerce-message::before,.woocommerce-info::before,.post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .main-navigation ul li.current_page_item, .main-navigation li a:hover,.main-navigation ul li.current_page_item a, .main-navigation li a:hover, .main-navigation ul ul li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover,p.site-title a:hover, .logo h1 a:hover,.post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a,#best-product-section .product-box:hover .product-box-content h3 a{';
			$ecommerce_watch_store_custom_css .='color: '.esc_attr($ecommerce_watch_store_first_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	if($ecommerce_watch_store_first_color != false){
		$ecommerce_watch_store_custom_css .='.home-page-header,.main-navigation ul ul, .about-btn a:hover, .topbar-button a:hover{';
			$ecommerce_watch_store_custom_css .='border-color: '.esc_attr($ecommerce_watch_store_first_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	if($ecommerce_watch_store_first_color != false){
		$ecommerce_watch_store_custom_css .='.main-navigation ul ul,.main-navigation ul li.current_page_item a{';
			$ecommerce_watch_store_custom_css .='border-bottom:2px solid '.esc_attr($ecommerce_watch_store_first_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$ecommerce_watch_store_theme_lay = get_theme_mod( 'ecommerce_watch_store_width_option','Full Width');
    if($ecommerce_watch_store_theme_lay == 'Boxed'){
		$ecommerce_watch_store_custom_css .='body{';
			$ecommerce_watch_store_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$ecommerce_watch_store_custom_css .='}';
		$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='right: 100px;';
		$ecommerce_watch_store_custom_css .='}';
		$ecommerce_watch_store_custom_css .='.row.outer-logo{';
			$ecommerce_watch_store_custom_css .='margin-left: 0px;';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_theme_lay == 'Wide Width'){
		$ecommerce_watch_store_custom_css .='body{';
			$ecommerce_watch_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$ecommerce_watch_store_custom_css .='}';
		$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='right: 30px;';
		$ecommerce_watch_store_custom_css .='}';
		$ecommerce_watch_store_custom_css .='.row.outer-logo{';
			$ecommerce_watch_store_custom_css .='margin-left: 0px;';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_theme_lay == 'Full Width'){
		$ecommerce_watch_store_custom_css .='body{';
			$ecommerce_watch_store_custom_css .='max-width: 100%;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$ecommerce_watch_store_resp_slider = get_theme_mod( 'ecommerce_watch_store_resp_slider_hide_show',true);
	if($ecommerce_watch_store_resp_slider == true && get_theme_mod( 'ecommerce_watch_store_slider_hide_show', false) == false){
    	$ecommerce_watch_store_custom_css .='#banner{';
			$ecommerce_watch_store_custom_css .='display:none;';
		$ecommerce_watch_store_custom_css .='} ';
	}
    if($ecommerce_watch_store_resp_slider == true){
    	$ecommerce_watch_store_custom_css .='@media screen and (max-width:575px) {';
		$ecommerce_watch_store_custom_css .='#banner{';
			$ecommerce_watch_store_custom_css .='display:block;';
		$ecommerce_watch_store_custom_css .='} }';
	}else if($ecommerce_watch_store_resp_slider == false){
		$ecommerce_watch_store_custom_css .='@media screen and (max-width:575px) {';
		$ecommerce_watch_store_custom_css .='#banner{';
			$ecommerce_watch_store_custom_css .='display:none;';
		$ecommerce_watch_store_custom_css .='} }';
		$ecommerce_watch_store_custom_css .='@media screen and (max-width:575px){';
		$ecommerce_watch_store_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$ecommerce_watch_store_custom_css .='margin-top: 45px;';
		$ecommerce_watch_store_custom_css .='} }';
	}

	$ecommerce_watch_store_resp_sidebar = get_theme_mod( 'ecommerce_watch_store_sidebar_hide_show',true);
    if($ecommerce_watch_store_resp_sidebar == true){
    	$ecommerce_watch_store_custom_css .='@media screen and (max-width:575px) {';
		$ecommerce_watch_store_custom_css .='#sidebar{';
			$ecommerce_watch_store_custom_css .='display:block;';
		$ecommerce_watch_store_custom_css .='} }';
	}else if($ecommerce_watch_store_resp_sidebar == false){
		$ecommerce_watch_store_custom_css .='@media screen and (max-width:575px) {';
		$ecommerce_watch_store_custom_css .='#sidebar{';
			$ecommerce_watch_store_custom_css .='display:none;';
		$ecommerce_watch_store_custom_css .='} }';
	}

	$ecommerce_watch_store_resp_scroll_top = get_theme_mod( 'ecommerce_watch_store_resp_scroll_top_hide_show',true);
	if($ecommerce_watch_store_resp_scroll_top == true && get_theme_mod( 'ecommerce_watch_store_hide_show_scroll',true) == false){
    	$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='visibility:hidden !important;';
		$ecommerce_watch_store_custom_css .='} ';
	}
    if($ecommerce_watch_store_resp_scroll_top == true){
    	$ecommerce_watch_store_custom_css .='@media screen and (max-width:575px) {';
		$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='visibility:visible !important;';
		$ecommerce_watch_store_custom_css .='} }';
	}else if($ecommerce_watch_store_resp_scroll_top == false){
		$ecommerce_watch_store_custom_css .='@media screen and (max-width:575px){';
		$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='visibility:hidden !important;';
		$ecommerce_watch_store_custom_css .='} }';
	}

	/*-------------- Copyright Alignment ----------------*/

	$ecommerce_watch_store_copyright_alingment = get_theme_mod('ecommerce_watch_store_copyright_alingment');
	if($ecommerce_watch_store_copyright_alingment != false){
		$ecommerce_watch_store_custom_css .='.copyright p{';
			$ecommerce_watch_store_custom_css .='text-align: '.esc_attr($ecommerce_watch_store_copyright_alingment).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$ecommerce_watch_store_preloader_bg_color = get_theme_mod('ecommerce_watch_store_preloader_bg_color');
	if($ecommerce_watch_store_preloader_bg_color != false){
		$ecommerce_watch_store_custom_css .='#preloader{';
			$ecommerce_watch_store_custom_css .='background: '.esc_attr($ecommerce_watch_store_preloader_bg_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_preloader_border_color = get_theme_mod('ecommerce_watch_store_preloader_border_color');
	if($ecommerce_watch_store_preloader_border_color != false){
		$ecommerce_watch_store_custom_css .='.loader-line{';
			$ecommerce_watch_store_custom_css .='border-color: '.esc_attr($ecommerce_watch_store_preloader_border_color).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*----------------- Banner -----------------*/

	$ecommerce_watch_store_show_hide_banner = get_theme_mod('ecommerce_watch_store_show_hide_banner');
	if($ecommerce_watch_store_show_hide_banner == false){
		$ecommerce_watch_store_custom_css .='.page-template-custom-home-page .home-page-header{';
			$ecommerce_watch_store_custom_css .='position: static;box-shadow: #00000029 0 4px 12px; background-color: #fff; margin-top:0;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_banner_image = get_theme_mod('ecommerce_watch_store_banner_image');
	if($ecommerce_watch_store_banner_image != false){
		$ecommerce_watch_store_custom_css .='#banner{';
			$ecommerce_watch_store_custom_css .='background: url('.esc_url($ecommerce_watch_store_banner_image).');';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$ecommerce_watch_store_copyright_alingment = get_theme_mod('ecommerce_watch_store_copyright_alingment');
	if($ecommerce_watch_store_copyright_alingment != false){
		$ecommerce_watch_store_custom_css .='.copyright p{';
			$ecommerce_watch_store_custom_css .='text-align: '.esc_attr($ecommerce_watch_store_copyright_alingment).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_copyright_background_color = get_theme_mod('ecommerce_watch_store_copyright_background_color');
	if($ecommerce_watch_store_copyright_background_color != false){
		$ecommerce_watch_store_custom_css .='#footer-2{';
			$ecommerce_watch_store_custom_css .='background-color: '.esc_attr($ecommerce_watch_store_copyright_background_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_footer_background_color = get_theme_mod('ecommerce_watch_store_footer_background_color');
	if($ecommerce_watch_store_footer_background_color != false){
		$ecommerce_watch_store_custom_css .='#footer{';
			$ecommerce_watch_store_custom_css .='background-color: '.esc_attr($ecommerce_watch_store_footer_background_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_footer_widgets_heading = get_theme_mod( 'ecommerce_watch_store_footer_widgets_heading','Left');
    if($ecommerce_watch_store_footer_widgets_heading == 'Left'){
		$ecommerce_watch_store_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$ecommerce_watch_store_custom_css .='text-align: left;';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_footer_widgets_heading == 'Center'){
		$ecommerce_watch_store_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$ecommerce_watch_store_custom_css .='text-align: center;';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_footer_widgets_heading == 'Right'){
		$ecommerce_watch_store_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$ecommerce_watch_store_custom_css .='text-align: right;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_footer_widgets_content = get_theme_mod( 'ecommerce_watch_store_footer_widgets_content','Left');
    if($ecommerce_watch_store_footer_widgets_content == 'Left'){
		$ecommerce_watch_store_custom_css .='#footer .widget{';
		$ecommerce_watch_store_custom_css .='text-align: left;';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_footer_widgets_content == 'Center'){
		$ecommerce_watch_store_custom_css .='#footer .widget{';
			$ecommerce_watch_store_custom_css .='text-align: center;';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_footer_widgets_content == 'Right'){
		$ecommerce_watch_store_custom_css .='#footer .widget{';
			$ecommerce_watch_store_custom_css .='text-align: right;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_copyright_font_size = get_theme_mod('ecommerce_watch_store_copyright_font_size');
	if($ecommerce_watch_store_copyright_font_size != false){
		$ecommerce_watch_store_custom_css .='#footer-2 a, #footer-2 p{';
			$ecommerce_watch_store_custom_css .='font-size: '.esc_attr($ecommerce_watch_store_copyright_font_size).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_copyright_alingment = get_theme_mod('ecommerce_watch_store_copyright_alingment');
	if($ecommerce_watch_store_copyright_alingment != false){
		$ecommerce_watch_store_custom_css .='#footer-2 p{';
			$ecommerce_watch_store_custom_css .='text-align: '.esc_attr($ecommerce_watch_store_copyright_alingment).';';
		$ecommerce_watch_store_custom_css .='}';
	}
	$ecommerce_watch_store_copyright_padding_top_bottom = get_theme_mod('ecommerce_watch_store_copyright_padding_top_bottom');
	if($ecommerce_watch_store_copyright_padding_top_bottom != false){
		$ecommerce_watch_store_custom_css .='#footer-2{';
			$ecommerce_watch_store_custom_css .='padding-top: '.esc_attr($ecommerce_watch_store_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($ecommerce_watch_store_copyright_padding_top_bottom).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_footer_padding = get_theme_mod('ecommerce_watch_store_footer_padding');
	if($ecommerce_watch_store_footer_padding != false){
		$ecommerce_watch_store_custom_css .='#footer{';
			$ecommerce_watch_store_custom_css .='padding: '.esc_attr($ecommerce_watch_store_footer_padding).' 0;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_footer_icon = get_theme_mod('ecommerce_watch_store_footer_icon');
	if($ecommerce_watch_store_footer_icon == false){
		$ecommerce_watch_store_custom_css .='#footer-2 p{';
			$ecommerce_watch_store_custom_css .='width:100%; text-align:center; float:none;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_footer_background_image = get_theme_mod('ecommerce_watch_store_footer_background_image');
	if($ecommerce_watch_store_footer_background_image != false){
		$ecommerce_watch_store_custom_css .='#footer{';
			$ecommerce_watch_store_custom_css .='background: url('.esc_attr($ecommerce_watch_store_footer_background_image).');';
			$ecommerce_watch_store_custom_css .='background-repeat: no-repeat;';
			$ecommerce_watch_store_custom_css .='background-size: cover;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_theme_lay = get_theme_mod( 'ecommerce_watch_store_img_footer','scroll');
	if($ecommerce_watch_store_theme_lay == 'fixed'){
		$ecommerce_watch_store_custom_css .='#footer{';
			$ecommerce_watch_store_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$ecommerce_watch_store_custom_css .='}';
	}elseif ($ecommerce_watch_store_theme_lay == 'scroll'){
		$ecommerce_watch_store_custom_css .='#footer{';
			$ecommerce_watch_store_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_footer_img_position = get_theme_mod('ecommerce_watch_store_footer_img_position','center center');
	if($ecommerce_watch_store_footer_img_position != false){
		$ecommerce_watch_store_custom_css .='#footer{';
			$ecommerce_watch_store_custom_css .='background-position: '.esc_attr($ecommerce_watch_store_footer_img_position).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$ecommerce_watch_store_scroll_to_top_font_size = get_theme_mod('ecommerce_watch_store_scroll_to_top_font_size');
	if($ecommerce_watch_store_scroll_to_top_font_size != false){
		$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='font-size: '.esc_attr($ecommerce_watch_store_scroll_to_top_font_size).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_scroll_to_top_padding = get_theme_mod('ecommerce_watch_store_scroll_to_top_padding');
	$ecommerce_watch_store_scroll_to_top_padding = get_theme_mod('ecommerce_watch_store_scroll_to_top_padding');
	if($ecommerce_watch_store_scroll_to_top_padding != false){
		$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='padding-top: '.esc_attr($ecommerce_watch_store_scroll_to_top_padding).';padding-bottom: '.esc_attr($ecommerce_watch_store_scroll_to_top_padding).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_scroll_to_top_width = get_theme_mod('ecommerce_watch_store_scroll_to_top_width');
	if($ecommerce_watch_store_scroll_to_top_width != false){
		$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='width: '.esc_attr($ecommerce_watch_store_scroll_to_top_width).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_scroll_to_top_height = get_theme_mod('ecommerce_watch_store_scroll_to_top_height');
	if($ecommerce_watch_store_scroll_to_top_height != false){
		$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='height: '.esc_attr($ecommerce_watch_store_scroll_to_top_height).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_scroll_to_top_border_radius = get_theme_mod('ecommerce_watch_store_scroll_to_top_border_radius');
	if($ecommerce_watch_store_scroll_to_top_border_radius != false){
		$ecommerce_watch_store_custom_css .='.scrollup i{';
			$ecommerce_watch_store_custom_css .='border-radius: '.esc_attr($ecommerce_watch_store_scroll_to_top_border_radius).'px;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$ecommerce_watch_store_logo_padding = get_theme_mod('ecommerce_watch_store_logo_padding');
	if($ecommerce_watch_store_logo_padding != false){
		$ecommerce_watch_store_custom_css .='.logo{';
			$ecommerce_watch_store_custom_css .='padding: '.esc_attr($ecommerce_watch_store_logo_padding).' !important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_logo_margin = get_theme_mod('ecommerce_watch_store_logo_margin');
	if($ecommerce_watch_store_logo_margin != false){
		$ecommerce_watch_store_custom_css .='.logo{';
			$ecommerce_watch_store_custom_css .='margin: '.esc_attr($ecommerce_watch_store_logo_margin).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	// Site title Font Size
	$ecommerce_watch_store_site_title_font_size = get_theme_mod('ecommerce_watch_store_site_title_font_size');
	if($ecommerce_watch_store_site_title_font_size != false){
		$ecommerce_watch_store_custom_css .='.logo p.site-title, .logo h1{';
			$ecommerce_watch_store_custom_css .='font-size: '.esc_attr($ecommerce_watch_store_site_title_font_size).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	// Site tagline Font Size
	$ecommerce_watch_store_site_tagline_font_size = get_theme_mod('ecommerce_watch_store_site_tagline_font_size');
	if($ecommerce_watch_store_site_tagline_font_size != false){
		$ecommerce_watch_store_custom_css .='.logo p.site-description{';
			$ecommerce_watch_store_custom_css .='font-size: '.esc_attr($ecommerce_watch_store_site_tagline_font_size).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_site_title_color = get_theme_mod('ecommerce_watch_store_site_title_color');
	if($ecommerce_watch_store_site_title_color != false){
		$ecommerce_watch_store_custom_css .='p.site-title a, .logo h1 a{';
			$ecommerce_watch_store_custom_css .='color: '.esc_attr($ecommerce_watch_store_site_title_color).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_site_tagline_color = get_theme_mod('ecommerce_watch_store_site_tagline_color');
	if($ecommerce_watch_store_site_tagline_color != false){
		$ecommerce_watch_store_custom_css .='.logo p.site-description{';
			$ecommerce_watch_store_custom_css .='color: '.esc_attr($ecommerce_watch_store_site_tagline_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_logo_width = get_theme_mod('ecommerce_watch_store_logo_width');
	if($ecommerce_watch_store_logo_width != false){
		$ecommerce_watch_store_custom_css .='.logo img{';
			$ecommerce_watch_store_custom_css .='width: '.esc_attr($ecommerce_watch_store_logo_width).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_logo_height = get_theme_mod('ecommerce_watch_store_logo_height');
	if($ecommerce_watch_store_logo_height != false){
		$ecommerce_watch_store_custom_css .='.logo img{';
			$ecommerce_watch_store_custom_css .='height: '.esc_attr($ecommerce_watch_store_logo_height).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	// Header Background Color
	$ecommerce_watch_store_header_background_color = get_theme_mod('ecommerce_watch_store_header_background_color');
	if($ecommerce_watch_store_header_background_color != false){
		$ecommerce_watch_store_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$ecommerce_watch_store_custom_css .='background-color: '.esc_attr($ecommerce_watch_store_header_background_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_header_img_position = get_theme_mod('ecommerce_watch_store_header_img_position','center top');
	if($ecommerce_watch_store_header_img_position != false){
		$ecommerce_watch_store_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$ecommerce_watch_store_custom_css .='background-position: '.esc_attr($ecommerce_watch_store_header_img_position).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_resp_menu_toggle_btn_bg_color = get_theme_mod('ecommerce_watch_store_resp_menu_toggle_btn_bg_color');
	if($ecommerce_watch_store_resp_menu_toggle_btn_bg_color != false){
		$ecommerce_watch_store_custom_css .='.toggle-nav i{';
			$ecommerce_watch_store_custom_css .='background-color: '.esc_attr($ecommerce_watch_store_resp_menu_toggle_btn_bg_color).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$ecommerce_watch_store_theme_lay = get_theme_mod( 'ecommerce_watch_store_blog_layout_option','Default');
    if($ecommerce_watch_store_theme_lay == 'Default'){
		$ecommerce_watch_store_custom_css .='.post-main-box{';
			$ecommerce_watch_store_custom_css .='';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_theme_lay == 'Center'){
		$ecommerce_watch_store_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$ecommerce_watch_store_custom_css .='text-align:center;';
		$ecommerce_watch_store_custom_css .='}';
		$ecommerce_watch_store_custom_css .='.post-info{';
			$ecommerce_watch_store_custom_css .='margin-top:10px;';
		$ecommerce_watch_store_custom_css .='}';
		$ecommerce_watch_store_custom_css .='.post-info hr{';
			$ecommerce_watch_store_custom_css .='margin:15px auto;';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_theme_lay == 'Left'){
		$ecommerce_watch_store_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$ecommerce_watch_store_custom_css .='text-align:Left;';
		$ecommerce_watch_store_custom_css .='}';
		$ecommerce_watch_store_custom_css .='.post-info hr{';
			$ecommerce_watch_store_custom_css .='margin-bottom:10px;';
		$ecommerce_watch_store_custom_css .='}';
		$ecommerce_watch_store_custom_css .='.post-main-box h2{';
			$ecommerce_watch_store_custom_css .='margin-top:10px;';
		$ecommerce_watch_store_custom_css .='}';
		$ecommerce_watch_store_custom_css .='.service-text .more-btn{';
			$ecommerce_watch_store_custom_css .='display:inline-block;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$ecommerce_watch_store_blog_page_posts_settings = get_theme_mod( 'ecommerce_watch_store_blog_page_posts_settings','Into Blocks');
    if($ecommerce_watch_store_blog_page_posts_settings == 'Without Blocks'){
		$ecommerce_watch_store_custom_css .='.post-main-box{';
			$ecommerce_watch_store_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$ecommerce_watch_store_custom_css .='}';
	}

	// featured image dimention
	$ecommerce_watch_store_blog_post_featured_image_dimension = get_theme_mod('ecommerce_watch_store_blog_post_featured_image_dimension', 'default');
	$ecommerce_watch_store_blog_post_featured_image_custom_width = get_theme_mod('ecommerce_watch_store_blog_post_featured_image_custom_width',250);
	$ecommerce_watch_store_blog_post_featured_image_custom_height = get_theme_mod('ecommerce_watch_store_blog_post_featured_image_custom_height',250);
	if($ecommerce_watch_store_blog_post_featured_image_dimension == 'custom'){
		$ecommerce_watch_store_custom_css .='.post-main-box img{';
			$ecommerce_watch_store_custom_css .='width: '.esc_attr($ecommerce_watch_store_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($ecommerce_watch_store_blog_post_featured_image_custom_height).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$ecommerce_watch_store_featured_image_border_radius = get_theme_mod('ecommerce_watch_store_featured_image_border_radius', 0);
	if($ecommerce_watch_store_featured_image_border_radius != false){
		$ecommerce_watch_store_custom_css .='.box-image img, .feature-box img{';
			$ecommerce_watch_store_custom_css .='border-radius: '.esc_attr($ecommerce_watch_store_featured_image_border_radius).'px;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_featured_image_box_shadow = get_theme_mod('ecommerce_watch_store_featured_image_box_shadow',0);
	if($ecommerce_watch_store_featured_image_box_shadow != false){
		$ecommerce_watch_store_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$ecommerce_watch_store_custom_css .='box-shadow: '.esc_attr($ecommerce_watch_store_featured_image_box_shadow).'px '.esc_attr($ecommerce_watch_store_featured_image_box_shadow).'px '.esc_attr($ecommerce_watch_store_featured_image_box_shadow).'px #cccccc;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$ecommerce_watch_store_button_letter_spacing = get_theme_mod('ecommerce_watch_store_button_letter_spacing',14);
	$ecommerce_watch_store_custom_css .='.post-main-box .more-btn{';
		$ecommerce_watch_store_custom_css .='letter-spacing: '.esc_attr($ecommerce_watch_store_button_letter_spacing).';';
	$ecommerce_watch_store_custom_css .='}';

	$ecommerce_watch_store_button_border_radius = get_theme_mod('ecommerce_watch_store_button_border_radius');
	if($ecommerce_watch_store_button_border_radius != false){
		$ecommerce_watch_store_custom_css .='.post-main-box .more-btn a{';
			$ecommerce_watch_store_custom_css .='border-radius: '.esc_attr($ecommerce_watch_store_button_border_radius).'px !important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_button_top_bottom_padding = get_theme_mod('ecommerce_watch_store_button_top_bottom_padding');
	$ecommerce_watch_store_button_left_right_padding = get_theme_mod('ecommerce_watch_store_button_left_right_padding');
	if($ecommerce_watch_store_button_top_bottom_padding != false || $ecommerce_watch_store_button_left_right_padding != false){
		$ecommerce_watch_store_custom_css .='.post-main-box .more-btn{';
			$ecommerce_watch_store_custom_css .='padding-top: '.esc_attr($ecommerce_watch_store_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($ecommerce_watch_store_button_top_bottom_padding).'!important;padding-left: '.esc_attr($ecommerce_watch_store_button_left_right_padding).'!important;padding-right: '.esc_attr($ecommerce_watch_store_button_left_right_padding).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_button_font_size = get_theme_mod('ecommerce_watch_store_button_font_size',14);
	$ecommerce_watch_store_custom_css .='.post-main-box .more-btn a{';
		$ecommerce_watch_store_custom_css .='font-size: '.esc_attr($ecommerce_watch_store_button_font_size).';';
	$ecommerce_watch_store_custom_css .='}';

	$ecommerce_watch_store_theme_lay = get_theme_mod( 'ecommerce_watch_store_button_text_transform','Capitalize');
	if($ecommerce_watch_store_theme_lay == 'Capitalize'){
		$ecommerce_watch_store_custom_css .='.post-main-box .more-btn a{';
			$ecommerce_watch_store_custom_css .='text-transform:Capitalize;';
		$ecommerce_watch_store_custom_css .='}';
	}
	if($ecommerce_watch_store_theme_lay == 'Lowercase'){
		$ecommerce_watch_store_custom_css .='.post-main-box .more-btn a{';
			$ecommerce_watch_store_custom_css .='text-transform:Lowercase;';
		$ecommerce_watch_store_custom_css .='}';
	}
	if($ecommerce_watch_store_theme_lay == 'Uppercase'){
		$ecommerce_watch_store_custom_css .='.post-main-box .more-btn a{';
			$ecommerce_watch_store_custom_css .='text-transform:Uppercase;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$ecommerce_watch_store_single_blog_comment_button_text = get_theme_mod('ecommerce_watch_store_single_blog_comment_button_text', 'Post Comment');
	if($ecommerce_watch_store_single_blog_comment_button_text == ''){
		$ecommerce_watch_store_custom_css .='#comments p.form-submit {';
			$ecommerce_watch_store_custom_css .='display: none;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_comment_width = get_theme_mod('ecommerce_watch_store_single_blog_comment_width');
	if($ecommerce_watch_store_comment_width != false){
		$ecommerce_watch_store_custom_css .='#comments textarea{';
			$ecommerce_watch_store_custom_css .='width: '.esc_attr($ecommerce_watch_store_comment_width).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_single_blog_post_navigation_show_hide = get_theme_mod('ecommerce_watch_store_single_blog_post_navigation_show_hide',true);
	if($ecommerce_watch_store_single_blog_post_navigation_show_hide != true){
		$ecommerce_watch_store_custom_css .='.post-navigation{';
			$ecommerce_watch_store_custom_css .='display: none;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$ecommerce_watch_store_display_grid_posts_settings = get_theme_mod( 'ecommerce_watch_store_display_grid_posts_settings','Into Blocks');
    if($ecommerce_watch_store_display_grid_posts_settings == 'Without Blocks'){
		$ecommerce_watch_store_custom_css .='.grid-post-main-box{';
			$ecommerce_watch_store_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$ecommerce_watch_store_related_product_show_hide = get_theme_mod('ecommerce_watch_store_related_product_show_hide',true);
	if($ecommerce_watch_store_related_product_show_hide != true){
		$ecommerce_watch_store_custom_css .='.related.products{';
			$ecommerce_watch_store_custom_css .='display: none;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_products_padding_top_bottom = get_theme_mod('ecommerce_watch_store_products_padding_top_bottom');
	if($ecommerce_watch_store_products_padding_top_bottom != false){
		$ecommerce_watch_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$ecommerce_watch_store_custom_css .='padding-top: '.esc_attr($ecommerce_watch_store_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($ecommerce_watch_store_products_padding_top_bottom).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_products_padding_left_right = get_theme_mod('ecommerce_watch_store_products_padding_left_right');
	if($ecommerce_watch_store_products_padding_left_right != false){
		$ecommerce_watch_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$ecommerce_watch_store_custom_css .='padding-left: '.esc_attr($ecommerce_watch_store_products_padding_left_right).'!important; padding-right: '.esc_attr($ecommerce_watch_store_products_padding_left_right).'!important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_products_box_shadow = get_theme_mod('ecommerce_watch_store_products_box_shadow');
	if($ecommerce_watch_store_products_box_shadow != false){
		$ecommerce_watch_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$ecommerce_watch_store_custom_css .='box-shadow: '.esc_attr($ecommerce_watch_store_products_box_shadow).'px '.esc_attr($ecommerce_watch_store_products_box_shadow).'px '.esc_attr($ecommerce_watch_store_products_box_shadow).'px #ccc;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_products_border_radius = get_theme_mod('ecommerce_watch_store_products_border_radius', 0);
	if($ecommerce_watch_store_products_border_radius != false){
		$ecommerce_watch_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$ecommerce_watch_store_custom_css .='border-radius: '.esc_attr($ecommerce_watch_store_products_border_radius).'px;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_products_btn_padding_top_bottom = get_theme_mod('ecommerce_watch_store_products_btn_padding_top_bottom');
	if($ecommerce_watch_store_products_btn_padding_top_bottom != false){
		$ecommerce_watch_store_custom_css .='.woocommerce a.button{';
			$ecommerce_watch_store_custom_css .='padding-top: '.esc_attr($ecommerce_watch_store_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($ecommerce_watch_store_products_btn_padding_top_bottom).' !important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_products_btn_padding_left_right = get_theme_mod('ecommerce_watch_store_products_btn_padding_left_right');
	if($ecommerce_watch_store_products_btn_padding_left_right != false){
		$ecommerce_watch_store_custom_css .='.woocommerce a.button{';
			$ecommerce_watch_store_custom_css .='padding-left: '.esc_attr($ecommerce_watch_store_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($ecommerce_watch_store_products_btn_padding_left_right).' !important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_products_button_border_radius = get_theme_mod('ecommerce_watch_store_products_button_border_radius', 0);
	if($ecommerce_watch_store_products_button_border_radius != false){
		$ecommerce_watch_store_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$ecommerce_watch_store_custom_css .='border-radius: '.esc_attr($ecommerce_watch_store_products_button_border_radius).'px;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_woocommerce_sale_position = get_theme_mod( 'ecommerce_watch_store_woocommerce_sale_position','right');
    if($ecommerce_watch_store_woocommerce_sale_position == 'left'){
		$ecommerce_watch_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ecommerce_watch_store_custom_css .='left: -10px !important; right: auto !important;';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_woocommerce_sale_position == 'right'){
		$ecommerce_watch_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ecommerce_watch_store_custom_css .='left: auto !important; right: 0 !important;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_woocommerce_sale_font_size = get_theme_mod('ecommerce_watch_store_woocommerce_sale_font_size');
	if($ecommerce_watch_store_woocommerce_sale_font_size != false){
		$ecommerce_watch_store_custom_css .='.woocommerce span.onsale{';
			$ecommerce_watch_store_custom_css .='font-size: '.esc_attr($ecommerce_watch_store_woocommerce_sale_font_size).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_woocommerce_sale_padding_top_bottom = get_theme_mod('ecommerce_watch_store_woocommerce_sale_padding_top_bottom');
	if($ecommerce_watch_store_woocommerce_sale_padding_top_bottom != false){
		$ecommerce_watch_store_custom_css .='.woocommerce span.onsale{';
			$ecommerce_watch_store_custom_css .='padding-top: '.esc_attr($ecommerce_watch_store_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($ecommerce_watch_store_woocommerce_sale_padding_top_bottom).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_woocommerce_sale_padding_left_right = get_theme_mod('ecommerce_watch_store_woocommerce_sale_padding_left_right');
	if($ecommerce_watch_store_woocommerce_sale_padding_left_right != false){
		$ecommerce_watch_store_custom_css .='.woocommerce span.onsale{';
			$ecommerce_watch_store_custom_css .='padding-left: '.esc_attr($ecommerce_watch_store_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($ecommerce_watch_store_woocommerce_sale_padding_left_right).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_woocommerce_sale_border_radius = get_theme_mod('ecommerce_watch_store_woocommerce_sale_border_radius', 100);
	if($ecommerce_watch_store_woocommerce_sale_border_radius != false){
		$ecommerce_watch_store_custom_css .='.woocommerce span.onsale{';
			$ecommerce_watch_store_custom_css .='border-radius: '.esc_attr($ecommerce_watch_store_woocommerce_sale_border_radius).'px;';
		$ecommerce_watch_store_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$ecommerce_watch_store_topbar_padding_top_bottom = get_theme_mod('ecommerce_watch_store_topbar_padding_top_bottom');
	if($ecommerce_watch_store_topbar_padding_top_bottom != false){
		$ecommerce_watch_store_custom_css .='#topbar{';
			$ecommerce_watch_store_custom_css .='padding-top: '.esc_attr($ecommerce_watch_store_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($ecommerce_watch_store_topbar_padding_top_bottom).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_navigation_menu_font_size = get_theme_mod('ecommerce_watch_store_navigation_menu_font_size');
	if($ecommerce_watch_store_navigation_menu_font_size != false){
		$ecommerce_watch_store_custom_css .='.main-navigation a{';
			$ecommerce_watch_store_custom_css .='font-size: '.esc_attr($ecommerce_watch_store_navigation_menu_font_size).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_navigation_menu_font_weight = get_theme_mod('ecommerce_watch_store_navigation_menu_font_weight','600');
	if($ecommerce_watch_store_navigation_menu_font_weight != false){
		$ecommerce_watch_store_custom_css .='.main-navigation a{';
			$ecommerce_watch_store_custom_css .='font-weight: '.esc_attr($ecommerce_watch_store_navigation_menu_font_weight).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_theme_lay = get_theme_mod( 'ecommerce_watch_store_menu_text_transform','Uppercase');
	if($ecommerce_watch_store_theme_lay == 'Capitalize'){
		$ecommerce_watch_store_custom_css .='.main-navigation a{';
			$ecommerce_watch_store_custom_css .='text-transform:Capitalize;';
		$ecommerce_watch_store_custom_css .='}';
	}
	if($ecommerce_watch_store_theme_lay == 'Lowercase'){
		$ecommerce_watch_store_custom_css .='.main-navigation a{';
			$ecommerce_watch_store_custom_css .='text-transform:Lowercase;';
		$ecommerce_watch_store_custom_css .='}';
	}
	if($ecommerce_watch_store_theme_lay == 'Uppercase'){
		$ecommerce_watch_store_custom_css .='.main-navigation a{';
			$ecommerce_watch_store_custom_css .='text-transform:Uppercase;';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_header_menus_color = get_theme_mod('ecommerce_watch_store_header_menus_color');
	if($ecommerce_watch_store_header_menus_color != false){
		$ecommerce_watch_store_custom_css .='.main-navigation a{';
			$ecommerce_watch_store_custom_css .='color: '.esc_attr($ecommerce_watch_store_header_menus_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_header_menus_hover_color = get_theme_mod('ecommerce_watch_store_header_menus_hover_color');
	if($ecommerce_watch_store_header_menus_hover_color != false){
		$ecommerce_watch_store_custom_css .='.main-navigation a:hover{';
			$ecommerce_watch_store_custom_css .='color: '.esc_attr($ecommerce_watch_store_header_menus_hover_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_header_submenus_color = get_theme_mod('ecommerce_watch_store_header_submenus_color');
	if($ecommerce_watch_store_header_submenus_color != false){
		$ecommerce_watch_store_custom_css .='.main-navigation ul ul a{';
			$ecommerce_watch_store_custom_css .='color: '.esc_attr($ecommerce_watch_store_header_submenus_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_header_submenus_hover_color = get_theme_mod('ecommerce_watch_store_header_submenus_hover_color');
	if($ecommerce_watch_store_header_submenus_hover_color != false){
		$ecommerce_watch_store_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$ecommerce_watch_store_custom_css .='color: '.esc_attr($ecommerce_watch_store_header_submenus_hover_color).';';
		$ecommerce_watch_store_custom_css .='}';
	}

	$ecommerce_watch_store_menus_item = get_theme_mod( 'ecommerce_watch_store_menus_item_style','None');
    if($ecommerce_watch_store_menus_item == 'None'){
		$ecommerce_watch_store_custom_css .='.main-navigation a{';
			$ecommerce_watch_store_custom_css .='';
		$ecommerce_watch_store_custom_css .='}';
	}else if($ecommerce_watch_store_menus_item == 'Zoom In'){
		$ecommerce_watch_store_custom_css .='.main-navigation a:hover{';
			$ecommerce_watch_store_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$ecommerce_watch_store_custom_css .='}';
	}
