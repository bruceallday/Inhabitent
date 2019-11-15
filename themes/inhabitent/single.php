<?php get_header(); ?>

<section class="single-post-page">
    <div>
         <?php if( have_posts() ) :
        //The WordPress Loop: loads post content 
        while( have_posts() ) :
        the_post(); ?>
    
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail('large');?>
        <?php the_content(); ?>

    <!-- Loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>

        <?php else : ?>
            <p>No posts found</p>
        <?php endif;?>
        <div>
             <button class="social-button"><i class="fab fa-facebook-f"></i> LIKE </button>
              <button class="social-button"><i class="fab fa-pinterest"></i> PIN </button>
               <button class="social-button"> <i class="fab fa-twitter"></i> TWEET </button>
        </div>
       

    </div>
   

     <?php if ( comments_open() || get_comments_number() ) :
     comments_template();
    endif; ;?>

<?php get_sidebar();?>


</section>

<?php get_footer();?>