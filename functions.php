<?php

if (!function_exists('wordcampswitzerland_2023_styles')) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function wordcampswitzerland_2023_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'wordcampswitzerland_2023-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style('wordcampswitzerland_2023-style');
	}

	add_action('wp_enqueue_scripts', 'wordcampswitzerland_2023_styles');
endif;

add_action('wp_enqueue_scripts', 'twentytwentytwo_styles');


// // Add block patterns
// require get_template_directory() . '/inc/block-patterns.php';
