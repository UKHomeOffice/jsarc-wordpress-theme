<?php
/*
 * Template Name: Nat. Sec. Priorities Page
 *
 * The template for displaying National Security Priorities Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>

<?php get_header(); ?>

<?php function add_to_head() { ?>
<style>
<style>
.hero-body-text ul,
.hero-body-text ol {
	margin-top: 1em;
	margin-bottom: 1em;
	list-style-position: outside;
}

.hero-body-text ul {
	list-style: none;
	padding-left: 2em;
}
.hero-body-text ul li:before {
	content: "";
	display: inline-block;
	vertical-align: middle;
	width: 5px;
	height: 5px;
	background-color: #333;
	border-radius: 50%;
	margin-left: -1.3em;
	margin-right: 1em;
}
.hero-body-text ol {
	padding-left: 2em;
}
.hero-body-text ol li {
	list-style-type: decimal;
}

.block-text ul,
.block-text ol {
	margin-top: 1em;
	margin-bottom: 1em;
	list-style-position: outside;
}

.block-text ul {
	list-style: none;
	padding-left: 2em;
}
.block-text ul li:before {
	content: "";
	display: inline-block;
	vertical-align: middle;
	width: 5px;
	height: 5px;
	background-color: #333;
	border-radius: 50%;
	margin-left: -1.3em;
	margin-right: 1em;
}
.block-text ol {
	padding-left: 2em;
}
.block-text ol li {
	list-style-type: decimal;
}

.hero .hero-image {
	position: absolute;
	z-index: -1;
	max-width: 2560px;
	width: 100%;
	height: 300px;
	background-size: cover;
	background-position: 80% 50%;
	background-image: url("<?php if ( get_field( 'hero_image' ) ) { the_field( 'hero_image' ); } ?>?fit=crop&w=2560&h=300");	
}

@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-resolution: 1.5dppx), (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi) {
    .hero .hero-image {
		background-image: url("<?php if ( get_field( 'hero_image' ) ) { the_field( 'hero_image' ); } ?>?fit=crop&w=5120&h=600");	
	}
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
	line-height: 1.27;
	font-weight: bold;
	color: #fff;
}
.hero .hero-headline span {
	display: inline;
	padding: 2px 0;
	box-shadow: 5px 0 0 #000, -5px 0 0 #000; 
	background-color: #000;
}



.section.heading {
	background-color: #fff;
	margin-bottom: 50px;
}
.section.heading .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}
.section.heading .hero-heading-text {
	color: #4A4A4A;
	font-size: 22px;
	line-height: 34px;
	font-weight: bold;
	margin-bottom: 50px;
}
.section.heading .hero-body-text {
	color: #4A4A4A;
	font-size: 18px;
	line-height: 28px
}
.section.heading .hero-body-text strong {
	 color: #000;
}
.section.heading .hero-body-text p {
	margin-bottom: 1em;
}
.section.heading .hero-body-text p:last-child {
	margin-bottom: 0;
}






.sections-wrapper {
	background-color: #E3E3E3;
	padding: 50px 0;
}
.section.priority {
	margin-bottom: 50px;
}
.section.priority .section-content {
	
}
@media only screen and (min-width: 736px) {
	.section.priority.image-left .row > .column.large-last {
	 float: left;
	}
	.section.priority.image-left .row > .column.large-first {
	 float: right;
	}
}

.section.priority .section-image {
	height: 600px;
	width: 100%;
	background-size: cover;
	background-position: 50% 50%;
}


.section.priority .block {
	background-color: #fff;
	
}
.section.priority .block-text-content {
	display: table;
	padding: 50px;
	min-height: 500px;
}
@media only screen and (max-width: 735px) {
	.section.priority .section-image {
		height: 400px;
	}
	.section.priority .block-text-content {
		padding: 50px;
		min-height: 300px;
	}
}

.section.priority .block-text-inner {
	display: table-cell;
	vertical-align: middle;
}
.section.priority .block-headline {
	font-size: 24px;
	font-weight: bold;
	line-height: 34px;
	margin-bottom: 22px;
}
.section.priority .block-text {
	font-size: 18px;
	line-height: 28px;
}
.section.priority .block-text p {
	margin-bottom: 1em;
}
.section.priority .block-link {
	color: #1155a4;
	font-size: 19px;
	line-height: 28px;
}
.section.priority .block-link:after {
	display: inline-block;
	width: 6px;
	height: 6px;
	margin-left: 2px;
	border: 1px solid #1155a4;
	border-width: 0.1em 0.1em 0 0;
	vertical-align: middle;
	content: "";
	-webkit-transform: rotate(45deg);
	transform: rotate(45deg);
}
.section.priority .block-link:hover {
	text-decoration: underline;
}


.section.engaging {
	background-color: #1E4289;
	overflow: hidden;
	position: relative;
}

.section.engaging:before {
	background-color: #fff;
	content: '';
	display: block;
	position: absolute;
	width: 50%;
	right: 0;
	height: 100%;
}





.section.engaging .section-content {
	padding-top: 70px;
	padding-bottom: 70px;
}


.section.engaging .blue .column-content {
	color: #fff;
	padding-right: 50px;
}

.section.engaging .white .column-content {
	padding-left: 50px;
}

@media only screen and (max-width: 735px) {
	.section.engaging .section-content {
		width: 100%;
		padding-bottom: 0;
	}
	.section.engaging:before {
		display: none;
	}
	.section.engaging .blue .column-content {
		padding-bottom: 50px;
		padding-right: 0;
		width: 90%;
		margin-left: auto;
		margin-right: auto;
	}
	.section.engaging .white {
		background-color: #fff;
	}
	.section.engaging .white .column-content {
		padding-top: 50px;
		padding-bottom: 75px;
		padding-left: 0;
		width: 90%;
			margin-left: auto;
			margin-right: auto;
	}
	 
}


.section.engaging .section-headline {
	font-size: 36px;
	line-height: 53px;
	margin-bottom: 30px;
}

.section.engaging .section-body-text {
	margin-bottom: 50px;
}

.section.engaging .section-body-text > *,
.section.engaging .body-text-second-column > * {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 1em;
}
.section.engaging .section-body-text > *:last-child,
.section.engaging .body-text-second-column > *:last-child {
	margin-bottom: 0;
}

.section.engaging .body-text-second-column {
	color: #4A4A4A;
}

.section.engaging .button.more {
	border: 2px solid #fff;
	font-size: 19px;
}




</style>
<?php } ?>
<main id="main">
<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item"><?php the_title(); ?></li>
		</ul>
	</div>
</nav>

<header class="section hero">
	<figure class="hero-image"></figure>
	<div class="section-content">
		<div class="headline-wrapper">
			<h1 class="hero-headline"><span><?php the_title(); ?></span></h1>
		</div>
	</div>
</header>

<section class="section heading">
	<div class="section-content">
		<h3 class="hero-heading-text"><?php the_field( 'hero_heading_text' ); ?></h3>
		<div class="hero-body-text"><?php the_field( 'hero_body_text' ); ?></div>
	</div>
</section>
	
<div class="sections-wrapper">
<?php if ( have_rows( 'sections' ) ) : ?>
<?php while ( have_rows( 'sections' ) ) : the_row(); ?>
<section class="section priority image-<?php the_sub_field( 'image_alignment_' ); ?>">
	<div class="section-content">
		<div class="block row">
			<div class="column large-5 large-last small-12">
				<?php if ( get_sub_field( 'section_image' ) ) { ?>
				<figure class="section-image" style="background-image: url(<?php the_sub_field( 'section_image' ); ?>?fit=crop&w=1280&h=&h=1200)">
				</figure>
				<?php } ?>
			</div>
			<div class="column large-7 large-first small-12">
				<div class="block-text-content">
					<div class="block-text-inner">
						<h3 class="block-headline">
							<?php if ( have_rows( 'section' ) ) : ?>
							<?php while ( have_rows( 'section' ) ) : the_row(); ?>
							<?php the_sub_field( 'section_headline' ); ?>
							<?php endwhile; ?>
							<?php endif; ?>
						</h3>
						<div class="block-text">
							<?php the_sub_field( 'section_body_text' ); ?>
						</div>
						<?php if ( have_rows( 'section_links' ) ) : ?>
						<?php while ( have_rows( 'section_links' ) ) : the_row(); ?>
						<?php if ( have_rows( 'section_link' ) ) : ?>
						<?php while ( have_rows( 'section_link' ) ) : the_row(); ?>
						<div><a class="block-link" href="<?php the_sub_field( 'section_link_url' ); ?>"><?php the_sub_field( 'section_link_text' ); ?> <?php if ( get_sub_field( 'section_link_hidden_text') ) { ?><span class="visuallyhidden"><?php the_sub_field( 'section_link_hidden_text'); ?></span><?php } ?></a></div>
						<?php endwhile; ?>
						<?php endif; ?>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
</div>	
		
		
<?php if ( have_rows( 'section_engaging' ) ) : ?>
<?php while ( have_rows( 'section_engaging' ) ) : the_row(); ?>
<section class="section engaging">
	<div class="section-content">
	<div class="row">
		<div class="column large-6 small-12 blue">
			<div class="column-content">
				<h3 class="section-headline"><?php the_sub_field( 'section_headline_' ); ?></h3>
				<div class="section-body-text"><?php the_sub_field( 'section_body_text' ); ?></div>
				<?php if ( have_rows( 'section_button' ) ) : ?>
				<?php while ( have_rows( 'section_button' ) ) : the_row(); ?>
				<a class="button more" href="<?php the_sub_field( 'button_url' ); ?>"><?php the_sub_field( 'button_text' ); ?> <?php if ( get_sub_field( 'button_hidden_text') ) { ?><span class="visuallyhidden"><?php the_sub_field( 'button_hidden_text'); ?></span><?php } ?></a>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="column large-6 small-12 white">
			<div class="column-content">
				<div class="body-text-second-column">
					<?php the_sub_field( 'section_body_text_second_column' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
		
		
		
			
	

<?php get_template_part( 'template-parts/section', 'register'); ?>


</main>

<?php function add_to_footer() { ?>
<script>
document.addEventListener('DOMContentLoaded',function() {
	var a = document.querySelectorAll('.text-field-wrapper');
    Array.prototype.forEach.call(a, function(el, i){
    	var b = el.querySelector('.text-field');
		b.addEventListener('change', function() {
			if (b && b.value) {
				el.classList.add('active');
			}
			else {
				el.classList.remove('active');
			}
		});
	});
});
</script>
<?php } ?>

<?php get_footer();