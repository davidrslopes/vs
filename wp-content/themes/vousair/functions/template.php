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
	//SECTIONS
	$wp_customize->add_section( 'vs_nav' , array(
		'title'		=> __( 'Navegação', 'vousair' ),
		'priority'	=> 30,
	) );
	//SETTINGS
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
	//CONTROLS
	//Navbar Bg Color Control
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'vs_navbar_bgcolor',
			array(
				'label'		=> __( 'Cor da barra de navegação', 'vousair' ),
				'section'	=> 'vs_nav',
				'settings'	=> 'vs_navbar_bgcolor',
			)
		)
	);
	//Navbar Theme Control
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_navbar_theme',
			array(
				'label'			=> __( 'Tema da barra de navegação', 'vousair' ),
				'section'		=> 'vs_nav',
				'settings'		=> 'vs_navbar_theme',
				'type'			=> 'radio',
				'choices'		=> array(
					'dark'   => __( 'Dark', 'vousair'),
					'light'  => __( 'Light', 'vousair')
				)
			)
		)
	);
}
add_action( 'customize_register', 'vs_customize_register' );