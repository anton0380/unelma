<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Unelma
 * @since Unelma 1.0
 */
?>
	</div><!-- #content .site-content -->
	<!-- Site footer -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Unelma' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'Unelma' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>