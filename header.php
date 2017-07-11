<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Igor_Karkhut_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700,700i" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header_img_wraper" style="height: 360px;">
      <!-- HEADER -->
        <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar top_bar"></span>
                <span class="icon-bar middle_bar"></span>
                <span class="icon-bar bottom_bar"></span>
              </button>
              
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="logo text-left col-sm-2">
              <a href="/">
                <?php dynamic_sidebar('logo'); ?>
              </a>
            </div>
            <?php wp_nav_menu(array(
              "menu_class" => "lft_bar nav navbar-nav col-sm-8 col-xs-12"
            )) ?>
            <div class="language col-sm-1">
              <?php dynamic_sidebar('language'); ?>
            </div>
            </div>
        </nav>