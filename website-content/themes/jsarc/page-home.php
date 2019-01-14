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
    background-image: url(<?php the_field('hero_image_large'); ?>);
    position: absolute;
    background-repeat: no-repeat;
    opacity: 0.5;
}

@media only screen and (max-width: 1068px) {
	.section.section-hero .hero-image {
		background-image: url(<?php the_field('hero_image_medium'); ?>);
	}
}

@media only screen and (max-width: 735px) {
	.section.section-hero .hero-image {
		background-image: url(<?php the_field('hero_image_small'); ?>);
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


/*--------------------------------------

SECTION INNOVATION CALL

---------------------------------------*/


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


.section.section-innovation-call .section-headline {
    color: #fff;
    max-width: 500px;
    font-size: 36px;
    font-weight: bold;
    line-height: 38px;
    margin-bottom: 20px;
}
.section.section-innovation-call .section-body-text {
    color: #fff;
	max-width: 654px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	float: left;
	margin-bottom: 40px;

}
@media only screen and (max-width: 735px) {
	.section.section-innovation-call .section-body-text {
		float: none;
	}
}

.section.section-innovation-call .button.more {
    float: right;
    border: 2px solid #fff !important;
    color: #fff;
    margin-bottom: 76px;
}

/*--------------------------------------

SECTION WORKING

---------------------------------------*/

.section.section-working {
    background-color: #047989;
}

.section.section-working .section-content {
    padding-top: 75px;
    padding-bottom: 75px;
}

.section.section-working .section-headline {
	max-width: 655px;
	color: #fff;
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 40px;
}

.section.section-working .section-body-text {
    max-width: 800px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	margin-bottom: 30px;
}
.section.section-working .section-body-text + .section-body-text {
    margin-bottom: 50px;
}

@media only screen and (max-width: 1068px) {
    .section.section-working .section-body-text {
        max-width: 800px;
    }
}

.section.section-working .button.more {
    border: 2px solid #fff;
    color: #fff;
}

/*--------------------------------------

SECTION VIDEO

---------------------------------------*/
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
    background-image: url(<?php the_field('section_video_image_large'); ?>);
    position: relative;
}

@media only screen and (max-width: 1068px) {
	.section.section-video .section-image {
		background-image: url(<?php the_field('section_video_image_medium'); ?>);
	}
}

@media only screen and (max-width: 735px) {
	.section.section-video .section-image {
		background-image: url(<?php the_field('section_video_image_small'); ?>);
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

.section.section-video .section-headline {
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


/*--------------------------------------

SECTION BENEFITS

---------------------------------------*/

.section.section-benefits {
    background-color: #e3e3e3;
}
.section.section-benefits .section-headline {
    font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}

@media only screen and (max-width: 735px) {
    .section.section-benefits .section-headline {
        text-align: center;
    }
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
.section.section-benefits .tile-item {
    float: left;
    display: block;
    width: 30%;
    margin-left: 5%;
    background-color: #fff;
}

.section.section-benefits .tile-item .tile-link {
    display: block;
    overflow: hidden;
}


.section.section-benefits .tile-item:first-child {
    margin-left: 0;
}

@media only screen and (max-width: 735px) {
    .section.section-benefits .tile-item,
    .section.section-benefits .tile-item:first-child {
        float: none;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
}


.section.section-benefits .tile-image-box {
	position: relative;
	padding-bottom: 63%;
	overflow: hidden;
}

.section.section-benefits .tile-image {
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

.section.section-benefits .tile-item .tile-link:hover .tile-image {
    transform: scale(1.1);
}


.section.section-benefits .tile-image.tile1 {
    background-image: url(<?php the_field('section_benefits_1'); ?>);
}
.section.section-benefits .tile-image.tile2 {
    background-image: url(<?php the_field('section_benefits_2'); ?>);
}
.section.section-benefits .tile-image.tile3 {
    background-image: url(<?php the_field('section_benefits_3'); ?>);
}


.section.section-benefits .caption-wrapper {
    padding: 25px;
}
.section.section-benefits .tile-headline {
    color: #1e4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	margin-bottom: 20px;
}

.section.section-benefits .tile-caption {
    font-size: 18px;
	line-height: 24px;
	margin-bottom: 1em;
}

.section.section-benefits .more-link {
	color: #01749F;
	font-size: 19px;
	font-style: oblique;
	line-height: 1;
}

.section.section-benefits .more-link:after {
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

.section.section-benefits .tile-item .tile-link:hover .more-link {
    text-decoration: underline;
}


.section.section-benefits .button.more {
	width: 360px;
	border: 2px solid #000;
}

/*--------------------------------------

SECTION CASESTUDY

---------------------------------------*/

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
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/projects-image.png");
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

.section.section-casestudy .section-headline {
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    line-height: 38px;
    margin-bottom: 20px;
}
.section.section-casestudy .section-body-text {
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





				
<section class="section section-hero">
	<figure class="hero-image"></figure>
	<div class="section-content">
		<div class="intro-wrapper">
			<div class="intro">
				<h1 class="hero-headline"><?php the_field('hero_headline'); ?></h1>
				<p class="hero-intro"><?php the_field('hero_intro'); ?></p>
				<a class="button more" aria-label="<?php the_field('hero_button_label'); ?>" href="<?php the_field('hero_button_link_path'); ?>"><?php the_field('hero_button'); ?></a>
			</div>
		</div>
	</div>
</section>



<section class="section section-innovation-call">
	<div class="section-content">
		<h2 class="eyebrow"><?php the_field('section_innovation_call_headline_small'); ?></h2>
		<h3 class="section-headline"><?php the_field('section_innovation_call_headline'); ?></h3>
		<p class="section-body-text"><?php the_field('section_innovation_call_body_text'); ?></p>
		<a class="button more" aria-label="<?php the_field('section_innovation_call_button_label'); ?>" href="<?php the_field('section_innovation_call_button_link_path'); ?>"><?php the_field('section_innovation_call_button'); ?></a>
	</div>
</section>


<section class="section section-working">
	<div class="section-content">
		<h3 class="section-headline"><?php the_field('section_working_headline'); ?></h3>
		<p class="section-body-text"><?php the_field('section_working_body_text_1'); ?></p>
		<p class="section-body-text"><?php the_field('section_working_body_text_2'); ?></p>
		<a class="button more" aria-label="<?php the_field('section_working_button_label'); ?>" href="<?php the_field('section_working_button_link_path'); ?>"><?php the_field('section_working_button'); ?></a>
	</div>
</section>

<!--section class="section section-video">
	<div class="section-content">
		<div class="row">
			<div class="column large-6 small-12">
				<figure class="section-image"></figure>
			</div>
			<div class="column large-6 small-11 small-centered">
				<div class="content-wrapper">

					<h3 class="section-headline"><?php the_field('section_video_headline'); ?></h3>
					<p class="speaker"><?php the_field('section_video_speaker'); ?></p>
					<a class="button more" aria-label="<?php the_field('section_video_button_label'); ?>" href="<?php the_field('section_video_buttonn_link_path'); ?>"><?php the_field('section_video_button'); ?></a>
				</div>
			</div>
		</div>
	</div>
</section-->


<section class="section section-benefits">
	<div class="section-content">
	
		<h3 class="section-headline"><?php the_field('section_benefits_headline'); ?></h3>

		<ul class="tiles-list">
			<li class="tile-item">
				<a class="tile-link" href="<?php the_field('section_benefits_tile_1_link_link_path'); ?>">
					<div class="tile-image-box">
						<figure class="tile-image tile1"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline"><?php the_field('section_benefits_tile_1_headline'); ?></h3>
						<div class="tile-caption"><?php the_field('section_benefits_tile_1_caption'); ?></div>
						<span class="more-link"><?php the_field('section_benefits_tile_1_link'); ?></span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" href="<?php the_field('section_benefits_tile_2_link_link_path'); ?>">
					<div class="tile-image-box">
						<figure class="tile-image tile2"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline"><?php the_field('section_benefits_tile_2_headline'); ?></h3>
						<div class="tile-caption"><?php the_field('section_benefits_tile_2_caption'); ?></div>
						<span class="more-link"><?php the_field('section_benefits_tile_2_link'); ?></span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" href="<?php the_field('section_benefits_tile_3_link_link_path'); ?>">
					<div class="tile-image-box">
						<figure class="tile-image tile3"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline"><?php the_field('section_benefits_tile_3_headline'); ?></h3>
						<div class="tile-caption"><?php the_field('section_benefits_tile_3_caption'); ?></div>
						<span class="more-link"><?php the_field('section_benefits_tile_3_link'); ?></span>
					</div>
				</a>
			</li>
		</ul>

	</div>
</section>

<section class="section section-casestudy">
	<figure class="section-image"></figure>
	<div class="section-content">
		<h2 class="eyebrow"><?php the_field('section_casestudy_headline_small'); ?></h2>
		<h3 class="section-headline"><?php the_field('section_casestudy_headline'); ?></h3>
		<p class="section-body-text"><?php the_field('section_casestudy_body_text'); ?></p>
		<a class="button more" aria-label="<?php the_field('section_casestudy_button_label'); ?>" href="<?php the_field('section_casestudy_button_link_path'); ?>"><?php the_field('section_casestudy_button'); ?></a>
	</div>
</section>


<?php get_template_part( 'template-parts/content', 'section-projects'); ?>

<?php get_template_part( 'template-parts/content', 'section-register'); ?>


<?php get_footer();