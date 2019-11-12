<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <section class="single-item-section">
        <?php the_post_thumbnail('medium');?>
        <div class="single-item-info">
            <h2><?php the_title(); ?></h2>
             <h3 class="novecento-web" ><?php echo "£" . get_field('price');?></h3> 
    <!-- <h3><?php the_permalink();?></h3> -->
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