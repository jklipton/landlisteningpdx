<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landlistening_PDX
 */

?>
	</div><!-- #content -->
	<div id="site-footer">
		<footer id="colophon" class="site-footer">

			<nav id="site-navigation" class="main-navigation">
				<?php 
					if ( wp_is_mobile() ) {
						wp_nav_menu( array( 'menu' => 'mobile-menu' ) );
					} else {
						wp_nav_menu( array( 'menu' => 'desktop-menu' ) );
					} 
				?>
			</nav>

		
			<div class="site-info">
				<span class="copyright">All site content copyright © <?php echo date('Y'); ?> Sarah Taylor. All rights reserved.</span>
				<span class="copyright">Page design copyright © <?php echo date('Y'); ?>
					<a href="http://jklipton.io" target="_blank">Jen Lipton</a>. All rights reserved.</span>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
