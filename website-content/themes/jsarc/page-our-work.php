<?php
/*
 * Template Name: Our Work Template
 * The template for displaying Our Work page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>


<?php get_header(); ?>



<style>

.section-content {
    width: 980px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 20px;
    padding-right: 20px;
}



@media only screen and (max-width: 1068px) {
    .section-content {
        width: 692px;
    }
}

@media only screen and (max-width: 735px) {
    .section-content {
        width: 90%;
    }
}



/*---------------------------------

SECTION HEADER

----------------------------------*/
.section.section-header {
	background-color: #000;
}

.section.section-header .section-content {
	display: table;
	height: 300px;

}

.section.section-header .hero-image {
	position: absolute;
	max-width: 2560px;
	width: 100%;
	height: 300px;
	background-size: cover;
	background-position: 80% 50%;
	background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/case-study-header-bg.png");
	opacity: .5;
}

.section.section-header .hero-image {
	animation: background-opacity 1s forwards;
}

@keyframes background-opacity {
    0% {
		opacity: 1;	
    }
    100% {
		opacity: 0.5;
    }
}

.section.section-header .hero-headline {
	display: table-cell;
	vertical-align: middle;
	color: #fff;
	font-size: 48px;
	font-weight: bold;
	line-height: 1.2;
}


.section.section-header .hero-headline {
	transform: translateY(50px);
	opacity: 0;
	animation: headline-reveal 1s forwards;
}

@keyframes headline-reveal {
    0% {
    	transform: translateY(50px);
		opacity: 0;	
    }
    100% {
    	transform: translateY(0);
		opacity: 1;
    }
}


@media only screen and (max-width: 1068px) {
	.section.section-header .hero-headline {
		font-size: 38px;
	}
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


/*---------------------------------

SECTION ENGAGING

----------------------------------*/

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

/*---------------------------------

SECTION MISSION

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


/*---------------------------------

SECTION case-studies

----------------------------------*/
/*
.section.section-case-studies {
	background-color: #E3E3E3;
}
.section.section-case-studies .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}


.section.section-case-studies .case-studies-image {
	height: 600px;
	width: 100%;
	background-size: cover;
	background-position: 50% 50%;
}

.section.section-case-studies .case-studies-image.case-studies-image-1 {
	background-image: url("/wp-content/themes/jsarc/img/v/our-work/a/image-1.jpg");
}
.section.section-case-studies .case-studies-image.case-studies-image-2 {
	background-image: url("/wp-content/themes/jsarc/img/v/our-work/a/image-2.jpg");
}
.section.section-case-studies .case-studies-image.case-studies-image-3 {
	background-image: url("/wp-content/themes/jsarc/img/v/our-work/a/image-3.jpg");
}

.section.section-case-studies .section-headline {
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}

.section.section-case-studies .block {
	background-color: #fff;
	margin-bottom: 50px;
	
}
.section.section-case-studies .block-text-content {
	display: table;
	padding: 50px;
	min-height: 500px;
}
@media only screen and (max-width: 735px) {
	.section.section-case-studies .case-studies-image {
		height: 400px;
	}
	.section.section-case-studies .block-text-content {
		padding: 50px;
		min-height: 300px;
	}
}

.section.section-case-studies .block-text-inner {
	display: table-cell;
	vertical-align: middle;
}
.section.section-case-studies .block-headline {
	font-size: 24px;
	font-weight: bold;
	line-height: 34px;
	margin-bottom: 22px;
}
.section.section-case-studies .block-text {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 10px;
}
.section.section-case-studies .block-link {
	color: #01749F;
	font-size: 19px;
	font-style: oblique;
	line-height: 28px;
}

.section.section-case-studies .button.more {
	border: 2px solid #000;
	width: 360px;
}
*/



.sections-wrapper {
	background-color: #E3E3E3;
	padding: 50px 0;
}
.section.blocks {
	margin-bottom: 50px;
}
.section.blocks .section-content {
	
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
	font-style: oblique;
	line-height: 28px;
}
</style>




<section class="section section-header">
	<figure class="hero-image"></figure>
	<div class="section-content">
		<h1 class="hero-headline"><?php the_title(); ?></h1>
	</div>
</section>

<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item"><?php the_title(); ?></li>
		</ul>
	</div>
</nav>

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
				<p class="box-link-content"><?php the_sub_field( 'body_text' ); ?></p><span class="arrow"></span>
				
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





	<?php if ( have_rows( 'sections' ) ) : ?>
	<div class="sections-wrapper">	
<?php while ( have_rows( 'sections' ) ) : the_row(); ?>

<section class="section blocks image-<?php the_sub_field( 'image_alignment' ); ?>">
	<div class="section-content">
		<div class="block row">
			<div class="column large-5 large-last small-12">
<?php if ( get_sub_field( 'section_image' ) ) { ?>
				<figure class="section-image" style="background-image: url(<?php the_sub_field( 'section_image' ); ?>)">
				</figure>
<?php } ?>
			</div>
			<div class="column large-7 large-first small-12">
				<div class="block-text-content">
					<div class="block-text-inner">
						
					<?php if ( have_rows( 'section' ) ) : ?>
					<?php while ( have_rows( 'section' ) ) : the_row(); ?>
					<h3 class="block-headline"><?php the_sub_field( 'section_headline' ); ?></h3>
					<div class="block-text"><?php the_sub_field( 'section_body_text' ); ?></div>
					
					
					
					<?php if ( have_rows( 'section_links' ) ) : ?>
					<?php while ( have_rows( 'section_links' ) ) : the_row(); ?>
					<div><a class="block-link" href="<?php the_sub_field( 'link_url' ); ?>"><?php the_sub_field( 'link_text' ); ?></a></div>
					<?php endwhile; ?>
				 
				<?php endif; ?>
					
					
					
					
					
					
					
					
					
					 
					
				</div>
			</div>
		</div>
		
		
	
	
	
	
	<?php if ( have_rows( 'section_button' ) ) : ?>
	
			<?php while ( have_rows( 'section_button' ) ) : the_row(); ?>
				
				<a class="button more" href="<?php the_sub_field( 'button_url' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
	
	</div>		
	 
		
		
	<?php endwhile; ?>
<?php endif; ?>
	
	
</section>








<?php endwhile; ?>
</div>
					<?php endif; ?>













<!--section class="section section-engaging">
	<div class="section-content">
		<div class="row">
			<div class="column large-12"> 
				<h2 class="leader-text">Engaging with JSaRC</h2>

				<p class="body-text">JSaRC uses a number of mechanisms through which we engage with our
stakeholders. These include events such as the Security & Policing Home Office event, DSEI, and the International Security Expo.</p>

				<p class="body-text">Formal engagements and projects are the primary means by which we deliver upon our business objectives.</p>
				
				<p class="body-text">JSaRC holds regular open days at our Cambridge Headquarters, giving industry and the private sector, especially SMEs, the opportunity to gain advice and coaching on how best to work with government.</p>
				
				<p class="body-text">Our partners within industry and academia supply experienced staff to JSaRC as Industry Secondees, who use their expertise to work as part of the JSaRC team to deliver projects.</p>
				
				<p class="body-text">JSaRC attends a number of government boards and working groups to build awareness of our work and to better understand the requirements of our government partners.</p>
			</div>
		</div>
	</div>
</section-->



<!--section class="section section-case-studies">
	<div class="section-content">
		<h2 class="section-headline">Case Studies</h2>
		
		<div class="block row">
			<div class="column large-5 large-last small-12">
				<figure class="case-studies-image case-studies-image-1"></figure>
			</div>
			<div class="column large-7 large-first small-12">
				<div class="block-text-content">
					<div class="block-text-inner">
						<h3 class="block-headline">Coaches, Cars and Bottlenecks</h3>
						<p class="block-text">One of the most pressing challenges in national security is the processing and clearing of passengers in cars and coaches at the UK’s sea ports and the Channel Tunnel.</p>
						<p class="block-text">Currently, all passengers have to disembark their vehicles to have their credentials checked individually. This can lead to long queues and the slow movement of passengers. Between April 2017 and March 2018, the passengers of nearly 69,000 coaches were checked.</p>
						<p class="block-text">JSaRC wants to find a solution that would create more efficient passenger processing and clearing of coach and car traffic at border crossings.</p>
						<a class="block-link" href="">Read more</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="block row">
			
			<div class="column large-5 small-12">
				<figure class="case-studies-image case-studies-image-2"></figure>
			</div>
			<div class="column large-7 small-12">
				<div class="block-text-content">
					<div class="block-text-inner">
						<h3 class="block-headline">Video Analytics Showcase</h3>
						<p class="block-text">JSaRC supports industry trials and tests of security solutions. We capitalise on these to create better engagement and greater cooperation between government and industry on vital technology such as Video Analytics.</p>
						<p class="block-text">Improved future partnerships between the public and private sectors will create robust new technologies. Collaborative tests on technologies are carried out that may lead to government-funded trials of new security products.</p>
						<a class="block-link" href="">Read more</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="block row">
			
			<div class="column large-5 large-last small-12">
				<figure class="case-studies-image case-studies-image-3"></figure>
			</div>
			<div class="column large-7 large-first small-12">
				<div class="block-text-content">
					<div class="block-text-inner">
						<h3 class="block-headline">Securing Crowded Places</h3>
						<p class="block-text">Due to the global terrorist threat, as demonstrated in Manchester and London, the prevention of mass casualty attacks and high footfall screening is a priority for JSaRC.</p>
						<p class="block-text">The Home Office and Her Majesty’s Government are seeking solutions to improve surveillance systems, detection capabilities and the security of crowded places in the UK.</p>
						<p class="block-text">JSaRC is cooperating with industry and the security sector to encourage developments in this field and to foster greater collaboration and successful outcomes.</p>
						<a class="block-link" href="">Read more</a>
					</div>
				</div>
			</div>
		</div>
		
		<a class="button more" href="/">See all JSaRC news and events</a>
		
	</div>
</section-->

<?php get_template_part( 'template-parts/content', 'section-register'); ?>


<?php get_footer();