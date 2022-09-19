<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="container-fluid">
			<div class="container">


				<header class="page-header">
					<h1 class="error"><?php esc_html_e('404', '_s'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e('Become a Bursl partner to grow your client base and tap into a broad network of market leaders across the globe.', '_s'); ?></p>
				</div>
			</div>
		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
