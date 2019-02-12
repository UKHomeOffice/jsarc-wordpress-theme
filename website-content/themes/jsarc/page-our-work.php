<?php
/*
 * Template Name: Our Work Page
 * The template for displaying Our Work page
 *
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

.body-text ul,
.body-text ol {
	margin-top: 1em;
	margin-bottom: 1em;
	list-style-position: outside;
}

.body-text ul {
	list-style: none;
	padding-left: 2em;
}
.body-text ul li:before {
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
	list-style: none;
	padding-left: 2em;
}
ul.body-text li:before {
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
	background-image: url("<?php if ( get_field( 'hero_image' ) ) { the_field( 'hero_image' ); } ?>");	
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
	font-size: 24px;
	line-height: 32px;
	font-weight: bold;
	color: #4A4A4A;
	margin-bottom: 45px;
}

.section-intro .body-text {
	font-size: 18px;
	line-height: 28px;
	color: #4A4A4A;
	margin-bottom: 34px;
}

.section-intro .box-link {
	display: block;
	min-height: 120px;
	width: 300px;
	background-color: #982D46;
	margin-bottom: 50px;
	float: right;
	position: relative;
	padding-bottom: 50px;
}

.section-intro .box-link .box-link-headline {
	padding: 33px 25px 20px;
	color: #fff;
	font-size: 18px;
	font-weight: bold;
	line-height: 28px;
}
.section-intro .box-link .box-link-headline:after {
    content: '';
    display: inline-block;
    vertical-align: baseline;
    width: 42px;
    height: 42px;
    background-size: 42px 42px;
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/call-icon.png");
    margin-left: 15px;
}
.section-intro .box-link .box-link-subheading {
	padding: 0 25px 20px;
	color: #fff;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
}

.section-intro .box-link .box-link-content {
	padding: 0 25px 33px;
	color: #fff;
	font-size: 18px;
	line-height: 24px;
}
.section-intro .box-link .arrow {
	content: '';
	display: block;
	width: 14px;
	height: 14px;
	border: 0 solid #fff;
	border-width: 4px 4px 0 0;
	transform: rotate(45deg);
	position: absolute;
	bottom: 33px;
	right: 25px;
	
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
		width: 300px;
		min-height: 120px;
		float: none;
		margin-left: auto;
		margin-right: auto;
	}
}


.section.section-engaging {
	background-color: #1E428A;
}
.section.section-engaging .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}

.section.section-engaging .headline {
	font-size: 36px;
	line-height: 42px;
	font-weight: bold;
	color: #fff;
	margin-bottom: 45px;
}

.section.section-engaging .body-text {
	font-size: 18px;
	line-height: 28px;
	color: #fff;
	margin-bottom: 34px;
}


.section.section-mission {
	background-color: #1E4289;
	min-height: 400px;
}
.section.section-mission .section-image {
	position: absolute;
	width: 50%;
	height: 400px;
	background-size: cover;
	background-position: 50% 50%;
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
		padding-top: 400px;
		min-height: 300px;
	}
}

.section.section-mission .section-headline {
	color: #fff;
	font-size: 36px;
	line-height: 43px;
	text-align: right;
	margin-bottom: 50px;
	max-width: 400px;
	float: right;
}

@media only screen and (max-width: 1068px) {
	.section.section-mission .section-headline {
		max-width: 300px;
	}
}

.section.section-mission .button.more {
	float: right;
	color: #5EC6EB;
	border: 2px solid #5EC6EB;
}

@media only screen and (max-width: 735px) {
	.section.section-mission .button.more {
		float: none;
		margin-left: auto;
		margin-right: auto;
	}
}

@media only screen and (max-width: 735px) {
	.section.section-mission .section-headline {
		text-align: center;
		max-width: 100%;
		float: none;
	}
	.section.section-mission .button.more {
		float: none;
		margin-left: auto;
		margin-right: auto;
	}
}



.sections-wrapper {
	background-color: #E3E3E3;
	padding: 50px 0;
}
.sections-wrapper .section-headline {
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}
.section.blocks {
	margin-bottom: 50px;
}
.section.blocks .section-content {
	
}

.section.blocks .section-headline {
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}


@media only screen and (min-width: 736px) {
	.section.blocks.image-left .row > .column.large-last {
	 float: left;
	}
	.section.blocks.image-left .row > .column.large-first {
	 float: right;
	}
}

.section.blocks .section-image {
	height: 600px;
	width: 100%;
	background-size: cover;
	background-position: 50% 50%;
}


.section.blocks .block {
	background-color: #fff;
	
}
.section.blocks .block-text-content {
	display: table;
	padding: 50px;
	min-height: 500px;
}
@media only screen and (max-width: 735px) {
	.section.blocks .section-image {
		height: 400px;
	}
	.section.blocks .block-text-content {
		padding: 50px;
		min-height: 300px;
	}
}

.section.blocks .block-text-inner {
	display: table-cell;
	vertical-align: middle;
}
.section.blocks .block-headline {
	font-size: 24px;
	font-weight: bold;
	line-height: 34px;
	margin-bottom: 22px;
}
.section.blocks .block-text {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 50px;
}
.section.blocks .block-text p {
	margin-bottom: 1em;
}
.section.blocks .block-link {
	color: #01749F;
	font-size: 19px;
	line-height: 28px;
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



<?php if ( have_rows( 'header' ) ) : ?>
<section class="section section-intro">
    <div class="section-content">
        <div class="row">
            <div class="column large-8 small-12">
                <?php while ( have_rows( 'header' ) ) : the_row(); ?>
                <div class="leader-text"><?php the_sub_field( 'bold_text' ); ?></div>
                <div class="body-text"><?php the_sub_field( 'body_text' ); ?></div>
            </div>
            <?php if ( get_sub_field( 'call_for_action_show' ) == 1 ) {  // echo 'true'; ?>
            <?php if ( have_rows( 'call_for_action' ) ) : ?>
            <div class="column large-4 small-12">
                <aside class="aside">
                    <div class="aside content">
                        <?php while ( have_rows( 'call_for_action' ) ) : the_row(); ?>
                        <a class="box-link" href="<?php the_sub_field( 'url' ); ?>">
                            <h2 class="box-link-headline"><?php the_sub_field( 'headline' ); ?></h2>
                            <h3 class="box-link-subheading"><?php the_sub_field( 'subheading' ); ?></h3>
                            <p class="box-link-content"><?php the_sub_field( 'body_text' ); ?></p>
                            <span class="arrow"></span>
                        </a>
                        <?php endwhile; ?>
                    </div>
                </aside>
            </div>
            <?php endif; ?>
            <?php } ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( have_rows( 'section_engaging' ) ) : ?>
<?php if ( get_sub_field( 'section_show' ) ) : ?>
<section class="section section-engaging">
	<div class="section-content">
		<?php while ( have_rows( 'section_engaging' ) ) : the_row(); ?>
		<?php if ( have_rows( 'content' ) ) : ?>
		<?php while ( have_rows( 'content' ) ) : the_row(); ?>
		<h2 class="headline"><?php the_sub_field( 'headline' ); ?></h2>
		<div class="body-text"><?php the_sub_field( 'body_text' ); ?></div>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>
<?php endif; ?>






<?php if ( have_rows( 'section_engaging' ) ) : ?>
<section class="section section-engaging">
	<div class="section-content">
		<?php while ( have_rows( 'section_engaging' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'section_show' ) == 1 ) { // echo 'true'; ?>
		<?php if ( have_rows( 'content' ) ) : ?>
		<?php while ( have_rows( 'content' ) ) : the_row(); ?>
		<h2 class="headline"><?php the_sub_field( 'headline' ); ?></h2>
		<div class="body-text"><?php the_sub_field( 'body_text' ); ?></div>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php } ?>
		<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>




<div class="sections-wrapper">
<?php if ( have_rows( 'sections' ) ) : ?>
<?php while ( have_rows( 'sections' ) ) : the_row(); ?>
<div class="section-content">
	<h2 class="section-headline"><?php the_sub_field( 'section_headline' ); ?></h2>
</div>
<?php if ( have_rows( 'section' ) ) : ?>
<?php while ( have_rows( 'section' ) ) : the_row(); ?>
<section class="section blocks image-<?php the_sub_field( 'image_alignment' ); ?>">
	<div class="section-content">
		<div class="block row">
			<div class="column large-5 large-last small-12">
				<figure class="section-image" style="background-image: url(<?php if ( get_sub_field( 'section_image' ) ) { the_sub_field( 'section_image' ); } ?>)">
				</figure>
			</div>
			<div class="column large-7 large-first small-12">
				<div class="block-text-content">
					<div class="block-text-inner">
						<h3 class="block-headline"><?php the_sub_field( 'section_headline' ); ?></h3>
						<div class="block-text"><?php the_sub_field( 'section_body_text' ); ?></div>
						<?php if ( have_rows( 'section_links' ) ) : ?>
						<?php while ( have_rows( 'section_links' ) ) : the_row(); ?>
						<div><a class="block-link" href="<?php the_sub_field( 'link_url' ); ?>"><?php the_sub_field( 'link_text' ); ?> <?php if ( get_sub_field( 'link_hidden_text') ) { ?><span class="visuallyhidden"><?php the_sub_field( 'link_hidden_text'); ?></span><?php } ?></a></div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if ( have_rows( 'section_button' ) ) : ?>
			<?php while ( have_rows( 'section_button' ) ) : the_row(); ?>
			<a class="button more" href="<?php the_sub_field( 'button_url' ); ?>"><?php the_sub_field( 'button_text' ); ?> <?php if ( get_sub_field( 'button_hidden_text') ) { ?><span class="visuallyhidden"><?php the_sub_field( 'button_hidden_text'); ?></span><?php } ?></a>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
</section>
		
			



<?php get_template_part( 'template-parts/section', 'register'); ?>

</main>
<?php get_footer();