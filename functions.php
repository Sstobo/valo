<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
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
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}


add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'wp_loaded', 'red_starter_widgets_init' );


/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

function valo_scripts(){
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

}

add_action('wp_loaded', 'valo_scripts');

/**
 * Enqueue scripts and styles.
 */



function chromefix_inline_css()
{ 
    wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}

add_action('admin_enqueue_scripts', 'chromefix_inline_css');




function my_theme_scripts() {
    wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/js/headerScroll.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_loaded', 'my_theme_scripts' );


function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

// Script for getting posts
function ajax_filter_get_posts( $taxonomy ) {
 
  // Verify nonce
  if( !isset( $_POST['valo_nonce'] ) || !wp_verify_nonce( $_POST['valo_nonce'], 'valo_nonce' ) )
    die('Permission denied');
 
  $taxonomy = $_POST['taxonomy'];
 
  // WP Query
  $args = array(
    'category_name' => $taxonomy,
    'post_type' => 'post',
    'posts_per_page' => 10,
  );
 
  // If taxonomy is not set, remove key from array and get all posts
  if( !$taxonomy ) {
    unset( $args['category_name'] );
  }
 
  $query = new WP_Query( $args );
 
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
 
		<?php get_template_part( 'template-parts/content-news' ); ?>
 
  <?php endwhile; ?>
  <?php else: ?>
    <h2>No posts found</h2>
  <?php endif;
 
  die();
}
 
add_action('wp_ajax_filter_posts', 'ajax_filter_get_posts');
add_action('wp_ajax_nopriv_filter_posts', 'ajax_filter_get_posts');
 
 
add_action('wp_ajax_myfilter', 'news_filter_function'); 
add_action('wp_ajax_nopriv_myfilter', 'news_filter_function');

function ajax_filter_posts_scripts() {

  // Enqueue script
  wp_register_script('valo_filter', get_template_directory_uri() . '/js/filter.js', false, null, false);
  wp_enqueue_script('valo_filter');
 
  wp_localize_script( 'valo_filter', 'valo_vars', array(
        'valo_nonce' => wp_create_nonce( 'valo_nonce' ), // Create nonce which we later will use to verify AJAX request
        'valo_ajax_url' => admin_url( 'admin-ajax.php' ),
      )
  );
}
add_action('wp_enqueue_scripts', 'ajax_filter_posts_scripts', 100);

