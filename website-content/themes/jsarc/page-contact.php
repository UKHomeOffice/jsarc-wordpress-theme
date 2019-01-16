<?php
/*
 * Template Name: Contact Page Template
 * The template for displaying About page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>


<?php get_header(); ?>


<style>
	
	.hero {
		margin-bottom: 70px;
	}
.hero .hero-image {
	position: absolute;
	z-index: -1;
	max-width: 2560px;
	width: 100%;
	height: 300px;
	background-size: cover;
	background-position: 80% 50%;
	background-image: url("<?php the_field( 'hero_image' ); ?>");	
}
.hero .section-content {
	display: table;
	height: 300px;
	
}
.hero .headline-wrapper {
	display: table-cell;
	vertical-align: middle;
}

	.hero .hero-headline {
		display: inline-block;
		width: 80%;
		font-size: 36px;
		line-height: 75px;
		font-weight: bold;
		color: #fff;
	}
	.hero .hero-headline span {
		display: inline;
		padding: 15px 0;
		box-shadow: 20px 0 0 #000, -20px 0 0 #000;
		background-color: #000;
	}
	
	
	.form .heading-text {
		font-size: 20px;
		font-weight: bold;
		line-height: 31px;
		margin-bottom: 20px;
	}
	.form .body-text {
		font-size: 18px;
		line-height: 28px;
		margin-bottom: 30px;
	}



</style>


<header class="section hero">
	<figure class="hero-image"></figure>
	<div class="section-content">
		<div class="headline-wrapper">
			<h1 class="hero-headline"><span><?php the_title(); ?></span></h1>
		</div>
	</div>
</header>
<div class="section">
	<div class="section-content">
		<div class="row">
			<div class="column large-8 small-12">
				<div class="form">
				<?php while ( have_rows( 'text_above_the_form' ) ) : the_row(); ?>
					<h2 class="heading-text"><?php the_sub_field( 'heading_text' ); ?></h2>
					<p class="body-text"><?php the_sub_field( 'body_text' ); ?></p>
				<?php endwhile; ?>
				</div>
			</div>
			<div class="column large-4 small-12">
				
			</div>
		</div>
	</div>
</div>
<div class="section">
	<div class="section-content">
		
		<div class="contact">
			<div class="contact-block">
				<h4 class="block-headline">
					
				</h4>
				<strong class="contact"></strong>
				<ul class="phone">
					
				</ul>
				
			</div>
			<div class="contact-block">
				
			</div>
		</div>
		
		<div class="contact">
			<div class="contact-block">
				<h4 class="block-headline">
					
				</h4>
				<strong class="contact"></strong>
				<ul class="phone">
					
				</ul>
				
			</div>
			<div class="contact-block">
				
			</div>
		</div>
		
	</div>
</div>



<?php get_footer();