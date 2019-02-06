<?php
/*
 * Template Name: Legal Template
 *
 * The template for displaying About page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>

<?php get_header(); ?>
<main id="main">
<?php function add_to_head() { ?>
<style>
.hero .section-content {
	border-bottom: 1px solid #979797;
	padding-top: 50px;
	padding-bottom: 27px;
	margin-bottom: 47px;
}
.hero .hero-headline {	
	font-size: 30px;
	line-height: 38px;
	font-weight: bold;
}

.main .heading {
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
}
.main .body-text {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 50px;
}
.main .body-text ul,
.main .body-text ol,
.main .body-text p {
	margin-top: 24px;
}
.main .body-text ul,
.main .body-text ol {
	list-style-position: outside;
}
.main .section-content {
	padding-bottom: 20px;
}

.main .body-text ul {
	list-style: none;
	padding-left: 2em;
}
.main .body-text ul li:before {
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
.main .body-text ol {
	padding-left: 2em;
}
.main .body-text ol li {
	list-style-type: decimal;
}
	
</style>
<?php } ?>

<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item"><?php the_title(); ?></li>
		</ul>
	</div>
</nav>

<header class="section hero">
	<div class="section-content">
		<h1 class="hero-headline"><span><?php the_title(); ?></span></h1>
	</div>
</header>
	
<main class="section main">
    <div class="section-content">
        <?php if ( have_rows( 'text_block' ) ) : ?>
        <?php while ( have_rows( 'text_block' ) ) : the_row(); ?>
        <?php if (get_sub_field('headline')) {?>
        <h4 class="heading"><?php the_sub_field( 'headline' ); ?></h4>
        <?php } ?>
        <?php if (get_sub_field('body_text')) {?>
        <div class="body-text"><?php the_sub_field( 'body_text' ); ?></div>
        <?php } ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_template_part( 'template-parts/section', 'register'); ?>
</main>
<?php get_footer();