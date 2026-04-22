<?php

/**
 * Theme setup.
 */
function nothing_theme_setup() {
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
    
    // Support for block-based widgets and styles.
    add_theme_support( 'wp-block-styles' );

    // Support for wide-aligned blocks.
    add_theme_support( 'align-wide' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'nothing_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function nothing_theme_enqueue_styles() {
    wp_enqueue_style( 'nothing-style', get_stylesheet_uri() );

    // Enqueue comment-reply script.
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'nothing_theme_enqueue_styles' );