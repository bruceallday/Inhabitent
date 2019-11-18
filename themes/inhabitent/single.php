<?php get_header(); ?>

<section class="single-post-page">
    <div class="journal-entry">
         <?php if( have_posts() ) :
        //The WordPress Loop: loads post content 
        while( have_posts() ) :
        the_post(); ?>
        
        <div class="post-image-title-main">
             <h2><?php the_title(); ?></h2>
        </div>

        <?php the_post_thumbnail('large');?>

        <?php the_content(); ?>

        <?php endwhile;?>

        <?php the_posts_navigation();?>

        <?php else : ?>
            <p>No posts found</p>
        <?php endif;?>

        <div>
            <button style="margin-top: 50px;" class="social-button"><i class="fab fa-facebook-f"></i> LIKE </button>
            <button style="margin-top: 50px;" class="social-button"><i class="fab fa-pinterest"></i> PIN </button>
            <button style="margin-top: 50px;" class="social-button"><i class="fab fa-twitter"></i> TWEET </button>
        </div>
    </div>
   
     <?php if ( comments_open() || get_comments_number() ) :
     comments_template();
    endif; ;?>

<?php get_sidebar();?>

</section>

<?php get_footer();?>