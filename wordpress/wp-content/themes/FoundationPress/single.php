<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();

//get_template_part( 'template-parts/featured-image' );

?>

<div class="main-wrap">
	<main class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', '' ); ?>


            <?php $related = get_posts( array( 'category__in' => wp_get_post_categories(get_the_id), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
            if( $related){?>
                <h4>Autres articles dans la même catégorie</h4>
            
                <nav>
                    <ul class="articles-same-cat">
                
                <?php
                foreach( $related as $post )
                {
                    setup_postdata($post); ?>
                        
                        
                            <a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>
                       


                <?php
                }?>
                    </ul>
                 </nav>
                <?php
            } wp_reset_postdata(); ?>
		<?php endwhile;?>

	</main>

</div>
<?php get_footer();
