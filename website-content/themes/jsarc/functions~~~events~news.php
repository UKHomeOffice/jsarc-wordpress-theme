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


/**
 *  Remove page editor from wordpress dashboard
 */
// add_filter( 'user_can_richedit' , '__return_false', 50 );
function reset_editor()
{
     global $_wp_post_type_features;
     $post_type="page";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {
     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}
add_action("init","reset_editor");

/**
 *  Remove news/posts editor from wordpress dashboard
 */
function reset_post_editor()
{
     global $_wp_post_type_features;
     $post_type="post";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {
     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}
add_action("init","reset_post_editor");

/**
 *  The options page feature provides a set of functions to add extra admin pages to edit ACF fields
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Shared Content',
		'menu_title'	=> 'Shared Content',
		'menu_slug'	=> 'shared-content',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> '',
		'position'		=> false,
		'icon_url'		=> false,
		'redirect'		=> false
	));
 	/*
	// <footer>...</footer>
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug'	=> 'theme-options-footer',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'shared-content',
		'position'		=> false,
		'icon_url'		=> false
	));
	
	// <section class="projects">...</section>
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Projects',
		'menu_title'	=> 'Section Projects',
		'menu_slug'	=> 'theme-options-section-projects',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'shared-content',
		'position'		=> false,
		'icon_url'		=> false
	));
 	*/
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

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

	global $wp_query;
	$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	
	$class_names = $value = '';
	$classes = empty( $item->classes ) ? array() : (array) $item->classes;

	
	if ($args->walker->has_children && $depth === 0) {
		$classes[] = 'dropdown';
	} 
	
	$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
	
	if($depth != 0) {
		$class_names = ' class="sub-menu-item '. esc_attr( $class_names ) . '"';
	}
	else {
		$class_names = ' class="menu-item '. esc_attr( $class_names ) . '"';
	}
	$output .= $indent . '<li ' . $value . $class_names .'>';
	
	$attributes = ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

	$prepend = '<span class="link-text">';
	$append = '</span>';



	$item_output = $args->before;
	if($depth != 0) {
		$item_output .= '<a class="sub-menu-link"'. $attributes .'>';
	}
	
	else if ($args->walker->has_children && $depth === 0) {
		$item_output .= '<a class="menu-link" aria-haspopup="true" aria-expanded="false"'. $attributes .'>';
	}
	else {
		$item_output .= '<a class="menu-link"'. $attributes .'>';
	}
	$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
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

/**********************************************************************************
*
*				\ END JSARC PRIMARY NAV
*
***********************************************************************************/


/**
 *  Rename the default "Posts" to "News"
 */
 /*
 function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News';
    $submenu['edit.php'][16][0] = 'News Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
    $labels->all_items = 'All News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );
*/

/**
 *  Adding News Tab To Admin Menu
 */

// register custom post type to work with
function lc_create_post_type_news() {
	// set up labels
	$labels = array (
		'name' => 'News',
		'singular_name' => 'News',
		'add_new' => 'Add New News',
		'add_new_item' => 'Add New News',
		'edit_item' => 'Edit News',
		'new_item' => 'New News',
		'all_items' => 'All News',
		'view_item' => 'View News',
		'search_items' => 'Search News',
		'not_found' => 'No News Found',
		'not_found_in_trash' => 'No News found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'News',
	);
	//register post type
	register_post_type ( 'news', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		//'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'supports' => array( 'title', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'news' ),
	)
	);
}
 add_action( 'init', 'lc_create_post_type_news' );

/*------------- ADDING TEMPLATE FOR NEWS ------------------*/
/*
add_action('init', 'add_news_show_endpoint');

function add_news_show_endpoint() {
  add_rewrite_endpoint( 'show', EP_PERMALINK );
}

add_action('wp_head', 'set_news_permalink_filter');

function set_news_permalink_filter() {
  $single_templates = array(
    // page template => endpoint to use
    //'page-whatever.php' => 'whatever',
    'single-news.php' => 'media'
    
  );
  foreach ( $single_templates as $page => $endpoint) {
    if ( is_page_template($page) ) {
      global $news_endpoint;
      $news_endpoint = $endpoint;
      add_filter('post_link', 'news_permalink', 99, 3);
      return;
    }
  }
}

function news_permalink ($permalink, $post, $leavename) {
  if ( $post->post_type != 'news' ) return $permalink;
  global $news_endpoint;
  if ( empty($news_endpoint) ) return $permalink;
  return user_trailingslashit($permalink) . 'show/' . $news_endpoint . '/';
}

add_filter('template_include', 'single_news_template');

function single_news_template( $template ) {
  if ( ! is_single('news') ) return $template;
  global $wp_query;
  $show = $wp_query->get('show');
  if ( empty($show) ) return $template;
  $file = locate_template( 'single-news-' . $show . '.php', true, false );
  return $file ? : $template;
}
*/
/*-------------- \END ADDING TEMPLATE FOR NEWS --------------*/



/**
 *  Adding Events Tab To Admin Menu
 */

// register custom post type to work with
function lc_create_post_type() {
	// set up labels
	$labels = array (
		'name' => 'Events',
		'singular_name' => 'Event',
		'add_new' => 'Add New Event',
		'add_new_item' => 'Add New Event',
		'edit_item' => 'Edit Event',
		'new_item' => 'New Event',
		'all_items' => 'All Events',
		'view_item' => 'View Event',
		'search_items' => 'Search Events',
		'not_found' => 'No Events Found',
		'not_found_in_trash' => 'No Events found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Events',
	);
	//register post type
	register_post_type ( 'event', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		//'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'supports' => array( 'title', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'events' ),
	)
	);
}
 add_action( 'init', 'lc_create_post_type' );

/*-------------- ADDING TEMPLATE FOR EVENTS -----------------*/
/*
add_action('init', 'add_show_endpoint');

function add_show_endpoint() {
  add_rewrite_endpoint( 'show', EP_PERMALINK );
}

add_action('wp_head', 'set_event_permalink_filter');

function set_event_permalink_filter() {
  $single_templates = array(
    // page template => endpoint to use
    //'page-whatever.php' => 'whatever',
    'single-event.php' => 'media'
    
  );
  foreach ( $single_templates as $page => $endpoint) {
    if ( is_page_template($page) ) {
      global $event_endpoint;
      $event_endpoint = $endpoint;
      add_filter('post_link', 'event_permalink', 99, 3);
      return;
    }
  }
}

function event_permalink ($permalink, $post, $leavename) {
  if ( $post->post_type != 'events' ) return $permalink;
  global $event_endpoint;
  if ( empty($event_endpoint) ) return $permalink;
  return user_trailingslashit($permalink) . 'show/' . $event_endpoint . '/';
}

add_filter('template_include', 'single_event_template');

function single_event_template( $template ) {
  if ( ! is_single('events') ) return $template;
  global $wp_query;
  $show = $wp_query->get('show');
  if ( empty($show) ) return $template;
  $file = locate_template( 'single-events-' . $show . '.php', true, false );
  return $file ? : $template;
}
*/
/*-------------- \END ADDING TEMPLATE FOR EVENTS -----------------*/



/*
remove_menu_page( 'edit.php' );                   //Posts
remove_menu_page( 'index.php' );                 //Dashboard
remove_menu_page( 'upload.php' );                 //Media
remove_menu_page( 'edit.php?post_type=page' );   //Pages
remove_menu_page( 'edit-comments.php' );         //Comments
remove_menu_page( 'themes.php' );                 //Appearance
remove_menu_page( 'plugins.php' );               //Plugins
remove_menu_page( 'users.php' );                 //Users
remove_menu_page( 'tools.php' );                 //Tools
remove_menu_page( 'options-general.php' );       //Settings
*/

// Removes tabs from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
	remove_menu_page( 'edit.php' ); //Posts
    remove_menu_page( 'edit-comments.php' ); //Comments
}

// Removes comment from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes comment from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

