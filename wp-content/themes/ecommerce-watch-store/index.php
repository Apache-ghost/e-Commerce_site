<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'ecommerce_watch_store_blog_pagination_hide_show',true) == 1) { ?>
            <div class="navigation">
              <?php ecommerce_watch_store_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
      </div>
        <div class="clearfix"></div>
    <?php }else if($ecommerce_watch_store_theme_lay == 'Right Sidebar'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content',get_post_format());
          endwhile;

          else :
            get_template_part( 'no-results' ); 
          endif; 
          ?>
          <?php if( get_theme_mod( 'ecommerce_watch_store_blog_pagination_hide_show',true) == 1) { ?>
            <div class="navigation">
              <?php ecommerce_watch_store_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar"><?php get_sidebar();?></div>
      </div>
    <?php }else if($ecommerce_watch_store_theme_lay == 'One Column'){ ?>
      <div id="our-services" class="services">
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content',get_post_format()); 
          endwhile;

          else :
            get_template_part( 'no-results' ); 
          endif; 
        ?>
          <?php if( get_theme_mod( 'ecommerce_watch_store_blog_pagination_hide_show',true) == 1) { ?>
            <div class="navigation">
              <?php ecommerce_watch_store_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
      </div>
    <?php }else if($ecommerce_watch_store_theme_lay == 'Grid Layout'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-9 col-md-9">
          <div class="row">
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/grid-layout' );
              endwhile;

              else :
                get_template_part( 'no-results' ); 
              endif; 
            ?>
          </div>
          <?php if( get_theme_mod( 'ecommerce_watch_store_blog_pagination_hide_show',true) == 1) { ?>
            <div class="navigation">
              <?php ecommerce_watch_store_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else{ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format()); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'ecommerce_watch_store_blog_pagination_hide_show',true) == 1) { ?>
            <div class="navigation">
              <?php ecommerce_watch_store_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php } ?>
    <div class="clearfix"></div>
  </main>
</div>

<?php get_footer(); ?>