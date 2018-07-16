<?php
/**
 * @package Landlistening_PDX
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'landlistening-pdx' ); ?></a>

	<header id="masthead" class="site-header">
        header.php test
		<nav class="site-nav">
		<?php wp_list_pages(); ?>
		</nav>
	</header>
	   <div id="content" class="site-content">
