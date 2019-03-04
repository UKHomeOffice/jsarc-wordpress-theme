<?php
	/*
	 * Template Name: Case Study Archive
	 *
	 * The template for displaying Case Study Archive Page
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package JSaRC
	 */
	?>
<?php get_header(); ?>
<?php if (is_page_template("archive.php")) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/archive.css" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/js/archive.js" type="text/javascript"></script>
<?php } ?>
<?php function add_to_head() { ?>
<style>
.section.hero .section-content {
	padding-top: 75px;
	padding-bottom: 50px;
}

.section.hero .headline {
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
}

.filter-bar {
	background: #3A5996;
	color: #fff;
	font-size: 17px;
	line-height: 100px;
	height: 100px;
}

.filter-bar .select-wrapper {
	display: inline-block;
	vertical-align: middle;
	height: 40px;
	line-height: 40px;
	position: relative;
	overflow: hidden;
	border: 1px solid #fff;
	margin-right: 3%;
}

.filter-bar .select-wrapper:after {
	content: '';
	display: -block;
	position: absolute;
	z-index: 1;
	top: 0;
	bottom: 0;
	right: 10px;
	margin: auto;
	width: 0;
	height: 0;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-top: 6px solid #fff;
	pointer-events: none;
}

.filter-bar select {
	display: inline-block;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	background: none;
	border: none;
	color: inherit;
	font: inherit;
	overflow: hidden;
	padding-left: 10px;
	padding-right: 30px;
	height: 40px;
	line-height: 40px;
	min-width: 100%;
}

.filter-bar select:focus {
	outline: 0 !important;
}

.filter-bar .reset {
	height: 1.3em;
	display: inline-block;
	vertical-align: middle;
	font: inherit;
	line-height: 1.3em;
}

@media only screen and (max-width: 735px) {
	.filter-bar {
		font-size: 16px;
		height: auto;
		line-height: inherit;
		padding-top: 25px;
		padding-bottom: 25px;
	}
	.filter-bar .select-wrapper {
		display: block;
		width: 100%;
		margin-bottom: 20px;
	}
	.filter-bar .select-wrapper {
		display: block;
	}
	.filter-bar .select-wrapper:after {
		left: auto;
		right: 20px;
	}
	.filter-bar .reset {
		display: block;
		height: 36px;
		line-height: 36px;
	}
}

.search-results {
	background-color: #E3E3E3;
}
.search-results .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}
.search-results .headline {
	font-size: 30px;
	line-height: 1.3;
	font-weight: bold;
	margin-bottom: 1em;
}

.search-results .reaults-list .reaults-list-item {
	display: block;
	background: #fff;
	padding: 20px;
	margin-bottom: 30px;
}
.search-results .reaults-list .item-headline {
	font-size: 18px;
	font-weight: bold;
	line-height: 28px;
	color: #1E4289;
	margin-bottom: 1em;
}
.search-results .reaults-list .description {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 1em;
}
.search-results .reaults-list .date {
	font-size: 14px;
	line-height: 20px;
}
</style>
<?php } ?>


<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
            <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
            <li class="breadcrumbs-item">Case Study</li>
		</ul>
	</div>
</nav>


<!--div class="section filter-bar">
	<div class="section-content">
	</div>
</div-->

		<?php
// Set up the objects needed
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));

// Get the page as an Object
$case_study =  get_page_by_title('Our Work');

// Filter through all pages and find Portfolio's children
$case_study_children = get_page_children( $case_study->ID, $all_wp_pages );


?>

<div class="search-results">
	<div class="section-content">
	<h1 class="headline">Case study archive</h1>
	<?php 
	  $args = array(
		  'parent' => $case_study->ID,
		  'post_type' => 'page',
		  'post_status' => 'publish'
	  ); 
	  $pages = get_pages($args);  ?>
	  <ul class="reaults-list"> 
	  <?php foreach( $pages as $page ) { ?>
	   <li>
		  <a class="reaults-list-item" href="<?php echo  get_permalink($page->ID); ?>">
			  <h2 class="item-headline"><?php echo $page->post_title; ?></h2>
			  <p class="description"><?php echo get_post_meta($page->ID, 'desc', true); ?></p>
		  </a>
	  </li>
	  <?php } ?>
	  </ul>

	</div>
</div>





<?php get_template_part( 'template-parts/section', 'register'); ?>
<?php get_footer();