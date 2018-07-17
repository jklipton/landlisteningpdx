<?php
/**
 * @package Landlistening_PDX
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            index.php
		<?php
		if ( have_posts() ) :

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
