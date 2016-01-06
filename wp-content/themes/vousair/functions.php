<?php
/**
 * MSD Portugal - Profissionais de Saúde - Theme functions and definitions
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

// Define helper constants
define ( 'VS_THEME_DIR', 		get_template_directory() );
define ( 'VS_THEME_URI', 		get_template_directory_uri() );
define ( 'VS_ROOT', 	 		get_site_url() );

// Scripts
require VS_THEME_DIR . '/functions/scripts.php';

// Template functions
require VS_THEME_DIR . '/functions/template.php';

// Menus
require VS_THEME_DIR . '/functions/menus.php';

// Admin tweaks
// require VS_THEME_DIR . '/functions/admin.php';

// Theme setup
// require VS_THEME_DIR . '/functions/setup.php';





// Sidebars
// require VS_THEME_DIR . '/functions/sidebars.php';

// Widgets
// require VS_THEME_DIR . '/functions/widgets.php';

// Various utilitites
// require VS_THEME_DIR . '/functions/utils.php';

