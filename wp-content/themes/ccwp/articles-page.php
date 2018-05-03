<?php
/**
 * The template used for displaying page content
 * Template Name: articles
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */

get_header();
?>
	<div class="column">
		<h1>This is 'page-article.php'</h1>
		
		<?php
		global $post;
		echo $post->post_title;
		?>
		
		
	</div>
	<?php get_sidebar(); ?>

