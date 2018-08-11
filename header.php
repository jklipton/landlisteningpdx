<?php
/**
 * @package Landlistening_PDX
 */

// $current_post = get_title();
// $about = array('About Sarah', '/about');
// $home = array('Landlistening', '/');
// $test = array('Testimonials', '/testimonials');
// $contact = array('Contact', '/contact');

// $links = [
// 	"Landlistening" => array(null, $about, $test, $contact),
// 	"About" => array(null, $test, $home, $contact),
// 	"Testimonials" => array(null, $home, $about, $contact),
// 	"Contact" => array($home, $about, $test, null),
// ];

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
<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'landlistening-pdx' ); ?></a>
	
	<section class="logo-container">
		<div class="logo-inner">
			<img src="<?php bloginfo('template_url'); ?>/assets/sarah-taylor-logo.png"/>
			<h4 class="logo-blurb">harmoning your functional and spiritual relationship with your land.</h4>
		</div>
	</section>

	<div id="page-content" class="site-content">
