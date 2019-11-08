<?php get_header(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<form action="" id="contact-form">
    <label for="name">Name</label>
    <input type="text" id="name">

    <label for="email">Email</label>
    <input type="email" id="email">

    <label for="subject">Subject</label>
    <input type="text" id="subject">

    <label for="contact-form">Message</label>
</form>
<textarea name="" id="contact-form" cols="30" rows="10"></textarea>

<?php get_sidebar();?>

<?php get_footer();?>