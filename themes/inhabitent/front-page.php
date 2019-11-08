<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <section>
        <?php the_post_thumbnail('large');?>
        <img class="main-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg;?>" alt="Inhabitents logo">
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>


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

<h1>INHABITENT JOURNAL</h1>

<?php
$args = array('numberposts' => 3, 'order' => "ASC", 'orderby' => 'title');
$postslist = get_posts($args);
foreach($postslist as $post) : setup_postdata($post); ?>
<div>
    <?php the_date(); ?>
    <br>
    <?php the_title(); ?>
    <?php echo wp_trim_words(get_the_excerpt(), 10, '...');  ?>
    <?php endforeach;?>
</div>


<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>