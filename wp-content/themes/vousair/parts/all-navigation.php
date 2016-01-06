<nav class="navbar navbar-default navbar-fixed-top vs-navigation" role="navigation">
	<div class="container">
		<?php
			if( has_nav_menu( 'main_nav' ) ) {
				$main_nav = wp_nav_menu(array(
					'echo'				=> false,
					'theme_location'	=> 'main_nav',
					'depth'				=> 1,
					'container'			=> 'div',
					'container_class'	=> 'navbar-left',
					'container_id'		=> 'main-nav',
					'menu_class'		=> 'nav navbar-nav',
					'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
					'walker'			=> new wp_bootstrap_navwalker()
				));
				echo $main_nav;
			}else{
				echo '<a href="/wp-admin" target="_blank" class="btn btn-primary navbar-btn btn-block text-center"><i class="fa fa-plus-square"></i> Por favor adicione um menu na area de administração do wordpress.</a>';
			}
		?>
	</div>
</nav>