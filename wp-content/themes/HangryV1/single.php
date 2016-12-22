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
                <div class="top">
                    <?php
                        $category = get_the_category(); 
                    ?>
                    <h1><?php the_title(); ?></h1>
                    <h2><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $category[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h2> 
                    <h3><?php the_date(); ?></h3>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 right">
                <div class="social">
                    <div class="twit"><a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>
                    <div class="fb-send" data-href="<?php echo get_permalink(); ?>"></div>    
                    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                
                </div>
                <div class="content">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </article>

    <?php endwhile;
    
    else :
        echo '<p> No content found </p>';

    endif;

get_footer();
?>