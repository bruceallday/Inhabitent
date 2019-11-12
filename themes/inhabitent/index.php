<?php get_header(); ?>

<section class="journal">

        <section>
            <?php if( have_posts() ) :

            while( have_posts() ) :
                the_post(); ?>

            <article class="journal-post">
                <div class="post-image-title">
                    <h2><?php the_title(); ?></h2>
                </div> 
                <!-- <h2><?php the_title(); ?></h2> -->
                <?php the_post_thumbnail('large');?>
                 
                <p><?php echo wp_trim_words(get_the_excerpt(), 50, '[...]');  ?></p>
                <button class="read-entry-button">READ MORE</button>
            </article>

            <!-- Loop ends -->
            <?php endwhile;?>
        
            <?php the_posts_navigation();?>
        
            <?php else : ?>
                <p>No posts found</p>
            <?php endif;?>
        </section>
        

        <?php get_sidebar();?>

            
    
        
        

     




</section>





    
<?php get_footer();?>