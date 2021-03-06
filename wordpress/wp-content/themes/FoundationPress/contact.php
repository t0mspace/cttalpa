<?php
/**
 * Template name: Contact
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

    <?php $post = get_post();?>
    <h2 class><?php echo $post->post_title;?></h2>
	<div class="page-content">


        <?php echo $post->post_content;
        // echo do_shortcode('[contact-form-7 id="106" title="Contact form 1"]');
        ?>

	</div>



<?php get_footer();
