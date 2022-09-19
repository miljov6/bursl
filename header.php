<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', '_s'); ?></a>

		<header id="masthead" class="site-header">
			<div class="head">
				<div class="site-branding">
					<?php
					the_custom_logo();
					?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<form action="<?php echo home_url('/'); ?>" method="get" style="display:none" id="header-form">
						<div id="left-half">
							<button type="submit" class="btn-submit"></button>
							<input type="text" name="s" id="search-input" value="Search..." />
						</div>
						<div id="close"></div>
					</form>
				</nav><!-- #site-navigation -->
				<div class="right_nav">
					<div class="search-btn">
						<img id="search" src="<?php echo get_site_url(); ?>/wp-content/themes/bursl/icons/search.svg">
					</div>
					<?php
					$button_1_text = get_field('button_1_text', 'option');
					$button_1_url = get_field('button_1_url', 'option');
					$button_2_text = get_field('button_2_text', 'option');
					$button_2_url = get_field('button_2_url', 'option');
					?>
					<div class="btns">
						<div class="try">
							<span>
								<?php echo $button_2_text; ?>
							</span>
							<a href="<?php echo $button_2_url; ?>"></a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<script>
			$('.search-btn').click(function() {
				$('.head').css('background', '#fff');
				$('.menu-main-container').hide('slow');
				$('#header-form').show('slow');
				$(this).hide('slow');
			})
			$('#search-input').click(function() {
				$(this).val('');
			})
			$('#close').click(function() {
				$('.head').css('background', '');
				$('.menu-main-container').show('slow');
				$('#header-form').hide('slow');
				$('.search-btn').show('slow');
			})
		</script>