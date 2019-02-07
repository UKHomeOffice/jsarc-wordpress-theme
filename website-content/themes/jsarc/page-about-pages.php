<?php
/*
 * Template Name: About Us / Pages
 *
 * The template for displaying all pages under About tab
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>

<?php get_header(); ?>

<?php function add_to_head() { ?>
<style>

.post {
    padding-bottom: 75px;
}

.hero .section-content {
    max-width: 800px;
}

.hero .hero-image {
    width: 100%;
    max-width: 2560px;
    height: 300px;
    background-image: url("<?php the_field( 'hero_image' ); ?>");
    background-position: 50% 50%;
    background-size: cover;
}

.hero .hero-headline {
    margin-top: 75px;
    margin-bottom: 9px;
    padding-bottom: 27px;
    border-bottom: 1px solid #979797;
    font-size: 30px;
    font-weight: bold;
    line-height: 38px;
}

.article .section-content {
    max-width: 800px;
    margin-bottom: 40px;
    padding-bottom: 20px;
    border-bottom: 1px solid #979797;
}

.article .article-details-bar {
    margin-bottom: 50px;
    font-size: 14px;
    line-height: 28px;
}

.article .article-headline {
    padding-bottom: 20px;
    font-size: 20px;
    font-weight: bold;
    line-height: 24px;
}

.article .article-details-bar>* {
    display: inline-block;
}


.article .article-text {
    margin-bottom: 50px;
    font-size: 18px;
    line-height: 28px;
}

.article .article-text ul,
.article .article-text ol,
.article .article-text p {
    margin-bottom: 1em;
}

.article .article-text ul li {
    margin-left: 1em;
    list-style: none;
}

.article .article-text ul li:before {
    display: inline-block;
    width: 5px;
    height: 5px;
    margin-right: 1em;
    border-radius: 50%;
    background-color: #000;
    vertical-align: middle;
    content: "";
}

.article .article-text ol {
    margin-left: 1em;
}

.article .article-text li {
    margin-left: 1em;
}
</style>
<?php } ?>
<main id="main">

<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/about/">About</a></li>
			<li class="breadcrumbs-item"><?php the_title(); ?></li>
		</ul>
	</div>
</nav>
<article>
<header class="section hero">
	<figure class="hero-image"></figure>
	<div class="section-content">
		<h1 class="hero-headline"><?php the_title(); ?></h1>
	</div>
</header>


<?php if ( have_rows( 'article_text' ) ) : ?>
<?php while ( have_rows( 'article_text' ) ) : the_row(); ?>
<article class="section article">
	<div class="article-details-bar"></div>
	<div class="section-content">
		<h3 class="article-headline"><?php the_sub_field( 'headline' ); ?></h3>
		<div class="article-text"><?php the_sub_field( 'body_text' ); ?></div>
	</div>
</article>
<?php endwhile; ?>
<?php endif; ?>



<?php get_template_part( 'template-parts/section', 'register'); ?>
</article>
</main>
<?php get_footer();