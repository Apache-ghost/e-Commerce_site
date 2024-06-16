<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
<?php do_action( 'ecommerce_watch_store_before_slider' ); ?>

  <?php if( get_theme_mod( 'ecommerce_watch_store_slider_hide_show', false) == 1 || get_theme_mod( 'ecommerce_watch_store_resp_slider_hide_show', false) == 1) { ?> 
    <section id="banner" class="wow bounceInDown delay-1000" data-wow-duration="3s" >
      <div class="container">
        <div class="banner-caption">
          <div class="row">
            <div class="col-lg-6 col-md-12 align-self-center">
              <div class="inner_carousel pb-lg-5 pb-3">
                <?php if(get_theme_mod('ecommerce_watch_store_banner_tagline_title') != '') {?>
                  <h1><?php echo esc_html(get_theme_mod('ecommerce_watch_store_banner_tagline_title')) ?></h1>
                <?php }?>
                <?php if(get_theme_mod('ecommerce_watch_store_banner_para_text') != '') {?>
                  <p><?php echo esc_html(get_theme_mod('ecommerce_watch_store_banner_para_text')) ?></p>
                <?php }?>
                <?php if( get_theme_mod('ecommerce_watch_store_slider_button_text','EXPLORE NOW') != '' || get_theme_mod('ecommerce_watch_store_slider_button_url') != ''){ ?>
                  <div class="explore-now mt-md-4 mt-0">
                    <a href="<?php echo esc_url(get_theme_mod('ecommerce_watch_store_slider_button_url')); ?>"><?php echo esc_html(get_theme_mod('ecommerce_watch_store_slider_button_text',__('EXPLORE NOW','ecommerce-watch-store')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ecommerce_watch_store_slider_button_text',__('EXPLORE NOW','ecommerce-watch-store')));?></span></a>
                  </div>
                <?php } ?>
              </div>
              <!-- product cat -->
              <?php if( get_theme_mod( 'ecommerce_watch_store_show_hide_product',false) == 1) { ?>
                <div id="banner-product">
                  <div class="owl-carousel pt-4">
                    <?php if ( class_exists( 'WooCommerce' ) ) {
                    $args = array( 
                      'post_type' => 'product',
                      'product_cat' => get_theme_mod('ecommerce_watch_store_product_category'),
                      'order' => 'ASC'
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                      <div class="product-box-next">
                        <div class="slider-nav-box-inner-sec">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 align-self-center py-2">
                              <div class="slider-price">
                                <?php if( get_post_meta($post->ID, 'ecommerce_watch_store_brand_name', true) ) {?>
                                  <div class="brand-meta-fields">
                                    <?php if( get_post_meta($post->ID, 'ecommerce_watch_store_brand_name', true) ) {?>
                                      <span class="brand-name"><?php echo esc_html(get_post_meta($post->ID,'ecommerce_watch_store_brand_name',true)); ?></span>
                                    <?php }?>
                                  </div>
                                <?php }?>
                                <h2><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h2>
                                <p class="product-rating mt-2 <?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><span class="pe-2 start-text"><?php esc_html_e( 'Starting at','ecommerce-watch-store' );?></span><?php echo $product->get_price_html(); ?></p>
                                <div class="plan-btn text-left py-3"><a class="pro-button" href="<?php the_permalink(); ?>">  <?php echo esc_html('SHOP NOW','ecommerce-watch-store');?><span class="screen-reader-text"><?php echo esc_html('SHOP NOW','ecommerce-watch-store');?></span></a></div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 align-self-center py-2">
                              <div class="slider-nav-image-sec text-center">
                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                              </div>
                            </div>
                          </div>  
                        </div>
                      </div>
                    <?php endwhile; wp_reset_query(); ?>
                    <?php } ?>
                  </div> 
                </div>
              <?php }?>
              <!-- end -->
            </div>
            <div class="col-lg-6">
            </div>

          </div>
        </div>
      </div> 
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <?php do_action( 'ecommerce_watch_store_after_slider' ); ?>

<!-- Product Section -->
  <?php if( get_theme_mod( 'ecommerce_watch_store_product_section_hide_show', false) == 1) { ?> 
    <section id="product-section" class="wow bounceInRight delay-1000 mt-md-5 mt-3" data-wow-duration="3s">
      <div class="container">
        <div class="heding-title">
          <?php if( get_theme_mod('ecommerce_watch_store_product_heading_product') != ''){ ?>
            <h2 class="text-center"><?php echo esc_html(get_theme_mod('ecommerce_watch_store_product_heading_product'));?></h2>
          <?php }?>
        </div> 
        <?php if ( class_exists( 'WooCommerce' ) ){ ?>
          <ul class="product-tab nav nav-tabs my-5">
            <li ><a href="#feature" class="active"><?php echo esc_html('FEATURED','ecommerce-watch-store');?></a></li>
            <li><a href="#best-selling"><?php echo esc_html('BEST SELLING','ecommerce-watch-store');?></a></li>
            <li ><a href="#new-arrival"><?php echo esc_html('NEW ARRIVALS','ecommerce-watch-store');?></a></li>
            <li><a href="#on-sale"><?php echo esc_html('ON SALE','ecommerce-watch-store');?></a></li>
          </ul>
          <div class="tab-content">
            <div id="feature" class="tab-pane active">
              <div class="pro-sec">
                <?php 
                  echo do_shortcode('[featured_products]');                 
                ?> 
              </div>
            </div>
            <div id="best-selling" class="tab-pane fade">
              <div class="pro-sec">
                <?php
                  echo do_shortcode('[best_selling_products]');
                ?> 
              </div>
            </div>
            <div id="new-arrival" class="tab-pane fade">
              <div class="pro-sec">
                <?php
                  echo do_shortcode('[recent_products]');
                ?> 
              </div>
            </div>
            <div id="on-sale" class="tab-pane fade">
              <div class="pro-sec">
                <?php
                  echo do_shortcode('[sale_products]');
                ?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'ecommerce_watch_store_after_product' ); ?>

  <div id="content-vw" class="entry-content py-3">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>