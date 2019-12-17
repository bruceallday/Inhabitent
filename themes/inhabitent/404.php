<?php get_header(); ?>
<div style="float: right; top: 500px;" ><?php get_sidebar();?></div> 
<h1>Oops that page cannot be found</h1>
<br>
<p>It looks like nothing was found at this location. Maybe try one of the links below or search</p>
<br>

 <div class="error-search" ><?php echo get_search_form();?></div> 
<br>
<h2 class="novecento-web" >RECENT POSTS</h2>
<?php
$args = array('numberposts' => 3, 'order' => "ASC", 'orderby' => 'title');
$postslist = get_posts($args);
foreach($postslist as $post) : setup_postdata($post); ?>
        <p><a class="green-brand merriweather" style="text-decoration: none;" href="<?php echo get_permalink() ;?>"><?php the_title(); ?></a></p><br>
    </div>

<?php endforeach;?>
<br>
<h2 class="novecento-web" >MOST USED CATEGORIES</h2>
    <?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide-empty' => false,
));

foreach($terms as $term):?>

<a class="green-brand merriweather" style="font-size: 18px; text-decoration: none;" href="<?php echo "product-type/" . $term->slug ;?>"><?php echo $term->name;?></a><br>

<?php endforeach;?>
<br>
<h2 class="novecento-web" >ARCHIVES</h2>
<p>Try looking in the monthly archives</p>

<select>

<?php $args = array('numberposts' => 3, 'order' => "ASC", 'orderby' => 'title');
$postslist = get_posts($args);
foreach($postslist as $post) : setup_postdata($post); ?>

    <option><a href="<?php echo get_permalink() ;?>"><?php the_title(); ?></a></option>

<?php endforeach;?>

</select>

<br>



<?php get_footer();?>

