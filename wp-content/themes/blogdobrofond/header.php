<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>Путевка в жизнь</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/css/all-plugins.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/css/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/css/blog-styles.css' ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800&amp;display=swap&amp;subset=cyrillic" rel="stylesheet">
  </head>
  <body class="inner-page page-h bg-white">
    <div class="wrapper">
      <div class="background-block">
        <header class="header">
          <div class="top-header">
            <div class="container">
              <div class="flex-wrap between-xs">
                <div class="top-header__left">
                  <ul class="header-nav header-nav--visible-sm">
                    <li><a href="#">Стать стипендиатом</a></li>
                  </ul>
                  <ul class="header-nav">
                  <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'top-menu', 
                                'container_class' => 'custom-menu-class' ) ); 
                            ?>
                  </ul>
                </div>
                <div class="top-header__right">
                  <ul class="header-nav">
                  <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'top-right-menu', 
                                'container_class' => 'custom-menu-class' ) ); 
                            ?>
                  </ul>
                </div>
                <div class="mob-button"><span></span><span></span><span></span></div>
              </div>
            </div>
          </div>
          <div class="middle-header">
            <div class="container">
              <div class="flex-wrap between-xs middle-xs">
                <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <div class="logo"><a href="#"><img src="<?php echo $logo[0]?>" alt=""></a></div><a class="btn btn--white" href="#">Я хочу помочь</a>
              </div>
            </div>
          </div>
          <div class="mobile-nav-drop"></div>
          <div class="mobile-nav">
            <div class="mobile-nav-over">
              <div class="mobile-nav-group">
                <ul>
                <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'top-menu-mobile', 
                                'container_class' => 'custom-menu-class' ) ); 
                            ?>
                </ul>
              </div>
              <div class="mobile-nav-group">
                <ul>
                <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'middle-menu-mobile', 
                                'container_class' => 'custom-menu-class' ) ); 
                            ?>
                </ul>
              </div>
            </div>
            <div class="mobile-nav-butt"><a class="btn btn--white" href="#">Я хочу помочь</a></div>
          </div>
        </header>
      </div>