<?php
/**
 * Register Custom Navigation Walker
 */
function wpb_register_navwalker(){
	require_once (get_template_directory() . '/class-wp-bootstrap-navwalker.php');
  register_nav_menus(array(
        'primary' => __('Primary Menu')
  ));
}
function add_featured_image_support() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','wpb_register_navwalker');
add_action('after_setup_theme','add_featured_image_support');

add_filter( 'nav_menu_link_attributes', 'bootstrap5_dropdown_fix' );
function bootstrap5_dropdown_fix( $atts ) {
    if ( array_key_exists( 'data-toggle', $atts ) ) {
        unset( $atts['data-toggle'] );
        $atts['data-bs-toggle'] = 'dropdown';
    }
    return $atts;
}

wp_enqueue_style('main_style',get_stylesheet_uri());

add_action ('wp_enqueue_scripts','wpse271934_add_styles');
function wpse271934_add_styles () {
  global $post;
  $extra_styling = '';
  if (is_page()) {
    $image = get_the_post_thumbnail_url($post->ID,'large');
    
    if (!empty($image)) {
      $extra_styling .= '#page-main {background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('.$image.');}';
    }
      
  }


  // assuming style.css has the handle 'main_style' in your theme
  wp_add_inline_style('main_style', $extra_styling);
}

function create_posttype_portfolio() {
  // Set UI labels for Custom Post Type
  $labels = array(
      'name'                => _x('Portfolio', 'Post Type General Name'),
      'singular_name'       => _x('Portfolio', 'Post Type Singular Name'),
      'menu_name'           => __('Portfolio'),
      'all_items'           => __('All Portfolio Items'),
      'view_item'           => __('View Portfolio Items'),
      'add_new_item'        => __('Add New Portforlio Item'),
      'add_new'             => __('Add New'),
      'edit_item'           => __('Edit Portfolio Item'),
      'update_item'         => __('Update Portfolio Item'),
      'search_items'        => __('Search Portfolio Items'),
      'not_found'           => __('Not Found'),
      'not_found_in_trash'  => __('Not found in Trash'),
  );

  $args = array(
      'label'               => __('portfolio'),
      'description'         => __('Portfolio Items'),
      'labels'              => $labels,
      // Features this CPT supports in Post Editor
      'supports'            => array( 'title','editor','thumbnail','page-attributes','custom-fields'),
      // You can associate this CPT with a taxonomy or custom taxonomy. 
      'taxonomies'          => array('genres'),
      /* A hierarchical CPT is like Pages and can have
      * Parent and child items. A non-hierarchical CPT
      * is like Posts.
      */ 
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      // 'menu_position'       => 5,
      'can_export'          => true,
      // 'has_archive'         => true,
      'exclude_from_search' => false,
      // 'publicly_queryable'  => true,
      'capability_type'     => 'page',
      'show_in_rest'        => true,
  );
   
  // Registering your Custom Post Type
  register_post_type( 'portfolio', $args );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_portfolio' );

// Prevent WP from adding <p> tags on all post types
function disable_wp_auto_p( $content ) {
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  return $content;
}
add_filter( 'the_content', 'disable_wp_auto_p', 0 );
?>