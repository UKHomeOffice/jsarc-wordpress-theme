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
    background-image: url("<?php the_field( 'hero_image' ); ?>?fit=crop&w=2560&h=300");
    background-position: 50% 50%;
    background-size: cover;
}
@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-resolution: 1.5dppx), (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi) {
    .hero .hero-image {
		background-image: url("<?php the_field( 'hero_image' ); ?>?fit=crop&w=5120&h=600");
	}
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


.article .body-text {
    margin-bottom: 50px;
    font-size: 18px;
    line-height: 28px;
}

.article .body-text ul,
.article .body-text ol,
.article .body-text p {
    margin-bottom: 1em;
}

</style>
<?php } ?>
<main id="main">

<nav class="breadcrumbs" aria-label="breadcrumb">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<?php global $post;
			if ( $post->post_parent ) { ?>
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="<?php echo get_permalink( $post->post_parent ); ?>" ><?php echo get_the_title( $post->post_parent ); ?></a></li>
			<?php } ?>
			<li class="breadcrumbs-item" aria-current="page"><?php the_title(); ?></li>
		</ul>
	</div>
</nav>

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
		<h2 class="article-headline"><?php the_sub_field( 'headline' ); ?></h2>
		<div class="body-text"><?php the_sub_field( 'body_text' ); ?></div>
	</div>
</article>
<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/section', 'register'); ?>

</main>
<?php get_footer();