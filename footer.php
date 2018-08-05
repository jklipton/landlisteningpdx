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
				footer.php
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'landlistening-pdx' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'landlistening-pdx' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'landlistening-pdx' ), 'landlistening-pdx', '<a href="http://jklipton.io">Jennifer Lipton</a>' );
					?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
