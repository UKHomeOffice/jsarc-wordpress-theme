<?php
/**
 * JSaRC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JSaRC
 */

if ( ! function_exists( 'jsarc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jsarc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JSaRC, use a find and replace
		 * to change 'jsarc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jsarc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'jsarc' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'jsarc_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
    ) );
	}
endif;
add_action( 'after_setup_theme', 'jsarc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jsarc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'jsarc_content_width', 640 );
}
add_action( 'after_setup_theme', 'jsarc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jsarc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jsarc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jsarc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jsarc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jsarc_scripts() {
	wp_enqueue_style( 'jsarc-style', get_stylesheet_uri() );

  wp_enqueue_script( 'jsarc-scripts', get_template_directory_uri() . '/js/app.bundle.js', array ( ), '20180924', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jsarc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Load wordpres page/post creator class
 */
require get_template_directory() . '/inc/post-creator.php';



/**********************************************************************************
*
*					CUSTOM MODIFICATION BELOW
*
***********************************************************************************/



/**
 * Remove DNS Prefetching from header
 */
remove_action('wp_head', 'wp_resource_hints', 2);

/**
 * Remove the inline Emoji detection script from header
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );

/**
 * Remove emoji-related styles from header
 */
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Remove REST API link tag from header
 */
remove_action( 'wp_head', 'rest_output_link_wp_head' );

/**
 * Remove Really Simple Discovery (RSD) link tag from header
 */
remove_action ('wp_head', 'rsd_link');

/**
 * Remove the Windows Live Writer link tag from header
 */
remove_action( 'wp_head', 'wlwmanifest_link');

/**
 * Remove XHTML generator meta tag from header
 */
 remove_action('wp_head', 'wp_generator');


/**
 *  Remove Customize button from admin menu bar
 */
add_action( 'wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render' ); 

/**
 *  Prevent Wordpress from auto-inserting p tags
 */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


function wpse200296_before_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('customize');
}






/**********************************************************************************
*
*					JSARC PRIMARY NAV
*
***********************************************************************************/



/**
 * Register JSaRC Primary Nav
 */
function register_jsarc_primary_nav() {
  register_nav_menu('jsarc-primary-nav',__( 'JSaRC Primary Nav' ));
}
add_action( 'init', 'register_jsarc_primary_nav' );





// class description_walker extends Walker_Nav_Menu {
class Walker_Quickstart_Menu extends Walker_Nav_Menu {
//  function start_el(&$output, $item, $depth, $args) {
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

	global $wp_query;
	$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	
	$class_names = $value = '';
	$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	
	
	 if ($args->walker->has_children) {
	  if (0 === $depth) {
		$classes[] = 'dropdown';
	  } else {
		$classes[] = 'dropdown-submenu';
	  }
	} 
	
		
	$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
	$class_names = ' class="primary-nav-item '. esc_attr( $class_names ) . '"';
	//$output .= $indent . '<li id="primary-nav-item-'. $item->ID . '"' . $value . $class_names .'>';
	$output .= $indent . '<li ' . $value . $class_names .'>';
	
	$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	$description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
	/*
	$prepend = '<span>';
	$append = '</span>';
	*/
	$description  = ! empty( $item->description ) ? ' <span class="hidden">'.esc_attr( $item->description ).'</span>' : '';

	if($depth != 0) {
		$description = $append = $prepend = "";
	}

	$item_output = $args->before;
	$item_output .= '<a class="primary-nav-link"'. $attributes .'>';
	$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
	$item_output .= $description.$args->link_after;
	$item_output .= '</a>';
	$item_output .= $args->after;

	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

  }
}



//Remove all classes and ID from Nav Menu
function remove_css_id_filter($var) {
	return is_array($var) ? array_intersect($var, array('current-menu-item', 'dropdown')) : '';
}


add_filter('page_css_class', 'remove_css_id_filter', 100, 1);
add_filter('nav_menu_item_id', 'remove_css_id_filter', 100, 1);
add_filter('nav_menu_css_class', 'remove_css_id_filter', 100, 1);


// Create Pages needed for JSaRC prototype
$Homepage = new PostController;
$Homepage->set_title( "homepage" );
$Homepage->add_category(array(1,2,8));
$Homepage->set_type( "page" );
$Homepage->set_content( "" );
$Homepage->set_author_id( 1 );
$Homepage->set_post_slug( 'homepage' );
$Homepage->set_page_template( "template-jsarc-page.php" );
$Homepage->set_post_state( "publish" );
$Homepage->create();

$AboutPage = new PostController;
$AboutPage->set_title( "about" );
$AboutPage->add_category(array(1,2,8));
$AboutPage->set_type( "page" );
$AboutPage->set_content( "" );
$AboutPage->set_author_id( 1 );
$AboutPage->set_post_slug( 'about' );
$AboutPage->set_page_template( "template-jsarc-page.php" );
$AboutPage->set_post_state( "publish" );
$AboutPage->create();

$CaseStudyPage = new PostController;
$CaseStudyPage->set_title( "case-study" );
$CaseStudyPage->add_category(array(1,2,8));
$CaseStudyPage->set_type( "page" );
$CaseStudyPage->set_content( "" );
$CaseStudyPage->set_author_id( 1 );
$CaseStudyPage->set_post_slug( 'case-study' );
$CaseStudyPage->set_page_template( "template-jsarc-page.php" );
$CaseStudyPage->set_post_state( "publish" );
$CaseStudyPage->create();


// TODO: Set homepage as default start page for the website on theme activation


// function my_after_setup_theme() {
// }
// add_action( 'after_setup_theme', 'my_after_setup_theme') ;




/**
 * Set homepage as default start page for the JSaRC website
 */
add_action('init', 'update_reading_settings');

function update_reading_settings() {
  update_option( 'show_on_front', 'page' );
  update_option( 'page_for_posts', 'homepage' );
}




/**
 * Gets a menu id by name
 * 
 * @param string $name The menu name
 * @return int|boolean The menu id or false if not found
 */
function wp_menu_id_by_name( $name ) {
  $menus = get_terms( 'nav_menu' ); 

  foreach ( $menus as $menu ) {
      if( $name === $menu->name ) {
          return $menu->term_id;
      }
  }
  return false;
}


/**  
 * Generic generate custom menu link
 * (used when generating the default top nav for the jsarc theme)
*/
function generate_site_nav_menu_item( $term_id, $title, $url ) {
    
  wp_update_nav_menu_item($term_id, 0, array(
    'menu-item-title'   =>  sprintf( __('%s', 'text_domain'), $title ),
    'menu-item-url'     =>  home_url( '/' . $url ), 
    'menu-item-status'  =>  'publish'
  ) );

}

/**  
 * Generic generate nav-menu 
*/
function generate_site_nav_menu( $menu_name, $menu_items_array, $location_target ) {
    
  $menu_primary = $menu_name;
  wp_create_nav_menu( $menu_primary );
  $menu_primary_obj = get_term_by( 'name', $menu_primary, 'nav_menu' );
  
  foreach( $menu_items_array as $page_name => $page_location ){
    generate_site_nav_menu_item( $menu_primary_obj->term_id, $page_name, $page_location );
  }
  
  $locations_primary_arr = get_theme_mod( 'nav_menu_locations' );
  $locations_primary_arr[$location_target] = $menu_primary_obj->term_id;
  set_theme_mod( 'nav_menu_locations', $locations_primary_arr );
      
  update_option( 'menu_check', true );
  
}

/**  
 * Generate default JSaRC menu 
 * 
 *  Default menu links:
 * "National Security Priorities", 
 * "Our Work", 
 * "News and Events", 
 * "About JSaRC"
*/

/**
 * After switching to JSaRC theme, 
 * auto-populate wordpress menu with default page links 
 */
function my_after_switch_theme() {   
    $run_menu_maker_once = get_option('menu_check');
    
    /**
     *  Uncomment this conditional to make sure the default menu items 
     *  are only generated once on the first the theme is activated. 
     */
     /* if ( ! $run_menu_maker_once ){ */
      $primary_menu_items = array(
          'National Security Priorities'  =>  'national-security-priorities',
          'Our Work' =>  'our-work',        
          'News and Events'   =>  'news-events',
          'About JSaRC'    =>  'about-jsarc'
      );
      generate_site_nav_menu( 'JSaRC Primary Nav', $primary_menu_items, 'primary' );
    /* } */

    $locations = get_theme_mod('nav_menu_locations');

    $myMenuId = wp_menu_id_by_name( 'JSaRC Primary Nav' );
    $locations['jsarc-primary-nav'] = $myMenuId;
    set_theme_mod( 'nav_menu_locations', $locations );
  }
  add_action( 'after_switch_theme', 'my_after_switch_theme');
