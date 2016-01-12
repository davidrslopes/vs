<?php
/**
 * VouSair - Ad Tag 1x1
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/
if($vs_1x1):
?>
<div class="vs-1x1">
	<!-- BEGIN Hi-Media Media AdTag, vousair.com 1x1 - v1.0 -->
	<div class="hmads_1x1">
		<script type="text/javascript">
			(function() {
				var utTagCountry = 'pt';
				var utTagSite = 'vousair.com';
				var utTagZone = 'vou_sair_1x1_pt';
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
					"format": "1x1",
					"keyValues": ""
				});
			} catch(ex) {
			}
		</script>
		<noscript>
			<a href="http://rd.himediads.com/pt/jump/vousair.com/vou_sair_1x1_pt;sz=1x1;tile=1;ord=" target="_blank">
				<img src="http://rd.himediads.com/pt/ad/vousair.com/vou_sair_1x1_pt;sz=1x1;tile=1;ord=?" width="1" height="1" alt="" />
			</a>
		</noscript>
	</div>
	<!-- END Hi-Media Media AdTag, vousair.com 1x1 - v1.0 -->
</div>
<?php endif; ?>