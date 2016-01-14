<?php
/**
 * VouSair - Ad Tag Leaderboard
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/

$vs_leaderboard = get_theme_mod('vs_leaderboard', true);
if($vs_leaderboard):
?>
<div class="vs-leaderboard">
	<!-- BEGIN Hi-Media Media AdTag, vousair.com 728x90 - v1.0 -->
	<div class="hmads_728x90">

		<script type="text/javascript">
			(function() {
				var utTagCountry = 'pt';
				var utTagSite = 'vousair.com';
				var utTagZone = 'vou_sair_728x90_r_pt';
				var utTagUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') +
					'js.himediads.com/js' +
					'?country=' + encodeURIComponent(utTagCountry) +
					'&site=' + encodeURIComponent(utTagSite) +
					'&zone=' + encodeURIComponent(utTagZone);
				document.write('<sc' + 'ript type="text/javascript" src="' + utTagUrl + '"><\/sc' + 'ript>');
			})();
		</script>
		<script type="text/javascript">
			try {
				window.hiMediaUt.callTag({
					"format": "728x90",
					"keyValues": ""
				});
			} catch(ex) {
			}
		</script>

		<noscript>
			<a href="http://rd.himediads.com/pt/jump/vousair.com/vou_sair_728x90_r_pt;sz=728x90;tile=1;ord=" target="_blank">
				<img src="http://rd.himediads.com/pt/ad/vousair.com/vou_sair_728x90_r_pt;sz=728x90;tile=1;ord=?" width="728" height="90" alt="" />
			</a>
		</noscript>
	</div>
	<!-- END Hi-Media Media AdTag, vousair.com 728x90 - v1.0 -->
</div>
<?php endif; ?>