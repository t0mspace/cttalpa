<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>


        <div class="row small-collapse">
            <div class="large-12 columns">
                <nav class="align-center" id="top-menu">
                    <ul class="menu align-right">
                        <li><a href="//www.facebook.com/groups/cttroyalalpaschaerbeekwoluwe/?fref=nf"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="//twitter.com/cttalpa"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>

                <header id="header" class="title-bar" role="banner">
                    <div class="title-bar-left" >
                        <img id="logo" class="hide-for-small-only" src="<?php echo get_template_directory_uri().DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'logo_alpa_ret.svg'; ?>">
                        <div class="title-container">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <h1><?php bloginfo( 'name' ); ?>
                                </h1>
                            </a>
                            <h3i class="subheader">Club de tennis de table à Bruxelles</h3i>
                        </div>

                    </div>
                    <div class="title-bar-right">
                    <a>
                        <i class="fa fa-bars" aria-hidden="true" class="menu-icon" data-toggle="offCanvas"></i>

                    </a>

                    </div>
                </header>
            </div>
        </div>



    <div class="off-canvas position-right" id="offCanvas" data-off-canvas>
        <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
            <span aria-hidden="true">X</span>
        </button>


	    <?php foundationpress_mobile_nav(); ?>

    </div>


                <?php do_action( 'foundationpress_after_header' );?>

    <div class="row small-collapse">
        <div class="large-12 columns">
            <section class="content">