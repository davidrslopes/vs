<?php
/**
 * VouSair theme register widget areas.
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

/**
 * Register sidebars.
 *
 * @since VouSair Theme 1.0
 */
add_action( 'widgets_init', 'vs_theme_register_sidebars' );

function vs_theme_register_sidebars() {

	$args = array(
		'name'          => __( 'Barra Lateral Direita', 'vousair' ),
		'id'            => 'vs-sidebar',
		'description'   => 'Barra lateral direita.',
		'class'         => 'vs-sidebar',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<header>',
		'after_title'   => '</header>'
	);

	register_sidebar( $args );

}