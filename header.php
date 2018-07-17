<?php
/**
 * @package Landlistening_PDX
 */

$about = array('About Sarah', '/about');
$home = array('Landlistening', '/');
$test = array('Testimonials', '/testimonials');
$contact = array('Contact', '/contact');

$links = [
	"Landlistening" => array(null, $about, $test, $contact),
	"About" => array(null, $test, $home, $contact),
	"Testimonials" => array(null, $home, $about, $contact),
	"Contact" => array($home, $about, $test, null),
];

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

	<!-- header.php -->
	<?php $current_post ?>
	<header id="masthead" class="site-header">
		<nav class="site-nav">
		<?php 
		$currentLinks = $links[the_title()];

		for ($i = 0; $i <= count($currentLinks); $i++) {
			$thisLink = $currentLinks[$i];
			if(!$thisLink) continue;
			echo(`<li><a href='$thisLink(1)'>$thisLink(0)</a></li>`);
		}?>
		</nav>
	</header>
	   <div id="content" class="site-content">
