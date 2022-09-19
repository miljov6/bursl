<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<section class="no-results not-found single-content">
	<header class="page-header alignwide">
	<div class="container-fluid">
			<div class="container">
				<p>0 search results for:</p>
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', '_s' ); ?></h1>
		</div>
		</div>
	</header><!-- .page-header -->

	<div class="page-content">
	<div class="container-fluid">
			<div class="container">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', '_s' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<h3><?php esc_html_e( "Sorry, we couldn't find any results for that query.", '_s' ); ?></h3>
			<?php

		else :
			?>

			<h3><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', '_s' ); ?></h3>
			<?php

		endif;
		?>
		</div>
		</div>
	</div><!-- .page-content -->
</section><!-- .no-results -->
