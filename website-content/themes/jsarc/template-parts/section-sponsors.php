

<?php if ( have_rows( 'sposors', 'option' ) ) : ?>
	<?php while ( have_rows( 'sposors', 'option' ) ) : the_row(); ?>
<section class="section sponsors">
	<div class="section-content">
		<h2 class="section-headline"><?php the_sub_field( 'headline' ); ?></h2>
		
		<ul class="logos">
			
		
		<?php if ( have_rows( 'logo' ) ) : ?>
			<?php while ( have_rows( 'logo' ) ) : the_row(); ?>
				<li class="logos-item">
				<?php if ( get_sub_field( 'logo_image' ) ) { ?>
					<figure class="logo-image" style="background-image: url(<?php the_sub_field( 'logo_image' ); ?>?w=300)"></figure>
					<span class="visuallyhidden"><?php the_sub_field( 'name' ); ?></span>
				<?php } ?>
			    </li>
			<?php endwhile; ?>
		<?php endif; ?>
		
		</ul>
		<!--
		<?php if ( have_rows( 'button' ) ) : ?>
			<?php while ( have_rows( 'button' ) ) : the_row(); ?>
				<a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?><?php if ( get_sub_field( 'hidden_text' ) ) { ?> <span class="visuallyhidden"><?php the_sub_field( 'hidden_text' ); ?><?php } ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
		-->
		</div>
</section>
	<?php endwhile; ?>
<?php endif; ?>