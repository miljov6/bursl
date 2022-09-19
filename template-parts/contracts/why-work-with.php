<?php if (have_rows('why_work_with')) : ?>
    <?php while (have_rows('why_work_with')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $subtitle = get_sub_field('subtitle');
    ?>
        <div class="why_work_with">
            <div class="container-fluid">
                <div class="container">
                    <div class="intro">
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                        </div>
                    </div>
                    <div class="boxes">
                        <?php
                        if (have_rows('boxes')) :
                            while (have_rows('boxes')) : the_row();
                                $box_image = get_sub_field('box_image');
                                $box_title = get_sub_field('box_title');
                                $box_text = get_sub_field('box_text');
                        ?>
                                <div class="box">
                                    <img src="<?php echo $box_image['url']; ?>">
                                    <h3><?php echo $box_title; ?></h3>
                                    <p><?php echo $box_text; ?></p>
                                </div>

                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>