<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Oswald:300,400,700" rel="stylesheet">

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
 
        <!-- Sidenav -->
        <div id="Sidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
            </a>
            <a href="<?php
                $url = home_url();
                echo esc_url( $url );
                ?>
            ">Home</a>
            <a href="/alle-recepten">Alle recepten</a>
            <a href="/hangry-proeft">Hangry Proeft!</a>
			<a href="/contact">Contact</a>
            <a href="https://www.facebook.com/Hangry.be/" target="_blank"><i class="fa fa-3 fa-facebook-official" aria-hidden="true"></i></a>
            <a href="https://twitter.com/Hangry_dot_be" target="_blank"><i class="fa fa-3 fa-twitter-square" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/hangry.be/" target="_blank"><i class="fa fa-3 fa-instagram" aria-hidden="true"></i></a>
        </div>

    <div class="container">
        <div class="row">
            <div class="stripes">
                <div class="col-xs-2 col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="col-xs-2 col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="col-xs-2 col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="col-xs-2 col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="col-xs-2 col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="col-xs-2 col-md-1">
                    <div class="pink-bg"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-1">
                    <div class="pink-bg"></div>
                </div>
            </div>
        </div>
    </div>

        <div id="main">

        <!-- Main header -->
        <header>              
            <div class="container">
                <div id="Menubutton" onclick="openNav()" class="hidden-md hidden-lg">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="logo">
                    <a href="<?php
                     $url = home_url();
                     echo esc_url( $url );
                    ?>
                    ">
                    <?php	 
                        if ( function_exists( 'the_custom_logo' ) ) {
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            echo "<img src='".$image[0]."' alt='Hangry'>";
                        }
                    ?>
                    </a>
                </div>
                <div class="text-center tagline">
                    We love food, we realy do.
                </div>
            </div>
            
            <!-- Mainnav -->
            <div class="container text-center hidden-sm hidden-xs">
                <div id="mainnav" class="mainnav">
                    <a href="<?php
                        $url = home_url();
                        echo esc_url( $url );
                        ?>
                    ">Home</a>
                    <a href="/alle-recepten">Alle recepten</a>
                    <a href="/hangry-proeft">Hangry Proeft!</a>
					<a href="/contact">Contact</a>
                    <a href="https://www.facebook.com/Hangry.be/" target="_blank"><i class="fa fa-3 fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/Hangry_dot_be" target="_blank"><i class="fa fa-3 fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/hangry.be/" target="_blank"><i class="fa fa-3 fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="container-fluid hidden-md hidden-lg">
                <div class="wave"></div>
            </div>     
            
            <div class="container hidden-xs hidden-sm">
                <div class="wave"></div>
            </div>


        </header> 
        <!-- End Main header -->
