<?php
/**
 * @package Landlistening_PDX
 */

get_header();
?>
index.php
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            index.php
		<?php
		if ( have_posts() ) :

<<<<<<< HEAD
=======
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

>>>>>>> 292bb8a242eeda0d6aabc3a0265d05576d90c977
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
