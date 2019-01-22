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
	
	
.contact .section-content {
	padding-top: 70px;
	padding-bottom: 70px;
}


 

.contact .heading {
	font-size: 36px;
	font-weight: bold;
	line-height: 75px;
	border-bottom: 1px solid #999;
	margin-bottom: 1em;
}
.contact .address {
	font-size: 18px;
	line-height: 31px;
}

.contact .extra-details {
	margin-top: 20px;
}

.contact .extra-details a {
	font-style: italic;
	text-decoration: underline;
}

@media only screen and (max-width: 735px) {
    .contact .large-last {
    	margin-top: 50px;
    }
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
<div class="section contact">
	<div class="section-content">
		<div class="row">
		
			<?php if ( have_rows( 'first_column' ) ) : ?>
			<div class="column large-5 small-12">
				<?php while ( have_rows( 'first_column' ) ) : the_row(); ?>
					<h3 class="heading"><?php the_sub_field( 'headline' ); ?></h3>
					<address class="address"><?php the_sub_field( 'address' ); ?></address>
					<?php if ( have_rows( 'extra_details' ) ) : ?>
						<?php while ( have_rows( 'extra_details' ) ) : the_row(); ?>
							<div class="extra-details"><?php the_sub_field( 'text' ); ?></div>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			
			<?php if ( have_rows( 'last_column' ) ) : ?>
			<div class="column large-5 large-last small-12">
				<?php while ( have_rows( 'last_column' ) ) : the_row(); ?>
					<h3 class="heading"><?php the_sub_field( 'headline' ); ?></h3>
					<address class="address"><?php the_sub_field( 'address' ); ?></address>
					<?php if ( have_rows( 'extra_details' ) ) : ?>
						<?php while ( have_rows( 'extra_details' ) ) : the_row(); ?>
							<div class="extra-details"><?php the_sub_field( 'text' ); ?></div>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>




		</div>
	</div>
</div>




<?php get_template_part( 'template-parts/content', 'section-register'); ?>


<?php get_footer();








