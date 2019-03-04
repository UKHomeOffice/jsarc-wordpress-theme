<section class="section section-register-alt">
    <div class="section-content">
        <h2 class="section-headline"><?php the_field( 'headline', 'option' ); ?></h2>
        <div class="row">
            <div class="column large-6 large-first small-12">
                <div class="inner">
                    <h3 class="block-headline">
                        <?php the_field( 'body_text', 'option' ); ?>
                    </h3>
                    <?php if ( have_rows( 'button', 'option' ) ) : ?>
                    <?php while ( have_rows( 'button', 'option' ) ) : the_row(); ?>
                    <a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?></a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ( have_rows( 'social', 'option' ) ) : ?>
            <?php while ( have_rows( 'social', 'option' ) ) : the_row(); ?>
            <div class="column large-6 large-last small-12">
                <div class="inner">
                    <h3 class="block-headline">
                        <?php the_sub_field( 'headline' ); ?>
                    </h3>
                    <div class="social">
                        <ul class="social-list">
                            <?php if ( have_rows( 'social_links' ) ) : ?>
                            <?php while ( have_rows( 'social_links' ) ) : the_row(); ?>
                            <li class="social-item"><a class="social-link <?php the_sub_field( 'social_network' ); ?>" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'social_network' ); ?></a></li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>