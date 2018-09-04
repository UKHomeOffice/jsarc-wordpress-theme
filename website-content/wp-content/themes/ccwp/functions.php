<?php
/**
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */
 
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
 * Remove Dashicons, the WordPress admin icon font from header
 */
 
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
function my_deregister_styles() {
   wp_deregister_style( 'dashicons' ); 
}

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
 * Remove admin bar CSS from header
 */
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


/**
 * Enqueue scripts and styles.
 */
/*
function ccwp_scripts_and_styles() {

	wp_enqueue_style( 'style', get_stylesheet_uri(), array (), 1.1, true );
	wp_enqueue_style( 'ccwp.build', get_template_directory_uri() . '/css/ccwp.build.css', array (), 1.1, true);
	wp_enqueue_script( 'ccwp.build', get_template_directory_uri() . '/js/ccwp.build.js', array (), 1.1, true);
	
	
}
add_action( 'wp_enqueue_scripts', 'ccwp_scripts_and_styles' );


*/

/**
 * Register menus
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );




/**
 * Creating topnav menu
 */

class description_walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth, $args) {

	global $wp_query;
	$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	
	$class_names = $value = '';
	$classes = empty( $item->classes ) ? array() : (array) $item->classes;

	$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
	$class_names = ' class="topnav-item '. esc_attr( $class_names ) . '"';
	//$output .= $indent . '<li id="topnav-item-'. $item->ID . '"' . $value . $class_names .'>';
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
	$item_output .= '<a class="topnav-link"'. $attributes .'>';
	$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
	$item_output .= $description.$args->link_after;
	$item_output .= '</a>';
	$item_output .= $args->after;

	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}




/**
 * Filtering a class in navigation menu item
 */

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
	 if( in_array('current-menu-item', $classes) ){
			 $classes[] = 'topnav-item-current';
	 }
	 return $classes;
}



/**
 * Register sidebar
 */

if ( function_exists('register_sidebar') )
register_sidebar(array(
	'before_widget' => '<div class="test-sidebar">',
	'after_widget' => '</div><!-- \test-sidebar -->',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));



/**
 * HOME PAGE
 */

/*
add_action('customize_register', 'dco_customize_register');
 
function dco_customize_register($wp_customize) {
    //Add a new tab to the Appearance -> Customize admin panel section
    $wp_customize->add_section('header', array(
        'title' => 'Header H1',
        'priority' => 1, //With this parameter, you can adjust the position of the tab in the list of tabs
    ));
 
    //Specify the name of the setting that will contain the text for the basement
    $setting_name = 'h1_text';
    //and add it
    $wp_customize->add_setting($setting_name, array(
        'default' => '', //With this parameter, you can set the default text
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));
 
    //Add an area for entering text on the tab that we created
    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
        'type' => 'textarea',
        'label' => 'Header H1 text',
    ));
 
    //Add support for previewing changes without full page refresh
    $wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.headline', //must contain the class or id of the element with the text in the basement
        'render_callback' => function() use ($setting_name) {
            return nl2br(esc_html(get_theme_mod($setting_name)));
        }
    ));
}
*/




function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );



/**
 * Creating footer menu
 */

class footer_menu_description_walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth, $args) {

	global $wp_query;
	$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	
	$class_names = $value = '';
	$classes = empty( $item->classes ) ? array() : (array) $item->classes;

	$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
	$class_names = ' class="footer-item '. esc_attr( $class_names ) . '"';
	//$output .= $indent . '<li id="footer-item-'. $item->ID . '"' . $value . $class_names .'>';
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
	$item_output .= '<a class="footer-link"'. $attributes .'>';
	$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
	$item_output .= $description.$args->link_after;
	$item_output .= '</a>';
	$item_output .= $args->after;

	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}









?>
    
        
        
    