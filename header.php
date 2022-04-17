<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inkfactory
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part('template-parts/book-now-link') ?>

  <?php get_template_part('template-parts/notification') ?>

  <header id="header" class="header <?php echo (is_front_page()) ? "header_home" : ""  ?>">
    <div class="container">
      <div class="header-body">

        <div class="header-burger" id="header-burger">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <a href="/" class="header-logo_mob">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mob.png" alt="#" />
        </a>

        <a href="/" class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="#" />
        </a>

        <div class="header-menu__wrapp" id="menu-wrapper">

          <?php
          wp_nav_menu([
            'theme_location'  => 'header_menu',
            'container'       => false,
            'menu_class'      => 'header-menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ]);
          ?>

          <a href="#" class="sign-up">
            Sign up
          </a>

        </div>

        <a href="#" class="cart align-items-center">
          <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 10H19V18C19 20.2091 17.2091 22 15 22H5C2.79086 22 1 20.2091 1 18V10Z" stroke="black" stroke-width="3" stroke-linejoin="round" />
            <path d="M6 9L6 4.73333C6 2.67147 7.79086 1 10 1C12.2091 1 14 2.67147 14 4.73333V9" stroke="black" stroke-width="3" />
          </svg>
        </a>

      </div>
    </div>
  </header>

  <?php get_template_part('template-parts/search-block') ?>
  