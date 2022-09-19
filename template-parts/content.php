<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header single-content">
		<div class="container-fluid">
			<div class="container">

			
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
		</div>
		</div>
	</header>
	<div class="thumb">
	<?php the_post_thumbnail(); ?>
	</div>
	<div class="entry-content">
		<div class="container-fluid">
			<div class="container">

			
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	</div>
		</div>

	<footer class="entry-footer">
	<div class="container-fluid">
				<div class="container">
		<?php _s_entry_footer(); ?>
	</div></div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
