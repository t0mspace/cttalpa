<?php
/**
 * Template name: Home
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


	<div class="homepage">
        <!-- Slideshow start-->
        
    
        <?php 
        //get pictures for slideshow
        $args = array(
            'post_type' => 'slideshow'
         );
        $slideshow = new WP_Query( $args );
        

        //display found pictures
        if($slideshow->have_posts()):?>
                        <div class="orbit show-for-medium" role="slideshow" aria-label="CTT Alpa Slideshow" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                        <div class="orbit-wrapper">
                            <div class="orbit-controls">
                                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                            </div>
                            <ul class="orbit-container">
		
                           <?php while ($slideshow->have_posts() ) : $slideshow->the_post();?>
        
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <img class="orbit-image" src="<?php echo get_the_post_thumbnail_url('', 'slideshow'); ?>">
                                    </figure>
                                </li>
                

                    <?php
                    endwhile;
                    endif;


                    wp_reset_postdata();?>

                        </ul>
                </div>
            </div>


            <!-- Slideshow end-->
                
    
        
            <!-- become member start-->
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<section id="become-member" class="callout text-center">

					<h3>Vous souhaitez jouer au tennis de table ?<br>
						Rejoignez-nous !</h3>
					<a href="http://localhost/cttalpa/wordpress/infos-pratiques/" class="button large remove-link-style" id="button_be_member">S'inscrire</a>
				</section>

			</div>
		</div>
                <!-- last posts start-->
		<div class="row">
			<div class="small-12 medium-12 large-8 columns">
				<h2>Derniers articles</h2>
				<section id="posts">

					<!--                <article class="main-content">-->
					<?php if ( have_posts() ) : ?>

		
						<?php while ( have_posts() ) : the_post(); ?>
                            <article class="post-in-home">
                                <header>
                                    <?php if ( is_single() ) {
                                        the_title( '<h1 class="entry-title">', '</h1>' );
                                    } else {
                                        the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                    }
                                    ?>
                                    <?php foundationpress_entry_meta();?>
                                </header>

                                <?php the_post_thumbnail('fp-mediumlarge');?>
                                <p>

                                    <?php echo wp_trim_excerpt() ?>
                                </p>


                            </article>
                            <hr>
						<?php endwhile;
						wp_reset_query();?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; // End have_posts() check.

                    echo do_shortcode('[ajax_load_more users="false" users_role="undefined" users_include="undefined" users_exclude="undefined" users_per_page="undefined" users_order="undefined" users_orderby="undefined" post_type="post" scroll="false"]');?>

				</section>
			</div>

			<div class="small-12 medium-12 large-4 columns">
            <!-- last tweets start-->
				<h2 class="no-left-padding">Derniers tweets</h2>
				<section id="tweets">


					<?php echo do_shortcode('[custom-twitter-feeds]'); ?>

				</section>

                <!-- section sponsors -->

                <?php

                $args = array(
                'post_type' => 'Sponsor'
                );
                $sponsors = new WP_Query( $args );?>

                <h2 class="no-left-padding">Nos sponsors</h2>
                <section id="sponsors">
                <?php
                if($sponsors->have_posts()) : while ($sponsors->have_posts() ) : $sponsors->the_post();?>


                    <a href="//<?php echo get_post_meta(get_the_ID(), 'sitewebsponsor', true) ;?>" class="thumbnail">

                        <img src="<?php echo get_the_post_thumbnail_url('', 'sponsors'); ?>">
                    </a>


                <?php
                endwhile;
                endif;


                wp_reset_postdata();?>



				</section>
			</div>

		</div>

	</div>





<?php get_footer();
