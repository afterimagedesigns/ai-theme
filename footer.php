<?php
/**
 * Footer Template - Displays the Header of the website
 *
 */
?>

</div><!-- close .main-content -->

<footer id="site-footer">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">
				<div class="site-info">
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'ai-theme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'ai-theme' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
                    <a class="credits" href="http://afterimagedesigns.com/" target="_blank" title="Theme developed by Afterimage Designs" alt="Theme developed by Afterimage Designs"><?php _e('Theme developed by Afterimage Designs','ai-theme') ?> </a>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>