<?php
 /* Template Name: Alle reviews */ 

get_header();

?>

<div class="container" id="allerecepten">
  
<?php
			// get all the categories from the database
			$cats = get_categories(); 

				// loop through the categries
				foreach ($cats as $cat) {
					// setup the cateogory ID
					$cat_id= $cat->term_id;
          // Make a header for the cateogry

          if($cat->name == "Hangry proeft" ){

          echo "<div class='row cat-header text-center'><div class='col-xs-12'><h1 class='cat-title'>".$cat->name."</h1></div></div>";
          ?>
           <div class="row cat-desc text-center">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <?php echo $cat->description; ?>
              </div>
              <div class="col-md-2"></div>
            </div>
            <div class="row cat-posts">
          <?php
          
					// create a custom wordpress query
					query_posts("cat=$cat_id&posts_per_page=100");
					// start the wordpress loop!
					if (have_posts()) : while (have_posts()) : the_post(); ?>
  
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
          <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
        </div>
				<?php }} // done the foreach statement ?>

  
</div>


  <?php
get_footer();
?>