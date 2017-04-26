<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Unelma
 * @since Unelma 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<!-- Header -->
	<header id="masthead" class="site-header" role="banner">
		<!-- Site name -->
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<!-- Menu -->
		<nav id="primary-navigation" class="site-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'top-menu' ) ); ?>
			<div class="navigation-footer"></div>
		</nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content">

