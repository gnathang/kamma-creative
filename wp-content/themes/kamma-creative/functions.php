<?php
/**
 * Kamma Creative functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kamma_Creative
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kamma_creative_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Kamma Creative, use a find and replace
		* to change 'kamma-creative' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'kamma-creative', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'kamma-creative' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'kamma_creative_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'kamma_creative_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kamma_creative_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kamma_creative_content_width', 640 );
}
add_action( 'after_setup_theme', 'kamma_creative_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kamma_creative_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kamma-creative' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kamma-creative' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kamma_creative_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kamma_creative_scripts() {
	wp_enqueue_style( 'kamma-creative-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kamma-creative-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kamma-creative-main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );

	wp_enqueue_script( 'kamma-creative-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	wp_enqueue_style('kamma-creative-custom', get_template_directory_uri() . '/css/custom.css') ;

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}	
}
add_action( 'wp_enqueue_scripts', 'kamma_creative_scripts' );

// ADD ANOTHER TAGLINE 

add_action( 'customize_register', function ( $wp_customize ) {

	$wp_customize->add_setting( 'header_textcolor', array(
			// 'theme_supports' => array( 'custom-header', 'header-text' ),
			'default'        => get_theme_support( 'custom-header', 'default-text-color' ),

			'sanitize_callback'    => array( $wp_customize, '_sanitize_header_textcolor' ),
			'sanitize_js_callback' => 'maybe_hash_hex_color',
	) );

	$wp_customize->add_control( 'display_header_text', array(
			'settings' => 'header_textcolor',
			'label'    => __( 'Display Site Title and Tagline' ),
			'section'  => 'title_tagline',
			'type'     => 'checkbox',
			'priority' => 40,
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_textcolor', array(
			'label'   => __( 'Header Text Color' ),
			'section' => 'colors',
	) ) );
});



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// a function that returns us a nicely formated background image.
function nice_background ($project_hero_image) {
	// we pass in our image field and 
	// it returns us the image field in a formated fashion.
	echo 'background-image: url(' . get_field($project_hero_image) . ')';
}

// Adding SVG support!
// Wp v4.7.1 and higher
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

// creating custom post types
function create_posttype() {
  register_post_type( 'projects',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Projects' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'work'),
    )
  );

	register_post_type( 'sections',
    array(
      'labels' => array(
        'name' => __( 'Sections' ),
        'singular_name' => __( 'Sections' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'sections'),
    )
  );
}
add_action( 'init', 'create_posttype' );

// important: rewrites the 'work' page so that it displays itself, rather than displaying the homepage.
add_rewrite_rule('^work/page/([0-9]+)','index.php?pagename=work&paged=$matches[1]', 'top');
