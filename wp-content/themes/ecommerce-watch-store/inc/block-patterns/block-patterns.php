<?php
/**
 * Ecommerce Watch Store: Block Patterns
 *
 * @package Ecommerce Watch Store
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'ecommerce-watch-store',
		array( 'label' => __( 'Ecommerce Watch Store', 'ecommerce-watch-store' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'ecommerce-watch-store/banner-section',
		array(
			'title'      => __( 'Banner Section', 'ecommerce-watch-store' ),
			'categories' => array( 'ecommerce-watch-store' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":32,\"dimRatio\":0,\"isDark\":false,\"align\":\"full\",\"className\":\"banner\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-cover alignfull is-light banner\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-32\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"66.66%\",\"className\":\"banner-content\"} -->\n<div class=\"wp-block-column banner-content\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"40px\",\"textTransform\":\"capitalize\",\"fontStyle\":\"normal\",\"fontWeight\":\"500\"},\"elements\":{\"link\":{\"color\":{\"text\":\"var:preset|color|black\"}}}},\"textColor\":\"black\"} -->\n<h1 class=\"wp-block-heading has-black-color has-text-color has-link-color\" style=\"font-size:40px;font-style:normal;font-weight:500;text-transform:capitalize\">latest watch collection</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#777777\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#777777\"}}},\"typography\":{\"fontSize\":\"14px\"}}} -->\n<p class=\"has-text-color has-link-color\" style=\"color:#777777;font-size:14px\">Raymond Weil’s emblematic collection, nabucco, makes a strong come back this year.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"typography\":{\"fontSize\":\"14px\",\"textTransform\":\"uppercase\",\"fontStyle\":\"normal\",\"fontWeight\":\"500\"},\"border\":{\"radius\":\"5px\"},\"color\":{\"text\":\"#111111\",\"background\":\"#00000000\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#111111\"}}}},\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button has-custom-font-size is-style-outline\" style=\"font-size:14px;font-style:normal;font-weight:500;text-transform:uppercase\"><a class=\"wp-block-button__link has-text-color has-background has-link-color wp-element-button\" href=\"#\" style=\"border-radius:5px;color:#111111;background-color:#00000000\">explore now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:columns {\"align\":\"wide\",\"className\":\"banner-product-sec\"} -->\n<div class=\"wp-block-columns alignwide banner-product-sec\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:woocommerce/product-category {\"columns\":1,\"rows\":1,\"categories\":[17],\"stockStatus\":[\"\",\"\",\"\",\"instock\",\"outofstock\",\"onbackorder\"],\"align\":\"full\"} /--></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'ecommerce-watch-store/services-section',
		array(
			'title'      => __( 'Featured Section', 'ecommerce-watch-store' ),
			'categories' => array( 'ecommerce-watch-store' ),
			'content'    => "<!-- wp:group {\"className\":\"product-section py-5\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group product-section py-5\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"700\",\"textTransform\":\"capitalize\",\"fontSize\":\"22px\"},\"color\":{\"text\":\"#1b2028\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#1b2028\"}}}}} -->\n<h2 class=\"wp-block-heading has-text-align-center has-text-color has-link-color\" style=\"color:#1b2028;font-size:22px;font-style:normal;font-weight:700;text-transform:capitalize\">universal timekeepers of the world</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:shortcode -->\n[products limit=\"4\" columns=\"4\"]\n<!-- /wp:shortcode --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);
}