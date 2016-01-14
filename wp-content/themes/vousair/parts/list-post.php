<?php
/**
 * VouSair - List Post
 *
 * @package WordPress
 * @subpackage VouSair
 * @since VouSair Theme 1.0
*/

//$category = str_replace('class="','class="list-group list-group-flush ',$category);
?>
<article class="card">
	<?php if ( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php the_post_thumbnail('large', array( 'class' => 'card-img-top img-fluid' )); ?>
		</a>
	<?php endif; ?>
	<div class="card-block">
		<h4 class="card-title"><?php the_title(); ?></h4>
		<h6 class="card-subtitle text-muted"></h6>
		<?php
		$categories = get_the_category();
		$separator = ' ';
		$output = '';
		if ( ! empty( $categories ) ) {
			foreach( $categories as $category ) {
				$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
			}
			echo trim( $output, $separator );
		}
		?>
		<div class="card-text"><?php the_excerpt(); ?></div>
	</div>
	<div class="card-footer text-muted">
		<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e( 'Ler mais...', 'vousair' ) ?></a>
	</div>
</article>