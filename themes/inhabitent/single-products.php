<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <section class="single-product-page">
        <?php the_post_thumbnail('large');?>
        <div class="single-product-info-div">
            <h2> <?php strtoupper( the_title()); ?></h2>
            <p class="price-text" ><?php echo "£" . get_field('price');?></p> 
            <?php the_content(); ?>
            <div><button class="social-button"><i class="fab fa-facebook-f"></i> LIKE </button>
              <button class="social-button"><i class="fab fa-pinterest"></i> PIN </button>
               <button class="social-button"> <i class="fab fa-twitter"></i> TWEET </button>
        </div>
    </section>
    
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>