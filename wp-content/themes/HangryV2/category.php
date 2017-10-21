<?php

get_header();

?>

  <div class="container" id="category-page">
    <div class="row cat-header text-center">
      <div class="col-xs-12">
        <h1 class="cat-title">
<?php single_cat_title(); ?>
</h1>
      </div>
    </div>
    <div class="row cat-desc text-center">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <?php echo category_description(); ?>
      </div>
      <div class="col-md-2"></div>
    </div>
    <div class="row">

      <?php
if(have_posts()) :
while (have_posts()) : the_post(); ?>


        <div class="col-xs-12 col-md-6 col-lg-4 post even">
            <a href="<?php the_permalink(); ?>" class="image-link" alt="<?php the_title(); ?>">
                <div class="image" style="background-image:url('<?php the_post_thumbnail_url(" cover-image ");?>')">
                </div>
            </a>
            <div class="box">
                <div class="title text-center">
                <h2><?php the_title(); ?></h2>
                </div>
                <div class="cta text-center">
                <a href="<?php the_permalink(); ?>" class="btn btn-pink-small">Lees meer!</a>
                </div>
            </div>
        </div>

        <?php endwhile;

else :
    echo '<p> No content found </p>';

endif;


?>
    </div>
  </div>

  <?php
get_footer();
?>