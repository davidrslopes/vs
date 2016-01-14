<?php
/**
 * VouSair - Sidebar
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/
?>

<?php if ( is_active_sidebar('vs-sidebar') ) : ?>
	<?php get_template_part( 'parts/adtag', 'mrec-main' ); ?>
	<?php dynamic_sidebar('vs-sidebar'); ?>
<?php else: ?>
	<a href="/wp-admin/widgets.php" target="_blank" class="btn btn-primary text-center"><i class="fa fa-plus-square"></i> Adicione widgets à Barra lateral direita na area de administração wordpress.</a>
<?php endif; ?>