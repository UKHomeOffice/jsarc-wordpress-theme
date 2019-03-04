<?php
    /*
     * Template Name: News and Events Page
     *
     * The template for displaying News and Events Landing Page
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package JSaRC
     */
    ?>
<?php get_header(); ?>
<?php function add_to_head() { ?>
<style>
.section.hero .section-content {
    padding-top: 50px;
    padding-bottom: 50px;
}

.section.hero .first h1 {
    font-size: 48px;
    font-weight: bold;
    line-height: 75px;
    color: #444;
    margin-bottom: .5em;
}

@media only screen and (max-width: 735px) {
    .section.hero .first h1 {
        font-size: 36px;
        line-height: 1.2;
    }
}

.section.hero .first p {
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    color: #444;
    margin-bottom: 1em;
}

.section.hero .body-text {
    font-size: 18px;
    line-height: 28px;
    color: #4A4A4A;
    margin-bottom: 34px;
}

.section.hero .box-link {
    display: block;
    min-height: 120px;
    width: 300px;
    background-color: #047989;
    margin-bottom: 50px;
    float: right;
    position: relative;
    padding-bottom: 50px;
}

.section.hero .box-link .box-link-headline {
    padding: 33px 25px 20px;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
}

.section.hero .box-link .box-link-headline:after {
    content: '';
    display: inline-block;
    vertical-align: baseline;
    width: 42px;
    height: 42px;
    background-size: 42px 42px;
    background-image: url("/wp-content/themes/jsarc/img/v/generic/icons/a/call-icon.png");
    margin-left: 15px;
}

.section.hero .box-link .box-link-subheading {
    padding: 0 25px 20px;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    line-height: 24px;
}

.section.hero .box-link .box-link-content {
    padding: 0 25px 25px;
    color: #fff;
    font-size: 18px;
    line-height: 24px;
}

.section.hero .box-link .box-link-content>* {
    margin-bottom: 1em;
}

.section.hero .box-link .box-link-content>*:last-child {
    margin-bottom: 0;
}

.section.hero .box-link:hover .box-link-content {
    text-decoration: underline;
}

.section.hero .box-link .arrow {
    content: '';
    display: block;
    width: 14px;
    height: 14px;
    border: 0 solid #fff;
    border-width: 4px 4px 0 0;
    transform: rotate(45deg);
    position: absolute;
    bottom: 33px;
    right: 25px;
}

@media only screen and (max-width: 1068px) {
    .section.hero .box-link {
        display: block;
        width: 200px;
        min-height: 205px;
    }
}

@media only screen and (max-width: 735px) {
    .section.hero .box-link {
        width: 290px;
        min-height: 120px;
        float: none;
        margin-left: auto;
        margin-right: auto;
    }
}

.section.news {
    background-color: #E3E3E3;
}

.section.news .headline {
    font-size: 36px;
    font-weight: bold;
    line-height: 42px;
    margin-bottom: 50px;
}

.section.news .section-content {
    padding-top: 75px;
    padding-bottom: 75px;
}

.section.news.events .section-content {
    padding-top: 0;
}

.section.news .list-item {
    display: block;
    margin-bottom: 25px;
}

.section.news .post {
    display: block;
    min-height: 140px;
    position: relative;
    background: #fff;
    overflow: hidden;
}

.section.news .featured .post {
    min-height: 366px;
}

.section.news .post .image-wrapper {
    position: absolute;
    width: 250px;
    height: 100%;
    overflow: hidden;
}

.section.news .featured .post .image-wrapper {
    width: 66%;
}

.section.news .post .image-wrapper:after {
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: transparent;
    transition: background-color 250ms ease;
}

.section.news .post:hover .image-wrapper:after {
    background-color: rgba(0, 0, 0, 0.15);
}

.section.news .post .thumbnail {
    width: 100%;
    height: 100%;
    background-size: cover;
    position: absolute;
    transition: transform 0.25s;
    transform: scale(1);
}

.section.news .post:hover .thumbnail {
    transform: scale(1.05);
}

.section.news .post .text-wrapper {
    margin-left: 250px;
    padding-left: 25px;
    padding-right: 25px;
    position: relative;
    min-height: 100px;
    padding-bottom: 40px;
    transition: transform 250ms ease;
}

.section.news .featured .post .text-wrapper {
    margin-left: 66%;
    min-height: 326px;
}

.section.news.events .post .text-wrapper {
    padding-bottom: 10px;
}

.section.news .post:hover .text-wrapper {
    transform: translate(-8px, 0);
}

.section.news .post .text-wrapper:before {
    content: '';
    position: absolute;
    z-index: -1;
    min-height: 100vh;
    width: 100%;
    left: 0;
    top: 0;
    background-color: #fff;
}

.section.news .post .text-wrapper .title {
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    color: #1E4289;
    padding-top: 25px;
}

.section.news .featured .post .text-wrapper .title {
    font-size: 30px;
    line-height: 38px;
    margin-bottom: 20px;
}

.section.news .featured .post .text-wrapper .snippet-text {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 8px;
}

.section.news .post .text-wrapper .title .date {
    display: block;
    font-size: 14px;
    line-height: 1.3;
}

.section.news .post .text-wrapper .bottom-line {
    height: 20px;
    line-height: 20px;
    position: absolute;
    bottom: 10px;
    left: 25px;
    font-size: 16px;
}

.section.news.events .post .text-wrapper .text {
    margin-top: 15px;
}
.section.news .button.more {
    border: 2px solid #000;
    margin-top: 30px;
}
@media only screen and (max-width: 1024px) {
    .section.news .headline {
        font-size: 32px;
        line-height: 36px;
    }
    .section.news .featured .post .text-wrapper .title {
        font-size: 24px;
        line-height: 30px;
    }
    .section.news .featured .post .text-wrapper .snippet-text {
        font-size: 16px;
        line-height: 26px;
    }
}
@media only screen and (max-width: 735px) {
    .section.news .headline {
        text-align: center;
    }
    .section.news .post,
    .section.news .featured .post {
        min-height: auto;
    }
    .section.news .featured .post .image-wrapper {
        width: 100%;
    }
    .section.news .post,
    .section.news.events .featured .post {
        width: 250px;
        margin: 0 auto 50px;
    }
    .section.news .post .image-wrapper,
    .section.news.events .featured .image-wrapper {
        position: relative;
        height: 140px;
    }
    .section.news .post .text-wrapper,
    .section.news .featured .post .text-wrapper {
        margin-left: 0;
        padding-left: 20px;
        padding-right: 20px;
        min-height: auto;
    }
    .section.news .post:hover .text-wrapper {
        transform: translate(0, -20px);
    }
    .section.news .post .text-wrapper .title,
    .section.news .featured .post .text-wrapper .title {
        padding-top: 20px;
        font-size: 18px;
        line-height: 28px;
    }
    .section.news .featured .post .text-wrapper .title {
        margin-bottom: 10px;
    }
    .section.news .featured .post .text-wrapper .snippet-text {
        font-size: 18px;
        line-height: 28px;
    }
    .section.news .post .text-wrapper .bottom-line {
        left: 20px;
    }
    
    .section.news .button.more {
        display: block;
        max-width: 230px;
        margin-left: auto;
        margin-right: auto;
    }
}
</style>
<?php } ?>

    <nav class="breadcrumbs" aria-label="breadcrumb">
        <div class="section-content">
            <ul class="breadcrumbs-list">
                <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
                <li class="breadcrumbs-item" aria-current="page">News and Events</li>
            </ul>
        </div>
    </nav>
    <header class="section hero">
        <div class="section-content">
            <div class="row">
                <div class="first column large-8 small-12">
                    <h1><?php the_field('header_headline'); ?></h1>
                    <?php the_field('header'); ?>
                </div>
                <?php if ( have_rows( 'next_event' ) ) : ?>
                <div class="column large-4 large-last small-12">
                    <aside class="aside">
                        <div class="aside content">
                            <?php while ( have_rows( 'next_event' ) ) : the_row(); ?>
                            <a class="box-link" href="<?php the_sub_field( 'link_url' ); ?>">
                                <h2 class="box-link-headline"><?php the_sub_field( 'headline' ); ?></h2>
                                <h3 class="box-link-subheading"><?php the_sub_field( 'subheading' ); ?></h3>
                                <div class="box-link-content"><?php the_sub_field( 'body_text' ); ?></div>
                                <span class="arrow"></span>
                            </a>
                            <?php endwhile; ?>
                        </div>
                    </aside>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <section class="section news">
        <div class="section-content">
            <h2 class="headline">Latest news articles</h2>
            <?php 
                // query
                $the_query = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'news',
                'posts_per_page' => 5,
                'meta_key' => 'featured_post',
                'orderby' => 'meta_value'
                ));
             ?>
            <?php if( $the_query->have_posts() ): ?>
            <ul>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); 
                    $class = get_field('featured_post') ? ' featured' : '';
                    
                    ?>
                <li class="list-item <?php echo $class; ?>">
                    <a class="post" href="<?php the_permalink(); ?>">
                        <div class="image-wrapper">
                            <?php if ( get_field( 'featured_post' ) == 1 ) { ?>
                            <figure class="thumbnail" style="background-image:url(<?php the_field('thumb_image', $post->ID); ?>?fit=crop&w=1294?&h=732)"></figure>
                            <?php } else { ?>
                            <figure class="thumbnail" style="background-image:url(<?php the_field('thumb_image', $post->ID); ?>?fit=crop&w=500?&h=280)"></figure>
                            <?php } ?>
                            
                        </div>
                        <div class="text-wrapper">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <?php if ( get_field( 'featured_post' ) == 1 ) { ?>
                            <p class="snippet-text"><?php the_field( 'snippet_text' ); ?></p>
                            <?php } ?>
                            <span class="bottom-line"><?php the_date('d F Y'); ?></span>
                            <!--?php
                                $posttags = get_the_tags();
                                $count=0;
                                if ($posttags) {
                                  foreach($posttags as $tag) {
                                    $count++;
                                    if (1 == $count) {
                                      echo $tag->name;
                                    }
                                    else {
                                        echo ', ' . $tag->name;
                                    }
                                  }
                                }
                                ?-->
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
            <a class="button more" href="/news/">See all JSaRC news articles</a>
        </div>
    </section>
    
    <section class="section news events">
        <div class="section-content">
            <h2 class="headline">Upcoming events</h2>
            <ul>
                <?php
                    $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'events',
                    'posts_per_page' => 5
                    );
                    $arr_posts = new WP_Query($args);
                    if ($arr_posts->have_posts()):
                        while ($arr_posts->have_posts()):
                            $arr_posts->the_post();
                ?>
                <li class="list-item">
                    <a class="post" href="<?php the_permalink(); ?>">
                        <div class="image-wrapper">
                            <figure class="thumbnail" style="background-image:url(<?php the_field('thumb_image', $post->ID); ?>?fit=crop&w=500?&h=280)"></figure>
                        </div>
                        <div class="text-wrapper">
                            <h3 class="title">
                                <span class="date">
                                <?php while ( have_rows( 'section_overview' ) ) : the_row();  while ( have_rows( 'location_and_date' ) ) : the_row(); the_sub_field( 'date' ); ?> <?php the_sub_field( 'time' ); endwhile; endwhile; ?>
                                </span>
                                <?php the_title(); ?>
                            </h3>
                            <?php if ( get_sub_field( 'form_toggle' ) == 1 ) { ?>
                            <p class="text">Register your interest</p>
                            <?php } else { ?>
                            <p class="text">Register your interest</p>
                            <?php } ?>
                        </div>
                    </a>
                </li>
                <?php
                    endwhile;
                    endif;
                    ?>
            </ul>
        </div>
    </section>
    <?php get_template_part( 'template-parts/section', 'register'); ?>

<?php get_footer();