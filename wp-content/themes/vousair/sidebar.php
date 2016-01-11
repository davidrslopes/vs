<?php
/**
 * VouSair - Sidebar
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/
?>

<?php if ( is_sidebar_active('vs-sidebar') ) : ?>
	<?php dynamic_sidebar('vs-sidebar'); ?>
<?php else: ?>
	<p class="well">Adicione widgets à barra lateral na area de administração wordpress.</p>
<?php endif; ?>