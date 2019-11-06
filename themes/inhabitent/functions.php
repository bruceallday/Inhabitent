<?php

//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');

}

add_action('wp_enqueue_scripts', 'inhabitant_files');

//Adds theme support - ex: title tag
function inhabitant_features() {

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus( array(
        'primary' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'inhabitant_features');

function inhabitent_widgets(){
    register_sidebar( array(
        'name'          => sprintf( __( 'Sidebar %d' ), 1 ),
        'id'            => "sidebar-1",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ));
}

add_action('widgets_init', 'inhabitent_widgets')

?>