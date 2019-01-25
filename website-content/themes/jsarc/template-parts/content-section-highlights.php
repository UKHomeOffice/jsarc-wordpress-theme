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
    min-height: 418px;
}
@media only screen and (max-width: 1024px) {
	.section.section-projects .tile-item .tile-link {
		min-height: 435px;
	}
}
@media only screen and (max-width: 735px) {
	.section.section-projects .tile-item .tile-link {
		min-height: auto;
	}
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





<?php if ( have_rows( 'section', 'option' ) ) : ?>
	<?php while ( have_rows( 'section', 'option' ) ) : the_row(); ?>
	<section class="section section-projects">
		<div class="section-content">
		<h3 class="section-headline"><?php the_sub_field( 'section_headline' ); ?></h3>
		<?php if ( have_rows( 'tiles' ) ) : ?>
			<?php while ( have_rows( 'tiles' ) ) : the_row(); ?>
			<ul class="tiles-list">
				<?php if ( have_rows( 'tile' ) ) : ?>
					<?php while ( have_rows( 'tile' ) ) : the_row(); ?>
					<li class="tile-item">
						<a class="tile-link" href="<?php the_sub_field( 'url' ); ?>">
							<div class="tile-image-box">
								<figure class="tile-image" style="background-image: url(<?php the_sub_field( 'image' ); ?>)"></figure>
							</div>
							<div class="caption-wrapper">
								<h3 class="tile-headline"><?php the_sub_field( 'title' ); ?></h3>
								<div class="tile-caption"><?php the_sub_field( 'body_text' ); ?></div>
							</div>
						</a>
					</li>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'tile_two' ) ) : ?>
					<?php while ( have_rows( 'tile_two' ) ) : the_row(); ?>
					<li class="tile-item">
						<a class="tile-link" href="<?php the_sub_field( 'url' ); ?>">
							<div class="tile-image-box">
								<figure class="tile-image" style="background-image: url(<?php the_sub_field( 'image' ); ?>)"></figure>
							</div>
							<div class="caption-wrapper">
								<h3 class="tile-headline"><?php the_sub_field( 'title' ); ?></h3>
								<div class="tile-caption"><?php the_sub_field( 'body_text' ); ?></div>
							</div>
						</a>
					</li>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'tile_three' ) ) : ?>
					<?php while ( have_rows( 'tile_three' ) ) : the_row(); ?>
					<li class="tile-item">
						<a class="tile-link" href="<?php the_sub_field( 'url' ); ?>">
							<div class="tile-image-box">
								<figure class="tile-image" style="background-image: url(<?php the_sub_field( 'image' ); ?>)"></figure>
							</div>
							<div class="caption-wrapper">
								<h3 class="tile-headline"><?php the_sub_field( 'title' ); ?></h3>
								<div class="tile-caption"><?php the_sub_field( 'body_text' ); ?></div>
							</div>
						</a>
					</li>
					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<?php endwhile; ?>
		<?php endif; ?>
		
		<?php if ( have_rows( 'button' ) ) : ?>
			<?php while ( have_rows( 'button' ) ) : the_row(); ?>
				<a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</section>
	<?php endwhile; ?>
<?php endif; ?>