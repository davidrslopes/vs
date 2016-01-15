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
	<section class="col-md-7 col-xl-8">
		<div class="card-deck-wrapper">
				<div class="card-group">
				<?php
				if ( have_posts() ) :
					$i = 1;
					while ( have_posts() ) :
						the_post();
						get_template_part( 'parts/list', 'post' );
						if($i % 2 == 0) echo'</div><div class="card-group">';
						$i++;
					endwhile;
					wp_link_pages();
				else :
					get_template_part( 'parts/all', 'noresults' );
				endif; ?>
				</div>
		</div>
	</section>
	<aside class="vs-sidebar col-md-5 col-xl-4">
		<?php get_sidebar( 'vs-sidebar' ); ?>
	</aside>
</main>

<?php get_footer(); ?>