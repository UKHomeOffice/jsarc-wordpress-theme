<?php
/*
 * Template Name: About Page Template
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








/*---------------------------------

SECTION HEADER

----------------------------------*/

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
	line-height: 75px;
	font-weight: bold;
	color: #fff;
}
.hero .hero-headline span {
	display: inline;
	padding: 2px 0;
	box-shadow: 5px 0 0 #000, -5px 0 0 #000; 
	background-color: #000;
}

/*---------------------------------

SECTION INTRO

----------------------------------*/


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
	padding: 33px 25px;
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



/*---------------------------------

PAGE ABOUT / SECTION MISSION

----------------------------------*/
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
	background-image: url("/wp-content/themes/jsarc/img/v/about/b/jsarc-mission-illustration.png");
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
	color: #fff;
	border: 2px solid #fff;
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

/*---------------------------------

PAGE ABOUT / SECTION ENGAGE

----------------------------------*/


.section-engage .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}

.section-engage .section-headline {
	font-size: 36px;
	line-height: 42px;
	font-weight: bold;
	margin-bottom: 45px;
}
.section-engage .subheading {
font-size: 24px;
font-weight: bold;
line-height: 34px;
margin-bottom: 22px;
}
.section-engage .body-text {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 34px;
}




.sections-wrapper {
	background-color: #E3E3E3;
	padding: 50px 0;
}
.section.blocks {
	margin-bottom: 50px;
}

.sections-wrapper .section-headline {
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




.section.projects {
    background-color: #e3e3e3;
}

.section.projects .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
}

.section.projects .section-content-inner {
    max-width: 840px;
    padding-left: 20px;
    padding-right: 20px;
    margin-left: auto;
    margin-right: auto;
}

@media only screen and (max-width: 1068px) {
    .section.projects .section-content-inner {
        max-width: 692px;
    }
}

@media only screen and (max-width: 735px) {
    .section.projects .section-content-inner {
        max-width: 90%;
    }
}
.section.projects .section-headline {
    font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
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
    float: left;
    display: block;
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
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
}

.section.projects .tile-image-box {
	position: relative;
	padding-bottom: 63%;
	overflow: hidden;
}

.section.projects .tile-image {
	position: absolute;
	top: 0;
	left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    transition: transform 0.5s;
    transform: scale(1);
    transform-origin: 50% 50%;
}

.section.projects .tile:hover .tile-image {
    transform: scale(1.1);
}


.section.projects .caption-wrapper {
    padding: 25px;
}
.section.projects .tile-headline {
    color: #1e4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	margin-bottom: 20px;
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
	color: #01749F;
	font-size: 19px;
	line-height: 1;
}

.section.projects .tile-link:after {
	content: '';
	display: inline-block;
	vertical-align: middle;
	margin-left: 5px;
	width: 6px;
	height: 6px;
	transform: rotate(45deg);
	border: 1px solid #01749F;
	border-width: 0.1em 0.1em 0 0;
}

.section.projects .tile:hover .tile-link {
    text-decoration: underline;
}


.section.projects .button.more {
	width: 360px;
	min-width: 360px;
	border: 2px solid #000;
}

@media only screen and (max-width: 735px) {
	.section.projects .button.more {
		margin-left: auto;
		margin-right: auto;
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


<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item"><?php the_title(); ?></li>
		</ul>
	</div>
</nav>


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
	<div class="section-content"><h2 class="section-headline"><?php the_sub_field( 'section_heading_text' ); ?></h2></div>
	<?php if ( have_rows( 'section' ) ) : ?>
	<?php while ( have_rows( 'section' ) ) : the_row(); ?>
	<section class="section blocks image-<?php the_sub_field( 'image_alignment' ); ?>">
		<div class="section-content">
			<h2 class="section-headline"><?php the_sub_field( 'section_heading_text' ); ?></h2>
			<div class="block row">
				<div class="column large-5 large-last small-12">
				<?php if ( get_sub_field( 'section_image' ) ) { ?>
					<figure class="section-image" style="background-image: url(<?php the_sub_field( 'section_image' ); ?>)"></figure>
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
			<figure class="section-image-full-with" style="background-image:url(<?php the_sub_field( 'image' ); ?>)"></figure>
		<?php } ?>
		
		<div class="section-content">
			<h3 class="section-headline"><?php the_sub_field( 'heading' ); ?></h3>
			<h4 class="section-sub-heading"><?php the_sub_field( 'subheading' ); ?></h4>
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
							<figure class="tile-image tile2" style="background-image:url(<?php if ( get_sub_field( 'image' ) ) { the_sub_field( 'image' ); } ?>)"></figure>
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
							<figure class="tile-image tile2" style="background-image:url(<?php if ( get_sub_field( 'image' ) ) { the_sub_field( 'image' ); } ?>)"></figure>
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


























<?php get_template_part( 'template-parts/content', 'section-register'); ?>


<?php get_footer();