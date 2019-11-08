<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

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