<?php
/*
 * Template Name: Three Columns
 * The template for displaying all pages with three-column
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
 
get_header();
?>
		<main>
		<h2>Template Name: Three Columns</h2>
		<div class="row">
			<div class="column large-4 small-12">Column 1</div>
			<div class="column large-4 small-12">Column 2</div>
			<aside class="column large-4 small-12 sidebar">
				<div class="sidebar-content">Sidebar</div>
			</aside>
		</div>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();