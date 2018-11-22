<style>
/*---------------------------------

SECTION PROGECTS

----------------------------------*/
.section.section-projects {
    background-color: #e3e3e3;
}

.section.section-projects .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
    max-width: 1000px;
    padding-left: 20px;
    padding-right: 20px;
}

.section.section-projects .section-headline {
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
    .section.section-projects .section-headline {
        text-align: center;
    }
}


.section.section-projects .tiles-list {
    display: block;
    overflow: hidden;
    width: 100%;
    margin-bottom: 62px;
}
.section.section-projects .tile-item {
    float: left;
    display: block;
    width: 30%;
    margin-left: 5%;
    background-color: #fff;
}

.section.section-projects .tile-item .tile-link {
    display: block;
    overflow: hidden;
}


.section.section-projects .tile-item:first-child {
    margin-left: 0;
}

@media only screen and (max-width: 735px) {
    .section.section-projects .tile-item,
    .section.section-projects .tile-item:first-child {
        float: none;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
}


.section.section-projects .tile-image-box {
	position: relative;
	padding-bottom: 63%;
	overflow: hidden;
}

.section.section-projects .tile-image {
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

.section.section-projects .tile-item .tile-link:hover .tile-image {
    transform: scale(1.1);
}


.section.section-projects .tile-image.tile1 {
    background-image: url(<?php the_field('section_projects_tile_1_image', 'option', 'option'); ?>);
}
.section.section-projects .tile-image.tile2 {
    background-image: url(<?php the_field('section_projects_tile_2_image', 'option', 'option'); ?>);
}
.section.section-projects .tile-image.tile3 {
    background-image: url(<?php the_field('section_projects_tile_3_image', 'option', 'option'); ?>);
}


.section.section-projects .caption-wrapper {
    padding: 25px;
}
.section.section-projects .tile-headline {
    color: #1e4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	margin-bottom: 20px;
}

.section.section-projects .tile-caption {
    font-size: 18px;
	line-height: 24px;
	margin-bottom: 1em;
}

.section.section-projects .more-link {
	color: #01749F;
	font-size: 19px;
	font-style: oblique;
	line-height: 1;
}

.section.section-projects .more-link:after {
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

.section.section-projects .tile-item .tile-link:hover .more-link {
    text-decoration: underline;
}


.section.section-projects .button.more {
	width: 360px;
	border: 2px solid #000;
}

@media only screen and (max-width: 735px) {
	.section.section-projects .button.more {
		margin-left: auto;
		margin-right: auto;
	}
}

</style>

<section class="section section-projects">
	<div class="section-content">

		<ul class="tiles-list">
			<li class="tile-item">
				<a class="tile-link" aria-label="<?php the_field('section_projects_tile_1_link_label', 'option'); ?>" href="<?php the_field('section_projects_tile_1_link_link_path', 'option'); ?>">
					<div class="tile-image-box">
						<figure class="tile-image tile1"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline"><?php the_field('section_projects_tile_1_headline', 'option'); ?></h3>
						<div class="tile-caption"><?php the_field('section_projects_tile_1_caption', 'option'); ?></div>
						<span class="more-link"><?php the_field('section_projects_tile_1_link', 'option'); ?></span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" aria-label="<?php the_field('section_projects_tile_2_link_label', 'option'); ?>" href="<?php the_field('section_projects_tile_2_link_link_path', 'option'); ?>">
					<div class="tile-image-box">
						<figure class="tile-image tile2"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline"><?php the_field('section_projects_tile_2_headline', 'option'); ?></h3>
						<div class="tile-caption"><?php the_field('section_projects_tile_2_caption', 'option'); ?></div>
						<span class="more-link"><?php the_field('section_projects_tile_2_link', 'option'); ?></span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" aria-label="<?php the_field('section_projects_tile_3_link_label', 'option'); ?>" href="<?php the_field('section_projects_tile_3_link_link_path', 'option'); ?>">
					<div class="tile-image-box">
						<figure class="tile-image tile3"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline"><?php the_field('section_projects_tile_3_headline', 'option'); ?></h3>
						<div class="tile-caption"><?php the_field('section_projects_tile_3_caption', 'option'); ?></div>
						<span class="more-link"><?php the_field('section_projects_tile_3_link', 'option'); ?></span>
					</div>
				</a>
			</li>
		</ul
		
		<!--
		/*
		<?php if( have_rows('section_projects', 'option') ): ?>
								
			<ul class="tiles-list">
			<?php while( have_rows('section_projects', 'option') ): the_row(); 
				
				$class_name = get_sub_field('class_name');
				$headline = get_sub_field('headline');
				$text = get_sub_field('text');
				$link = get_sub_field('link');
				$link_path = get_sub_field('link_path');
			?>

				<li class="tile-item <?php the_field('class'); ?>">
					<?php if( $link ): ?>
						<a class="tile-link" href="<?php echo $link_path; ?>">
					<?php endif; ?>
							<div class="tile-image-box">
								<figure class="tile-image"></figure>
							</div>
							<div class="caption-wrapper">
								<h3 class="tile-headline"><?php the_field('headline'); ?></h3>
								<div class="tile-caption"><?php the_field('text'); ?></div>
								<span class="more-link"><?php the_field('link'); ?></span>
							</div>
					<?php if( $link ): ?>
						</a>
					<?php endif; ?>
				</li>

			<?php endwhile; ?>

			</ul>
			
			<a class="button more" href="<?php the_field('more_projects_button_link', 'option'); ?>"><?php the_field('more_projects_button', 'option'); ?></a>

		<?php endif; ?>
		*/
		-->
		
		
		
		
		

	</div>
</section>