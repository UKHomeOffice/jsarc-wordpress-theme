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
				<nav class="footer-menu" aria-label="JSaRC Footer Menu" role="navigation">
					<div class="row">
						<div class="column large-6 small-12">
							<?php if( have_rows('footer_menu_first_column', 'option') ): ?>
								
								<ul>
								<?php while( have_rows('footer_menu_first_column', 'option') ): the_row(); 
		
									$link = get_sub_field('link');
									$link_content = get_sub_field('link_content');

									?>

									<li class="footer-menu-item">
										<?php if( $link ): ?>
											<a class="footer-menu-link" href="<?php echo $link; ?>">
										<?php endif; ?>
											<?php echo $link_content; ?>
										<?php if( $link ): ?>
											</a>
										<?php endif; ?>
									</li>

								<?php endwhile; ?>

								</ul>

							<?php endif; ?>
						</div>
						<div class="column large-6 small-12">
							<?php if( have_rows('footer_menu_second_column', 'option') ): ?>
								
								<ul>
								<?php while( have_rows('footer_menu_second_column', 'option') ): the_row(); 
		
									$link = get_sub_field('link');
									$link_content = get_sub_field('link_content');

									?>

									<li class="footer-menu-item">
										<?php if( $link ): ?>
											<a class="footer-menu-link" href="<?php echo $link; ?>">
										<?php endif; ?>
											<?php echo $link_content; ?>
										<?php if( $link ): ?>
											</a>
										<?php endif; ?>
									</li>

								<?php endwhile; ?>

								</ul>

							<?php endif; ?>
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
				<div class="footer-legal"><?php the_field('footer_legal', 'option'); ?></div>
			</div>
		</div>
	</div>
</footer>




<?php wp_footer(); ?>

</body>
</html>
