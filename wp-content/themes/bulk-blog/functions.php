<?php

/**
 * Function describe for Bulk Blog
 * 
 * @package bulk_blog
 */
function bulk_blog_enqueue_styles() {
	/* bulk-stylesheet <- Handle in parent theme */
	wp_enqueue_style( 'bulk-stylesheet', get_template_directory_uri() . '/style.css', array( 'bootstrap' ) );
	wp_enqueue_style( 'bulk-blog-style', get_stylesheet_uri(), array( 'bulk-stylesheet' ) );
}

add_action( 'wp_enqueue_scripts', 'bulk_blog_enqueue_styles' );



/**
 * Remove parent footer credits
 */
function bulk_blog_remove_parent_footer() {
	remove_action( 'bulk_generate_footer', 'bulk_generate_construct_footer' );
}

add_action( 'init', 'bulk_blog_remove_parent_footer' );

/**
 * Build footer
 */
add_action( 'bulk_generate_footer', 'bulk_blog_generate_construct_footer' );

function bulk_blog_generate_construct_footer() {
	?>
	<p class="footer-credits-text text-center">
		<?php
		/* translators: %s: link to https://wordpress.org/ */
		printf( esc_html__( 'Proudly powered by %s', 'bulk-blog' ), '<a href="' . esc_url( __( 'https://wordpress.org/', 'bulk-blog' ) ) . '">WordPress</a>' );
		?>
		<span class="sep"> | </span>
		<?php
		/* translators: %1$s: link to theme page */
		printf( esc_html__( 'Theme: %1$s', 'bulk-blog' ), '<a href="https://themes4wp.com/theme/bulk-blog/">Bulk Blog</a>' );
		?>
	</p> 
	<?php
}

add_action( 'after_setup_theme', 'bulk_blog_setup', 99 );

/**
 * Global functions
 */
function bulk_blog_setup() {

	// Recommend plugins removal - no needed for this child theme
	add_theme_support( 'recommend-plugins', array() );
}

add_action( 'after_setup_theme', 'bulk_blog_header_image' );

/**
 * New header image
 */
function bulk_blog_header_image() {
  add_theme_support( 'custom-header', apply_filters( 'bulk_setup_args', array(
      'default-image'      => get_stylesheet_directory_uri( ) . '/img/header.jpg',
			'width'              => 2000,
			'height'             => 1200,
			'flex-height'        => true,
			'video'              => false,
  ) ) );
}


add_action( 'bulk_after_header_image_title', 'bulk_blog_generate_arrow' );
add_action( 'bulk_after_post_meta', 'bulk_blog_generate_arrow' );
add_action( 'bulk_after_page_title', 'bulk_blog_generate_arrow' );

/**
 * Build scroll to content arrow
 */
function bulk_blog_generate_arrow() {
	?>
	<div id="header-image-arrow">
		<a href="#bulk-content"><span></span></a>
	</div>
	<?php
}

/**
 * Remove unused customizer sections
 */
function bulk_blog_customize_register() {     
  global $wp_customize;
  $wp_customize->remove_section( 'customizer-plugin-notice-section' );
  $wp_customize->remove_section( 'theme_demo_content' );  
} 

add_action( 'customize_register', 'bulk_blog_customize_register', 11 );

/**
 * Remove unused tabs
 */
add_action( 'admin_init', 'bulk_blog_remove_action');
function bulk_blog_remove_action() {
     remove_action( 'bulk_recommended_title', 'bulk_recommended_title_construct' );
     remove_action( 'bulk_import_title', 'bulk_recommended_import_construct' );
}

/**
 * Remove parent theme function
 */
function bulk_get_actions_required() {
	// Not needed for this child theme	
};
