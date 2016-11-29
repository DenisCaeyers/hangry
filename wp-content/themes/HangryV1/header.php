<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <script src="https://use.fontawesome.com/465c538f9f.js"></script>
    </head>

<body <?php body_class(); ?>>

        <header class="site-header clearfix">
            
            <nav class="navbar navbar-default navbar-fixed-top" data-0="background-color:rgba(48,86,77,0.0);" data-100="background-color:rgba(48,86,77,1);">
                <?php 
                // Fix menu overlap
                if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
                ?>
                <div class="container">
                    <?php 
                    $args= array(
                        'theme_location' => 'primary'
                    );
                    
                    ?>
                    <?php wp_nav_menu($args); ?>
                    <div class="social-media">
                        <ul class="nav navbar-nav navbar-right social-media">
                            <li class="facebook"><a href="#"><i class="fa fa-2 fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-2 fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-2 fa-pinterest-square" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="header-content-wrapper">
                    <div class="site-logo col-md-12">
                        <?php
                            // Display the Custom Logo
                            the_custom_logo();

                            // No Custom Logo, just display the site's name
                            if (!has_custom_logo()) {
                                ?>
                                <h1><?php bloginfo('name'); ?></h1>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="site-description col-md-12"><?php bloginfo('description'); ?></div>

                    </div>
                </div>
        </header>
        <div id="content" class="container">