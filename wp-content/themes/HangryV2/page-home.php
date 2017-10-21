<?php

get_header();


$toprowPosts = new WP_Query('posts_per_page=9');
?>

  <section id="home-top">
    <div class="container">
      <div class="home-content">
        <!-- Start Home Content -->
        <?php
if($toprowPosts->have_posts()) :
$i = 0;
while ($toprowPosts->have_posts()) : $toprowPosts->the_post(); ?>

          <?php
if ($i == 0) {
    ?>
            <div class="row post even">
              <div class="col-xs-12 col-md-6">
                <a href="<?php the_permalink(); ?>" alt="<?php the_title();?>">
                <div class="image" style="background-image:url('<?php the_post_thumbnail_url(" cover-image ");?>')">
                </div>
                </a>
              </div>
              <div class="col-xs-12 col-md-6">

                <!-- Post Title -->
                <div class="title dont-break-out text-center">
                  <p class="text-uppercase">
                    <?php the_title();?>
                  </p>
                </div>
                <div class="intro">
                  <p>
                    <?php the_excerpt(); ?>
                  </p>
                </div>
                <div class="cta text-center">
                  <a href="<?php the_permalink(); ?>" class="btn btn-pink">Lees Meer -></a>
                </div>
              </div>
            </div>


            <?php
} elseif ($i == 1) {
    ?>
              <div class="row post uneven">
                <div class="col-xs-12 col-md-6 col-md-push-6">
                  <a href="<?php the_permalink(); ?>" alt="<?php the_title();?>">
                  <div class="image" style="background-image:url('<?php the_post_thumbnail_url(" cover-image ");?>')">
                  </div>
                  </a>
                </div>
                <div class="col-xs-12 col-md-6 col-md-pull-6">

                  <!-- Post Title -->
                  <div class="title dont-break-out text-center">
                    <p class="text-uppercase">
                      <?php the_title();?>
                    </p>
                  </div>
                  <div class="intro">
                    <p>
                    <?php the_excerpt(); ?>
                    </p>
                  </div>
                  <div class="cta text-center">
                    <a href="<?php the_permalink(); ?>" class="btn btn-pink">Lees Meer -></a>
                  </div>
                </div>
              </div>
              <?php
} elseif ($i == 2) {
    ?>
                <div class="row post even">
                  <div class="col-xs-12 col-md-6">
                    <a href="<?php the_permalink(); ?>" alt="<?php the_title();?>">
                    <div class="image" style="background-image:url('<?php the_post_thumbnail_url(" cover-image ");?>')">
                    </div>
                    </a>
                  </div>
                  <div class="col-xs-12 col-md-6">

                    <!-- Post Title -->
                    <div class="title dont-break-out text-center">
                      <p class="text-uppercase">
                        <?php the_title();?>
                      </p>
                    </div>
                    <div class="intro">
                      <p>
                        
                        <?php the_excerpt(); ?>
                      </p>
                    </div>
                    <div class="cta text-center">
                      <a href="<?php the_permalink(); ?>" class="btn btn-pink">Lees Meer -></a>
                    </div>
                  </div>
                </div>
<?php
} elseif ($i == 3) {
?>
  <div class="row">
    <div class="col-xs-12 recent-header">
    <i class="fa fa-heart-o" aria-hidden="true"></i><span>Recente posts</span>
    </div>
      
  </div>
    <div class="carousel-wrapper">
    <div class="siema">
      <div>
        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(" cover-image ");?>" alt=""></a>
      </div>

<?php
} elseif ($i == 4) {
?>
    <div><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(" cover-image ");?>" alt=""></a></div>

<?php
} elseif ($i == 5) {
?>
    <div><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(" cover-image ");?>" alt=""></a></div>

<?php
} elseif ($i == 6) {
?>
    <div><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(" cover-image ");?>" alt=""></a></div>

<?php
} elseif ($i == 7) {
?>
    <div><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(" cover-image ");?>" alt=""></a></div>

<?php
} elseif ($i == 8) {
?>
        <div><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(" cover-image ");?>" alt=""></a></div>
    </div>

    <div class="controls">
      <div class="prev"><</div>
      <div class="next">></div>
    </div>
</div>

<?php
}
$i++;
endwhile;

else :
    echo '<p> No content found </p>';
endif;
?>
      </div>
  </section>

  <div class="container">
  <div class="row">
    <div class="col-xs-12 insta-header">
    <i class="fa fa-instagram" aria-hidden="true"></i><span>Hangry op Instragram</span>
    </div>
      
  </div>
  <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
  </div>

  <!-- End Home Content -->

  <?php
get_footer();
?>