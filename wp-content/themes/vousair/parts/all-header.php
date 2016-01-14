<?php
/**
 * VouSair - Header
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */
?>
<header class="vs-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="vs-logo" src="<?php echo VS_THEME_URI; ?>/assets/img/vousair_logo.png" class="img-responsive">
			</div>
			<div class="col-md-8">
				<?php get_template_part( 'parts/adtag', 'leaderboard' ); ?>
			</div>
		</div>
	</div>
</header>