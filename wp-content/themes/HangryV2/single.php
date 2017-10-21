<?php

get_header();

if(have_posts()) :
    while (have_posts()) : the_post(); ?>

    <section id="post-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <!-- Post Title -->
                    <div class="title dont-break-out">
                        <p class="text-uppercase"><?php the_title(); ?></p>
                    </div>
                    <!-- Post Meta -->
                    <div class="meta">
                        <div class="row">
                            <div class="col-xs-4">
                                <p class="text-left"><span class="hidden-xs">Gepost op: </span><?php the_date('d/m/Y'); ?></p>
                            </div>
                            <div class="col-xs-8">
                                <?php
                                    $category = get_the_category(); 
                                ?>
                                <p class="text-right">Gepost in: <?php echo $category[0]->cat_name; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1"></div>
            </div>
        </div>

        <div class="intro-wrapper container-custom">

            <!-- Post Image -->
            <?php
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "banner-image" );            
            ?>

            <div class="image" style="background-image:url('<?php echo $thumbnail[0]; ?>')">
            </div>

            <blockquote>
                <p><?php echo get_post_meta($post->ID, 'quote', true); ?></p>
            </blockquote>

            <!-- Post Meta -->
            <div class="meta-post">

                    <p class="text-right">Gepost op: <?php echo get_the_date(); ?></p>

                <?php
                    $category = get_the_category(); 
                ?>
                <p class="text-right">Gepost in: <?php echo $category[0]->cat_name; ?></p>

            </div>

        </div>
    </section>
    <section id="post-bottom">
        <div class="container container-custom">
            <div class="row">
                <div class="col-xs-12">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center contact-us">
                    <h1>Like what you see?</h1>
                    <p>
                    Heb je een idee voor een recept?<br/>
                    Wil je ons jouw recept zien maken?<br/>
                    Heb je zelf iets gemaakt van onze blog?</p>
                    <p>
                    Laat het ons weten en wij zetten je in de spotlight!
                    </p>
                    <div class="cta">
                        <a href="/contact" class="btn-pink" alt="contact">Contacteer ons!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php endwhile;
    
    else :
        echo '<p> No content found </p>';

    endif;

get_footer();
?>