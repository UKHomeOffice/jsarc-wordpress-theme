<?php
/**
 * The template for displaying all single events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JSaRC
 */
get_header();
?>

<style>

.article-header .hero-image {
	position: absolute;
	z-index: -1;
	max-width: 2560px;
	width: 100%;
	height: 300px;
	background-size: cover;
	background-position: 80% 50%;
	/*background-image: url("<?php the_field( 'hero_image' ); ?>");*/
	background-image: url("/wp-content/themes/jsarc/img/v/about/b/about-header-bg.png");
}

.article-header .section-content {
	display: table;
	height: 300px;
	
}
.article-header .headline-wrapper {
	display: table-cell;
	vertical-align: middle;
}

.article-header .hero-headline {
	display: inline-block;
	width: 80%;
	font-size: 30px;
	line-height: 38px;
	font-weight: bold;
	color: #fff;
}
.article-header .hero-headline span {
	display: inline;
	padding: 2px 0;
	box-shadow: 5px 0 0 #000, -5px 0 0 #000; 
	background-color: #000;
}












.article-overview .section-content {
	border-bottom: 1px solid #999;
	padding-top: 50px;
	padding-bottom: 50px;
}

.article-overview .location-date {
	margin-bottom: 40px;
}

.article-overview .location-date .location {
	font-size: 30px;
	font-weight: bold;
	line-height: 36px;
	display: block;
}
.article-overview .location-date .date {
	font-size: 30px;
	font-weight: bold;
	line-height: 36px;
}

.article-overview .title {
	font-size: 24px;
	font-weight: bold;
	line-height: 36px;
	margin-bottom: 20px;
}
.article-overview .heading-text > * {
	font-size: 18px;
	font-weight: bold;
	line-height: 28px;
	margin-bottom: 1em;
}

.article-overview .directions-link {
	font-size: 18px;
	line-height: 28px;
	text-decoration: underline;
}





.article-overview .form-headline {
	font-size: 24px;
	font-weight: bold;
	line-height: 36px;
	margin-bottom: 20px;
}
@media only screen and (max-width: 735px) {
	.article-overview .form-headline {
		margin-top: 50px;
	}
}
.article-overview .form-text {
	font-size: 18px;
	line-height: 31px;
	margin-bottom: 20px;
}

.article-overview .register-form .text-field-wrapper {
	position: relative;
	z-index: 1;
	height: 40px;
	width: 100%;
	border-bottom: 1px solid #7F7F7F;
	margin-bottom: 25px;
}

.article-overview .register-form .text-field-wrapper .text-field-label {
	display: block;
	position: absolute;
	z-index: -1;
	top: 0;
	left: 0;
	white-space: nowrap;
	color: #8f8f8f;
	font-size: 18px;
	line-height: 40px;
	padding: 0 20px;
	height: 40px;
	transform: translate(0) scale(1);
	transition: transform 0.3s;
	transform-origin: 0 50%;
}

.article-overview .register-form .text-field-wrapper .text-field:focus ~ .text-field-label,
.article-overview .register-form .text-field-wrapper.active .text-field-label {
	transform: translate(-17px, -24px) scale(0.8);
	z-index: 1;
}


.article-overview .register-form .text-field-wrapper .text-field {
	padding: 11px 20px;
	line-height: 28px;
	width: 100%;
	box-sizing: border-box;
}
.article-overview .register-form .button {
	line-height: 50px;
	height: 50px;
	width: 224px;
	text-align: center;
	background-color: #01749F;
	color: #fff;
}

.article-overview .register-form .button .load-spinner {
	display: inline-block;
	width: 16px;
	height: 16px;
	margin-right: 13px;
	border: 2px solid rgba(255,255,255,0.2);
	border-top: 2px solid rgba(255,255,255,1);
	border-radius: 50%;
	vertical-align: middle;
	-webkit-animation: spin 0.6s linear infinite;
	animation: spin 0.6s linear infinite;
}

@keyframes spin {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}














.article-details .title {
	font-size: 24px;
	font-weight: bold;
	line-height: 36px;
	margin-bottom: 20px;
}

.article-details .section-content {
	padding-top: 50px;
	padding-bottom: 50px;
	border-bottom: 1px solid #999;
}
.article-details .details-text > * {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 1em;
}




.article-more {
}

.article-more .section-content {
	padding-top: 50px;
	padding-bottom: 50px;
}

.article-more .button.more {
	border: 1px solid #000;
	color: #000;
}


</style>

<main>
	<nav class="breadcrumbs">
		<div class="section-content">
			<ul class="breadcrumbs-list">
				<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
				<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/news-events/">News and Events</a></li>
				<li class="breadcrumbs-item">Event</li>
			</ul>
		</div>
	</nav>
	<section>
		<article>
		<?php if ( have_rows( 'section_overview' ) ) : ?>
			<?php while ( have_rows( 'section_overview' ) ) : the_row(); ?>
			<div class="article-header">
				<figure class="hero-image"></figure>
				<div class="section-content">
					<div class="headline-wrapper">
						<h1 class="hero-headline"><span><?php the_sub_field( 'headline' ); ?></span></h1>
					</div>
				</div>
			</div>

			<div class="article-overview">
				<div class="section-content">
					<div class="row">
						<?php if ( get_sub_field( 'form_toggle' ) == 1 ) { // echo 'true'; ?>
						<div class="column large-7 small-12">
						<?php } else { ?>
						<div class="column large-12">
						<?php } ?>
						
							<?php if ( have_rows( 'location_and_date' ) ) : ?>
							<?php while ( have_rows( 'location_and_date' ) ) : the_row(); ?>
							<div class="location-date">
								<span class="location"><?php the_sub_field( 'location' ); ?></span>
								<span class="date"><?php the_sub_field( 'date' ); ?> <?php the_sub_field( 'time' ); ?></span>
								<?php endwhile; ?>
								<?php endif; ?>
								<?php if ( have_rows( 'overview' ) ) : ?>
								<?php while ( have_rows( 'overview' ) ) : the_row(); ?>
							</div>
							<h3 class="title"><?php the_sub_field( 'title' ); ?></h3>
							<div class="heading-text"><?php the_sub_field( 'text' ); ?></div>
							<?php endwhile; ?>
							<?php endif; ?>
							<?php if ( have_rows( 'directions' ) ) : ?>
							<?php while ( have_rows( 'directions' ) ) : the_row(); ?>
							<a class="directions-link" href="<?php the_sub_field( 'link_url' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
							<?php endwhile; ?>
							<?php endif; ?>
							</div>
						
						<?php if ( get_sub_field( 'form_toggle' ) == 1 ) { // echo 'true'; ?>
						<div class="column large-4 large-last small-12">
							<?php if ( have_rows( 'form' ) ) : ?>
								<?php while ( have_rows( 'form' ) ) : the_row(); ?>
								<h4 class="form-headline"><?php the_sub_field( 'form_headline' ); ?></h4>
								<p class="form-text"><?php the_sub_field( 'form_text' ); ?></p>
							<?php endwhile; ?>
							<?php endif; ?>
						
							<div class="register-form">
								<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
									<input type=hidden name="oid" value="00D1t000000G0d6" />
									<input type=hidden name="retURL" value="https://jsarc.demo.sixpointsix.net" />
									
										<div class="text-field-wrapper">
											<input id="first_name" class="text-field" name="first_name" type="text" />
											<label class="text-field-label" label for="first_name">First Name</label> 
										</div>
										<div class="text-field-wrapper">
											<input id="last_name" class="text-field" name="last_name" type="text" />
											<label class="text-field-label" label for="last_name">Last Name</label> 
										</div>
										<div class="text-field-wrapper">
											<input id="company" class="text-field" name="company" type="text" />
											<label class="text-field-label" label for="company">Organisation</label> 
										</div>
										<div class="text-field-wrapper">
											<input id="email" class="text-field" name="email" type="text" />
											<label class="text-field-label" label for="email">Email</label> 
										</div>
									
										<!-- <button class="button"><span class="~load-spinner"></span>Submit</button> -->
										<input class="button" type="submit" name="submit"> 
									</div>
								</form>
							</div>
						</div>
						<?php } ?>
						
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>

			<div class="article-details">
				<div class="section-content">
				<?php if ( have_rows( 'section_details' ) ) : ?>
				<?php while ( have_rows( 'section_details' ) ) : the_row(); ?>
					<div class="row">
						<div class="column large-7 small-12">
							<h3 class="title"><?php the_sub_field( 'title' ); ?></h3>
							<div class="details-text"><?php the_sub_field( 'text' ); ?></div>
						<?php endwhile; ?>
					<?php endif; ?>
						</div>
						<div class="column large-4 large-last small-12">
						</div>
					</div>
				</div>
			</div>
			
			<div class="article-more">
				<div class="section-content">
					<?php if ( have_rows( 'see_all_button' ) ) : ?>
						<?php while ( have_rows( 'see_all_button' ) ) : the_row(); ?>
							<a class="button more" href="<?php the_sub_field( 'link_url' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</article>
	</section>	
</main>

<?php
get_footer();
?>
<script>
document.addEventListener('DOMContentLoaded',function() {
	var a = document.querySelectorAll('.text-field-wrapper');
    Array.prototype.forEach.call(a, function(el, i){
    	var b = el.querySelector('.text-field');
		b.addEventListener('change', function() {
			if (b && b.value) {
				el.classList.add('active');
			}
			else {
				el.classList.remove('active');
			}
		});
	});
});
</script>
