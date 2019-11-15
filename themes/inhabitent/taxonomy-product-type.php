<?php get_header(); ?>

<hr>

<div class="taxonomy-heading" >
    <h1><?php echo single_term_title( '', false ) ;?></h1>
    <?php echo category_description();?>
</div>

<hr style="border-top: dashed 1px; color: #a1a1a1" />

<section class="test-grid">
    <?php if( have_posts() ) :


//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <section class="single-item-section">
        <div class="item-image">
            <?php the_post_thumbnail('large');?>
        </div>
        
        <div class="single-item-info">
            <p><?php the_title(); ?></p>
             <p class="merriweather" ><?php echo "£" . get_field('price');?></p> 

        </div>
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>



    
<?php get_footer();?>