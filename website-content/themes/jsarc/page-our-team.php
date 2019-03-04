<?php
/*
 * Template Name: Our Team
 * The template for displaying Our Team page
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


.section.team {
    
}
.section.team .section-content {
    border-top: 1px solid #D8D8D8;
    padding-top: 75px;
    padding-bottom: 75px;
}
.section.team .section-headline {
    font-size: 24px;
    font-weight: bold;
    line-height: 42px;
}
.section.team .row {
    border-bottom: 1px solid #D8D8D8;
    padding-top: 50px;
    padding-bottom: 30px;
}
.section.team .image {
    display: block;
    height: 160px;
    width: 160px;
}
.section.team .name {
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    color: #4A4A4A;
}
.section.team .decription {
    font-size: 18px;
    line-height: 28px;
    color: #4A4A4A;
}
.section.team .decription > * {
    margin-bottom: 1em;
}
.section.team .decription a {
    color: #1155a4;
}
.section.team .decription a:hover {
    text-decoration: underline;
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



<?php if ( have_rows( 'header' ) ) : ?>
<section class="section section-intro">
    <div class="section-content">
        <div class="row">
            <div class="column large-12 small-12">
                <?php while ( have_rows( 'header' ) ) : the_row(); ?>
                <div class="leader-text"><?php the_sub_field( 'bold_text' ); ?></div>
                <div class="body-text"><?php the_sub_field( 'body_text' ); ?></div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="section team">
    <div class="section-content">
        <h2 class="section-headline"><?php the_field( 'section_headline' ); ?></h2>
        <?php if ( have_rows( 'team' ) ) : ?>
        <?php while ( have_rows( 'team' ) ) : the_row(); ?>
        <div class="row">
            <div class="column large-3 small-12">
                <?php if ( get_sub_field( 'image' ) ) { ?>
                    <img class="image" src="<?php the_sub_field( 'image' ); ?>?fit=crop&w=320&h=320" alt="<?php the_sub_field( 'name' ); ?>" />
                <?php } ?>
            </div>
            <div class=" column large-9 small-12">
                <h3 class="name"><?php the_sub_field( 'name' ); ?></h3>
                <div class="decription"><?php the_sub_field( 'description' ); ?></div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>


<?php get_template_part( 'template-parts/section', 'register'); ?>

<?php get_footer();