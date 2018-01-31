<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );


// increase `timeout` for `api.wordpress.org` requests
add_filter( 'http_request_args', function( $request, $url ) {

    if ( strpos( $url, '://api.wordpress.org/' ) !== false ) {
        $request[ 'timeout' ] = 15;
    }

    return $request;

}, 10, 2 );

add_filter('envira_gallery_output_before_image', 'enfold_envira_gallery_output_before_image', 10, 5);
function enfold_envira_gallery_output_before_image( $output, $id, $item, $data, $i ) {
    $output = str_replace('envira-gallery-link', 'envira-gallery-link noHover', $output);
    return $output;
}


/**security function: avoid display of wordpress version
 *
 */
remove_action("wp_head", "wp_generator");



// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
    return '<a class="read-more small" href="'. get_permalink($post->ID) . '">Lire plus</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



/**
 * upload file for custom post type into a folder with the same name that custom post type name
 */
function wpse_16722_type_upload_dir( $args ) {

    // Get the current post_id
    $id = ( isset( $_REQUEST['post_id'] ) ? $_REQUEST['post_id'] : '' );

    if( $id ) {    
       // Set the new path depends on current post_type
       $newdir = '/' . get_post_type( $id );

       $args['path']    = str_replace( $args['subdir'], '', $args['path'] ); //remove default subdir
       $args['url']     = str_replace( $args['subdir'], '', $args['url'] );      
       $args['subdir']  = $newdir;
       $args['path']   .= $newdir; 
       $args['url']    .= $newdir; 
    }
    return $args;
}
add_filter( 'upload_dir', 'wpse_16722_type_upload_dir' );


/**function used to resize image for slideshow 
 * Snippet Name: Create new image sizes for custom post types 
 * Snippet URL: http://www.wpcustoms.net/snippets/create-new-image-sizes-for-custom-post-types/ 
 */  
add_filter( 'intermediate_image_sizes', 'ravs_slider_image_sizes', 999 );  
function ravs_slider_image_sizes( $image_sizes ){  
  
    // size for slider  
    $slider_image_sizes = array( 'slideshow');   
  
    // for ex: $slider_image_sizes = array( 'thumbnail', 'medium' );  
  
    // instead of unset sizes, return your custom size for slider image  
    if( isset($_REQUEST['post_id']) && 'slideshow' === get_post_type( $_REQUEST['post_id'] ) )  
        return $slider_image_sizes;  
  
    return $image_sizes;
}  




function gkp_add_slug_body_class( $classes )
{

    if ( is_page() )
    {
        global $post;
        $classes[] = $post->post_type . '-' . $post->post_name;
    }

    return $classes;
}
add_filter( 'body_class', 'gkp_add_slug_body_class' );


