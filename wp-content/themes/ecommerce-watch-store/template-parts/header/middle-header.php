<?php
/**
 * The template part for header
 *
 * @package Ecommerce Watch Store 
 * @subpackage ecommerce-watch-store
 * @since ecommerce-watch-store 1.0
 */
?>

<div class="middle-header py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-12 align-self-center py-3 py-lg-0 py-md-0 text-lg-start text-md-center text-center">
				<div class="logo">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <?php if( get_theme_mod('ecommerce_watch_store_logo_title_hide_show',true) == 1){ ?>
                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php } ?>
                  <?php else : ?>
                    <?php if( get_theme_mod('ecommerce_watch_store_logo_title_hide_show',true) == 1){ ?>
                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php } ?>
                  <?php endif; ?>
                <?php endif; ?>
                <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                ?>
                <?php if( get_theme_mod('ecommerce_watch_store_tagline_hide_show',false) == 1){ ?>
                  <p class="site-description mb-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php } ?>
          <?php endif; ?>
    		</div>
			</div>
			<div class="col-lg-6 col-md-4 col-12 align-self-center menu-section-sec">
				<div class="menu-section">
          <?php get_template_part('template-parts/header/navigation'); ?>
        </div>
			</div>
      <div class="col-lg-3 col-md-4 col-12 align-self-center">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-3 align-self-center text-center">
            <?php if( get_theme_mod( 'ecommerce_watch_store_header_search',true) == 1) { ?>
              <div class="search-box">
                <span><a href="#"><i class='fas fa-search'></i></a></span>
              </div>
            <?php }?>
            <div class="serach_outer">
              <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('ecommerce_watch_store_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
              <div class="serach_inner">
                <?php get_search_form(); ?>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-3 align-self-center text-center">
            <span class="cart_no">
              <div class="wishlist">
                <?php if(class_exists('woocommerce')){ ?>
                  <?php if(defined('YITH_WCWL')){ ?>
                    <a class="wishlist_view" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','ecommerce-watch-store'); ?>"><i class="far fa-heart me-2"></i>
                    </a>
                  <?php }?>
                <?php }?>
              </div>
            </span>
          </div>
          <div class="col-lg-3 col-md-3 col-3 align-self-center text-center">
            <?php if( get_theme_mod( 'ecommerce_watch_store_my_account_hide_show', true) == 1) { ?>
              <div class="account">
                <?php if(class_exists('woocommerce')){ ?>
                  <?php if ( is_user_logged_in() ) { ?>
                    <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','ecommerce-watch-store'); ?>"><i class="far fa-user"></i><span class="icon-text"></a>
                  <?php }
                  else { ?>
                    <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','ecommerce-watch-store'); ?>"><i class="far fa-user"></i><span class="screen-reader-text"><?php esc_html_e( 'Login / Register','ecommerce-watch-store' );?></span></a>
                  <?php } ?>
                <?php }?>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-3 col-md-3 col-3 align-self-center text-center ">
            <?php if( get_theme_mod( 'ecommerce_watch_store_cart_hide_show', true) == 1) { ?>
              <?php if(class_exists('woocommerce')){ ?>
                <span class="cart_shop">
                  <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','ecommerce-watch-store' ); ?>"><i class="fas fa-shopping-basket me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Shopping Cart','ecommerce-watch-store' );?></span></a>
                  <span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span>
                </span>
              <?php } ?>
            <?php }?>
          </div>
        </div>
      </div>
		</div>
	</div>
</div>

