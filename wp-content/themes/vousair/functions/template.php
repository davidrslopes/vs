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

	/********************

	SECTION : NAVEGAÇÃO

	********************/

	$wp_customize->add_section( 'vs_nav' , array(
		'title'		=> __( 'Navegação', 'vousair' ),
		'priority'	=> 30,
	) );

	//Cor da barra de navegação
	$wp_customize->add_setting( 'vs_navbar_bgcolor' , array(
		'default'	=> '#666666',
		'transport'	=> 'refresh',
	) );
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

	//Tema da barra de navegação
	$wp_customize->add_setting( 'vs_navbar_theme' , array(
		'default'	=> 'dark',
		'Claro'		=> 'light',
		'Escuro'	=> 'dark',
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_navbar_theme',
			array(
				'label'			=> __( 'Tema da barra de navegação', 'vousair' ),
				'section'		=> 'vs_nav',
				'settings'		=> 'vs_navbar_theme',
				'type'			=> 'select',
				'choices'		=> array(
					'dark'   => __( 'Escuro', 'vousair'),
					'light'  => __( 'Claro', 'vousair')
				)
			)
		)
	);

	/********************

	SECTION : PUBLICIDADE

	********************/

	$wp_customize->add_section( 'vs_pub' , array(
		'title'		=> __( 'Publicidade', 'vousair' ),
		'priority'	=> 30,
	) );

	//Tag 1x1
	$wp_customize->add_setting( 'vs_1x1' , array(
		'default'	=> true,
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_1x1',
			array(
				'label'			=> __( '1x1', 'vousair' ),
				'section'		=> 'vs_pub',
				'settings'		=> 'vs_1x1',
				'type'			=> 'checkbox'
			)
		)
	);

	//Tag Billboard
	$wp_customize->add_setting( 'vs_billboard' , array(
		'default'	=> true,
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_billboard',
			array(
				'label'			=> __( 'Billboard', 'vousair' ),
				'section'		=> 'vs_pub',
				'settings'		=> 'vs_billboard',
				'type'			=> 'checkbox'
			)
		)
	);

	//Tag Leaderboard (728x90)
	$wp_customize->add_setting( 'vs_leaderboard' , array(
		'default'	=> true,
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_leaderboard',
			array(
				'label'			=> __( 'Leaderboard (728x90)', 'vousair' ),
				'section'		=> 'vs_pub',
				'settings'		=> 'vs_leaderboard',
				'type'			=> 'checkbox'
			)
		)
	);

	//Tag MREC Principal (300x600)
	$wp_customize->add_setting( 'vs_mrec_main' , array(
		'default'	=> true,
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_mrec_main',
			array(
				'label'			=> __( 'MREC Principal (300x600)', 'vousair' ),
				'section'		=> 'vs_pub',
				'settings'		=> 'vs_mrec_main',
				'type'			=> 'checkbox'
			)
		)
	);

	//Tag MREC Fundo (300x250)
	$wp_customize->add_setting( 'vs_mrec_bottom' , array(
		'default'	=> true,
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_mrec_bottom',
			array(
				'label'			=> __( 'MREC Fundo (300x250)', 'vousair' ),
				'section'		=> 'vs_pub',
				'settings'		=> 'vs_mrec_bottom',
				'type'			=> 'checkbox'
			)
		)
	);
}
add_action( 'customize_register', 'vs_customize_register' );