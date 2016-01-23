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
				<a href="<?php echo VS_ROOT; ?>">
					<img class="vs-logo" src="<?php echo VS_THEME_URI; ?>/assets/img/vousair_logo.png" class="img-fluid" title="<?php wp_title(''); ?>">
				</a>
			</div>
			<div class="col-md-8">
				<?php get_template_part( 'parts/adtag', 'leaderboard' ); ?>
			</div>
		</div>
	</div>
</header>