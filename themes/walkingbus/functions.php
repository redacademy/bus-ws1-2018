<?php
/**
 * WSB Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wsb_Theme
 */

if ( ! function_exists( 'wsb_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function wsb_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // wsb_setup
add_action( 'after_setup_theme', 'wsb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function wsb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wsb_content_width', 640 );
}
add_action( 'after_setup_theme', 'wsb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wsb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name' => 'Footer',
		'id' => 'footer-info',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'wsb_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function wsb_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'wsb_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function wsb_scripts() { 
	wp_enqueue_style( 'wsb-starter-style', get_stylesheet_uri() );
	wp_enqueue_style( 'carrosel-slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	wp_enqueue_style( 'carrosel-slick-theme-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' );


	wp_enqueue_script('main-js', get_template_directory_uri() .'/build/js/general.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-appear', get_template_directory_uri() .'/build/js/jquery.appear.min.js', array('jquery'), null, true);
	wp_enqueue_script('wsb-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	//wp_enqueue_script('chartjs', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js', array(), null, true );
	wp_enqueue_script('carrosel-slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wsb_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Remove the Content Editor for the Home Page (Front page)
 */
function walkingbus_remove_front_page_editor() {
	if((int) get_option('page_on_front')==get_the_ID()) {
		remove_post_type_support('page', 'editor');
	}
}
add_action( 'admin_head', 'walkingbus_remove_front_page_editor', 99 );



// API for load more button

 
function twsb_api_script() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'wsb_api', get_template_directory_uri() . '/build/js/scripts.min.js', array( 'jquery' ), false, true );
	 wp_localize_script( 'wsb_api', 'api_vars', array(
		 'rest_url' => esc_url_raw(rest_url()),
	   'nonce' => wp_create_nonce( 'wp_rest' ), 
	 //  'post_id' => get_the_ID()
	//    'success' => 'Thanks, your submission was received!',
	//    'failure' => 'Your submission could not be processed.',
	 ) ); 
 }
 add_action( 'wp_enqueue_scripts', 'twsb_api_script' );



 //https://www.weichieprojects.com/blog/ajax-load-more-posts-wordpress/ 

//  add_action('rest_api_init', 'custom_api_get_expeditions');
// function custom_api_get_expeditions(){
//   register_rest_route( 'expedition', '/all-posts', array(
//     'methods' => 'GET',
//     'callback' => 'custom_api_get_expeditions_callback'
//   ));
// }

//  function custom_api_get_expeditions_callback($request){
//     $posts_data = array();
//     $paged = $request->get_param('page');
//     $paged = (isset($paged) || !(empty($paged))) ? $paged : 1;
//     $posts = get_posts( array(
//       'post_type'       => 'expedition',
//       'status'          => 'published',
//       'posts_per_page'  => 1,
//       'orderby'         => 'post_date',
//       'order'           => 'DESC',
//       'paged'           => $paged
//     ));

//     foreach($posts as $post){
//       $id = $post->ID;
//       $post_thumbnail = (has_post_thumbnail($id)) ? get_the_post_thumbnail_url($id) : null;
//       $post_cat = get_the_category($id);
//       $featured = (get_field('expedition_featured', $id)) ? true : false;

//       $posts_data[] = (object)array(
//         'id' => $id,
//         'slug' => $post->post_name,
//         'type' => $post->post_type,
//         'title' => $post->post_title,
//         'featured_img_src' => $post_thumbnail,
//         'featured' => $featured,
//         'category' => $post_cat[0]->cat_name
//       );
//     }
//     return $posts_data;
// }
// wp_localize_script( 'ajax-script', 'ajax_posts', array(
//     'ajaxurl' => admin_url( 'admin-ajax.php' ),
//     'noposts' => __('No older posts found'),
// ));

// function more_post_ajax(){

//     $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 1;
//     $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

//     //header("Content-Type: text/html");

//     $args = array(
//         //'suppress_filters' => true, 
//         'post_type' => 'post', 
//         'posts_per_page' => $ppp,
//        // 'cat' => 8,
//         'paged'    => $page,
//     ); 

//     $loop = new WP_Query($args);

//     $out = '';

//     if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
//         $out .= '<div class="past-expeditios-more">
//                 <h1>'.get_the_title().'</h1>
//                 <p>'.get_the_content().'</p>
//          </div>';

//     endwhile;
//     endif;
//     wp_reset_postdata();
//     die($out);
// }

// add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
// add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

// remove automatic resizing of thumbnails

function alm_remove_image_size() {
	global $ajax_load_more;
	remove_filter( 'after_setup_theme', array( $ajax_load_more, 'alm_image_sizes' ) );
 }
 add_action( 'after_setup_theme', 'alm_remove_image_size', 1 );