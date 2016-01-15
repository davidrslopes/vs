<?php
/**
 * VouSair theme enqueue/dequeue/requeue scripts and styles
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

/**
 * Don't autoload Contact Form 7 JS and CSS for every page.
 *
 **/
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since MSD Portugal - Profissionais de Saúde Theme 1.0
 */
add_action( 'wp_enqueue_scripts', 'vs_theme_enqueue_scripts' );

function vs_theme_enqueue_scripts() {

	// Dynamic version, busts the JS & CSS cache - don't use after launch
	$version = filemtime( VS_THEME_DIR . '/assets/js/app.min.js' );

	wp_enqueue_style(
		'app-style',
		VS_THEME_URI . '/assets/css/style.min.css',
		array(),
		$version
	);

	wp_enqueue_script(
		'app-script',
		VS_THEME_URI . '/assets/js/app.min.js',
		array(),
		$version,
		true
	);
	if( get_theme_mod('vs_block_ad_block', true) ):
		wp_enqueue_script(
			'adblock-script',
			VS_THEME_URI . '/assets/js/blockadblock.min.js',
			array(),
			$version,
			true
		);
	endif;
}

/**
 * Remove ?ver=xxx from enqueued scripts/css.
 *
 * @since VouSair Theme 1.0
 * @see   http://wpengineer.com/2513/filename-cache-busting-wordpress/ for eventual caching issues.
 * @return string      Clean query string.
 */
add_filter( 'style_loader_src', 'msdpt_theme_remove_script_version', 9999 );
add_filter( 'script_loader_src', 'msdpt_theme_remove_script_version', 9999 );

function msdpt_theme_remove_script_version( $src ) {

    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;

}

/**
 * Add 'async' to the script tag.
 *
 * @since VouSair Theme 1.0
 * @return string      Async JS URL
 */
//add_filter ( 'script_loader_tag', 'vs_theme_load_js_async', 10, 3 );

function vs_theme_load_js_async( $tag, $handle ) {

	if ( 'app-script' == $handle ) {
		return str_replace( '<script type', '<script async type', $tag );
	} else {
		return $tag;
	}

};
