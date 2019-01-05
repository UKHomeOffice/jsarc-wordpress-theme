<?php
/**
 * The template for displaying all single news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JSaRC
 */

get_header();
?>

	<div>
		<main>
		<h1 style="color: lightgrey;font-size:50px;">SINGLE-NEWS.PHP</h1>
		<?php the_field( 'news_date' ); ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
