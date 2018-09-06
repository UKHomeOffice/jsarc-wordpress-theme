<?php
/**
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php get_locale(); ?>" lang="<?php get_locale(); ?>" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="Description" content="<?php bloginfo('description'); ?>" />
	<?php require get_template_directory() . '/inc/meta-open-graph-protocol.php'; ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
	<script src="<?php bloginfo('template_url'); ?>/js/main.js" type="text/javascript" charset="utf-8"></script>
	
<!-- wp_head -->
	<?php wp_head(); ?>
<!--/wp_head -->
<style>
	html { margin-top: 0 !important; }
	* html body { margin-top: 0 !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0 !important; }
		* html body { margin-top: 0 !important; }
	}
</style>

</head>


<body <?php body_class(); ?>>
	
	
	<main id="main" class="main" role="main">
	
		<a class="logo" href="/">JSaRC</a>
		
		<section class="section section-hero">
			<figure class="hero-image"></figure>
			<div class="section-content hero-headline">
				<div class="hero-headline-inner">
					
					<?php if( get_field('headline') ): ?>
					<h1 class="headline" data-animation="reveal"><?php the_field('headline'); ?></h1>
					<?php endif; ?>
					
					<?php if( get_field('sub-headline') ): ?>
					<h2 class="sub-headline" data-animation="reveal" data-delay-group="1"><?php the_field('sub-headline'); ?></h2>
					<?php endif; ?>
					
				</div>
			</div>
			
			<?php require get_template_directory() . '/inc/topnav.php'; ?>
			
		</section>
		
		<section class="section section-second">
			<div class="section-content">
					<div class="column first">
						<h2 class="article-headline">Joint Security and Resilience Centre</h2>
						<?php if( get_field('article-headline') ): ?>
						<h2 class="article-headline"><?php the_field('article-headline'); ?></h2>
						<?php endif; ?>
						<?php if( get_field('article-subheadline') ): ?>
						<h3 class="article-subheadline"><?php the_field('article-subheadline'); ?></h3>
						<?php endif; ?>
						<?php if( get_field('article-copy') ): ?>
						<?php the_field('article-copy'); ?>
						<?php endif; ?>
					</div>
					<?php get_sidebar(); ?>
			</div>
		</section>
		
		<div class="section footnotes">
			<div class="section-content">
				<?php if( get_field('article-footnotes') ): ?>
				<?php the_field('article-footnotes'); ?>
				<?php endif; ?>
			</div>
		</div>
		
		
		

<?php get_footer(); ?>






