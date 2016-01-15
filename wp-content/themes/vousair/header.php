<?php
/**
 * VouSair - Header
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/
?>
<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="#004d40">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="icon" href="<?php echo VS_THEME_URI; ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo VS_THEME_URI; ?>/favicon.ico">
		<![endif]-->
		<link rel="icon" sizes="192x192" href="<?php echo VS_THEME_URI; ?>/assets/img/touch-icon-192x192.png">
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo VS_THEME_URI; ?>/assets/img/apple-touch-icon-180x180-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo VS_THEME_URI; ?>/assets/img/apple-touch-icon-152x152-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo VS_THEME_URI; ?>/assets/img/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo VS_THEME_URI; ?>/assets/img/apple-touch-icon-120x120-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo VS_THEME_URI; ?>/assets/img/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo VS_THEME_URI; ?>/assets/img/apple-touch-icon-76x76-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo VS_THEME_URI; ?>/assets/img/apple-touch-icon-72x72-precomposed.png">
		<meta name="msapplication-TileColor" content="#FFFFFF">
		<meta name="msapplication-TileImage" content="<?php echo VS_THEME_URI; ?>/assets/img/win8-tile-icon.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php get_template_part( 'parts/adtag', '1x1' ); ?>
	<?php get_template_part( 'parts/adtag', 'billboard' ); ?>
	<?php get_template_part( 'parts/all', 'header' ); ?>
	<?php //get_template_part( 'parts/all', 'navigation' ); ?>
	<?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?>