<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <section class="single-product-page">
        <?php the_post_thumbnail('large');?>
        <div>
            <h2><?php the_title(); ?></h2>
            <?php echo "£" . get_field('price');?>
            <?php the_content(); ?>
        </div>
         
        
        
    </section>
    
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>