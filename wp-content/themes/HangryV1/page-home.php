<?php

get_header();


$toprowPosts = new WP_Query('posts_per_page=5');
?>
<div class="home-content">
    <?php
    if($toprowPosts->have_posts()) :
        $i = 0;
        while ($toprowPosts->have_posts()) : $toprowPosts->the_post(); ?>

        <?php
            if ($i == 0) {
            ?> 
                <div class="row top-row"> <!-- start first row -->
                    <div class="col-md-8">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-cover">
                                <div class="post">
                                </div>
                                <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-image");?>)'>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-content content-box-1">
                         <a href="<?php the_permalink(); ?>">
                            <div class="text-content">
                                <h1><?php the_title();?></h1>
                                
                            </div>
                        </a>
                    </div>
                </div>
           <?php
            } elseif ($i == 1) {
            ?> 
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-cover">
                                <div class="post">
                                    <?php the_title();?>
                                </div>
                                <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-image");?>)'>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><!-- end first row -->
            <?php
            } elseif ($i == 2) {
            ?> 
                <div class="row mid-row"> <!-- start second row -->
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-cover">
                                <div class="post">
                                    <?php the_title();?>
                                </div>
                                <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-image");?>)'>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
            } elseif ($i == 3) {
             ?> 
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-cover">
                                <div class="post">
                                    <?php the_title();?>
                                </div>
                                <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-image");?>)'>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
            } elseif ($i == 4) {
            ?> 
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-cover">
                                <div class="post">
                                    <?php the_title();?>
                                </div>
                                <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-image");?>)'>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><!-- end second row -->
            <?php
             }
        ?>
        
        <?php 
        $i++;
        endwhile;
        
        else :
            echo '<p> No content found </p>';
        endif;
    ?>

</div>

<?php
get_footer();
?>