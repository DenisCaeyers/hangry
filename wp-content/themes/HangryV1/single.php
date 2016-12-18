<?php

get_header();

if(have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="single">
    <figure>
        <?php the_post_thumbnail('banner-image'); ?>
    </figure>
        <div class="row">
            <div class="col-md-12 col-lg-4 left">
                <?php
                    $category = get_the_category(); 
                ?>
                <h1><?php the_title(); ?></h1>
                <h2><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $category[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h2> 
                <h3><?php the_date(); ?></h3>
            </div>
            <div class="col-md-12 col-lg-8 right">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </article>

    <?php endwhile;
    
    else :
        echo '<p> No content found </p>';

    endif;

get_footer();
?>