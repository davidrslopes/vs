<?php
/**
 * VouSair template functions.
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

/**
 * EXCERPT MODIFICATION
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

function vs_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'vs_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return  '<a href="' . get_the_permalink() . '">' . __( ' Ler mais...', 'vousair' ) . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * TYPOGRAPHY
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

/**
 * Returns an array of system fonts
 * Feel free to edit this, update the font fallbacks, etc.
 */

function options_typography_get_os_fonts() {
	// OS Font Defaults
	$os_faces = array(
		'Arial, sans-serif' => 'Arial',
		'"Avant Garde", sans-serif' => 'Avant Garde',
		'Cambria, Georgia, serif' => 'Cambria',
		'Copse, sans-serif' => 'Copse',
		'Garamond, "Hoefler Text", Times New Roman, Times, serif' => 'Garamond',
		'Georgia, serif' => 'Georgia',
		'"Helvetica Neue", Helvetica, sans-serif' => 'Helvetica Neue',
		'Tahoma, Geneva, sans-serif' => 'Tahoma'
	);
	return $os_faces;
}

/**
 * Returns a select list of Google fonts
 * Feel free to edit this, update the fallbacks, etc.
 */

function options_typography_get_google_fonts() {
	// Google Fonts
	$google_faces = array(
		'Arvo, serif' => 'Arvo',
		'Copse, sans-serif' => 'Copse',
		'Droid Sans, sans-serif' => 'Droid Sans',
		'Droid Serif, serif' => 'Droid Serif',
		'Lobster, cursive' => 'Lobster',
		'Nobile, sans-serif' => 'Nobile',
		'Open Sans, sans-serif' => 'Open Sans',
		'Oswald, sans-serif' => 'Oswald',
		'Pacifico, cursive' => 'Pacifico',
		'Rokkitt, serif' => 'Rokkit',
		'Montserrat, sans-serif' => 'Montserrat',
		'PT Sans, sans-serif' => 'PT Sans',
		'Quattrocento, serif' => 'Quattrocento',
		'Raleway, cursive' => 'Raleway',
		'Ubuntu, sans-serif' => 'Ubuntu',
		'Yanone Kaffeesatz, sans-serif' => 'Yanone Kaffeesatz'
	);
	return $google_faces;
}

/**
 * WP CUSTOMIZER
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

function vs_customize_register( $wp_customize ) {

	/**
	 * Navegação
	 *
	 */
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
					'dark'	=> __( 'Escuro', 'vousair'),
					'light'	=> __( 'Claro', 'vousair')
				)
			)
		)
	);

	/**
	 * Publicidade
	 *
	 */

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

	//Detecção AdBlock
	$wp_customize->add_setting( 'vs_block_ad_block' , array(
		'default'	=> true,
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_block_ad_block',
			array(
				'label'			=> __( 'Detecção AdBlock', 'vousair' ),
				'section'		=> 'vs_pub',
				'settings'		=> 'vs_block_ad_block',
				'type'			=> 'checkbox'
			)
		)
	);

	/**
	 * Tipografia
	 *
	 */

	//$typography_mixed_fonts = array_merge( options_typography_get_os_fonts() , options_typography_get_google_fonts() );
	//asort($typography_mixed_fonts);
	$typography_google_fonts = options_typography_get_google_fonts();
	asort($typography_google_fonts);

	$wp_customize->add_section( 'vs_typography' , array(
		'title'		=> __( 'Tipografia', 'vousair' ),
		'priority'	=> 30,
	) );

	//Tipo de fonte Principal
	$wp_customize->add_setting( 'vs_main_font_type' , array(
		'default'	=> 'Montserrat',
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_main_font_type',
			array(
				'label'			=> __( 'Tipo de fonte Principal', 'vousair' ),
				'section'		=> 'vs_typography',
				'settings'		=> 'vs_main_font_type',
				'type'			=> 'select',
				'choices'		=> $typography_google_fonts
			)
		)
	);
	//Tamanho de fonte Principal
	$wp_customize->add_setting( 'vs_main_font_size' , array(
		'default'	=> '1.0',
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_main_font_size',
			array(
				'label'			=> __( 'Tamanho de fonte Principal (em rem)', 'vousair' ),
				'section'		=> 'vs_typography',
				'settings'		=> 'vs_main_font_size',
				'type'			=> 'number'
			)
		)
	);

	//Espaçamento entre linhas
	$wp_customize->add_setting( 'vs_main_line_height' , array(
		'default'	=> '1.5',
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'vs_main_line_height',
			array(
				'label'			=> __( 'Espaçamento entre linhas', 'vousair' ),
				'section'		=> 'vs_typography',
				'settings'		=> 'vs_main_line_height',
				'type'			=> 'number'
			)
		)
	);

	//Cor do texto principal
	$wp_customize->add_setting( 'vs_main_text_color' , array(
		'default'	=> '#333333',
		'transport'	=> 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'vs_main_text_color',
			array(
				'label'		=> __( 'Cor do texto principal', 'vousair' ),
				'section'	=> 'vs_typography',
				'settings'	=> 'vs_main_text_color',
			)
		)
	);

}
add_action( 'customize_register', 'vs_customize_register' );