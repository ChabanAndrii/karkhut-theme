<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Igor_Karkhut_Theme
 */

get_header(); ?>
<?php if ( have_posts() ) :?>
<?php while (have_posts()) : the_post(); ?>
    <div class="first_desctiption" style="color: #fff;">
       <h1><?php the_title()?></h1>
    </div>
  </header>

  <div class="pr_block">
    <div class="container">
      <div class="row">
        <div class="full_des">
    			<?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
            	<?php endwhile;?>
          <?php endif;?>
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
<?php

get_footer();
