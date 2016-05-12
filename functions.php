<?php

function load_css() {
	wp_enqueue_style( 'sixtysecondtheme_stylesheet', get_stylesheet_uri() );
	wp_enqueue_style( 'sixtysecondtheme_gfonts', 'https://fonts.googleapis.com/css?family=Bentham|PT+Serif:400,700,400italic,700italic' );
}

add_action( 'wp_enqueue_scripts', 'load_css' );



// function register_my_menu() {
//   register_nav_menu('header-menu',__( 'Header Menu' ));
// }
// add_action( 'init', 'register_my_menu' );
register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'sixtysecondtheme' ),
	) );


	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

		// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sixtysecondtheme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sixtysecondtheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sixtysecondtheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'sixtysecondtheme_content_width', 0 );

	register_sidebar( array(
	'name' => 'Footer Sidebar 1',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );

	register_sidebar( array(
	'name' => 'Footer Sidebar 4',
	'id' => 'footer-sidebar-4',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );


// Added featured image support 
	add_theme_support( 'post-thumbnails' ); 
	// Image size for single posts
	add_image_size( 'single-post-thumbnail', 590, 180 );


	// Added FontAwesome 
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );
 
function add_font_awesome() {
wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
}
?>

