<?php if (have_rows('text_invert_boxes_under')) : ?>
    <?php while (have_rows('text_invert_boxes_under')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
    ?>
        <div class="for_finance_teams_text_boxes_under invert_1">
            <div class="container-fluid">
                <div class="container">
                    <div class="intro">
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $text; ?></p>
                        </div>
                        <div class="subtitle">
                            <?php if (!empty($subtitle)) : ?>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="boxes">
                        <?php
                        if (have_rows('boxes')) :
                            while (have_rows('boxes')) : the_row();
                                $box_image = get_sub_field('box_image');
                                $box_title = get_sub_field('box_title');
                        ?>
                                <div class="box">
                                    <img src="<?php echo $box_image['url']; ?>">
                                    <h3><?php echo $box_title; ?></h3>
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