<style>
.section.section-casestudies .section-image-full-with {
	background-image: url(<?php the_field('section_case_study_background_image_large'); ?>);
}
@media only screen and (max-width: 1068px) {
    .section.section-casestudies .section-image-full-with {
		background-image: url(<?php the_field('section_case_study_background_image_medium'); ?>);
	}
}
@media only screen and (max-width: 735px) {
    .section.section-casestudies .section-image-full-with {
		background-image: url(<?php the_field('section_case_study_background_image_small'); ?>);
	}
}
</style>


<section class="section section-casestudies">
	<figure class="section-image-full-with"></figure>
	<div class="section-content">
		<h3 class="section-headline"><?php the_field( 'section_case_study_headline' ); ?></h3>
		<h4 class="section-sub-heading"><?php the_field( 'section_case_study_sub-heading' ); ?></h4>
		<a class="button more" href="">Read the case study</a>
	</div>
</section>
