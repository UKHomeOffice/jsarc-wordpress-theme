<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JSaRC
 */

while ( have_posts() ) :
	the_post();

	if ( in_category('events') ) {
		get_template_part( 'template-parts/content', 'post-event');
	}

	if ( in_category('news') ) {
		get_template_part( 'template-parts/content', 'post-news');
	}
endwhile; // End of the loop.
?>