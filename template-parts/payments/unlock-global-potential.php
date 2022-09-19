<?php if (have_rows('unlock_global_potential')) : ?>
    <?php while (have_rows('unlock_global_potential')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
    ?>
        <div class="unlock_global_potential">
            <div class="container-fluid">
                <div class="container">
                    <div class="boxes">
                        <div class="left">
                            <img src="<?php echo $img['url']; ?>">
                        </div>
                        <div class="right">
                            <div class="intro">
                                <div class="title">
                                    <h2><?php echo $title; ?></h2>
                                    <p><?php echo $text; ?></p>
                                </div>
                            </div>
                            <div class="items">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>