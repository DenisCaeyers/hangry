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
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.8&appId=146696435385967";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <script>
            $(function () {
                // initialize skrollr if the window width is large enough
                if ($(window).width() > 767) {
                    skrollr.init(yourOptions);
                }

                // disable skrollr if the window is resized below 768px wide
                $(window).on('resize', function () {
                    if ($(window).width() <= 767) {
                    skrollr.init().destroy(); // skrollr.init() returns the singleton created above
                    }
                });
            });
        </script>


        <header class="site-header clearfix">
            
             <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-0="padding:15px" data-100="padding:0px;"><
                 <?php 
                // Fix menu overlap
                if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
                ?>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="container">
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" data-0="margin-top:-15px" data-300="margin-top:-75px;">
                            <div class="diamond">
                            <?php	 
                            if ( function_exists( 'the_custom_logo' ) ) {
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                echo "<img src='".$image[0]."' alt='Hangry' class='hangry-logo'>";
                            }
                            ?>
                            </div>
                        </a>
                        <div class="mobile-logo"></div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar">
                    
                    <ul class="nav navbar-nav navbar-left sub-nav left-nav">
                        <li><a href="http://www.hangry.be/?s=">Alle Recepten</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right sub-nav right-nav">
                        <li><a href="https://www.facebook.com/Hangry.be">Onze Facebook</a></li>
                        <li><a href="https://twitter.com/Hangry_dot_be">Onze Twitter</a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <div class="subheader" data-0="top:104px;" data-100="top:0px;">
                    <div class="container">
                        <div class="left">
                            <div class="social-media">
                                <ul class="social-media">
                                    <li class="facebook"><a href="https://www.facebook.com/Hangry.be/" target="_blank"><i class="fa fa-2 fa-facebook-square" aria-hidden="true"></i></a></li>
                                    <li class="twitter"><a href="https://twitter.com/Hangry_dot_be" target="_blank"><i class="fa fa-2 fa-twitter-square" aria-hidden="true"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="fa fa-2 fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
            </div>
            <div class="container" style="display:none">
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
               
            </div>

            
        </header>
        <div id="content">