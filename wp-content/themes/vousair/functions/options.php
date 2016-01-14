<?php
/**
 * VouSair theme options.
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

add_theme_support( 'post-thumbnails' );

function vs_customize_css(){
?>
	<style type="text/css">
		body{
			font-family:<?php echo get_theme_mod('vs_main_font_type', '"Montserrat", sans-serif'); ?>;
			font-size:<?php echo get_theme_mod('vs_main_font_size', '1.0'); ?>rem;
			line-height:<?php echo get_theme_mod('vs_main_line_height', '1.5'); ?>;
			color:<?php echo get_theme_mod('vs_main_text_color', '#333333'); ?>;
		}
	</style>
<?php
}
add_action( 'wp_head', 'vs_customize_css');


function vs_google_font_api(){
	$font_type = get_theme_mod('vs_main_font_type', 'PT Sans');
	$font_type = array_shift(explode(',', $font_type));
?>
<script type="text/javascript">
	WebFontConfig = {
		google: { families: [ '<?php echo $font_type; ?>:400:latin' ] }
	};
	(function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})();
</script>
<?php
}
add_action( 'wp_footer', 'vs_google_font_api');

function vs_fuck_ad_block(){
?>
<script type="text/javascript">
	//AdBlock Detection
	window.onload = function() {
		// Function called if AdBlock is not detected
		function adBlockNotDetected() {
			console.info('AdBlock não detectado.');
		}
		// Function called if AdBlock is detected
		function adBlockDetected() {
			console.info('AdBlock foi detectado.');
		}

		// Recommended audit because AdBlock lock the file 'fuckadblock.js'
		// If the file is not called, the variable does not exist 'fuckAdBlock'
		// This means that AdBlock is present
		if(typeof fuckAdBlock === 'undefined') {
			adBlockDetected();
		} else {
			fuckAdBlock.onDetected(adBlockDetected);
			fuckAdBlock.onNotDetected(adBlockNotDetected);
			// and|or
			fuckAdBlock.on(true, adBlockDetected);
			fuckAdBlock.on(false, adBlockNotDetected);
			// and|or
			fuckAdBlock.on(true, adBlockDetected).onNotDetected(adBlockNotDetected);
		}

		// Change the options
		fuckAdBlock.setOption('checkOnLoad', true);
		// and|or
		fuckAdBlock.setOption({
			debug: false,
			checkOnLoad: true,
			resetOnEnd: true
		});

	}
</script>
<?php
}
if( get_theme_mod('vs_fuck_ad_block', true) ):
	add_action( 'wp_head', 'vs_fuck_ad_block');
endif;