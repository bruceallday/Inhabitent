<?php get_header(); ?>

<h1 class="shop-title">SHOP STUFF</h1>

<section class="shop-product-type-links">

    <?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide-empty' => false,
    ))?>
    <?php foreach($terms as $term):?>

    <section class="shop-product-type-links">
        <a class="#" href="<?php echo "product-type/" . $term->slug ;?>"> <?php echo $term->name ;?> </a>
    </section>

    <?php endforeach;?>
</section>
 

<section class="shop-content-grid">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <figure>
        
        <?php the_post_thumbnail('large');?>
        <figcaption>
            
            <?php the_content(); ?>
            <p><?php the_title(); ?></p>
            <?php echo "£" . get_field('price');?>
        </figcaption>
        
    </figure>
    
    <!-- Loop ends -->
    <?php endwhile;?>

</section>

<?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>