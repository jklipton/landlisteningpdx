<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landlistening_PDX
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700,700i|Playfair+Display:900i|Zilla+Slab:400i,600i" rel="stylesheet">

	<?php wp_head(); ?>
</head>
header.php
<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'landlistening-pdx' ); ?></a>
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
	
	<main id="content" class="site-content">
