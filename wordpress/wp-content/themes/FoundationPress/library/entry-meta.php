<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

//if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
//	function foundationpress_entry_meta() {
//		/* translators: %1$s: current date, %2$s: current time */
//		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %1$s at %2$s.', 'foundationpress' ), get_the_date(), get_the_time() ) . '</time>';
//		echo '<p class="byline author">' . __( 'Written by', 'foundationpress' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
//	}
//endif;

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
    function foundationpress_entry_meta() {
        $post            = get_post();
        $category_detail = get_the_category( $post->ID );


        /* translators: %1$s: current date, %2$s: current time */
        echo '<small><time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %1$s at %2$s.', 'foundationpress' ), get_the_date('j F Y'), get_the_time('G:i') ) . '</time></small>';
        echo '<p class="byline author">' . __( 'Written by', 'foundationpress' )." ".get_the_author();
        echo " dans <span class=\"label secondary\">".$category_detail[0]->name."</span></p>";

    }
endif;
