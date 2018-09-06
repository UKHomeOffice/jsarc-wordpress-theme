<?php
/**
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */


function get_page_template() {
    $id = get_queried_object_id();
    $template = get_page_template_slug();
    $pagename = get_query_var('pagename');
 
    if ( ! $pagename && $id ) {
        // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object
        $post = get_queried_object();
        if ( $post )
            $pagename = $post->post_name;
    }
 
    $templates = array();
    if ( $template && 0 === validate_file( $template ) )
        $templates[] = $template;
    if ( $pagename ) {
        $pagename_decoded = urldecode( $pagename );
        if ( $pagename_decoded !== $pagename ) {
            $templates[] = "page-{$pagename_decoded}.php";
        }
        $templates[] = "page-{$pagename}.php";
    }
    if ( $id )
        $templates[] = "page-{$id}.php";
    $templates[] = 'page.php';
 
    return get_query_template( 'page', $templates );
}
?>