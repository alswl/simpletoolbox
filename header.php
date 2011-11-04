<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jparallax.js"></script>
<script type="text/javascript">
$(function() {
	$('#parallax').jparallax({});//.append(corners);
});
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner" style="position:relative;">
		<hgroup id="site-header">
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			<div id="logo"></div>
		</hgroup>
		<div id="parallax" class="clear" style="width: 800px; overflow: hidden; background: 0% 0% rgb(150, 172, 193); height: 280px; position: relative;float:right">
			<div style="width:860px; height:273px;">
				<img src="<?php bloginfo('template_directory') ?>/images/0_sun.png" style="position:absolute;left:300px;top:-12px;"/>
			</div>
			<div style="width:920px; height:274px;">
				<img src="<?php bloginfo('template_directory') ?>/images/1_mountains.png"/>

			</div>
			<div style="width:1100px; height:284px;">
				<img src="<?php bloginfo('template_directory') ?>/images/2_hill.png" style="position:absolute; top:40px; left:0;" />
			</div>
			<div style="width:1360px; height:320px;">
				<img src="<?php bloginfo('template_directory') ?>/images/3_wood.png" style="position:absolute; top:96px; left:0;"/>
			</div>
		</div>

		<nav id="access" role="navigation">
			<?php /*<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'toolbox' ); ?></h1> */ ?>
			<?php /* <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolbox' ); ?>"><?php _e( 'Skip to content', 'toolbox' ); ?></a></div> */ ?>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #access -->

	</header><!-- #branding -->

	<div id="main">
