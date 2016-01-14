<?php
/**
 * VouSair - Ad Tag MREC Main
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/
$vs_mrec_main = get_theme_mod('vs_mrec_main', true);
if($vs_mrec_main):
?>
<div class="vs-mrec-main">
	<!-- BEGIN Hi-Media Media AdTag, vousair.com 300x250 - v1.0 -->
	<div class="hmads_300x250">

		<script type="text/javascript">
			(function() {
				var utTagCountry = 'pt';
				var utTagSite = 'vousair.com';
				var utTagZone = 'vou_sair_300x250_e_pt';
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
					"format": "300x250",
					"keyValues": ""
				});
			} catch(ex) {
			}
		</script>
		<noscript>
			<a href="http://rd.himediads.com/pt/jump/vousair.com/vou_sair_300x250_e_pt;sz=300x250;tile=1;ord=" target="_blank">
				<img src="http://rd.himediads.com/pt/ad/vousair.com/vou_sair_300x250_e_pt;sz=300x250;tile=1;ord=?" width="300" height="250" alt="" />
			</a>
		</noscript>
	</div>
	<!-- END Hi-Media Media AdTag, vousair.com 300x250 - v1.0 -->
</div>
<?php endif; ?>