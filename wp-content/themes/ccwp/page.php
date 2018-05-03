<?php
/**
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */

get_header();
?>

	<h1>This is 'page.php'!</h1>
	
	<?php if( get_field('home_page_header_LALA') ): ?>
					<h1 class="headline" data-animation="reveal"><?php the_field('home_page_header_LALA'); ?></h1>
					<?php endif; ?>
					
					<?php if( get_field('home_page_subheader_LALA') ): ?>
					<h2 class="home-page-subheader" data-animation="reveal" data-delay-group="1"><?php the_field('home_page_subheader_LALA'); ?></h2>
					<?php endif; ?>
	








