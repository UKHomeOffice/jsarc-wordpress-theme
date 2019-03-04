<?php
    /**
     * Template Name: search
     * The template for displaying search results pages
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
     *
     * @package JSaRC
     */
    
    get_header();
    ?>
<?php function add_to_head() { ?>
<style>
#main { min-height: calc(100vh - 431px); width: 100%; display: table; }
#main > .page-wrapper { display: table-cell; width: 100%; height: 100%; background-color: #E3E3E3; }


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


<div class="page-wrapper">
	<div class="search-results">
		<div class="section-content">
			<h1 class="headline"><?php echo 'Search result: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
			<?php
			if (have_posts()) :?>
			<ul class="reaults-list">
				<?php while (have_posts()) : the_post(); ?>
				<li class="reaults-list-item">
					<a href="<?php the_permalink() ?>">
						<h2 class="item-headline"><?php the_title() ?></h2>
						<p class="description"><?php the_excerpt() ?></p>
						<p class="date">Published on <?php the_date() ?></p>
					</a>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php else : echo "Nothing found"; endif; ?>
		</div>
	</div>



<?php get_template_part( 'template-parts/section', 'register'); ?>
</div>


<?php get_footer();