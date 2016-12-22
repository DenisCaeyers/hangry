<?php

get_header();


$toprowPosts = new WP_Query('posts_per_page=7');
?>
<div class="home-content"> <!-- Start Home Content -->
    <?php
    if($toprowPosts->have_posts()) :
        $i = 0;
        while ($toprowPosts->have_posts()) : $toprowPosts->the_post(); ?>

        <?php
            if ($i == 0) {
            ?> 
                <div class="row top-row"> <!-- start first row -->
                    <div class="col-md-12">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-cover">
                                <div class="post">
                                    <div class="hero-container">
                                        <div class="inner">
                                            <h1><?php the_title();?></h1>
                                            <?php
                                                $cat1 = get_the_category(); 
                                            ?>
                                            <h5><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $cat1[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h5>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="img-cover" style='background-image:url(<?php the_post_thumbnail_url("cover-image");?>)'>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
           <?php
            } elseif ($i == 1) {
            ?> 
            <div class="container-center"><!-- Start Container Center -->
                <div class="container"><!-- Start Container -->
                    <div class="row general-row"> <!-- Start General -->
                        <div class="col-md-8"><!-- Start General first col -->
                            <div class="row mid-row mid-row1"> <!-- Start mid-row -->
                                <div class="col-md-6">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="post-cover">
                                            <div class="small-post dark">
                                                <div class="inner">
                                                    <h1><?php the_title();?></h1>
                                                    <?php
                                                        $cat2 = get_the_category(); 
                                                    ?>
                                                    <h5><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $cat2[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h5>                                       
                                                </div>
                                            </div>
                                            <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-secondrow");?>)'>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    <?php
                    } elseif ($i == 2) {
                    ?> 
                            <div class="col-md-6">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-cover">
                                        <div class="small-post dark">
                                            <div class="inner">
                                                <?php
                                                        $cat3 = get_the_category(); 
                                                    ?>
                                                    <h1><?php the_title();?></h1>
                                                    <h5><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $cat3[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h5>                                       
                                                </div>
                                        </div>
                                        <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-secondrow");?>)'>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        
                    <?php
                    } elseif ($i == 3) {
                    ?> 
                        </div> <!-- End mid-row -->
                        <div class="row mid-row mid-row2">  
                            <div class="col-md-6">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="post-cover">
                                            <div class="small-post dark">
                                                <div class="inner">
                                                    <?php
                                                            $cat4 = get_the_category(); 
                                                        ?>
                                                        <h1><?php the_title();?></h1>
                                                        <h5><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $cat4[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h5>                                       
                                                    </div>
                                            </div>
                                            <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-secondrow");?>)'>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        
                    <?php
                    } elseif ($i == 4) {
                    ?> 
                         
                            <div class="col-md-6">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-cover">
                                        <div class="small-post dark">
                                            <div class="inner">
                                                    <?php
                                                        $cat5 = get_the_category(); 
                                                    ?>
                                                    <h1><?php the_title();?></h1>
                                                    <h5><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $cat5[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h5>                                       
                                                </div>
                                        </div>
                                        <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-secondrow");?>)'>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                    } elseif ($i == 5) {
                    ?> 
                    </div> <!-- End mid-row -->
                        <div class="row mid-row mid-row3">  
                            <div class="col-md-6">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-cover">
                                        <div class="small-post dark">
                                            <div class="inner">
                                                    <?php
                                                        $cat6 = get_the_category(); 
                                                    ?>
                                                    <h1><?php the_title();?></h1>
                                                    <h5><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $cat6[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h5>                                       
                                                </div>
                                        </div>
                                        <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-secondrow");?>)'>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                    } elseif ($i == 6) {
                    ?> 
                            <div class="col-md-6">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-cover">
                                        <div class="small-post dark">
                                                <div class="inner">
                                                    <?php
                                                        $cat6 = get_the_category(); 
                                                    ?>
                                                    <h1><?php the_title();?></h1>
                                                    <h5><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $cat6[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h5>                                       
                                                </div>
                                        </div>
                                        <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-secondrow");?>)'>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div><!-- End First Column General -->
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-md-12" id="fb-addin">
                            <div class="fb-page" data-href="https://www.facebook.com/Hangry.be/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Hangry.be/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Hangry.be/">Hangry</a></blockquote></div>
                        </div>
                        <div class="col-md-12" id="twitter-addin">
                            <a class="twitter-timeline" data-chrome="nofooter" data-lang="nl" data-theme="dark" data-link-color="#2B7BB9" href="https://twitter.com/Hangry_dot_be">Tweets by Hangry_dot_be</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div><!-- End Row General -->
        </div><!-- End Container Center -->
        
        <?php 
            }
        $i++;
        endwhile;
        
        else :
            echo '<p> No content found </p>';
        endif;
    ?>
     <div class="about"><!-- Start About -->
        <div class="container"><!-- Start About Container -->
            <div class="row about-row"><!-- Start About Row -->
                <div class="col-xs-12 col-lg-4">
                    <div class="text">
                        <div class="title">Han&bull;gry</div>
                        <div class="under">(han-gree) adj.</div> 
                        <p>When you're so hungry, you get a little bit angry.</p>
                        <h3>En wij willen daar van af!</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="image">
                    <p class="title">Ik ben Annelies.</p> <p>Ik hou van eten, schrijven en gezelligheid. Die 3 combineer ik in deze blog. </p><p>Ik haal receptjes van overal, en probeer er iets gezelligs van te maken!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="dmnfine">
                        <a href="https://www.facebook.com/DamnFineDesigns2016" target="_blank">
                            <i class="fa fa-star-o" aria-hidden="true"></i><span class="text">Special Thanks</span><i class="fa fa-star-o" aria-hidden="true"></i>
                            <p>for designing our awesome logo.</p>
                            <div class="logo"></div>
                        </a>
                    </div>
                </div>
            </div><!-- Start About Row -->
        </div><!-- End About Container -->
    </div><!-- End About -->
</div><!-- End Home Content -->

<?php
get_footer();
?>