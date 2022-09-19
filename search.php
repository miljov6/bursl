<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _s
 */

get_header();
?>

<main id="primary" class="site-main search-results-main">

	<?php if (have_posts()) : ?>

		<header class="page-header single-content search-content">
			<div class="container-fluid">
				<div class="container">
					<p><?php
						global $wp_query;
						if ($wp_query->found_posts < 2) {
							$result = "result";
						} else {
							$result = "results";
						}
						echo $wp_query->found_posts . " search " . $result . " for:";
						?></p>
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf(esc_html__('%s', '_s'), '<span>' . get_search_query() . '</span>');
						?>

					</h1>
				</div>
			</div>
		</header><!-- .page-header -->
		<div class="search-results">
			<div class="container">
				<div class="search-results-grid">
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part('template-parts/content', 'search');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
				?></div>
			</div>
		</div>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
