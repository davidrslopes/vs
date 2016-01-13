<?php
/**
 * VouSair template functions.
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */
//All our sections, settings, and controls will be added here
function vs_customize_register( $wp_customize ) {
	//section
	$wp_customize->add_section( 'vs_nav' , array(
		'title'		=> __( 'Navegação', 'vousair' ),
		'priority'	=> 30,
	) );
	//setting
	$wp_customize->add_setting( 'vs_navbar_bgcolor' , array(
		'default'	=> '#FFFFFF',
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_setting( 'vs_navbar_theme' , array(
		'default'	=> 'dark',
		'Claro'		=> 'light',
		'Escuro'	=> 'dark',
		'transport'	=> 'refresh',
	) );
	//control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navbar_bgcolor', array(
		'label'		=> __( 'Cor da barra de navegação', 'vousair' ),
		'section'	=> 'vs_nav',
		'settings'	=> 'vs_navbar_bgcolor',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'navbar_theme', array(
		'label'		=> __( 'Cor da barra de navegação', 'vousair' ),
		'section'	=> 'vs_nav',
		'settings'	=> 'vs_navbar_theme',
		'type'		=> 'select',
	) ) );
}
add_action( 'customize_register', 'vs_customize_register' );