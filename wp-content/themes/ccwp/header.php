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
	<!--link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page-specific.css" type="text/css" /-->
	<script src="<?php bloginfo('template_url'); ?>/js/main.js" type="text/javascript" charset="utf-8"></script>
	
<!-- wp_head -->
	<?php wp_head(); ?>
<!--/wp_head -->

</head>


<body <?php body_class(); ?>>

	<?php require get_template_directory() . '/inc/topnav.php'; ?>
	


	
	
	<main id="main" class="main" role="main">