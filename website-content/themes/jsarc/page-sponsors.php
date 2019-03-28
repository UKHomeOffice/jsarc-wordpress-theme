<?php
    /*
     * Template Name: Sponsors
     *
     * The template for displaying News and Events Archive Page
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package JSaRC
     */
    ?>
<?php get_header(); ?>
<?php if (is_page_template("archive.php")) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sponsors.css" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/js/sponsors.js" type="text/javascript"></script>
<?php } ?>
<?php function add_to_head() { ?>
<style>
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

.section.intro .section-content {
    padding-top: 50px;
    padding-bottom: 50px;
    border-bottom: 1px solid #d8d8d8;
}

.section.intro .intro * {
    font-size: 18px;
    line-height: 34px;
    margin-bottom: 1em;
    color: #4a4a4a;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}
.section.intro .intro strong {
    font-size: 1.3em;
    font-weight: bold;
}

.section.sponsors .section-content {
    padding-top: 50px;
    padding-bottom: 100px;
    max-width: 900px;
}
.section.sponsors .section-headline {
    font-size: 24px;
    font-weight: bold;
    line-height: 42px;
}
.section.sponsors .column.first {
	
}
.section.sponsors .column.first .column-inner {
    
	position: relative;
}
.section.sponsors .column.last .column-inner {
    padding: 0 25px;
    border: 2px solid #d8d8d8;
    border-width: 0 0 0 2px;
}

.section.sponsors .sponsors-list .list-item  {
    display: block;
}
.section.sponsors .sponsors-list .list-item  a {
    border-left: 6px solid rgba(0,0,0,0);
    line-height: 35px;
    color: #4A4A4A;
    display: block;
    background-color: rgba(0,0,0,0);
    display: block;
    margin-right: 48px;
    padding-left: 16px;
}
.section.sponsors .sponsors-list .list-item  a.active {
    border-left-color: #982D46;
    background-color: rgba(0,0,0,0.11);
}

.section.sponsors .description {
    display: none;
}
.section.sponsors .description:first-child {
    display: block;
}
.section.sponsors .description .image {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.section.sponsors .description .name {
    color: #4A4A4A;
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    margin-bottom: 20px;
}
.section.sponsors .description .text {
    color: #4A4A4A;
    font-size: 18px;
    line-height: 28px;
}
.section.sponsors .description .text p {
    margin-bottom: 1em;
}
.section.sponsors .description a {
    display: inline-block;
    color: #044DD6;
    font-size: 18px;
    line-height: 31px;
}
.section.sponsors .description a:hover {
    text-decoration: underline;
}
@media only screen and (max-width: 735px) {
	.section.sponsors .column.first:after {
		content: '';
		display: block;
		position: absolute;
		z-index: -1;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 20px;
		background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.04));
	}
	.section.sponsors .column.first .column-inner {
		overflow-y: auto;
		height: 20vh;
		min-height: 100px;
		max-height: 400px;
	}
    .section.sponsors .sponsors-list .list-item  a {
        margin-right: 0;
    }
    .section.sponsors .column.last .column-inner {
        border-width: 2px 0 0 0;
        padding: 20px 0;
    }
    .section.sponsors .column.last .column-inner {
        padding: 20px 0;
    }
}

</style>
<?php } ?>

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
<section class="section intro">
    <div class="section-content">
        <div class="intro"><?php the_field( 'intro_text' ); ?></div>
    </div>
</section>
<section class="section sponsors">
    <div class="section-content">
        <h2 class="section-headline"><?php the_field( 'headline' ); ?></h2>
        <div class="row">
            <div class="column large-4 first small-12">
                <div class="column-inner">
                    <ul class="sponsors-list">
                        <?php while ( have_rows( 'sponsors' ) ) : the_row(); ?>
                        <li class="list-item"><a class="link" href="#<?php echo str_replace(' ', '-', strtolower(get_sub_field( 'name' ))); ?>"><?php the_sub_field( 'name' ); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
            <div class="column large-8 last small-12">
                <div class="column-inner">
                    <?php while ( have_rows( 'sponsors' ) ) : the_row(); ?>
                    <div class="description" id="<?php echo str_replace(' ', '-', strtolower(get_sub_field( 'name' ))); ?>">
                        <img class="image" src="<?php if ( get_sub_field( 'image' ) ) { the_sub_field( 'image' ); } ?>?fit=crop&w=154" alt="" />
                        <!-- <h4 class="name"><?php the_sub_field( 'name' ); ?></h4> -->
                        <div class="text"><?php the_sub_field( 'text' ); ?></div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php function add_to_footer() { ?>
<script>
var links = document.querySelectorAll('.link');
for(var i = 0; i < links.length; i++){
    document.querySelector('.sponsors-list .list-item:first-child .link').classList.add('active');
    links[i].addEventListener('click', function(e) {
        e.preventDefault();
        hideAll();
        this.classList.add('active');
        var target = this.getAttribute('href').replace('#', '');
        document.getElementById(target).style.display = 'block';
        return false;
    });
}
function hideAll(){
    for(var i = 0; i < links.length; i++){
        links[i].classList.remove('active');
    }
    var pages = document.querySelectorAll('.description');
    for(var i = 0; i < pages.length; i++){
        pages[i].style.display = 'none';
    }
}



</script>
<?php } ?>
<?php get_template_part( 'template-parts/section', 'register'); ?>

<?php get_footer();