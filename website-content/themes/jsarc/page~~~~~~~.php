<?php
/*
 * Template Name: JSaRC Page Template
 * The template for displaying all pages
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>

<?php get_header(); ?>




        <?php
        while ( have_posts() ) :
            the_post();

            // get_template_part( 'template-parts/content', 'page' );

            // Select page content based on current page slug
            if (is_page('homepage')) {
                get_template_part( 'template-parts/content', 'prototype-homepage');
            }

            // Example for multiple page match, using array of pages to match
            if( is_page( array( 'about', 'contact', 'management') ) ) {
                get_template_part( 'template-parts/content', 'prototype-about-page');
            }

            if( is_page( 'case-study') ) {
                get_template_part( 'template-parts/content', 'prototype-case-study');
            }

            if( is_page( 'register') ) {
                get_template_part( 'template-parts/content', 'prototype-register');
            }

            if( is_page( 'our-work') ) {
                get_template_part( 'template-parts/content', 'prototype-our-work-page');
            }
            
            if( is_page( 'news-events') ) {
                get_template_part( 'template-parts/content', 'news-events');
            }
            
            if( is_page( 'national-security-priorities') ) {
                get_template_part( 'template-parts/content', 'national-security-priorities');
            }
            
            

            // If comments are open or we have at least one comment, load up the comment template.
            // if ( comments_open() || get_comments_number() ) :
            //     comments_template();
            // endif;

        endwhile; // End of the loop.
        ?>





<?php get_footer();