<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */



?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_single() ) {
		the_title( '<h3>', '</h3>' );
	} else {
		the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
	}
	?>
	<?php foundationpress_entry_meta(); ?>
	<div class="entry-content">
        <?php
            the_post_thumbnail('fp-medium');?>
		<p>
            <?php the_content()?>
        </p>
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>

	</div>

    <nav class="pagination text-center">
        <li class="pagination-previous"><?php previous_post_link('%link', 'Article précédent'); ?></li>
        <li class="pagination-next"><?php next_post_link('%link', 'Article suivant'); ?></li>
    </nav>




</article>