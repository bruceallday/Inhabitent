<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body <?php body_class();?>>
<!-- <i class="fas fa-search"></i> -->
<?php wp_nav_menu(array('theme_location' => 'primary')) ;?>

<img style="width: 100px; height: 50px;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg;?>" alt="Inhabitents logo">
<!-- <hr> -->




