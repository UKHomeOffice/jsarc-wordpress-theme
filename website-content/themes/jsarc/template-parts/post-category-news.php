<?php
    /**
     * The template for displaying all single news
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package JSaRC
     */
    get_header();
    ?>
<style>
.post {
	padding-bottom: 75px;
}

.post .section-content {
	max-width: 800px;
}

.post .hero-image {
	max-width: 2560px;
	width: 100%;
	height: 300px;
	background-size: cover;
	background-position: 50% 50%;
	background-image: url("<?php if ( get_field( 'hero_image' ) ) { the_field( 'hero_image' ); } ?>?fit=crop&w=2560&h=300");
}

@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-resolution: 1.5dppx), (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi) {
	.hero .hero-image {
		background-image: url("<?php if ( get_field( 'hero_image' ) ) { the_field( 'hero_image' ); } ?>?fit=crop&w=5120&h=600");
	}
}

.post .post-headline {
	margin-top: 75px;
	font-size: 30px;
	line-height: 38px;
	font-weight: bold;
	padding-bottom: 27px;
	border-bottom: 1px solid #979797;
	margin-bottom: 9px;
}

.post .post-details-bar {
	font-size: 16px;
	line-height: 28px;
	margin-bottom: 50px;
}

.post .post-details-bar>* {
	display: inline-block;
}

.post .post-details-bar .date {
	margin-right: 35px;
}

.post .news-text {
	font-size: 18px;
	line-height: 28px;
	padding-bottom: 50px;
	margin-bottom: 50px;
	border-bottom: 1px solid #979797;
}

.post .news-text a {
	color: #1155a4;
}

.post .news-text a:hover {
	text-decoration: underline;
}

.post .news-text>ul,
.post .news-text ol,
.post .news-text p {
	margin-bottom: 1em;
}

.post .news-text>ul li {
	margin-left: 1em;
	list-style: none;
}

.post .news-text>ul li:before {
	content: '';
	display: inline-block;
	vertical-align: middle;
	width: 5px;
	height: 5px;
	background-color: #000;
	border-radius: 50%;
	margin-right: 1em;
}

.post .news-text ol {
	margin-left: 1em;
}

.post .news-text>ul li,
.post .news-text ol li {
	margin-left: 1em;
}

.gallery {
	width: 100%;
	position: relative;
	user-select: none;
	-moz-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	margin-top: 50px;
	margin-bottom: 50px;
}

.gallery .gallery-container {
	width: 100%;
}

.gallery .gallery-container .gallery-item {
	width: 100%;
	display: none;
}

.gallery .gallery-container .gallery-item.show {
	display: block;
	animation: fading 1s forwards;
}

@keyframes fading {
	0% {
		opacity: 0
	}
	100% {
		opacity: 1
	}
}

.gallery .gallery-container .gallery-item .gallery-image {
	width: 100%;
	height: auto;
	padding-bottom: 66.666%;
	background-size: cover;
	background-position: 50% 50%;
}

.gallery .gallery-button {
	position: absolute;
	top: 0;
	bottom: 0;
	margin: auto;
	width: 60px;
	height: 60px;
	border-radius: 50%;
	transition: .3s left, .3s right, .3s transform;
}

.gallery .gallery-button:before {
	content: '';
	display: block;
	width: 100%;
	height: 100%;
	opacity: 0;
	background-color: #D8D8D8;
	border-radius: 50%;
	transition: .3s opacity;
}

.gallery .gallery-button:hover:before {
	opacity: 0.52;
}

.gallery .gallery-button.prev {
	left: -100px;
}

.gallery .gallery-button.next {
	right: -100px;
}

.gallery .gallery-button:after {
	content: '';
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
	margin-top: auto;
	margin-bottom: auto;
	width: 18px;
	height: 18px;
	transform: rotate(45deg);
	border: 5px solid #000;
}

.gallery .gallery-button.prev:after {
	border-width: 0 0 5px 5px;
	left: 23px;
}

.gallery .gallery-button.next:after {
	border-width: 5px 5px 0 0;
	right: 23px;
}

@media only screen and (max-width: 1068px) {
	.gallery .gallery-button {
		transform: scale(.7);
	}
	.gallery .gallery-button:before {
		opacity: 0.52;
	}
	.gallery .gallery-button.prev {
		left: 0;
	}
	.gallery .gallery-button.next {
		right: 0;
	}
}

@media only screen and (max-width: 735px) {
	.gallery .gallery-container .gallery-item .gallery-image {
		padding-bottom: 80%;
	}
}

.related {
	background-color: #E3E3E3;
	§§
}

.related .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}

.related .related-posts-title {
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	padding-bottom: 50px;
}

.related .related-list {
	margin-bottom: 50px;
}

.related .related-list .related-list-item {}

@media only screen and (max-width: 735px) {
	.related .related-list .related-list-item {
		margin-bottom: 25px;
	}
}

.related .related-list .related-list-item-link {
	display: block;
	background-color: #fff;
	width: 90%;
	max-width: 300px;
	margin-left: auto;
	margin-right: auto;
	min-height: 400px;
	position: relative;
}

.related .related-list .related-list-item-image-wrapper {
	width: 100%;
	height: auto;
}

.related .related-list .related-list-item-image-wrapper .image {
	display: block;
	background-size: cover;
	background-position: 50% 50%;
	width: 100%;
	height: auto;
	padding-bottom: 66%;
}

.related .related-list .related-list-item-text {
	padding: 25px;
}

.related .related-list .related-list-item-headline {
	font-size: 18px;
	font-weight: bold;
	line-height: 24px;
	color: #4A4A4A;
	margin-bottom: 40px;
}

.related .related-list .related-list-item-link:hover .related-list-item-headline {
	color: #1E4289;
	text-decoration: underline;
}

.related .related-list .related-list-item-details-bar {
	position: absolute;
	width: 100%;
	bottom: 25px;
}

.related .related-list .related-list-item-date {
	font-size: 14px;
}

.related .related-list .related-list-item-tags {
	font-size: 14px;
	float: right;
	margin-right: 50px;
}

.related .button.more {
	border: 2px solid #000;
}

.related .tags {
	border-top: 1px solid #979797;
	padding-top: 22px;
	margin-top: 75px;
}

.related .tags .tags-title {
	font-size: 20px;
	font-weight: bold;
	line-height: 34px;
	margin-bottom: 25px;
}

.related .tags .tags-list li {
	display: inline-block;
	margin-right: 10px;
	margin-bottom: 10px;
}

.related .tags .tags-list li:last-child {
	margin-right: 0;
}

.related .tags .tags-list li a {
	white-space: nowrap;
	display: inline-block;
	height: 35px;
	line-height: 35px;
	padding: 0 20px;
	border-radius: 25px;
	background-color: #3B5996;
	font-size: 16px;
	font-weight: bold;
	text-align: center;
	color: #fff;
}
</style>

<nav class="breadcrumbs" aria-label="breadcrumb">
    <div class="section-content">
        <ul class="breadcrumbs-list">
            <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
            <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/news-events/">News and Events</a></li>
            <li class="breadcrumbs-item" aria-current="page">News</li>
        </ul>
    </div>
</nav>
<article class="post">
    <figure class="hero-image"></figure>
    <div class="section-content">
    <h1 class="post-headline"><?php the_title(); ?></h1>
    <div class="post-details-bar">
        Published on 
        <span class="date">
            <!--?php the_field( 'date' ); ?--><?php the_date('d F Y'); ?>
        </span>
        <p class="tags">
            <?php
                $posttags = get_the_tags();
                $count=0;
                if ($posttags) {
                  foreach($posttags as $tag) {
                	$count++;
                	if (1 == $count) {
                	  echo $tag->name;
                	}
                	else {
                		echo ' | ' . $tag->name;
                	}
                  }
                }
                ?>
            </p>
    </div>
    <div class="post-text-wrapper">
        <div class="news-text">
            <?php the_field( 'news_text' ); ?>
            <?php if ( have_rows( 'gallery' ) ) : ?>
            <div class="gallery" aria-hidden="true">
                <ul class="gallery-container">
                    <?php while ( have_rows( 'gallery' ) ) : the_row(); ?>
                    <?php if ( get_sub_field( 'image' ) ) { ?>
                    <li class="gallery-item">
                        <figure class="gallery-image" style="background-image:url(<?php the_sub_field( 'image' ); ?>?fit=crop&w=1600&h=1066)"></figure>
                    </li>
                    <?php } ?>
                    <?php endwhile; ?>
                </ul>
                <button class="gallery-button prev" aria-label="Previous image" onclick="plusDivs(-1)"></button>
                <button class="gallery-button next" aria-label=">Next image" onclick="plusDivs(1)"></button>
            </div>
            <?php endif; ?>
            <?php the_field( 'news_text_copy' ); ?>
        </div>
    </div>
</article>
<section class="section related">
    <div class="section-content">
        <?php
            //for use in the loop, list 3 post titles related to first tag on current post
            $tags = wp_get_post_tags($post->ID);
            if ($tags) {
            $tag_ids = array();
            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $args=array(
            'tag__in' => $tag_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page'=>3,
            'orderby'=>'rand',
            'caller_get_posts'=>1,
            'category_name' => 'news',
            );
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
            ?>
        <h4 class="related-posts-title"><?php the_field( 'related_news_title' ); ?></h4>
        <ul class="row related-list">
            <?php
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <li class="column large-4 small-12 related-list-item">
                <a class="related-list-item-link" href="<?php the_permalink(); ?>">
                    <div class="related-list-item-image-wrapper">
                        <figure class="image" style="background-image:url(<?php the_field('thumb_image', $post->ID); ?>)"></figure>
                    </div>
                    <div class="related-list-item-text">
                        <h3 class="related-list-item-headline"><?php the_title(); ?></h3>
                        <div class="related-list-item-details-bar">
                            <span class="related-list-item-date">
                                <?php the_date('d F Y'); ?><!--?php the_field( 'date' ); ?-->
                            </span>
                            <!--p class="related-list-item-tags"> 
                                <?php
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
                                    ?>
                                </p-->
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <?php
            endwhile;  
            }
            wp_reset_query();
            }
             if ( have_rows( 'see_all_button' ) ) : ?>
        <?php while ( have_rows( 'see_all_button' ) ) : the_row(); ?>
        <a class="button more" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?></a>
        <?php endwhile; ?>
        <?php endif; ?>
        <!--div class="tags">
            <h4 class="tags-title"><?php the_field( 'tags_title' ); ?></h4>
            <?php
                $tags = get_tags();
                $html = '<ul class="tags-list">';
                foreach ( $tags as $tag ) {
                	$tag_link = get_tag_link( $tag->term_id );
                
                	//$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                	$html .= "<li><a href='{$tag_link}'>";
                	$html .= "{$tag->name}</a></li>";
                }
                $html .= '</ul>';
                echo $html;
                ?>
            </div-->
    </div>
</section>

<?php get_template_part( 'template-parts/content', 'section-register'); ?>

<?php function add_to_footer() { ?>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("gallery-item");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].classList.remove("show");
      }
      x[slideIndex-1].classList.add("show");
    }
</script>
<?php } ?>

<?php get_footer(); ?>