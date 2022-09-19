<div class="container-fluid">
    <div class="container">
        <div class="footer-up">
        <div class="footer_left">
            <div class="logo">
                <?php $logo =  get_field('footer_logo', 'option'); ?>
                <img src="<?php echo esc_url($logo['url']); ?>">
                <p><?php echo the_field('footer_text', 'option'); ?></p>
            </div>
            <div class="icons">
            <?php $facebook =  get_field('facebook_page', 'option'); ?>
            <?php $instagram =  get_field('instagram_page', 'option'); ?>
            <?php $twitter =  get_field('twitter_page', 'option'); ?>
                <a href="<?php echo $facebook; ?>"><img src="<?php echo get_site_url(); ?>/wp-content/themes/bursl/icons/facebook.svg"></a>
                <a href="<?php echo $instagram; ?>"><img src="<?php echo get_site_url(); ?>/wp-content/themes/bursl/icons/instagram.svg"></a>
                <a href="<?php echo $twitter; ?>"><img src="<?php echo get_site_url(); ?>/wp-content/themes/bursl/icons/twitter.svg"></a>
            </div>
        </div>
        <div class="footer_right">
            <div class="footer_1 footer-mob">
            <?php  wp_nav_menu(array('theme_location' => 'footer_menu_1'));  ?>
            </div>
            <div class="footer_2 footer-mob">
                <?php  wp_nav_menu(array('theme_location' => 'footer_menu_2')); ?>
            </div>
            <div class="footer_3 footer-mob">
            <?php  wp_nav_menu(array('theme_location' => 'footer_menu_3')); ?>
            </div>
            <div class="footer_4 footer-mob">
            <?php  wp_nav_menu(array('theme_location' => 'footer_menu_4')); ?>
            </div>
        </div>
        </div>
        <div class="site-info">
				<?php $copyright =  get_field('copyright', 'option'); ?>
				<p class="copyright"><?php echo $copyright; ?></p>
		</div>
    </div>
</div>
<script>
    $('.footer-mob p').each(function() {
        if($(window).width()<800){
        $(this).click(function() {
            if ($(this).hasClass('up') == true) {
                $(this).removeClass('up');
                $(this).next().attr('style', 'display:none;');
            } else {
                $(this).addClass('up');
                $(this).next().attr('style', 'display:block; opacity: 1; visibility: visible; transition: opacity 1s linear;');
            }
        })
    }
    }) 
</script>