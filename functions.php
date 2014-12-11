<?php 
if ( ! function_exists( 'themeone_setup' ) ) :
function themeone_setup() {
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'themeone-full-width', 1038, 576, true );

	register_nav_menus( array(
	'primary'   => __( 'Top primary menu', 'themeone' ),
	'secondary' => __( 'Secondary menu in left sidebar', 'themeone' ),
	) );

	add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			) );

	add_theme_support( 'post-formats', array(
	'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	add_theme_support( 'custom-background', apply_filters( 'themeone_custom_background_args', array(
	'default-color' => 'f5f5f5',
	) ) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
	'featured_content_filter' => 'themeone_get_featured_posts',
	'max_posts' => 6,
	) );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
endif; // twentyfourteen_setup
add_action( 'after_setup_theme', 'themeone_setup' );

function themeone_scripts() {
	wp_enqueue_style( 'themeone-lato', get_stylesheet_uri(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'themeone_scripts' );
?>