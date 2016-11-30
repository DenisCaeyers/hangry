<?php

get_header();

if(have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
        <p class="post-info">Gepost op: <?php the_time('jS F, Y'); ?> | Door: <?php the_author(); ?> | Gepost in:
        
        <?php
            $cats = get_the_category();
            $sep = ", ";
            $output = '';

            if($cats) {
                foreach($cats as $cat){
                    $output .= '<a href="' . get_category_link($cat->term_id) . '">' . $cat->cat_name . '</a>' . $sep; 
                }
                echo trim($output, $sep);
            }
        ?>

        </p>

        <?php the_post_thumbnail('small-thumb'); ?>
        <p><?php the_content(); ?></p>

    </article>

    <?php endwhile;
    
    else :
        echo '<p> No content found </p>';

    endif;

get_footer();
?>