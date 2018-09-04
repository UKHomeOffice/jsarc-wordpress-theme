<?php
/**
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */
?>

	</main><!--/main -->


	<footer class="footer" role="contentinfo">
		<div class="footer-content">
			<div  class="directory-columns-wrapper">
				<div class="directory-column">
					<?php wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'container' => '',
						'container_class' => '',
						'container_id'=> '',
						'menu_id' => ' ',
						//'menu_class' => 'footer-menu-list',
						'echo' => true,
						'before' => '',
						'after' => '',
						//'link_before' => '<span class="footer-link-text">',
						//'link_after' => '</span>',
						'depth' => 0,
						//'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'items_wrap'  => '<ul class="%2$s">%3$s</ul>',
						'walker' => new footer_menu_description_walker()
					)); ?>
				</div>
			</div>
			
			<?php require get_template_directory() . '/inc/footer-legal-copyright.php'; ?>
		
		

		</div>
	</footer>
	
	
	
	
	
	
	
	
	
	
	
	
	
	


	
	
</body>
</html>