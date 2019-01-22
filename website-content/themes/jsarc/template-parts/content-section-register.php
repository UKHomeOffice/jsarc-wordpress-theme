
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