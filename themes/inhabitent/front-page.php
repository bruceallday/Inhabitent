<?php get_header(); ?>

<?php if( have_posts() ) :


//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>