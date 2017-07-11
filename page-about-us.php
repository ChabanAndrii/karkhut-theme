
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Igor_Karkhut_Theme
 */

get_header(); ?>

  </header>

  <!-- END OF HEADER -->
  <section class="about_us">
 <?php if ( have_posts() ) : query_posts('p=163'); 
    while (have_posts()) : the_post(); ?>
    <div class="first_desctiption" ">
       <h1><?php the_title(); ?></h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="about_us_content">
          <input type="checkbox" hidden class="read-more-state" id="read-more">
            <?php the_content(); ?>
          <label for="read-more" class="read-more-trigger_closed">Деталіьніше</label>
        </div>
      </div>
    </div>
   <? endwhile; endif; wp_reset_query(); ?>
  </section>
<!-- END OF ABOUT -->
<!--Team-->
<section class="our_team_wrap">
  <div class="first_desctiption">
    <h1>наша команда</h1>
  </div>    
  <div class="container">
    <div class="row">
      <div class="our_team">
        <div class="row">
          <div class="member_block ">
          <?php if ( have_posts() ) : query_posts('p=177'); 
           while (have_posts()) : the_post(); ?>
            <div class="member col-sm-3 col-xs-6 popmake-192">
              <div class="wrapper_image-team">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              </div>  
              <p><?php the_title(); ?></p>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>

            <?php if ( have_posts() ) : query_posts('p=182'); 
             while (have_posts()) : the_post(); ?>
            <div class="member col-sm-3 col-xs-6 popmake-229">
              <div class="wrapper_image-team">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              </div>
              <p><?php the_title(); ?></p>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>

            <?php if ( have_posts() ) : query_posts('p=238'); 
             while (have_posts()) : the_post(); ?>
            <div class="member col-sm-3 col-xs-6 popmake-235">
              <div class="wrapper_image-team">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              </div>  
              <p><?php the_title(); ?></p>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>

            <?php if ( have_posts() ) : query_posts('p=252'); 
             while (have_posts()) : the_post(); ?>
            <div class="member col-sm-3 col-xs-6 popmake-235">
              <div class="wrapper_image-team">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              </div>
              <p><?php the_title(); ?></p>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>
          </div>
      </div>
    </div>
  </div>
</section>
<!--end our team-->

<section class="charts_wrap">
  <div class="first_desctiption">
    <h1>Нагороди</h1>
  </div>    
  <div class="container">
    <div class="row">
      <div class="charts">
        <div class="left_column-charts col-sm-8 col-xs-12">
          <?php if ( have_posts() ) : query_posts('cat=33'); 
          while (have_posts()) : the_post(); ?>
          <?php if ( has_post_thumbnail() ) : ?>
          <a href="<?php the_post_thumbnail_url(); ?>" rel="lightbox" class="charts__item">
            <div class="charts_overlay cp">
              <h3 class="charts_title"><?php the_title()?></h3>
              <div class="charts_description">
                <?php the_content()?>
              </div>
            </div>
            <img class="animate" src="<?php the_post_thumbnail_url(); ?>" alt="">
          </a >
          <?php endif; ?>
        <? endwhile; endif; wp_reset_query(); ?>
        </div>
        <div class="right_column-charts col-sm-4 col-xs-12">
          <?php if ( have_posts() ) : query_posts('cat=34'); 
          while (have_posts()) : the_post(); ?>
          <?php if ( has_post_thumbnail() ) : ?>
          <a href="<?php the_post_thumbnail_url(); ?>" rel="lightbox" class="charts__item">
            <div class="charts_overlay">
              <h3 class="charts_title"><?php the_title()?></h3>
              <div class="charts_description">
                <?php the_content()?>
              </div>
            </div>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          </a >
          <?php endif; ?>
        <? endwhile; endif; wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</section>


  <footer class="pre_footer">
  <?php if ( have_posts() ) : query_posts('cat=6'); 
    while (have_posts()) : the_post(); ?>
    <div class="pre_footer_img col-md-12" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat;background-size: 100%;background-attachment: fixed;    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;">
      <div class="container">
        <div class="row">
          <div class="content">
          <figure class="guotes_1"></figure>
            <p><?php the_content(); ?></p>
          <figure class="quotes_2"></figure>
          </div>
          <div class="col-md-12 buttons">
            <a class="" href="">
              <span class="glyphicon glyphicon-menu-left"></span>
            проектні роботи
            </a>
            <a class="" href="">наукові роботи
              <span class="glyphicon glyphicon-menu-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div> 
    <? endwhile; endif; wp_reset_query(); ?>   
  </footer>
  <?php get_footer (); ?>
  </body>
</html>