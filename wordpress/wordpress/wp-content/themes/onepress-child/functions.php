<?php 
#pentru masonry
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles');


function enqueue_child_theme_styles() {
wp_enqueue_style( 'parent-style', 
get_template_directory_uri().'/style.css' );
wp_enqueue_style( 'child-styles', get_stylesheet_uri() ); 
} 

function custom_post_cards() { 
 
$labels = array( 
    'name'               => _x( 'Cards', 'post type general name' ),     'singular_name'      => _x( 'Cards', 'post type singular name' ), 
    'menu_name'          => 'Cards' 
  ); 
 
  $args = array( 
    'labels'        => $labels, 
    'description'   => 'Holds list of cards', 
    'public'        => true, 
    'supports'      => array( 'title', 'editor', 'thumbnail')   ); 
    register_post_type( 'card', $args ); 	  
}
add_action( 'init', 'custom_post_cards' );

#pana aici
function include_masonry() { 
    if ( is_page_template('template-wall.php') ) 
        {  
        wp_enqueue_script('wplab', get_stylesheet_directory_uri() . 
        '/assets/js/wplab.js',  array( 'jquery', 'masonry' ));  
        } 
    }  
add_action('wp_enqueue_scripts', 'include_masonry');
?> 
