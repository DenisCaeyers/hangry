<?php

get_header();

if(have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="single">
        <h1><?php the_title(); ?></h1>

    <p><?php the_content(); ?></p>

    </article>

    <?php endwhile;
    
    else :
        echo '<p> No content found </p>';

    endif;

get_footer();
?>