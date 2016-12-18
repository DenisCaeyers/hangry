<?php
get_header();
?>

<div class="spacer">
    <div class="container">
        <div class="row" id="filters">
            <div class="col-md-12">
                <div class="filter">
                    <h1>Zoeken op categorie</h1>
                    <?php
                    $categories = get_categories( array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ) );
                    
                    foreach( $categories as $category ) {
                        $category_link = sprintf( 
                            '<a href="%1$s" alt="%2$s">%3$s</a>',
                            esc_url( get_category_link( $category->term_id ) ),
                            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                            esc_html( $category->name )
                        );
                        echo '<span>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</span> ';
                    } 
                    ?>
                </div>
            </div>
            
        </div>
        <div class="row">

        <?php
        if(have_posts()) :
            while (have_posts()) : the_post(); 
        ?>

            <div class="col-md-6">
                <a href="<?php the_permalink(); ?>">
                    <div class="post-date"><?php echo get_the_date("F j, Y"); ?></div>      
                    <div class="post-cover">
                        <div class="small-post dark">
                                <div class="inner">
                                    <?php
                                        $category = get_the_category(); 
                                    ?>
                                    <h1><?php the_title();?></h1>
                                    <h5><i class="fa fa-star-o" aria-hidden="true"></i><span class="post-category"><?php echo $category[0]->cat_name; ?></span><i class="fa fa-star-o" aria-hidden="true"></i></h5>                              
                                </div>
                        </div>
                        <div class="img-cover" style='background-image: url(<?php the_post_thumbnail_url("cover-secondrow");?>)'>
                        </div>
                    </div>
                </a>
            </div>

    <?php endwhile;
    
    else :
        echo '<p> Geen berichten gevonden. </p>';

    endif;
?>

</div>
</div>
</div>
<?php
get_footer();
?>