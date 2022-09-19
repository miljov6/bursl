<?php if (have_rows('integrate_with_businesses')) : ?>
    <?php while (have_rows('integrate_with_businesses')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
        $btn_text = get_sub_field('btn_text');
        $btn_url = get_sub_field('btn_url');
    ?>
        <div class="integrate_with_businesses">
            <div class="container-fluid">
                <div class="container">
                    <div class="boxes">
                        <div class="left">
                            <div class="intro">
                                <div class="title">
                                    <h2><?php echo $title; ?></h2>
                                    <p><?php echo $text; ?></p>
                                </div>
                            </div>
                            <div class="items">
                            <div class="btn">
                            <span><?php echo $btn_text; ?></span>
                            <a href="<?php echo $btn_url; ?>"></a>
                        </div>
                            </div>
                        </div>
                        <div class="right">
                            <img src="<?php echo $img['url']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
