<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JSaRC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div>
	<a href="#content"><?php esc_html_e( 'Skip to content', 'jsarc' ); ?></a>

	<header>
		<div>
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$jsarc_description = get_bloginfo( 'description', 'display' );
			if ( $jsarc_description || is_customize_preview() ) :
				?>
				<p><?php echo $jsarc_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav>
			<button id="menuanchor" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jsarc' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div>
