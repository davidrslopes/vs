<?php
/**
 * VouSair - Navigation
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/

// NAVIGATION OPTIONS
$bgcolor = "#50BFE6";
$nav_theme = "dark"; //dark or light mudar consoante se a cor de fundo é escura ou clara

?>
<nav class="navbar navbar-full navbar-<?php echo $nav_theme; ?>" style="background-color: <?php echo $bgcolor; ?>;">
	<div class="container">
		<a class="navbar-brand" href="<?php echo VS_ROOT; ?>">
			<img alt="vousair" src="<?php echo VS_THEME_URI; ?>/assets/img/vousair_ipad.png" height="30" class="img-responsive">
		</a>
		<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#vs-navbar">&#9776;</button>

		<?php
			//MAIN MENU START
			if( has_nav_menu( 'main_nav' ) ) {
				$main_nav = wp_nav_menu(array(
					'echo'				=> false,
					'theme_location'	=> 'main_nav',
					'depth'				=> 3,
					'container'			=> 'div',
					'container_class'	=> 'collapse navbar-toggleable-xs',
					'container_id'		=> 'vs-navbar',
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