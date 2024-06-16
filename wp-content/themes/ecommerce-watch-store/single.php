<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Ecommerce Watch Store 
 */
 
 get_header(); ?>

<div class="container">
  <main id="maincontent" class="middle-align pt-5" role="main">
    <?php
      $ecommerce_watch_store_theme_lay = get_theme_mod( 'ecommerce_watch_store_theme_options','Right Sidebar');
      if($ecommerce_watch_store_theme_lay == 'Left Sidebar'){ ?>
      <div class="row">
        <div class="col-lg-4 col-md-4" id="sidebar"><?php get_sidebar();?></div>
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if(get_theme_mod('ecommerce_watch_store_single_post_breadcrumb',true) == 1){ ?>
            <div class="bradcrumbs">
              <?php ecommerce_watch_store_the_breadcrumb(); ?>
            </div>
          <?php }?> 
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' );
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'ecommerce-watch-store' ),
                'next_text' => __( 'Next page', 'ecommerce-watch-store' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ecommerce-watch-store' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    <?php }else if($ecommerce_watch_store_theme_lay == 'Right Sidebar'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if(get_theme_mod('ecommerce_watch_store_single_post_breadcrumb',true) == 1){ ?>
            <div class="bradcrumbs">
              <?php ecommerce_watch_store_the_breadcrumb(); ?>
            </div>
          <?php }?> 
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' );
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'ecommerce-watch-store' ),
                'next_text' => __( 'Next page', 'ecommerce-watch-store' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ecommerce-watch-store' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar"><?php get_sidebar();?></div>
      </div>
    <?php }else if($ecommerce_watch_store_theme_lay == 'One Column'){ ?>
      <div id="our-services" class="services"> 
        <?php if(get_theme_mod('ecommerce_watch_store_single_post_breadcrumb',true) == 1){ ?>
            <div class="bradcrumbs">
              <?php ecommerce_watch_store_the_breadcrumb(); ?>
            </div>
          <?php }?> 
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/single-post-layout' ); 
          endwhile;

          else :
            get_template_part( 'no-results' ); 
          endif; 
        ?>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
              'prev_text' => __( 'Previous page', 'ecommerce-watch-store' ),
              'next_text' => __( 'Next page', 'ecommerce-watch-store' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ecommerce-watch-store' ) . ' </span>',
            ) );
          ?>
            <div class="clearfix"></div>
        </div>
      </div>
    <?php }else if($ecommerce_watch_store_theme_lay == 'Grid Layout'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-9 col-md-9">
          <div class="row">
            <?php if(get_theme_mod('ecommerce_watch_store_single_post_breadcrumb',true) == 1){ ?>
            <div class="bradcrumbs">
              <?php ecommerce_watch_store_the_breadcrumb(); ?>
            </div>
          <?php }?> 
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/single-post-layout' ); 
              endwhile;

              else :
                get_template_part( 'no-results' ); 
              endif; 
            ?>
          </div>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'ecommerce-watch-store' ),
                'next_text' => __( 'Next page', 'ecommerce-watch-store' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ecommerce-watch-store' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else{ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if(get_theme_mod('ecommerce_watch_store_single_post_breadcrumb',true) == 1){ ?>
            <div class="bradcrumbs">
              <?php ecommerce_watch_store_the_breadcrumb(); ?>
            </div>
          <?php }?> 
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout'); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif;
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'ecommerce-watch-store' ),
                'next_text' => __( 'Next page', 'ecommerce-watch-store' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ecommerce-watch-store' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php } ?>
    <div class="clearfix"></div>
  </main>
</div>

<?php get_footer(); ?>