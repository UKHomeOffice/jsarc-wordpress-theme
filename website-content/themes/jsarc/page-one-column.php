<?php
/*
 * Template Name: One Column
 * The template for displaying all pages with one column
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */

get_header();
?>
<section class="section section-form">
	<div class="row">
		<div class="column large-8 large-push-2 medium-10 medium-push-1 small-12 small-push-0">
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
	</div>
</section>

<?php
get_footer();