<section class="section section-register">
    <div class="section-content">
        <h2 class="section-headline"><?php the_field( 'headline', 'option' ); ?></h2>
        <?php if ( have_rows( 'button', 'option' ) ) : ?>
            <?php while ( have_rows( 'button', 'option' ) ) : the_row(); ?>
                <a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
        <p class="description"><?php the_field( 'body_text', 'option' ); ?></p>
        <?php if ( have_rows( 'social', 'option' ) ) : ?>
        <div class="social">
            <?php while ( have_rows( 'social', 'option' ) ) : the_row(); ?>
            <h3 class="social-headline"><?php the_sub_field( 'headline' ); ?></h3>
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

<section class="section section-register-alt">
    <div class="section-content">
        <h2 class="section-headline"><?php the_field( 'headline', 'option' ); ?></h2>
        <div class="row">
            <div class="column large-6 large-first small-12">
                <div class="inner">
                <h3 class="block-headline">By registering with JSaRC you can receive our latest news and updates</h3>
                <a class="button more" href="">Register with JSaRC</a>
                </div>
            </div>
            <div class="column large-5 large-last small-12">
                <h3 class="block-headline">Follow us on</h3>
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