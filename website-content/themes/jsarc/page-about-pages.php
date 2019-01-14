<?php
/*
 * Template Name: Pages under About tab
 * The template for displaying all pages under About tab
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
 ?>
<style>
.post {
	padding-bottom: 75px;
}

.hero .section-content {
	max-width: 800px;
}

.hero .hero-image {
	max-width: 2560px;
	width: 100%;
	height: 300px;
	background-size: cover;
	background-position: 50% 50%;
	background-image: url("<?php the_field( 'hero_image' ); ?>");
}

.hero .hero-headline {
	margin-top: 75px;
	font-size: 30px;
	line-height: 38px;
	font-weight: bold;
	padding-bottom: 27px;
	border-bottom: 1px solid #979797;
	margin-bottom: 9px;
}

.article .section-content {
	max-width: 800px;
	border-bottom: 1px solid #979797;
	padding-bottom: 20px;
	margin-bottom: 40px;
}

.article .article-details-bar {
	font-size: 14px;
	line-height: 28px;
	margin-bottom: 50px;
}

.article .article-headline {
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	padding-bottom: 20px;
}

.article .article-details-bar > * {
	display: inline-block;
}


.article .article-text {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 50px;
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
	content: '';
	display: inline-block;
	vertical-align: middle;
	width: 5px;
	height: 5px;
	background-color: #000;
	border-radius: 50%;
	margin-right: 1em;
}

.article .article-text ol {
	margin-left: 1em;
}
.article .article-text li {
   margin-left: 1em;
 }





</style>
<?php
get_header();
?>
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
	
	<section class="section article">
		<div class="article-details-bar"></div>
		<div class="section-content">
		
			<?php if ( have_rows( 'article_text' ) ) : ?>
				<?php while ( have_rows( 'article_text' ) ) : the_row(); ?>
					<h3 class="article-headline"><?php the_sub_field( 'headline' ); ?></h3>
					<div class="article-text"><?php the_sub_field( 'body_text' ); ?></div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		</div>
	</section>
	
</article>

<?php get_template_part( 'template-parts/content', 'section-register'); ?>



<?php
get_footer();