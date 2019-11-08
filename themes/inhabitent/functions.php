<?php

//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
}

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        padding-bottom: 30px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function inhabitent_logo_url(){
    return home_url();
}

add_filter('login_headerurl', 'inhabitent_logo_url');

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

add_action('widgets_init', 'inhabitent_widgets');

//Products Post Type

function inhabitent_post_types(){
    register_post_type('products', array(
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail',),
        'public' => true,
        'labels' => array(
            'name' => 'Products',
            'add_new_items' => 'Add New Product',
            'edit_item' => 'Edit Products',
            'all_items' => 'All Products',
            'singular_name' => 'Product'
        ),
        'menu_icon' => 'dashicons-buddicons-activity'
    ));
}

add_action('init', 'inhabitent_post_types');

//Custom Categories for products - custom taxonomies

function inhabitent_product_types() {
    $slug = 'product-type';
    $name = 'Product Types';
    $singular_name = 'Product Type';
 
    $labels = array(
      'name'                       => $name, 'Taxonomy General Name',
      'singular_name'              => $singular_name, 'Taxonomy Singular Name',
      'menu_name'                  => $name,
      'all_items'                  => 'All ' . $name,
      'parent_item'                => 'Parent ' . $singular_name,
      'parent_item_colon'          => sprintf( 'Parent %s:', $singular_name ),
      'new_item_name'              => sprintf( 'New %s Name', $singular_name ),
      'add_new_item'               => 'Add New ' . $singular_name,
      'edit_item'                  => 'Edit ' . $singular_name,
      'update_item'                => 'Update ' . $singular_name,
      'separate_items_with_commas' => sprintf( 'Separate %s with commas', strtolower( $name ) ),
      'search_items'               => 'Search ' . strtolower( $name ),
      'add_or_remove_items'        => 'Add or remove ' . strtolower( $name ),
      'choose_from_most_used'      => 'Choose from the most used ' . strtolower( $name ),
    );
 
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'query_var'                  => true,
      'show_ui'                    => true,
      'show_in_nav_menus'          => true,
      'show_admin_column'          => true,
      'show_in_rest'               => true,        // needed for Gutenberg to work!
    );
 
    register_taxonomy( $slug, array( 'products' ), $args );
  }
 
  add_action( 'init', 'inhabitent_product_types' );

?>