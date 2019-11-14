<?php get_header(); ?>

<section class="about" >

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2 class="about-header"><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large');?>
    
    <section class="about-text" >
        <?php the_content(); ?>
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
    
<?php get_footer();?>