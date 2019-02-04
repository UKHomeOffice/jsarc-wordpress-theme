<?php
/*
 * Template Name: Homeage Template
 * The template for displaying Home page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>

<?php get_header(); ?>
<?php
function my_doc_head() { ?>
<!--
  // Location of our stylesheet
	//   For me, this shared a plugin
	//   with this code
	$file_url = plugins_url(
		'/src/lalala.css', // File name
		__FILE__ // Magic PHP constant that means
					// the "current file"
	);
	// Actually load up the stylesheet
	wp_enqueue_style( 
		'sp_sytlesheet', // A "name" for our file
		$file_url // Location variable
	);
	-->
	<style>

.section {
    position: relative;
    overflow: hidden;
    max-width: 100%;
}



.section-content {
    max-width: 980px;
    margin-right: auto;
    margin-left: auto;
}



@media only screen and (max-width: 1068px) {
    .section-content {
        max-width: 692px;
    }
}

@media only screen and (max-width: 735px) {
    .section-content {
        max-width: 90%;
    }
}



.section.section-hero {
	background-color: #000;
}

.section.section-hero .section-content {
    padding-top: 100px;
    padding-bottom: 100px;
}
.section.section-hero .intro-wrapper {
    display: table;
    width: 100%;
    height: 80vh;
    min-height: 568px;
}

.section.section-hero .intro-wrapper .intro {
     display: table-cell;
     vertical-align: middle;
}






.section.section-hero .hero-image {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 50% 0;
    background-image: url(<?php if ( have_rows( 'section_hero' ) ) : ?>
	<?php while ( have_rows( 'section_hero' ) ) : the_row(); ?>
		<?php if ( have_rows( 'content' ) ) : ?>
			<?php while ( have_rows( 'content' ) ) : the_row(); ?>
				<?php if ( get_sub_field( 'hero_image' ) ) { ?>
					<img src="<?php the_sub_field( 'hero_image' ); ?>" />
				<?php } ?>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>);
    position: absolute;
    background-repeat: no-repeat;
    background-image: url();
    opacity: 0.5;
}

@media only screen and (max-width: 1068px) {
	.section.section-hero .hero-image {
		background-image: url();
	}
}

@media only screen and (max-width: 735px) {
	.section.section-hero .hero-image {
		background-image: url();
	}
}


.section.section-hero .hero-headline {
    color: #fff;
    font-size: 64px;
    font-weight: bold;
    line-height: 75px;
    text-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
    margin-bottom: 36px;
}




.section.section-hero .hero-intro {
    color: #fff;
    font-size: 19px;
    line-height: 28px;
    text-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
    margin-bottom: 40px;
    max-width: 676px;
}

@media only screen and (max-width: 1068px) {
    .section.section-hero .hero-headline {
        max-width: 500px;
        font-size: 50px;
        line-height: 1.1;
        margin-bottom: 25px;
    }
    .section.section-hero .hero-intro {
        max-width: 450px;
    }
}

.section.section-hero .button.more  {
    background-color: #fff;
}




.section.section-hero .hero-headline {
    opacity: 0;
    -webkit-animation: headline-reveal 1s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    animation: headline-reveal 1s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    will-change: transform;
}

.section.section-hero .hero-intro,
.section.section-hero .more  {
    opacity: 0;
    -webkit-animation: headline-reveal 1s 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    animation: headline-reveal 1s 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    will-change: transform;
}



@keyframes headline-reveal {
    0% {
        opacity: 0;
        -webkit-transform: translateY(25px);
        transform: translateY(25px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
    }
}




.section.section-innovation-call {
    background-color: #982d46;
}
.section.section-innovation-call .section-content {
    padding-top: 50px;
    padding-bottom: 50px;
}
.section.section-innovation-call .eyebrow {
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    color: #fff;
    margin-bottom: 10px;
}
.section.section-innovation-call .eyebrow:after {
    content: '';
    display: inline-block;
    vertical-align: baseline;
    width: 42px;
    height: 42px;
    background-size: 42px 42px;
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/call-icon.png");
    margin-left: 15px;
}


.section.section-innovation-call .headline {
    color: #fff;
    max-width: 500px;
    font-size: 36px;
    font-weight: bold;
    line-height: 38px;
    margin-bottom: 20px;
}
.section.section-innovation-call .body-text {
    color: #fff;
	max-width: 654px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	float: left;
	margin-bottom: 40px;

}
@media only screen and (max-width: 735px) {
	.section.section-innovation-call .body-text {
		float: none;
	}
}

.section.section-innovation-call .button.more {
    float: right;
    border: 2px solid #fff !important;
    color: #fff;
    margin-bottom: 76px;
}


.section.section-what-we-do {
    background-color: #047989;
}

.section.section-what-we-do .section-content {
    padding-top: 75px;
    padding-bottom: 75px;
}

.section.section-what-we-do .headline {
	max-width: 655px;
	color: #fff;
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 40px;
}

.section.section-what-we-do .body-text {
    max-width: 800px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	margin-bottom: 30px;
}
.section.section-what-we-do .body-text > * {
    margin-bottom: 30px;
}

@media only screen and (max-width: 1068px) {
    .section.section-what-we-do .body-text {
        max-width: 800px;
    }
}

.section.section-what-we-do .button.more {
    border: 2px solid #fff;
    color: #fff;
}


.section.section-video {
    background-color: #000;
}
.section.section-video .section-content {
    max-width: 2560px;
    width: auto !important;
}

@media only screen and (max-width: 1068px) {
    .section.section-video .section-content {
       max-width: 2560px;
        width: auto !important;
    }
}

@media only screen and (max-width: 735px) {
    .section.section-video .section-content {
        max-width: 100%;
         width: auto !important;
    }
}

.section.section-video .section-image {
    width: 100%;
    height: 400px;
    background-size: cover;
    background-position: 50% 0;
    background-image: url();
    position: relative;
}

@media only screen and (max-width: 1068px) {
	.section.section-video .section-image {
		background-image: url();
	}
}

@media only screen and (max-width: 735px) {
	.section.section-video .section-image {
		background-image: url();
	}
}




.section.section-video .section-image:after {
    content: '';
    display: block;
    position: absolute;
    bottom: 0;
    right: 0;
    height: 100%;
    width: 50px;
    background-image: linear-gradient(to right, transparent 0%, #000 100%);

}

@media only screen and (max-width: 735px) {
    .section.section-video .section-image:after {
        height: 50px;
        width: 100%;
        background-image: linear-gradient(to bottom, transparent 0%, #000 100%);
    }
}


.section.section-video .content-wrapper {
    padding-top: 100px;
    max-width: 500px;
    padding-right: 20px;
}

.section.section-video .headline {
    color: #fff;
    font-size: 36px;
	line-height: 42px;
	max-width: 500px;
}
.section.section-video .speaker {
    color: #fff;
    font-size: 20px;
    line-height: 42px;
    margin-bottom: 60px;
}
.section.section-video .button.more {
    color: #fff;
    border: 2px solid #fff;
}

@media only screen and (max-width: 735px) {
    .section.section-video .content-wrapper {
        margin-top: 360px;
        padding-bottom: 60px;
    }
}



.section.section-benefits {
    background-color: #e3e3e3;
}
.section.section-benefits .headline {
    font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}

.section.section-benefits .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
    max-width: 1000px;
    padding-left: 20px;
    padding-right: 20px;
}

.section.section-benefits .section-headline {
    font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}

@media only screen and (max-width: 1068px) {
    .section-content {
        max-width: 692px;
    }
}

@media only screen and (max-width: 735px) {
    .section-content {
        max-width: 90%;
    }
    .section.section-benefits .section-headline {
        text-align: center;
    }
}


.section.section-benefits .tiles-list {
    display: block;
    overflow: hidden;
    width: 100%;
    margin-bottom: 62px;
}
.section.section-benefits .list-item {
    float: left;
    display: block;
    width: 30%;
    margin-left: 5%;
    background-color: #fff;
}

.section.section-benefits .list-item .link {
    display: block;
    overflow: hidden;
    min-height: 400px;
}
@media only screen and (max-width: 1024px) {
	.section.section-benefits .list-item .link {
    	min-height: 440px;
	}
}

@media only screen and (max-width: 735px) {
	.section.section-benefits .list-item .link {
    	min-height: auto;
	}
}

.section.section-benefits .list-item:first-child {
    margin-left: 0;
}

@media only screen and (max-width: 735px) {
    .section.section-benefits .list-item,
    .section.section-benefits .list-item:first-child {
        float: none;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
}


.section.section-benefits .image-box {
	position: relative;
	padding-bottom: 63%;
	overflow: hidden;
}

.section.section-benefits .image {
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

.section.section-benefits .list-item a.link:hover .image {
    transform: scale(1.1);
}


.section.section-benefits .text-wrapper {
    padding: 25px;
}
.section.section-benefits .headline {
    color: #1e4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	margin-bottom: 20px;
}

.section.section-benefits .text {
    font-size: 18px;
	line-height: 24px;
	margin-bottom: 1em;
}

.section.section-benefits .link-text {
	color: #01749F;
	font-size: 19px;
	line-height: 1;
}

.section.section-benefits .link-text:after {
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

.section.section-benefits .list-item .link:hover .link-text {
    text-decoration: underline;
}


.section.section-casestudy {
    height: 400px;
    background-color: #000;
}

.section.section-casestudy .section-image:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
	height: 100%;
	width: 100%;
	background: linear-gradient(to right, rgba(0,0,0,.9) 0%, rgba(0,0,0,0) 100%);
}

.section.section-casestudy .section-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 50% 50%;
}


.section.section-casestudy .section-content {
    padding-top: 83px;
    padding-bottom: 81px;
    position: relative;
    z-index: 1;
}
.section.section-casestudy .eyebrow {
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    color: #fff;
    margin-bottom: 10px;
}

.section.section-casestudy .headline {
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    line-height: 38px;
    margin-bottom: 20px;
}
.section.section-casestudy .body-text {
    color: #fff;
	max-width: 654px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	margin-bottom: 50px;

}

.section.section-casestudy .button.more {
    background-color: #fff;
    color: #000;
}
</style>
 
<?php } ?>



<!--
<?php if ( get_sub_field( 'hidden_text' ) ) { ?><span class="visuallyhidden"><?php the_sub_field( 'hidden_text' ); ?><?php } ?>
-->
<?php if ( have_rows( 'section_hero' ) ) : ?>
	<?php while ( have_rows( 'section_hero' ) ) : the_row(); ?>
	<?php if ( get_sub_field( 'section_show' ) == 1 ) { ?>
		<?php if ( have_rows( 'content' ) ) : ?>
			<?php while ( have_rows( 'content' ) ) : the_row(); ?>
	<section class="section section-hero">
		<?php if ( get_sub_field( 'hero_image' ) ) { ?>
			<figure class="hero-image"></figure>
		<?php } ?>
		<div class="section-content">
			<div class="intro-wrapper">
				<div class="intro">
		<h1 class="hero-headline"><?php the_sub_field( 'headline' ); ?></h1>
		<p class="hero-intro"><?php the_sub_field( 'intro' ); ?></p>
		<?php if ( have_rows( 'button' ) ) : ?>
			<?php while ( have_rows( 'button' ) ) : the_row(); ?>
				<a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?><?php if ( get_sub_field( 'hidden_text' ) ) { ?> <span class="visuallyhidden"><?php the_sub_field( 'hidden_text' ); ?><?php } ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php } ?>
	<?php endwhile; ?>
<?php endif; ?>



<?php if ( have_rows( 'section_innovation_call' ) ) : ?>
	<?php while ( have_rows( 'section_innovation_call' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'section_show' ) == 1 ) { ?>
		<?php if ( have_rows( 'content' ) ) : ?>
			<?php while ( have_rows( 'content' ) ) : the_row(); ?>
				<section class="section section-innovation-call">
					<div class="section-content">
						<h2 class="eyebrow"><?php the_sub_field( 'eyebrow' ); ?></h2>
						<h3 class="headline"><?php the_sub_field( 'headline' ); ?></h3>
						<p class="body-text"><?php the_sub_field( 'body_text' ); ?></p>
				<?php if ( have_rows( 'button' ) ) : ?>
					<?php while ( have_rows( 'button' ) ) : the_row(); ?>
						<a class="button more" href="<?php the_sub_field( 'url' ); ?>" <?php if ( get_sub_field( 'open_in_new_tab' ) == 1 ) { ?>target="_blank"<?php } ?>><?php the_sub_field( 'text' ); ?><?php if ( get_sub_field( 'hidden_text' ) ) { ?> <span class="visuallyhidden"><?php the_sub_field( 'hidden_text' ); ?><?php } ?></a>
					<?php endwhile; ?>
				<?php endif; ?>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php } ?>
	<?php endwhile; ?>
<?php endif; ?>	
 
 
	 

		
		
		
		
<?php if ( have_rows( 'section_what_we_do' ) ) : ?>
	<?php while ( have_rows( 'section_what_we_do' ) ) : the_row(); ?>
	<?php if ( get_sub_field( 'section_show' ) == 1 ) { ?>
		<?php if ( have_rows( 'content' ) ) : ?>
			<?php while ( have_rows( 'content' ) ) : the_row(); ?>
	<section class="section section-what-we-do">
		<div class="section-content">
				<h3 class="headline"><?php the_sub_field( 'headline' ); ?></h3>
				<div class="body-text"><?php the_sub_field( 'body_text' ); ?></div>
				<?php if ( have_rows( 'botton' ) ) : ?>
					<?php while ( have_rows( 'botton' ) ) : the_row(); ?>
				<a class="button more" href="<?php the_sub_field( 'url' ); ?>" <?php if ( get_sub_field( 'open_in_new_tab' ) == 1 ) { ?>target="_blank"<?php } ?>><?php the_sub_field( 'text' ); ?><?php if ( get_sub_field( 'hidden_text' ) ) { ?> <span class="visuallyhidden"><?php the_sub_field( 'hidden_text' ); ?><?php } ?></a>
					<?php endwhile; ?>
				<?php endif; ?>
		</div>
	</section>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php } ?>
	<?php endwhile; ?>
<?php endif; ?>
		


<!--section class="section section-video">
	<div class="section-content">
		<div class="row">
			<div class="column large-6 small-12">
				<figure class="section-image"></figure>
			</div>
			<div class="column large-6 small-11 small-centered">
				<div class="content-wrapper">

					<h3 class="headline"></h3>
					<p class="speaker"></p>
					<a class="button more" href=""></a>
				</div>
			</div>
		</div>
	</div>
</section-->



<?php if ( have_rows( 'section_benefits' ) ) : ?>
	<?php while ( have_rows( 'section_benefits' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'section_show' ) == 1 ) { ?>
		<?php if ( have_rows( 'content' ) ) : ?>
			<?php while ( have_rows( 'content' ) ) : the_row(); ?>
	<section class="section section-benefits">
		<div class="section-content">
			<h3 class="section-headline"><?php the_sub_field( 'section_headline' ); ?></h3>
				<?php if ( have_rows( 'tile' ) ) : ?>
				<ul class="tiles-list">
					<?php while ( have_rows( 'tile' ) ) : the_row(); ?>
					<li class="list-item">
						<?php if ( get_sub_field( 'link_text' ) ) { ?>
						<a class="link" href="<?php the_sub_field( 'url' ); ?>">
						<?php } else { ?>
						<div class="link">
						<?php } ?>
							<div class="image-box">
								<figure class="image" style="background-image: url(<?php the_sub_field( 'image' ); ?>)"></figure>
							</div>
							<div class="text-wrapper">
								<h3 class="headline"><?php the_sub_field( 'headline' ); ?></h3>
								<div class="text"><?php the_sub_field( 'body_text' ); ?></div>
								<?php if ( get_sub_field( 'link_text' ) ) { ?><span class="link-text"><?php the_sub_field( 'link_text' ); ?><?php if ( get_sub_field( 'hidden_text' ) ) { ?> <span class="visuallyhidden"><?php the_sub_field( 'hidden_text' ); ?><?php } ?></span><?php } ?>
							</div>
						
						<?php if ( get_sub_field( 'link_text' ) ) { ?>
						</a>
						<?php } else { ?>
						</div>
						<?php } ?>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
		</div>
	</section>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php } ?>
	<?php endwhile; ?>
<?php endif; ?>


<?php if ( have_rows( 'section_case_study' ) ) : ?>
	<?php while ( have_rows( 'section_case_study' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'section_show' ) == 1 ) { ?>
		<?php if ( have_rows( 'content' ) ) : ?>
			<?php while ( have_rows( 'content' ) ) : the_row(); ?>
	<section class="section section-casestudy">
				<?php if ( get_sub_field( 'image' ) ) { ?>
		<figure class="section-image" style="background-image: url(<?php the_sub_field( 'image' ); ?>)"></figure>
				<?php } ?>
		<div class="section-content">
			<h2 class="eyebrow"><?php the_sub_field( 'eyebrow' ); ?></h2>
			<h3 class="headline"><?php the_sub_field( 'headline' ); ?></h3>
			<p class="body-text"><?php the_sub_field( 'body_text' ); ?></p>
				<?php if ( have_rows( 'button' ) ) : ?>
					<?php while ( have_rows( 'button' ) ) : the_row(); ?>
						<a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?><?php if ( get_sub_field( 'hidden_text' ) ) { ?> <span class="visuallyhidden"><?php the_sub_field( 'hidden_text' ); ?><?php } ?></a>
					<?php endwhile; ?>
				<?php endif; ?>
		</div>
	</section>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php } ?>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_template_part( 'template-parts/content', 'section-highlights'); ?>

<?php get_template_part( 'template-parts/content', 'section-register'); ?>


<?php get_footer();