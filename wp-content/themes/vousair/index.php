<?php
/**
 * VouSair - Main
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/

get_header(); ?>

<main class="container">

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
	endwhile;
else :
	get_template_part( 'parts/all', 'noresults' );
endif; ?>

</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>