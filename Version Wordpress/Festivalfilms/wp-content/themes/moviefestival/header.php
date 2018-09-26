<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    

    <title>
        <?php wp_title('&laquo;', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  
  <nav class="nav-links container-fluid">
        <div class="navbar navbar-expand-lg">
            <button class="nav-links__button navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="navbar-toggler-icon--i fas fa-bars"></i>
            </span>
          </button>
            <div class="nav-links__row container-fluid row">
                <div class="nav-links__empty col-lg-3"></div>
                <div class="nav-links__list col-lg-6">
                    <div class="nav-links__list--radius collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Films</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Actu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-links__social col-lg-3">
                    <a href="http://www.facebook.com"><i class="nav-links__social--i fab fa-facebook"></i></a>
                    <a href="http://www.twitter.com"><i class="nav-links__social--i fab fa-twitter"></i></a>
                    <a href="http://www.instagram.com"><i class="nav-links__social--i fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>
  
  
  
  
  
  
   
<!--
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
            <php bloginfo('name'); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
-->
        <?php
        wp_nav_menu([
          'menu'            => 'primary',
          'theme_location'  => 'menu-1',
          'container'       => 'div',
          'container_id'    => 'navbarCollapse',
          'container_class' => 'collapse navbar-collapse',
          'menu_id'         => false,
          'menu_class'      => 'navbar-nav mr-auto',
          'depth'           => 0,
          'fallback_cb'     => 'bs4navwalker::fallback',
          'walker'          => new bs4navwalker()
    ]);
  ?>
<!--    </nav>-->