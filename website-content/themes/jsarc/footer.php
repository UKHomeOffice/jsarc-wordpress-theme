<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JSaRC
 */

?>

<footer class="section footer" role="contentinfo">
	<div class="section-content">
		<div class="row">
			<div class="column large-6 medium-8  small-6">
				<nav class="jsarc-directory" aria-label="JSaRC Directory" role="navigation">
					<div class="row">
						<div class="column large-6 small-12">
							<ul>
								<li class="directory-item"><a class="directory-link" href="<?php the_field('footer_link_1_path'); ?>"><?php the_field('footer_link_1'); ?></a></li>
								<li class="directory-item"><a class="directory-link" href="<?php the_field('footer_link_1_path'); ?>"><?php the_field('footer_link_2'); ?></a></li>
								<li class="directory-item"><a class="directory-link" href="<?php the_field('footer_link_1_path'); ?>"><?php the_field('footer_link_3'); ?></a></li>
							</ul>
						</div>
						<div class="column large-6 small-12">
							<ul>
								<li class="directory-item"><a class="directory-link" href="<?php the_field('footer_link_1_path'); ?>"><?php the_field('footer_link_4'); ?></a></li>
								<li class="directory-item"><a class="directory-link" href="<?php the_field('footer_link_1_path'); ?>"><?php the_field('footer_link_5'); ?></a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="column large-6 medium-4 small-6">
				<figure class="organisation-logo" aria-label="Home Office"></figure>
			</div>
		</div>
		<div class="row">
			<div class="column large-6 large-last small-12">
				<div class="footer-legal"><?php the_field('footer_legal'); ?></div>
			</div>
		</div>
	</div>
</footer>






<?php wp_footer(); ?>

</body>
</html>
