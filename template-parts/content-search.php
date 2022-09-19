<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-box">
		<div class="search-result-img">
			<?php _s_post_thumbnail();?>
		</div>
		<div class="post-rest">
			<span id="date-read"><?php echo get_the_date('F j Y'); ?> </span>
			<h4><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h4>
			<p><?php  echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->