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
	<a href="#content" class="visuallyhidden"><?php esc_html_e( 'Skip to content', 'jsarc' ); ?></a>

	<header>
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
