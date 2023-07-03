<?php
add_theme_support('post-thumbnails');
add_image_size( 'licytacja', 220, 220, array( 'center', 'center' ) );
add_image_size( 'post-item', 450, 300, array( 'center', 'center' ) );

if ( ! function_exists( 'go_register_nav_menu' ) ) {
    function go_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'go' ),
			'secundary_menu' => __( 'footer Menu', 'go' ),
        ) );
    }
    add_action( 'after_setup_theme', 'go_register_nav_menu', 0 );
}

require_once get_template_directory() . '/func/enqueue-styles.php';
require_once get_template_directory() . '/func/enqueue-scripts.php';
require get_template_directory() . '/blocks/blocks.php';

// gutenberg editor
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri().'/src/css/go-admin.min.css');

}
add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);

function wpse_load_subscriber_stylesheet() {
    if ( current_user_can( 'tf_vendor' ) ) {
        wp_enqueue_style('vendor_editor_css', get_template_directory_uri().'/src/css/go-tf-vendor.min.css');
    } 
}
add_action( 'admin_head', 'wpse_load_subscriber_stylesheet' );
// Paginacja
function pagination_bars() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


function filter_plugin_updates( $value ) {
	$plugins = array(
	  'advanced-custom-fields-pro/acf.php'
	);
	foreach( $plugins as $plugin ) {
	  if ( isset( $value->response[$plugin] ) ) {
		unset( $value->response[$plugin] );
	  }
	}
	return $value;
}

// colors
function ka_override_MCE_options($init)
  {
    $custom_colors = '
          "575289", "Main color",
          "9df7de", "Main 2 color",
          "ffe681", "Main 3 color",
          "0d0b1e", "Black",
          "545454", "Light black",
          "eeeef0", "Gray",
          "d7d7d7", "Gary dark",
      ';
    // build color grid palette
    $init['textcolor_map'] = '[' . $custom_colors . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
  }
  add_filter('tiny_mce_before_init', 'ka_override_MCE_options');

// Excerpt changing 3 dots
  Function new_excerpt_more( $more ) {
	return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');


if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => 'Settings theme',
    'menu_title' => 'Setings',
    'parent_slug' => 'themes.php',
  ));
  acf_add_options_page(array(
    'page_title' => 'Opinie',
    'menu_title' => 'Opinie',
    'parent_slug' => 'themes.php',
  ));
}



/// modify the path to the icons directory
add_filter('acf_icon_path_suffix',
  function ( $path_suffix ) {
    return '/src/img/icons/'; // After assets folder you can define folder structure
  }
);

// function wpsites_exclude_latest_post( $query ) {
//     if ( $query->is_home() && $query->is_main_query() ) {
//         $query->set( 'offset', '1' );
//     }
// }
 
// add_action( 'pre_get_posts', 'wpsites_exclude_latest_post', 1 );

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyB8pMQYqHehRWSDeAVKOrv8JD9s1dR6Y2Q');
}
add_action('acf/init', 'my_acf_init');


function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) 
        return true;
    return false;
}


add_filter( 'body_class', function( $classes ) {
	$user = wp_get_current_user();
	$roles = $user->roles;
    return array_merge( $classes, $roles );
} );

// function wpse_load_subscriber_stylesheet() {
//     if ( current_user_can( 'tf_vendor' ) ) {
//         wp_enqueue_style( 'login-subscriber-style', home_url( '/login/subscriber-style.css' ) );
//     } 
// }
// add_acti( 'wp_enqueue_scripts', 'wpse_load_subscriber_stylesheet' );