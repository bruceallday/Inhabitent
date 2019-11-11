<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <section class="banner">
        <?php the_post_thumbnail('large');?>
        <img class="main-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg;?>" alt="Inhabitents logo">
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<h1 class="landing-title" >SHOP STUFF</h1>
<section class="shop-page-product-type">
    
    <?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide-empty' => false,
));

foreach($terms as $term):?>

    <section class="front-page-product-sections">
        <button class="front-page-product-sections-btn" href="<?php echo "product-type/" . $term->slug ;?>"> <?php echo $term->name ;?> </button>
    </section>

<?php endforeach;?>

</section>

<h1 class="landing-heading">INHABITENT JOURNAL</h1>



<section class="journal-excerpts">
<?php
$args = array('numberposts' => 3, 'order' => "ASC", 'orderby' => 'title');
$postslist = get_posts($args);
foreach($postslist as $post) : setup_postdata($post); ?>



<div class="landing-blog">
    <?php the_date(); ?>
    <br>
    <?php the_title(); ?>
    <?php echo wp_trim_words(get_the_excerpt(), 10, '...');  ?>
    
</div>



<?php endforeach;?>
</section>



<h1 style="text-align: center;" class="latest-adventures">LATEST ADVENTURES</h1>


<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>