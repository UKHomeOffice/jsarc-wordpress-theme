<?php
/*
 * Template Name: Case Study Pages
 *
 * The template for displaying Case Study page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>

<?php get_header(); ?>

<?php function add_to_head() { ?>
<style>

.body-text > p,
p.body-text {
	margin-bottom: 1em;
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


.section.section-case-study-content {

}

.section.section-case-study-content.dark {
	background-color: #000;
}
.section.section-case-study-content.light {
	background-color: #fff;
}

.section.section-case-study-content .section-image-full-with {
	width: 100%;
	height: 70vh;
	min-height: 568px;
	background-size: cover;
	background-attachment: fixed;
}

@media only screen and (max-device-width : 1024px) {
	.section.section-case-study-content .section-image-full-with {
		background-attachment: initial;
	}
}

.section.section-case-study-content .section-content .section-image.case-study-results {
	width: 100%;
	height: auto;
	padding-bottom: 50%;
	background-size: cover;
	background-position: 50% 50%;
	margin-bottom: 75px;
}

.sticky-container {
    min-height: 70vh;
    position: relative;
}

.sticky-item {
    position: relative;
    top: 0;
    left: 0;
}

.section.section-case-study-content .section-content {

}

.section.section-case-study-content .section-content .inner {
	max-width: 800px;
	padding-top: 87px;
	padding-bottom: 87px;
	vertical-align: middle;
}


@media only screen and (max-width: 1068px) {
	.section.section-case-study-content .section-content .inner {
		max-width: 600px;
		padding-top: 60px;
		padding-bottom: 60px;
	}
}

.section.section-case-study-content .section-headline {
	color: #0C0B0B;
	font-size: 24px;
	line-height: 24px;
	margin-bottom: 24px;
	font-weight: bold;
}

.section.section-case-study-content .body-text {
	color: #0C0B0B;
	font-size: 18px;
	line-height: 24px;
	margin-bottom: 24px;
}

.section.section-case-study-content.dark .section-headline,
.section.section-case-study-content.dark .body-text {
	color: #fff;
}

</style>
<?php } ?>

<nav class="breadcrumbs" aria-label="breadcrumb">
    <div class="section-content">
        <ul class="breadcrumbs-list">
            <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
            <?php if ( have_rows( 'breadcrumbs' ) ) : ?>
            <?php while ( have_rows( 'breadcrumbs' ) ) : the_row(); ?>
            <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="<?php the_sub_field( 'url' ); ?>">
                <?php the_sub_field( 'text' ); ?></a>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
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

<section class="section section-case-study-content">
    <?php if ( have_rows( 'section' ) ) : ?>
    <?php while ( have_rows( 'section' ) ) : the_row(); ?>
    <?php if ( get_sub_field( 'full_width_image' ) ) { ?>
    <div class="sticky-container">
        <figure class="section-image-full-with sticky-item" style="background-image: url(<?php the_sub_field( 'full_width_image' ); ?>?fit=crop&w=5120)"></figure>
    </div>
    <?php } ?>
    <div class="section-content">
        <div class="inner">
            <h2 class="section-headline"><?php the_sub_field( 'headline' ); ?></h2>
            <div class="body-text">
                <?php the_sub_field( 'body_text' ); ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php if ( have_rows( 'case_study_section' ) ) : ?>
<?php while ( have_rows( 'case_study_section' ) ) : the_row(); ?>
<section class="section section-casestudies" data-anim-classname='{"cssClass":"reveal"}'>
    <figure class="section-image-full-with" style="background-image: url(<?php if ( get_sub_field( 'image' ) ) { the_sub_field( 'image' ); } ?>?fit=crop&w=5120&h=&h=1000)"></figure>
    <div class="section-content">
        <div class="inner">
            <h3 class="section-headline"><?php the_sub_field( 'headline' ); ?></h3>
            <h4 class="section-sub-heading"><?php the_sub_field( 'subheading' ); ?></h4>
        </div>
        <?php if ( have_rows( 'button' ) ) : ?>
        <?php while ( have_rows( 'button' ) ) : the_row(); ?>
        <a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?></a>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php endwhile; ?>
</section>
<?php endif; ?>

<?php get_template_part( 'template-parts/section', 'highlights'); ?>

<?php get_template_part( 'template-parts/section', 'register'); ?>






<?php function add_to_footer() { ?>
<!--script>
document.addEventListener('DOMContentLoaded', function() {


    var isInViewPort = function (el) {
    
        var y = window.scrollY || window.pageYOffset;
        
            elT = el.offsetTop,
            elH = el.offsetHeight,
            elB = elT + elH;
            
        return (y > elT && y < elB);
        
        
    };
 

	var a = '.sticky-container',
		b = '.sticky-item';

    document.querySelectorAll(a).forEach(function(el) {

    	var stickyItem = el.querySelector(b);
    
        window.addEventListener('scroll', function() {
        
			if (isInViewPort(el)) {
				var y = window.scrollY || window.pageYOffset,
				
					elT = el.offsetTop,
					elH = el.offsetHeight,
					calc = (elH - y + elT) / elH;
					
				stickyItem.style.position = 'fixed';
				
				if (calc > 1) { stickyItem.style.opacity = 1; }
				else if (calc < 0) { stickyItem.style.opacity = 0; }
				else { stickyItem.style.opacity = calc; }
			
			}
		
			else {
				stickyItem.style.opacity = 1;
				stickyItem.style.position = 'relative';
			} 
    	});
	});

	var isInViewPortPlusWH = function (el) {
	
			var y = window.scrollY || window.pageYOffset;
		
				elT = el.offsetTop,
				elH = el.offsetHeight,
				elB = elT + elH,
				
				wh = window.innerHeight;
				
				
				
				
				
			
			return (y+wh/2 > elT);
		
		
		};
 
	
	// Array.prototype.forEach.call(a, function(el, i){
	document.querySelectorAll('[data-anim-classname]').forEach(function(el) {
    
    	var alldata = JSON.parse(el.dataset.animClassname);
    
    	var elClassName = alldata['cssClass'];
		

		
		

        window.addEventListener('scroll', function() {
        
			if (isInViewPortPlusWH(el)) {
				el.classList.add(elClassName);
			}
			else {
				el.classList.remove(elClassName);
			}
    	});
	});
	
	

	
});
</script-->
<?php } ?>

<?php get_footer();