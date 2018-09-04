<?php
/*
Template Name: My cool template
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
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/my-cool-page.css" type="text/css" />
	<script src="<?php bloginfo('template_url'); ?>/js/main.js" type="text/javascript" charset="utf-8"></script>
	


</head>


<body <?php body_class(); ?>>

	<?php require get_template_directory() . '/inc/topnav.php'; ?>
	


	
	
	<main id="main" class="main" role="main">

<div class="row">
			<div class="form column large-7 small-12">
				<div class="form-header">
					<h2>Our Work</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit dis dapibus vehicula, mus sodales natoque nostra feugiat per arcu justo vulputate.</p>
				</div>
				<div class="select-wrapper">
					<select>
						<option>Select</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
					</select>
				</div>
				<label>Lorem Ipsum</label><input type="text" />
				<label>Lorem Ipsum</label><input type="text" />
				<label>Lorem Ipsum</label><textarea></textarea>
				<label class="checkbox"><input type="checkbox" />Lorem ipsum dolor sit amet</label>
				<a class="button submitting" href=""><span class="load-spinner"></span></a>
				<div class="done">
					<div class="content form-header">
						<h2>Thank you!</h2>
						<p>Lorem ipsum dolor sit amet consectetur.</p>
					 </div>
				</div>
		
				<div>
				</div><!-- \form -->
			</div>
		</div>
		
	<?php get_footer(); ?>