<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(39939355, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            trackHash: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/39939355" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85037271-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-85037271-1');
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/css/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php if (has_category('Стипендиаты') || is_home() || get_the_category()[0]->slug == 'volonteri_unused' || get_the_category()[0]->slug == 'about_us_unused') echo get_stylesheet_directory_uri().'/css/other-style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/css/all-plugins.css' ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800&amp;display=swap&amp;subset=cyrillic" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri().'/css/video-js.css' ?>" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="background-block">
        <header class="header">
            <div class="top-header">
                <div class="container">
                    <div class="flex-wrap between-xs">
                        <div class="top-header__left">
                            <ul class="header-nav header-nav--visible-sm">
                                <li><a href="index.html">Стать стипендиатом</a></li>
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
                        <div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt=""></a></div>
                        <a class="btn btn--white" href="donats.html">Я хочу помочь</a>
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <ul class="header-nav">
                    <?php 
                    wp_nav_menu( 
                        array( 
                        'theme_location' => 'middle-menu', 
                        )
                    ); 
                    ?>
                    </ul>
                </div>
            </div>
            <div class="mobile-nav-drop"></div>
            <div class="mobile-nav">
                <div class="mobile-nav-over">
                    <div class="mobile-nav-group">
                        <ul>
                        <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'top-right-menu', 
                                'container_class' => 'custom-menu-class' ) ); 
                            ?>
                        </ul>
                    </div>
                    <div class="mobile-nav-group">
                        <ul>
                        <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'middle-menu', 
                            'container_class' => 'custom-menu-class' ) ); 
                        ?>
                        </ul>
                    </div>
                </div>
                <div class="mobile-nav-butt"><a class="btn btn--white" href="donats.html">Я хочу помочь</a></div>
            </div>
        </header>
    <?php if(is_front_page() !== true) echo '</div>';?>