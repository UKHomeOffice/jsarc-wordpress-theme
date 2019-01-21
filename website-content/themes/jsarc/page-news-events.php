<?php
/*
 * Template Name: News and Events Landing Page Template
 * The template for displaying News and Events Landing Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>


<?php get_header(); ?>



<style>


.section.hero .section-content {
	padding-top: 50px;
	padding-bottom: 50px;
}
.section.hero .first h1 {
	font-size: 48px;
	font-weight: bold;
	line-height: 75px;
	color: #444;
	margin-bottom: .5em;
}
.section.hero .first p {
	font-size: 18px;
	font-weight: bold;
	line-height: 28px;
	color: #444;
	margin-bottom: 1em;
}




.section.hero .body-text {
	font-size: 18px;
	line-height: 28px;
	color: #4A4A4A;
	margin-bottom: 34px;
}

.section.hero .box-link {
	display: block;
	min-height: 120px;
	width: 300px;
	background-color: #047989;
	margin-bottom: 50px;
	float: right;
	position: relative;
	padding-bottom: 50px;
}

.section.hero .box-link .box-link-headline {
	padding: 33px 25px 20px;
	color: #fff;
	font-size: 18px;
	font-weight: bold;
	line-height: 28px;
}
.section.hero .box-link .box-link-headline:after {
    content: '';
    display: inline-block;
    vertical-align: baseline;
    width: 42px;
    height: 42px;
    background-size: 42px 42px;
    background-image: url("/wp-content/themes/jsarc/img/v/generic/icons/a/call-icon.png");
    margin-left: 15px;
}
.section.hero .box-link .box-link-subheading {
	padding: 0 25px 20px;
	color: #fff;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
}

.section.hero .box-link .box-link-content {
	padding: 0 25px 25px;
	color: #fff;
	font-size: 18px;
	line-height: 24px;
}
.section.hero .box-link .box-link-content > * {
	margin-bottom: 1em;
}
.section.hero .box-link .box-link-content > *:last-child {
	margin-bottom: 0;
}

.section.hero .box-link:hover .box-link-content {
	text-decoration: underline;
}

.section.hero .box-link .arrow {
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
	.section.hero .box-link {
		display: block;
		width: 200px;
		min-height: 205px;
	}
}

@media only screen and (max-width: 735px) {
	.section.hero .box-link {
		width: 300px;
		min-height: 120px;
		float: none;
		margin-left: auto;
		margin-right: auto;
	}
}


.section.news {
	background-color: #E3E3E3;
}
.section.news .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}
.section.events .section-content {
	padding-top: 0;
	padding-bottom: 75px;
}



.section.news .post {
	position: relative;
	display: block;
	background-color: #fff;
	margin-bottom: 25px;
	min-height: 140px;
 	overflow: hidden;

}

.section.news .featured .post {
	min-height: 366px;
}


.section.news .image-wrapper {
	height: 100%;
	width: 22%;
	position: absolute;
}

.section.news .featured .post .image-wrapper {
	width: 58.5%;
}

@media only screen and (max-width: 1068px) {
    .section.news .image-wrapper {
		width: 35.5%;
	}
	.section.news .featured .post .image-wrapper {
		width: 63.2%;
	}
}

@media only screen and (max-width: 735px) {
     .section.news .image-wrapper,
     .section.news .featured .post .image-wrapper {
		width: 100%;
	}
}

.section.news .image-wrapper .post-thumbnail {
	width: auto;
	height: 100%;
	background-position: 50% 50%;
	background-size: cover;
	background-repeat: no-repeat;
}

.section.news .featured .post .image-wrapper .post-thumbnail {
 
}

@media only screen and (max-width: 1068px) {
    .section.news .featured .post {
		min-height: 460px;
	}
}

@media only screen and (max-width: 735px) {
	.section.news .post {
		
		max-width: 300px;
		margin-left: auto;
		margin-right: auto;
	}

    .section.news .image-wrapper {
		height: auto;
		position: relative;
	}

	.section.news .image-wrapper .post-thumbnail {
		padding-bottom: 66.666%;
		background-size: cover
	}
}


.section.news .text-wrapper {
	width: 78%;

	position: absolute;
	right: 0;
	overflow: hidden;
	height: 100%;
	 
}

.section.news .text-wrapper .text {
 padding: 25px;
}


 

.section.news .details-bar {
	bottom: 1em;
	position: absolute;
	width: 100%;
	overflow: hidden;
}


.section.news .featured .text-wrapper {
	width: 41.5%;
}


@media only screen and (max-width: 1068px) {
    .section.news .text-wrapper {
		width: 64.5%;
	} 
	.section.news .featured .text-wrapper {
		width: 36.8%;
	}
}

@media only screen and (max-width: 735px) {
     .section.news .text-wrapper,
     .section.news .featured .text-wrapper {
     position: relative;
		width: 100%;
	}
	.section.news .details-bar {
 
	  position: relative;
}
}



.section.news .headline {
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}



.section.news .post .title {
	color: #1E4289;
	font-size: 18px;
	font-weight: bold;
	line-height: 28px;
}

.section.news .featured .title {
	margin-bottom: 20px;
	font-size: 30px;
	font-weight: bold;
	line-height: 38px;
}

.section.news .featured .snippet {
	font-size: 18px;
	line-height: 24px;
}


 

.section.news .post .date,
.section.news .post .tags {
	font-size: 14px;
	line-height: 1.2;

}
.section.news .post .date {
	float: left;
 	margin-left: 25px;
}
.section.news .post .tags {
	float: right;
	margin:  0 25px;
}



.section.news.events .post .date {
	color: #1E4289;
	font-size: 18px;
	font-weight: bold;
	line-height: 24px;
	margin-left: 0;
	float: none;
}

.section.news.events .post .title {
	color: #1E4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 28px;
}

.section.news.events .text-wrapper {
	padding: 25px 0;
}

.section.news.events .text-wrapper > * {
	padding: 0 25px;
}



</style>


<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item">News and Events</li>
		</ul>
	</div>
</nav>

<header class="section hero">
	<div class="section-content">
		<div class="row">
			<div class="first column large-8 small-12">
				<h1><?php the_field('header_headline'); ?></h1>
				<?php the_field('header'); ?>
			</div>
			
			<?php if ( have_rows( 'next_event' ) ) : ?>
			<div class="column large-4 large-last small-12">
				<aside class="aside">
					<div class="aside content">
					<?php while ( have_rows( 'next_event' ) ) : the_row(); ?>
						<a class="box-link" href="<?php the_sub_field( 'link_url' ); ?>">
							<h2 class="box-link-headline"><?php the_sub_field( 'headline' ); ?></h2>
							<h3 class="box-link-subheading"><?php the_sub_field( 'subheading' ); ?></h3>
							<div class="box-link-content"><?php the_sub_field( 'body_text' ); ?></div><span class="arrow"></span>
						</a>
					<?php endwhile; ?>
					</div>
				</aside>
			</div>
			<?php endif; ?>
		</div>
	</div>
</header>

<section class="section news">
	<div class="section-content">
		<h2 class="headline">Latest news articles</h2>
		<?php 

		// query
		$the_query = new WP_Query(array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'category_name' => 'news',
		'posts_per_page' => 5,
		'meta_key' => 'featured_post',
		'orderby' => 'meta_value',
		'order' => 'DESC'
		));

		?>
		<?php if( $the_query->have_posts() ): ?>
			<ul>
			<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
		
				$class = get_field('featured_post') ? 'class="featured"' : '';
			
				?>
				<li <?php echo $class; ?>>
					<a class="post" href="<?php the_permalink(); ?>">
						<div class="image-wrapper">
							<figure class="post-thumbnail" style="background-image:url(<?php the_field('thumb_image', $post->ID); ?>)"></figure>
						</div>
						<div class="text-wrapper">
							<div class="text">
								<h3 class="title"><?php the_title(); ?></h3>
								<p class="snippet"><?php if ( get_field( 'featured_post' ) == 1 ) { the_field( 'snippet_text' ); } ?></p>
							
							</div>
							<div class="details-bar">
								<span class="date"><?php echo get_the_date('d/m/y'); ?></span>
								<p class="tags">
								<?php
								$posttags = get_the_tags();
								$count=0;
								if ($posttags) {
								  foreach($posttags as $tag) {
									$count++;
									if (1 == $count) {
									  echo $tag->name;
									}
									else {
										echo ', ' . $tag->name;
									}
								  }
								}
								?>
								</p>
							</div>
						</div>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
		</div>
	
	</div>
</section>

<section class="section news events">
	<div class="section-content">
		<h2 class="headline">Upcoming events</h2>
		<ul>
		<?php
			$args = array('post_type' => 'post', 'post_status' => 'publish', 'category_name' => 'events', 'posts_per_page' => 5,);
			$arr_posts = new WP_Query($args);
			if ($arr_posts->have_posts()):
				while ($arr_posts->have_posts()):
					$arr_posts->the_post();
			?>
				
					<li>
						<a class="post" href="<?php the_permalink(); ?>">
							<div class="image-wrapper">
								<figure class="post-thumbnail" style="background-image:url(<?php the_field('thumb_image', $post->ID); ?>)"></figure>
							</div>
							<div class="text-wrapper">
								<span class="date">
								<?php
								if (have_rows('section_overview')):
									while (have_rows('section_overview')):
										the_row();
										if (have_rows('location_and_date')):
											while (have_rows('location_and_date')):
												the_row();
												the_sub_field('date');
												the_sub_field('time');
											endwhile;
										endif;
									endwhile;
								endif; ?>
								</span>
								<h3 class="title"><?php the_title(); ?></h3>
								<span>Register your interest</span>
							</div>
						</a>
					</li>
				<?php
    endwhile;
endif;
?>
		</ul>
	</div>
</section>

<?php get_template_part( 'template-parts/content', 'section-register'); ?>



<?php get_footer();