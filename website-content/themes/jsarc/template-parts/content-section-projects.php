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
    background-image: url(<?php the_field('section_projects_tile_1_image'); ?>);
}
.section.section-projects .tile-image.tile2 {
    background-image: url(<?php the_field('section_projects_tile_2_image'); ?>);
}
.section.section-projects .tile-image.tile3 {
    background-image: url(<?php the_field('section_projects_tile_3_image'); ?>);
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
				<a class="tile-link" aria-label="<?php the_field('section_projects_tile_1_link_label'); ?>" href="<?php the_field('section_projects_tile_1_link_link_path'); ?>">
					<div class="tile-image-box">
						<figure class="tile-image tile1"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline"><?php the_field('section_projects_tile_1_headline'); ?></h3>
						<div class="tile-caption"><?php the_field('section_projects_tile_1_caption'); ?></div>
						<span class="more-link"><?php the_field('section_projects_tile_1_link'); ?></span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" aria-label="<?php the_field('section_projects_tile_2_link_label'); ?>" href="<?php the_field('section_projects_tile_2_link_link_path'); ?>">
					<div class="tile-image-box">
						<figure class="tile-image tile2"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline"><?php the_field('section_projects_tile_2_headline'); ?></h3>
						<div class="tile-caption"><?php the_field('section_projects_tile_2_caption'); ?></div>
						<span class="more-link"><?php the_field('section_projects_tile_2_link'); ?></span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" aria-label="<?php the_field('section_projects_tile_3_link_label'); ?>" href="<?php the_field('section_projects_tile_3_link_link_path'); ?>">
					<div class="tile-image-box">
						<figure class="tile-image tile3"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline"><?php the_field('section_projects_tile_3_headline'); ?></h3>
						<div class="tile-caption"><?php the_field('section_projects_tile_3_caption'); ?></div>
						<span class="more-link"><?php the_field('section_projects_tile_3_link'); ?></span>
					</div>
				</a>
			</li>
		</ul>
		
		<a class="button more" aria-label="<?php the_field('section_projects_button_label'); ?>" href="<?php the_field('section_projects_button_link_path'); ?>"><?php the_field('section_projects_button'); ?></a>

	</div>
</section>