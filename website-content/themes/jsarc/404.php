<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JSaRC
 */

get_header(); ?>
<?php function add_to_head() { ?>
<style>
#main { min-height: calc(100vh - 431px); width: 100%; display: table; }
#main > * { display: table-cell; width: 100%; height: 100%; }
.section h1 { text-align: center; padding: 0 20px; font-size: 30px; line-height: 1.3; font-weight: bold; color: #444; }
</style>
<?php } ?>

<section class="section">
	<div class="section-content"> 
		<h1>The page you’re looking for can’t be found.</h1>
	</div>
</section>



<?php get_footer();
