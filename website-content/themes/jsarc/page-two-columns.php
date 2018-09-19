<?php
/*
 * Template Name: Two Columns
 * The template for displaying all pages with two columns
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */

get_header();
?>

		<h2 style="color:red">Template Name: Two Columns Right Sidebar</h2>
		<div class="row">
			<div class="column large-6 small-12">Column 1<br />
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
			</div>
			<div class="column large-6 small-12">Column 2</div>
		</div>


<?php
get_footer();