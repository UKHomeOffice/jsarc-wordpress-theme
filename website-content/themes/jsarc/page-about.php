<?php
/*
 * Template Name: About Us Page
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
.block-text ul,
.block-text ol {
    margin-top: 1em;
    margin-bottom: 1em;
    list-style-position: outside;
}

.block-text ul {
    padding-left: 2em;
    list-style: none;
}

.block-text ul li:before {
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

.block-text ol {
    padding-left: 2em;
}

.block-text ol li {
    list-style-type: decimal;
}

.body-text ul,
.body-text ol {
    margin-top: 1em;
    margin-bottom: 1em;
    list-style-position: outside;
}

.body-text ul {
    padding-left: 2em;
    list-style: none;
}

.body-text ul li:before {
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

.body-text ol {
    padding-left: 2em;
}

.body-text ol li {
    list-style-type: decimal;
}

ul.body-text,
ol.body-text {
    margin-top: 1em;
    margin-bottom: 1em;
    list-style-position: outside;
}

ul.body-text {
    padding-left: 2em;
    list-style: none;
}

ul.body-text li:before {
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

ol.body-text {
    padding-left: 2em;
}

ol.body-text li {
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




.section-intro .section-content {
    padding-top: 75px;
    padding-bottom: 75px;
}

.section-intro .leader-text {
    margin-bottom: 45px;
    color: #4a4a4a;
    font-size: 24px;
    font-weight: bold;
    line-height: 32px;
}

.section-intro .body-text {
    margin-bottom: 34px;
    color: #4a4a4a;
    font-size: 18px;
    line-height: 28px;
}

.section-intro .box-link {
    display: block;
    float: right;
    position: relative;
    width: 300px;
    min-height: 120px;
    margin-bottom: 50px;
    padding-bottom: 50px;
    background-color: #982d46;
}

.section-intro .box-link .box-link-headline {
    padding: 33px 25px 20px;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
}

.section-intro .box-link .box-link-headline:after {
    display: inline-block;
    width: 42px;
    height: 42px;
    margin-left: 15px;
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/call-icon.png");
    background-size: 42px 42px;
    vertical-align: baseline;
    content: "";
}

.section-intro .box-link .box-link-subheading {
    padding: 0 25px 20px;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    line-height: 24px;
}

.section-intro .box-link .box-link-content {
    padding: 33px 25px;
    color: #fff;
    font-size: 18px;
    line-height: 24px;
}

.section-intro .box-link .arrow {
    display: block;
    position: absolute;
    right: 25px;
    bottom: 33px;
    width: 14px;
    height: 14px;
    border: 0 solid #fff;
    border-width: 4px 4px 0 0;
    content: "";
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

@media only screen and (max-width: 1068px) {
    .section-intro .box-link {
        display: block;
        width: 200px;
        min-height: 205px;
    }
}

@media only screen and (max-width: 735px) {
    .section-intro .box-link {
        float: none;
        width: 300px;
        min-height: 120px;
        margin-right: auto;
        margin-left: auto;
    }
}



.section.section-mission {
    min-height: 400px;
    background-color: #1e4289;
}

.section.section-mission .section-image {
    position: absolute;
    width: 50%;
    height: 400px;
    background-image: url("/wp-content/themes/jsarc/img/v/about/b/jsarc-mission-illustration.png");
    background-position: 50% 50%;
    background-size: cover;
}



.section.section-mission .section-content {
    padding-top: 100px;
}

@media only screen and (max-width: 735px) {
    .section.section-mission .section-image {
        width: 100%;
        height: 300px;
    }
    .section.section-mission .section-content {
        min-height: 300px;
        padding-top: 400px;
    }
}

.section.section-mission .section-headline {
    float: right;
    max-width: 400px;
    margin-bottom: 50px;
    color: #fff;
    font-size: 36px;
    line-height: 43px;
    text-align: right;
}

@media only screen and (max-width: 1068px) {
    .section.section-mission .section-headline {
        max-width: 300px;
    }
}

.section.section-mission .button.more {
    float: right;
    border: 2px solid #fff;
    color: #fff;
}

@media only screen and (max-width: 735px) {
    .section.section-mission .button.more {
        float: none;
        margin-right: auto;
        margin-left: auto;
    }
}

@media only screen and (max-width: 735px) {
    .section.section-mission .section-headline {
        float: none;
        max-width: 100%;
        text-align: center;
    }
    .section.section-mission .button.more {
        float: none;
        margin-right: auto;
        margin-left: auto;
    }
}


.section-engage .section-content {
    padding-top: 75px;
    padding-bottom: 75px;
}

.section-engage .section-headline {
    margin-bottom: 45px;
    font-size: 36px;
    font-weight: bold;
    line-height: 42px;
}

.section-engage .subheading {
    margin-bottom: 22px;
    font-size: 24px;
    font-weight: bold;
    line-height: 34px;
}

.section-engage .body-text {
    margin-bottom: 34px;
    font-size: 18px;
    line-height: 28px;
}




.sections-wrapper {
    padding: 50px 0;
    background-color: #e3e3e3;
}

.section.blocks {
    margin-bottom: 50px;
}

.sections-wrapper .section-headline {
    margin-bottom: 50px;
    font-size: 36px;
    font-weight: bold;
    line-height: 42px;
}

@media only screen and (min-width: 736px) {
    .section.blocks.image-left .row>.column.large-last {
        float: left;
    }
    .section.blocks.image-left .row>.column.large-first {
        float: right;
    }
}

.section.blocks .section-image {
    width: 100%;
    height: 600px;
    background-position: 50% 50%;
    background-size: cover;
}


.section.blocks .block {
    background-color: #fff;
}

.section.blocks .block-text-content {
    display: table;
    min-height: 500px;
    padding: 50px;
}

@media only screen and (max-width: 735px) {
    .section.blocks .section-image {
        height: 400px;
    }
    .section.blocks .block-text-content {
        min-height: 300px;
        padding: 50px 20px;
    }
}

.section.blocks .block-text-inner {
    display: table-cell;
    vertical-align: middle;
}

.section.blocks .block-headline {
    margin-bottom: 22px;
    font-size: 24px;
    font-weight: bold;
    line-height: 34px;
}

.section.blocks .block-text {
    margin-bottom: 50px;
    font-size: 18px;
    line-height: 28px;
}

.section.blocks .block-text p {
    margin-bottom: 1em;
}

.section.blocks .block-link {
    color: #1155a4;
    font-size: 19px;
    line-height: 28px;
}
.section.blocks .block-link:after {
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

.section.blocks .block-link:hover {
	text-decoration: underline;
}

.section.projects {
    background-color: #e3e3e3;
}

.section.projects .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
}

.section.projects .section-content-inner {
    max-width: 840px;
    margin-right: auto;
    margin-left: auto;
    padding-right: 20px;
    padding-left: 20px;
}

@media only screen and (max-width: 1068px) {
    .section.projects .section-content-inner {
        max-width: 692px;
    }
}

@media only screen and (max-width: 735px) {
    .section.projects .section-content-inner {
        max-width: 100%;
        padding-right: 0;
		padding-left: 0;
    }
}

.section.projects .section-headline {
    margin-bottom: 50px;
    font-size: 36px;
    font-weight: bold;
    line-height: 42px;
}

@media only screen and (max-width: 735px) {
    .section.projects .section-headline {
        text-align: center;
    }
}


.section.projects .tiles-list {
    display: block;
    overflow: hidden;
    width: 100%;
    margin-bottom: 62px;
}

.section.projects .tile-item {
    display: block;
    float: left;
    width: 46%;
    margin-left: 5%;
    background-color: #fff;
}

.section.projects .tile-item:first-child {
    margin-left: 0;
}

.section.projects .tile-item .tile {
    display: block;
}



@media only screen and (max-width: 735px) {
    .section.projects .tile-item,
    .section.projects .tile-item:first-child {
        float: none;
        width: 300px;
        margin-right: auto;
        margin-bottom: 40px;
        margin-left: auto;
    }
}

.section.projects .tile-image-box {
    overflow: hidden;
    position: relative;
    padding-bottom: 63%;
}

.section.projects .tile-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
    transition: transform 0.5s, -webkit-transform 0.5s;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
}

.section.projects .tile:hover .tile-image {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}


.section.projects .caption-wrapper {
    padding: 25px;
}

.section.projects .tile-headline {
    margin-bottom: 20px;
    color: #1e4289;
    font-size: 20px;
    font-weight: bold;
    line-height: 24px;
}

.section.projects .tile-headline {
    min-height: 130px;
}

@media only screen and (max-width: 1024px) {
    .section.projects .tile-headline {
        min-height: 100px;
    }
}

@media only screen and (max-width: 735px) {
    .section.projects .tile-headline {
        min-height: 100px;
    }
}

.section.projects .tile-link {
    color: #1155a4;
    font-size: 19px;
    line-height: 1;
}

.section.projects .tile-link:after {
    display: inline-block;
    width: 6px;
    height: 6px;
    margin-left: 5px;
    border: 1px solid #1155a4;
    border-width: 0.1em 0.1em 0 0;
    vertical-align: middle;
    content: "";
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

.section.projects .tile:hover .tile-link {
    text-decoration: underline;
}


.section.projects .button.more {
    border: 2px solid #000;
}

@media only screen and (max-width: 735px) {
    .section.projects .button.more {
        margin-right: auto;
        margin-left: auto;
    }
}

</style>
<?php } ?>
<main id="main">
<nav class="breadcrumbs" aria-label="breadcrumb">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item" aria-current="page"><?php the_title(); ?></li>
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

<?php if ( have_rows( 'header' ) ) : ?>
<?php while ( have_rows( 'header' ) ) : the_row(); ?>
<section class="section section-intro">
	<div class="section-content">
		<div class="row">
			<?php if ( get_sub_field( 'call_for_action_show' ) == 1 ) { // echo 'true';  ?>
			<div class="column large-8 small-12">
			<?php } else { // echo 'false';  ?>
		 	<div class="column large-12 small-12">
			<?php } ?>
				<div class="leader-text"><?php the_sub_field( 'bold_text' ); ?></div>
				<div class="body-text"><?php the_sub_field( 'body_text' ); ?></div>
			</div>
			<?php if ( get_sub_field( 'call_for_action_show' ) == 1 ) { // echo 'true';  ?>
			<?php if ( have_rows( 'call_for_action_blocks' ) ) : ?>
			<?php while ( have_rows( 'call_for_action_blocks' ) ) : the_row(); ?>
			<div class="column large-4 small-12">
				<aside class="aside">
					<div class="aside content">
						<a class="box-link" href="<?php the_sub_field( 'url' ); ?>" style="background-color: <?php the_sub_field( 'background_colour' ); ?>">
							<div class="box-link-content"><?php the_sub_field( 'text' ); ?></div><span class="arrow"></span>
						</a>
					</div>
				</aside>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php } ?>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<!--
<?php if ( have_rows( 'section_mission' ) ) : ?>
<section class="section section-mission">
	<?php while ( have_rows( 'section_mission' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'image' ) ) { ?>
			<figure class="section-image" style="background-image: url(<figure class="section-image"></figure>
		<?php } ?>
		<div class="section-content">
			<div class="row">
				<div class="column large-6 large-push-6 small-12 small-push-0">
					<h2 class="section-headline"><?php the_sub_field( 'headline' ); ?></h2>
			<?php if ( have_rows( 'button' ) ) : ?>
				<?php while ( have_rows( 'button' ) ) : the_row(); ?>
					<a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?> <?php if ( get_sub_field( 'hidden_text') ) { ?><span class="visuallyhidden"><?php the_sub_field( 'hidden_text'); ?></span><?php } ?></a>
				<?php endwhile; ?>
			<?php endif; ?>
				</div>
			</div> 
		</div>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php if ( have_rows( 'section_engage' ) ) : ?>
	<?php while ( have_rows( 'section_engage' ) ) : the_row(); ?>
<section class="section section-engage">
	<div class="section-content">
		<h2 class="section-headline"><?php the_sub_field( 'section_heading_text' ); ?></h2>
		<?php if ( have_rows( 'paragraph_' ) ) : ?>
			<?php while ( have_rows( 'paragraph_' ) ) : the_row(); ?>
				<?php if (get_sub_field('heading')) { ?>
				<h3 class="subheading"><?php the_sub_field( 'heading' ); ?></h3>
				<?php } ?>	
				<div class="body-text"><?php the_sub_field( 'body_text' ); ?></div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
	<?php endwhile; ?>
<?php endif; ?>
-->

<?php if ( have_rows( 'sections' ) ) : ?>
<?php while ( have_rows( 'sections' ) ) : the_row(); ?>
<div class="sections-wrapper">
	<div class="section-content">
		<h2 class="section-headline"><?php the_sub_field( 'section_heading_text' ); ?></h2>
	</div>
	<?php if ( have_rows( 'section' ) ) : ?>
	<?php while ( have_rows( 'section' ) ) : the_row(); ?>
	<section class="section blocks image-<?php the_sub_field( 'image_alignment' ); ?>">
		<div class="section-content">
			<h2 class="section-headline"><?php the_sub_field( 'section_heading_text' ); ?></h2>
			<div class="block row">
				<div class="column large-5 large-last small-12">
				<?php if ( get_sub_field( 'section_image' ) ) { ?>
					<figure class="section-image" style="background-image: url(<?php the_sub_field( 'section_image' ); ?>?fit=crop&w=1280&h=&h=1200)"></figure>
				<?php } ?>
				</div>
				<div class="column large-7 large-first small-12">
					<div class="block-text-content">
						<div class="block-text-inner">
							<h3 class="block-headline"><?php the_sub_field( 'headline' ); ?></h3>
							<div class="block-text"><?php the_sub_field( 'body_text' ); ?></div>
							<?php if ( have_rows( 'links' ) ) : ?>
							<?php while ( have_rows( 'links' ) ) : the_row(); ?>
							<div><a class="block-link" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?> <?php if ( get_sub_field( 'hidden_text') ) { ?><span class="visuallyhidden"><?php the_sub_field( 'hidden_text'); ?></span><?php } ?></a></div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'section_case_study' ) ) : ?>
<?php while ( have_rows( 'section_case_study' ) ) : the_row(); ?>
<section class="section section-casestudies">
		<?php if ( get_sub_field( 'image' ) ) { ?>
			<figure class="section-image-full-with" style="background-image:url(<?php the_sub_field( 'image' ); ?>?fit=crop&w=5120&h=&h=1000)"></figure>
		<?php } ?>
		
		<div class="section-content">
			<h2 class="section-headline"><?php the_sub_field( 'heading' ); ?></h2>
			<h3 class="section-sub-heading"><?php the_sub_field( 'subheading' ); ?></h3>
			<?php if ( have_rows( 'button' ) ) : ?>
			<?php while ( have_rows( 'button' ) ) : the_row(); ?>
				<a class="button more" href="<?php the_sub_field( 'button_url' ); ?>"><?php the_sub_field( 'button_text' ); ?> <?php if ( get_sub_field( 'button_hidden_text') ) { ?><span class="visuallyhidden"><?php the_sub_field( 'button_hidden_text'); ?></span><?php } ?></a>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'projects_tiles' ) ) : ?>
	<?php while ( have_rows( 'projects_tiles' ) ) : the_row(); ?>
		
<section class="section projects">
	<div class="section-content">
		<?php if ( have_rows( 'tiles' ) ) : ?>
			<?php while ( have_rows( 'tiles' ) ) : the_row(); ?>
		<div class="section-content-inner">
			<ul class="tiles-list">
			<?php if ( have_rows( 'first' ) ) : ?>
				<?php while ( have_rows( 'first' ) ) : the_row(); ?>
				<li class="tile-item">
					<a class="tile" href="<?php the_sub_field( 'link_url' ); ?>">
						<div class="tile-image-box">
							<figure class="tile-image" style="background-image:url(<?php if ( get_sub_field( 'image' ) ) { the_sub_field( 'image' ); } ?>?fit=crop&w=773&h=&h=486)"></figure>
						</div>
						<div class="caption-wrapper">
							<h3 class="tile-headline"><?php the_sub_field( 'headline' ); ?></h3>
							<?php if ( get_sub_field( 'link_text' ) ) { ?>
							<span class="tile-link"><?php the_sub_field( 'link_text' ); ?></span>
							<?php } ?>
						</div>
					</a>
				</li>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'last' ) ) : ?>
				<?php while ( have_rows( 'last' ) ) : the_row(); ?>
				<li class="tile-item">
					<a class="tile" href="<?php the_sub_field( 'link_url' ); ?>">
						<div class="tile-image-box">
							<figure class="tile-image" style="background-image:url(<?php if ( get_sub_field( 'image' ) ) { the_sub_field( 'image' ); } ?>?fit=crop&w=773&h=&h=486)"></figure>
						</div>
						<div class="caption-wrapper">
							<h3 class="tile-headline"><?php the_sub_field( 'headline' ); ?></h3>
							<?php if ( get_sub_field( 'link_text' ) ) { ?>
							<span class="tile-link"><?php the_sub_field( 'link_text' ); ?></span>
							<?php } ?>
						</div>
					</a>
				</li>
				<?php endwhile; ?>
			<?php endif; ?>
			</ul>
		</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if ( have_rows( 'button' ) ) : ?>
			<?php while ( have_rows( 'button' ) ) : the_row(); ?>
				<a class="button more" href="<?php the_sub_field( 'button_url' ); ?>"><?php the_sub_field( 'button_text' ); ?> <?php if ( get_sub_field( 'button_hidden_text') ) { ?><span class="visuallyhidden"><?php the_sub_field( 'button_hidden_text'); ?></span><?php } ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
</section>
			
	<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/section', 'register'); ?>

</main>
<?php get_footer();