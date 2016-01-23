<?php
/**
 * VouSair theme widgets.
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
 */

/**
 * WP Search widget to Bootstrap
 *
 * @since VouSair Theme 1.0
 */
function vs_search_form( $form ) {
	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<div class="form-group">
			<label class="sr-only" for="s">' . __( 'Pesquisar' ) . '</label>
			<div class="input-group">
				<input class="form-control" placeholder="' . __( 'Pesquisar um artigo...' ) . '" type="text" value="' . get_search_query() . '" name="s" id="s" />
				<span class="input-group-btn">
					<button class="btn btn-inverse" id="searchsubmit" type="submit" >'. esc_attr__( 'Search' ) .'</button>
				</span>
			</div>
		</div>
	</form>';
	return $form;
}
add_filter( 'get_search_form', 'vs_search_form', 100 );