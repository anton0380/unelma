<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Unelma
 * @since Unelma 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<div id="sidebar" class="sidebar">
	<head>
	   <meta charset="<?php bloginfo( 'charset' ); ?>">
	   <meta name="viewport" content="width=device-width">
	   <title><?php wp_title( '|', true, 'right' ); ?></title>
	   <link rel="profile" href="http://gmpg.org/xfn/11">
	   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	   <link rel='stylesheet' id='main-style' href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='all' />
	   <?php wp_head(); ?>
	</head>
	<?php get_sidebar(); ?>
</div><!-- .sidebar -->

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

		<!-- Header -->
		<header id="masthead" class="site-header" role="banner">
			<!-- Site name -->
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<!-- Search form 
			<div id="search-container" class="search-box-wrapper hide">
				<div class="search-box">
					<?php get_search_form(); ?>
				</div>
			</div>-->
			<!-- Menu -->
			<nav id="primary-navigation" class="site-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</header><!-- #masthead -->
		<div id="content" class="site-content">