<?php
/**
 * VouSair - Navigation
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/

//Check if Megamenu installed else load Bootstrap Menu
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( is_plugin_active( 'megamenu/megamenu.php' ) ): 
	if( has_nav_menu( 'main_nav' ) ) : ?>
		<nav class="vs-max-mega-menu">
			<div class="container">
				<?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?>
			</div>
		</nav>
	<?php else: ?>
		<a href="/wp-admin/nav-menus.php" target="_blank" class="btn btn-primary navbar-btn btn-block text-center"><i class="fa fa-plus-square"></i> Por favor adicione um menu na area de administração do wordpress.</a>
	<?php endif;
else:
	//Bootstrap V4 Menu
	$vs_nav_bgcolor = get_theme_mod( 'vs_navbar_bgcolor', '#333333' );
	$vs_nav_theme = get_theme_mod( 'vs_navbar_theme', 'dark' );
?>
<nav class="navbar navbar-<?php echo $vs_nav_theme; ?>" style="background-color: <?php echo $vs_nav_bgcolor; ?>;">
	<div class="container">
		<a class="navbar-brand" href="<?php echo VS_ROOT; ?>">
			<img alt="vousair" src="<?php echo VS_THEME_URI; ?>/assets/img/vousair_ipad.png" height="30">
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
<?php endif; ?>