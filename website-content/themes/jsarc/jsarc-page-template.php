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

get_header();
?>

<main>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );


      // select page content based on current page slug

      if (is_page('homepage')) {
        get_template_part( 'template-parts/content', 'homepage-prototype');
      }

      // example for multiple page match
      if( is_page( array( 'about', 'contact', 'management') ) ) {
        get_template_part( 'template-parts/content', 'about-page-prototype');
      }

      

     //either in about us, or contact, or management page is in view
      // switch ($i) {
      //   case "apple":
      //       echo "i is apple";
      //       break;
      //   case "bar":
      //       echo "i is bar";
      //       break;
      //   case "cake":
      //       echo "i is cake";
      //       break;
      //   default:
      //       echo "i is not equal to 0, 1 or 2";
      // }

     

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
</main>


<?php
get_footer();