<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="
    background-image: url(http://127.0.0.1:8084/bursl/wp-content/themes/bursl/icons/background.png);
background-position: top;
background-size: cover;
">
	<header class="entry-header single-content">
		<div class="container-fluid">
			<div class="container">
				<div class="head-title">
					<a class="back" href="<?php echo get_site_url(); ?>/blog">BACK</a>
					<?php
					if (is_singular()) :
						the_title('<h1 class="entry-title">', '</h1>');
					else :
						the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif;

					if ('post' === get_post_type()) :
					?>
					<?php endif; ?>
					<span class="published"><?php echo get_the_date('F j Y'); ?> • <?php echo reading_time(get_the_content()); ?> </span>
				</div>
			</div>
		</div>
	</header>
	<div class="entry-content blog-post">
		<div class="container-fluid">
			<div class="container">
				<div class="thumb">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="content-text">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__('Continue reading<span class="screen-reader-text"> "%s"</span>', '_s'),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post(get_the_title())
						)
					);
					?>
				</div>
			</div>
		</div>
		<div class="yml">
			<div class="container-fluid">
				<div class="container">
					<div class="you-may-like">
						<h3>You also can like</h3>
						<div class="other-post-list">
							<?php
							$recent_posts = wp_get_recent_posts(array(
								'numberposts' => 3, // Number of recent posts thumbnails to display
								'post_status' => 'publish' // Show only the published posts
							));
							foreach ($recent_posts as $post_item) : ?>
								<div class="choosed-post">
									<div class="post-img">
										<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_item['ID']), array(500, 500)); ?>">
									</div>
									<div class="post-rest">
										<span id="date-read"><?php echo get_the_date('F j Y', $post_item['ID']); ?> • <?php echo reading_time(get_post_field('post_content', $post_item['ID'])); ?></span>
										<h4><a href="<?php echo get_permalink($post_item['ID']); ?>"><?php echo $post_item['post_title']; ?></a></h4>
										<p><?php echo substr(wp_strip_all_tags($post_item['post_content']), 0, 80) . '...'; ?></p>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->