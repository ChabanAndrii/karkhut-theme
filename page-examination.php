
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
<section class="about_examination">
<?php if ( have_posts() ) : query_posts('p=283'); 
  while (have_posts()) : the_post(); ?>
  <div class="first_desctiption" ">
     <h1><?php the_title(); ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="about_us_content">
          <?php the_content(); ?>
      </div>
    </div>
  </div>
 <? endwhile; endif; wp_reset_query(); ?>
</section>

<section class="examination_wrap">
  <div class="container">
    <div class="row">
      <div class="examination">

          <?php if ( have_posts() ) : query_posts('cat=36'); 
          while (have_posts()) : the_post(); ?>
          <button class="acc_ctrl">
            <h2><?php the_title(); ?></h2>
          </button>
          <div class="acc_panel">
              <?php the_content(); ?>
          </div>
          <? endwhile; endif; wp_reset_query(); ?>

       
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
