<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<!-- <i class="fas fa-search"></i> -->
<nav>
    <a href="<?php echo get_home_url();?>"><img style="width: 90px; height: 40px;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg;?>" alt="Inhabitents logo"></a>
    
    <?php wp_nav_menu(array('theme_location' => 'primary')) ;?>
</nav>
<hr>






