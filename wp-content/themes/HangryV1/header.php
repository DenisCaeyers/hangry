<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <script src="https://use.fontawesome.com/465c538f9f.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>

<body <?php body_class(); ?>>

        <header class="site-header clearfix">
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
                    <div class="site-description col-md-12"><?php bloginfo('description'); ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <nav class="navbar navbar-default">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
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
                                <li class="instagram"><a href="#"><i class="fa fa-2 fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            
        </header>
        <div id="content" class="container">