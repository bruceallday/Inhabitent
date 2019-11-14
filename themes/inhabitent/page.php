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
        <label for="name"> <p class="form-label novecento-web" >NAME<span class="red" >*</span></p></label>
        <input type="text" id="name" class="input-field">

        <label for="email"> <p class="form-label novecento-web">EMAIL<span class="red">*</span></p> </label>
        <input type="email" id="email" class="input-field">

        <label for="subject"> <p class="form-label novecento-web">SUBJECT<span class="red">*</span></p></label>
        <input type="text" id="subject" class="input-field">

        <label for="contact-form"><p class="form-label novecento-web">MESSAGE<span class="red">*</span></p></label>

        <textarea name="" id="contact-form" cols="30" rows="10" class="input-message"></textarea>
        <input class="contact-button" type="submit" value="SUBMIT">

        </form>
</div>




<?php get_sidebar();?>

<?php get_footer();?>

</section>



