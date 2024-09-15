<?php
/*
 * Template Name: Visual Builder Template
 *
 * The template for displaying About page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>

<?php get_header(); ?>

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
	
.section.visualbuilder {
    /* margin-bottom: 50px; */
}

.section.visualbuilder .section-content {
    /* padding-top: 50px; */
}

.section.visualbuilder h2 {
    font-size: 24px;
    font-weight: bold;
    line-height: 34px;
    margin-bottom: 30px;
    margin-top:30px;
}

.section.visualbuilder h3 {
    font-size: 20px;
    font-weight: bold;
    line-height: 24px;
    margin-bottom: 22px;
    
}

.section.visualbuilder h4 {
    font-size: 20px;
    font-weight: bold;
    line-height: 24px;
    margin-bottom: 22px;
}

.section.visualbuilder p, .section.visualbuilder ul {
    margin-top: 24px;
    margin-bottom: 24px;
	font-size: 17px;
	line-height: 1.5;
}

.section.visualbuilder p > a {
    text-decoration: underline;
}

.section.visualbuilder img {
    max-width: 100%;
    height: auto;
}

.section.visualbuilder ul {
    list-style: none outside;
    margin-bottom: 1em;
}

.section.visualbuilder ol li {
    list-style: decimal;
    margin-bottom: 1em;
    font-size: 18px;
}

.section.visualbuilder ul li::before {
    display: inline-block;
    width: 5px;
    height: 5px;
    margin-right: 1em;
    margin-left: -1.3em;
    border-radius: 50%;
    background-color: #333;
    vertical-align: middle;
    content: "";
}

.section.visualbuilder ul {
    padding-left: 2em;
    list-style: none;
}

.section.visualbuilder ol {
    padding-left: 2em;
    list-style: none;
}


.visualbuilder a {
    text-decoration: underline;
}

.wp-block-table td {
    line-height: 2;
    padding: .6em 1em .5em 0;
    text-align: left;
    border-bottom: 1px solid #bfc1c3;
}

</style>
<?php } ?>

<nav class="breadcrumbs" aria-label="breadcrumb">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item" aria-current="page"><?php the_title(); ?></li>
		</ul>
	</div>
</nav>

<header class="section hero">
	<div class="section-content">
		<h1 class="hero-headline"><span><?php the_title(); ?></span></h1>
	</div>
</header>
	
<main class="section visualbuilder main">
<div class="section-content">
	<?php the_content(); ?> 
</div>

<?php get_template_part( 'template-parts/section', 'register'); ?>

<?php get_footer();