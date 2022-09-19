<?php
if (have_rows('hero')) : ?>
    <?php while (have_rows('hero')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $button_1_text = get_sub_field('button_1_text');
        $button_1_url = get_sub_field('button_1_url');
        $button_2_text = get_sub_field('button_2_text');
        $button_2_url = get_sub_field('button_2_url');
        $text_box_1 = get_sub_field('text_box_1');
        $text_box_2 = get_sub_field('text_box_2');
    ?>
        <div class="container-fluid">
            <div class="container">
                <div class="title">
                    <h1><?php echo $title; ?>
                    </h1>
                    </h1>
                </div>
                <div class="under_title">
                    <div class="btns">
                        <div class="talk">
                            <span>
                                <?php echo $button_1_text; ?>
                            </span>
                            <a href="<?php echo $button_1_url; ?>"></a>
                        </div>
                        <div class="try">
                            <span>
                                <?php echo $button_2_text; ?>
                            </span>
                            <a href="<?php echo $button_2_url; ?>"></a>
                        </div>
                    </div>
                    <div class="group_txt">
                        <div class="txt_1">
                            <p><?php echo $text_box_1; ?></p>
                        </div>
                        <div class="txt_2">
                            <p><?php echo $text_box_2; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile;
endif; ?>