<?php
 /* Template Name: Contact */ 

get_header();

?>
<article class="contact-article">
  <div class="container" id="contact">
    <div class="row">
    <div class="col-xs-12 text-center"><h1>Get in touch!</h1></div>
    <div class="col-xs-12 text-center"><p>Heb je een idee voor een recept?<br/> Wil je ons jouw recept zien maken?<br/> Heb je zelf iets gemaakt van onze blog?<p></div>
      <div class="col-xs-12 text-center">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </div>
</article>

  <?php
get_footer();
?>