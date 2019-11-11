<?php get_header(); ?>


<section class="contact">

<div class="info">
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
    
    <form action="" class="contactForm" id="contact-form">
        <label for="name">NAME</label>
        <input type="text" id="name">

        <label for="email">EMAIL</label>
        <input type="email" id="email">

        <label for="subject">SUBJECT</label>
        <input type="text" id="subject">

        <label for="contact-form">MESSAGE</label>

        <textarea name="" id="contact-form" cols="30" rows="10"></textarea>
        <input type="submit">

        </form>
</div>




<?php get_sidebar();?>

<?php get_footer();?>

</section>



