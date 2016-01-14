/********************

VouSair Main Script File

@package WordPress
@subpackage VouSair
@since VouSair Theme 1.0

********************/

//AdBlock Detection
$(window).load(function() {
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

});