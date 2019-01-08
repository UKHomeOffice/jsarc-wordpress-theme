<?php
/*
 * Template Name: JSaRC Page Template
 * The template for News and Events
 *
 * @package JSaRC
*/
get_header();
?>
<style>

.section.hero {

}
.section.hero .section-content {
	padding-top: 50px;
	padding-bottom: 50px;
}
.section.hero h1 {
	font-size: 48px;
	font-weight: bold;
	line-height: 75px;
	color: #444;
	margin-bottom: .5em;
}
.section.hero p {
	font-size: 18px;
	font-weight: bold;
	line-height: 28px;
	color: #444;
	margin-bottom: 1em;
}

.section.news {
	background-color: #E3E3E3;
}
.section.news .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}



.section.news .post {
	position: relative;
	display: block;
	background-color: #fff;
	margin-bottom: 25px;
	min-height: 140px;
 	
}

.section.news .post.featured {
	min-height: 366px;
}


.section.news .image-wrapper {
	height: 100%;
	width: 100%;
	position: absolute;
}
.section.news .post.featured .image-wrapper {
	
}




.section.news .image-wrapper .post-thumbnail {
	width: auto;
	height: 100%;
	background-size: auto 100%;
	background-repeat: no-repeat;
}

.section.news .post.featured .image-wrapper .post-thumbnail {
 
}

@media only screen and (max-width: 1068px) {
    .section.news .post.featured {
		min-height: 280px;
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
	padding: 25px;
	margin-left: 22%;
	 
	 
}
.section.news.events .text-wrapper {
	padding: 25px;
}


.section.news .post.featured .text-wrapper {
	margin-left: 58.5%;
} 


@media only screen and (max-width: 1068px) {
    .section.news .text-wrapper {
		margin-left: 35.5%;
	}
	.section.news .post.featured .text-wrapper {
		margin-left: 63.2%;
	}
}

@media only screen and (max-width: 735px) {
     .section.news .text-wrapper,
     .section.news .post.featured .text-wrapper {
		margin-left: 0;
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

.section.news .post .date,
.section.news .post .tags {
	font-size: 14px;
	line-height: 2 ;
}

.section.news .post .tags {
	float: right;
}

.section.news .post .details-bar {
	 width: 100%;
}



.section.news.events .post .date {
	color: #1E4289;
	font-size: 18px;
	font-weight: bold;
	line-height: 24px;
}

.section.news.events .post .title {
	color: #1E4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 28px;
	margin-bottom: 15px;
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
		<h1><?php the_field('header_headline'); ?></h1>
		<?php the_field('header'); ?>
	</div>
</header>

<section class="section news">
	<div class="section-content">
		<h2 class="headline">Latest news articles</h2>
		<ul>
		<?php
		$args = array('post_type' => 'post', 'post_status' => 'publish', 'category_name' => 'news', 'posts_per_page' => 5,);
		$arr_posts = new WP_Query($args);
		if ($arr_posts->have_posts()):
			while ($arr_posts->have_posts()):
				$arr_posts->the_post();
				if (get_field('featured_post') == 1) { ?>
						<li>
							<a class="post featured" href="<?php the_permalink(); ?>">
								<div class="image-wrapper">
									<?php if (has_post_thumbnail()): ?>
									<figure class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(array(1308, 732)); ?>)"></figure>
									<?php else: ?>
									<figure class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(array(1308, 732)); ?>)"></figure>
									<?php endif; ?>
								</div>
								<div class="text-wrapper">
									<h3 class="title"><?php the_title(); ?></h3>
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
						<?php } else { ?>
						<li>
							<a class="post" href="<?php the_permalink(); ?>">
		 						<div class="image-wrapper">
									<?php if (has_post_thumbnail()): ?>
									<figure class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(array(250, 140)); ?>)"></figure>
									<?php else: ?>
									<figure class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(array(250, 140)); ?>)"></figure>
									<?php endif; ?>
								</div>
								<div class="text-wrapper">
									<h3 class="title"><?php the_title(); ?></h3>
									<div class="details-bar">
										<span class="date"><?php the_field( 'date' ); ?></span>
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
					<?php }
			endwhile;
		endif;
		?>
		</ul>
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
								<?php if (has_post_thumbnail()): ?>
								<figure class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(array(250, 140)); ?>)"></figure>
								<?php else: ?>
								<figure class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(array(250, 140)); ?>)"></figure>
								<?php endif; ?>
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

<?php get_footer(); ?>