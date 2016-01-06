<?php
/**
 * VouSair theme Menus
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

/**
 * Register navigation menus.
 *
 * @since VouSair Theme 1.0
 */
add_action( 'init', 'vs_theme_register_menus' );

function vs_theme_register_menus() {
	$locations = array(
		'main_nav' => __( 'Menu Principal', 'msdpds-theme' ),
		'footer_nav' => __( 'Menu Rodapé', 'msdpds-theme' ),
	);
	register_nav_menus( $locations );
}

/**
 * Include custom navigation walker.
 *
 * @since VouSair Theme 1.0
 * @link https://github.com/twittem/wp-bootstrap-navwalker
 */
require VS_THEME_DIR . '/functions/lib/wp_bootstrap_navwalker.php';