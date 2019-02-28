<section class="section section-register">
	<div class="section-content">
		<h3 class="section-headline"><?php the_field( 'headline', 'option' ); ?></h3>
		
		
		<?php if ( have_rows( 'button', 'option' ) ) : ?>
			<?php while ( have_rows( 'button', 'option' ) ) : the_row(); ?>
				<a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
		
		<p class="description"><?php the_field( 'body_text', 'option' ); ?></p>
		
		<?php if ( have_rows( 'social', 'option' ) ) : ?>
		<div class="social">
			<?php while ( have_rows( 'social', 'option' ) ) : the_row(); ?>
			<h4 class="social-headline"><?php the_sub_field( 'headline' ); ?></h4>
				<?php if ( have_rows( 'social_links' ) ) : ?>
				<ul class="social-list">
					<?php while ( have_rows( 'social_links' ) ) : the_row(); ?>
					<li class="social-item"><a class="social-link <?php the_sub_field( 'social_network' ); ?>" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'social_network' ); ?></a></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>


<style>
.section-register-alt {
	background: #982d46;
	margin-top: 100px;
}
.section-register-alt .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
	max-width: 900px;
}
.section-register-alt .section-headline {
	color: #fff;
	font-size: 36px;
	font-weight: bold;
	line-height: 38px;
	margin-bottom: 1em;
	text-align: center;
}
.section-register-alt .column.large-first {
	text-align: right;
}
.section-register-alt .column .inner {
	border-right: 2px solid rgba(255,255,255,.8);
	padding-right: 18%;
}



.section-register-alt .block-headline {
	color: #fff;
	font-size: 19px;
	line-height: 30px;
	font-weight: normal;
	margin-bottom: 1em;
}
.section-register-alt .button.more {
	color: #fff;
	border: 2px solid #fff;
}

.section.section-register-alt .social-list {
    display: inline-block;
    vertical-align: middle;
    margin-top: .45em;
}

.section.section-register-alt .social-list .social-item {
    display: inline-block;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    margin-right: 25px;
}
.section.section-register-alt .social-list .social-item:last-child {
    margin-right: 0;
}

.section.section-register-alt .social-list .social-item .social-link {
    display: block;
    width: 100%;
    height: 100%;
    background-size: 100% 100%;
    overflow: hidden;
    text-indent: -999px;
}

@media only screen and (max-width: 735px) {

	.section-register-alt .column,
	.section-register-alt .column.large-first {
		text-align: center;
	}
	.section-register-alt .column.large-first {
		margin-bottom: 75px;
	}
	.section-register-alt .column .inner {
		border-right: none;
		padding-right: 0;
	}
}




.section.section-register-alt .social-list .social-item .social-link.Twitter {
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/icon-twitter.png");
}

.section.section-register-alt .social-list .social-item .social-link.YouTube {
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/icon-youtube.png");
}

.section.section-register-alt .social-list .social-item .social-link.LinkedIn {
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/icon-linkedin.png");
}

.section.section-register-alt .social-list .social-item .social-link.Facebook {
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/icon-facebook.png");
}




</style>

<section class="section section-register-alt">
	<div class="section-content">
		<h3 class="section-headline"><?php the_field( 'headline', 'option' ); ?></h3>
		
		
		<div class="row">
			<div class="column large-6 large-first small-12">
				<div class="inner">
				<h4 class="block-headline">By registering with JSaRC you can receive our latest news and updates</h4>
				<a class="button more" href="">Register with JSaRC</a>
				</div>
			</div>
			 
			<div class="column large-5 large-last small-12">
				<h4 class="block-headline">Follow us on</h4>
				<?php if ( have_rows( 'social', 'option' ) ) : ?>
				<div class="social">
					<?php while ( have_rows( 'social', 'option' ) ) : the_row(); ?>
						<?php if ( have_rows( 'social_links' ) ) : ?>
						<ul class="social-list">
							<?php while ( have_rows( 'social_links' ) ) : the_row(); ?>
							<li class="social-item"><a class="social-link <?php the_sub_field( 'social_network' ); ?>" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'social_network' ); ?></a></li>
							<?php endwhile; ?>
						</ul>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
		
		
	</div>
</section>