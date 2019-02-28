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
}
.section-register-alt .section-headline {
	color: #fff;
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 1em;
}


.section-register-alt .block-headline {
	color: #fff;
	font-size: 24px;
	line-height: 30px;
	font-weight: bold;
	margin-bottom: 1.6em;
}
.section-register-alt .button.more {
	color: #fff;
	border: 2px solid #fff;
}

.section.section-register-alt .social-list {
    display: inline-block;
    vertical-align: middle;
    margin-top: 10px;
}

.section.section-register-alt .social-list .social-item {
    display: inline-block;
    margin-right: 25px;
}

.section.section-register-alt .social-list .social-item .social-link {
    display: block;
    width: 36px;
    height: 36px;
    background-size: 36px 36px;
    border-radius: 50%;
    overflow: hidden;
    text-indent: -999px;
}

@media only screen and (max-width: 1068px) {
    .section-register .social-icons .icon {
        width: 30px;
        height: 30px;
    }
}
.section-register-alt .separator {
	display: block;
	height: 120px;
	width: 1px;
	margin: auto;
	background: #fff;
}
@media only screen and (max-width: 735px) {
	.section-register-alt .separator {
		height: 1px;
		width: 100px;
		margin: 50px 0;
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
			<div class="column large-6 first small-12">
				<h4 class="block-headline">Receive our latest news and updates</h4>
				<a class="button more" href="">Register with JSaRC</a>
			</div>
			<div class="column large-1 first small-12">
				<div class="separator"></div>
			</div>
			<div class="column large-5 last small-12">
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