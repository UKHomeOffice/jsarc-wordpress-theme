<?php
/**
 * The template for National Security Priorities
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
	background-image: url("<?php if ( get_field( 'hero_image' ) ) { the_field( 'hero_image' ); } ?>");
}



</style>




	<nav class="breadcrumbs">
		<div class="section-content">
			<ul class="breadcrumbs-list">
				<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
				<li class="breadcrumbs-item"><?php the_title(); ?></li>
			</ul>
		</div>
	</nav>
	<header class="section hero">
		<div class="section-content">
			<?php the_field( 'hero_heading_text' ); ?>
			<?php the_field( 'hero_body_text' ); ?>
		</div>
	</header>
	
	
	<?php if ( have_rows( 'sections' ) ) : ?>
		<?php while ( have_rows( 'sections' ) ) : the_row(); ?>
		
		<?php if ( get_sub_field( 'image_alignment_' ) == 1 ) {  // echo 'true';  ?>
			
			 <section class="section box image-right">
			<?php } else { // echo 'false';   ?>
			 
			  <section class="section box image-left">
			<?php } ?>
		
 
		<div class="section-content">
		<div>
			<?php if ( get_sub_field( 'section_image' ) ) { ?>
				<figure style="background-image: url(<?php the_sub_field( 'section_image' ); ?>)"></figure>
			<?php } ?>
		</div>
		<div>	
			<?php if ( have_rows( 'section' ) ) : ?>
				<?php while ( have_rows( 'section' ) ) : the_row(); ?>
					<?php the_sub_field( 'section_headline' ); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php the_sub_field( 'section_body_text' ); ?>
			<?php if ( have_rows( 'section_links' ) ) : ?>
				<?php while ( have_rows( 'section_links' ) ) : the_row(); ?>
					<?php if ( have_rows( 'section_link' ) ) : ?>
						<?php while ( have_rows( 'section_link' ) ) : the_row(); ?>
							<?php the_sub_field( 'section_link_text' ); ?>
							<?php the_sub_field( 'section_link_url' ); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		<?php endwhile; ?>
		</div>
		</div>
	</section>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
	

	
	<section class="section engaging">
		<div class="section-content">
			
		</div>
	</section>

<?php get_template_part( 'template-parts/content', 'section-register'); ?>
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





