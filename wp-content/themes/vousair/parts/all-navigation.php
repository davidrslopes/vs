<?php
/**
 * VouSair - Navigation
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/
?>
<nav class="navbar navbar-default navbar-fixed-top vs-navigation" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vs-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Menu</span>
				<span class="ionicons ion-navicon"></span>
			</button>
			<a class="navbar-brand" href="<?php echo VS_ROOT; ?>">
				<img alt="vousair" src="<?php echo VS_THEME_URI; ?>/assets/img/vousair_ipad.png" class="hidden-md hidden-lg">
				<img alt="vousair" src="<?php echo VS_THEME_URI; ?>/assets/img/vousair_logo.png" class="hidden-xs hidden-sm">
			</a>
		</div>
		<?php
			if( has_nav_menu( 'main_nav' ) ) {
				$main_nav = wp_nav_menu(array(
					'echo'				=> false,
					'theme_location'	=> 'main_nav',
					'depth'				=> 1,
					'container'			=> 'div',
					'container_class'	=> 'collapse navbar-collapse',
					'container_id'		=> 'vs-navbar-collapse',
					'menu_class'		=> 'nav navbar-nav',
					'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
					'walker'			=> new wp_bootstrap_navwalker()
				));
				echo $main_nav;
			}else{
				echo '<a href="/wp-admin/nav-menus.php" target="_blank" class="btn btn-primary navbar-btn btn-block text-center"><i class="fa fa-plus-square"></i> Por favor adicione um menu na area de administração do wordpress.</a>';
			}
		?>
	</div>
</nav>