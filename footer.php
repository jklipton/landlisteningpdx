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
footer.php
	</div><!-- #content -->
	<div id="site-footer">
		<footer id="colophon" class="site-footer">

			<nav id="site-navigation" class="main-navigation">
				<!-- Notes: Menu is hidden on desktop view, 
					links set for "Landing Page" and dynamically changed in pageView.js on navigation.  
					If updating, please leave set for "Landing Page" and set "Target" attribute to 
					the EXACT id of the destination section as seen in the "main" portion of the HTML. -->
					<button class="menu bot-button hidden menu-toggle" aria-label="Menu" aria-controls="primary-menu" aria-expanded="false"><h2>Menu</h2></button>
					<div id="top-nav" class="nav bot-button hidden"></div>
					<div id="left-nav" class="nav side-button" target="about" aria-label="About Sarah"><h2> About Sarah </h2></div>
					<div id="right-nav" class="nav side-button" target="testimonials" aria-label="Testimonials"><h2>Testimonials</h2></div>
					<div id="bot-nav" class="nav bot-button" target="contact" aria-label="Contact" ><h2> Contact </h2></div>
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
