<?php get_header(); ?>

<section class="journal">

    
        <?php if( have_posts() ) :
        //The WordPress Loop: loads post content 
            while( have_posts() ) :
                the_post(); ?>
        <div class="journal-post">  
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail('large');?>
            <!-- //<?php the_content(); ?> -->
            <?php echo wp_trim_words(get_the_excerpt(), 10, '...');  ?>
        </div>
            <!-- Loop ends -->
            <?php endwhile;?>
        
            <?php the_posts_navigation();?>
        
            <?php else : ?>
                <p>No posts found</p>
            <?php endif;?>

            
    
        
        <?php get_sidebar();?>

     




</section>




    
<?php get_footer();?>