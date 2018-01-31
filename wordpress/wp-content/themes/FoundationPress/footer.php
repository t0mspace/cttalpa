<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<!-- footer php -->
<!-- end .content-->
        </section>
    </div>
<!-- end large-12 columns-->
</div>
<!-- end row small-collapse-->


<!-- START FOOTER SECTION -->
<div class="row small-collapse">
    <div class="large-12 columns">

		<div class="footer-container" data-sticky-footer>
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>

<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

    </div>
</div>
<!--<script id="__bs_script__">//<![CDATA[-->
<!--    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));-->
<!--	//]]>-->
<!--</script>-->
</body>
</html>
