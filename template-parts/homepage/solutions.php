<?php if (have_rows('solutions')) : ?>
    <?php while (have_rows('solutions')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
    ?>
        <div class="solutions">
            <div class="container-fluid">
                <div class="container">
                    <div class="intro">
                         <div class="subtitle">
                                <?php if (!empty($subtitle)): ?>
                                    
                                     <?php endif;?>
                                </div>
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                    <div class="boxes">
                        <?php
                        if (have_rows('boxes')) :
                            while (have_rows('boxes')) : the_row();
                                $box_image = get_sub_field('box_image');
                                $box_text = get_sub_field('box_text');
                                $box_btn_text = get_sub_field('box_btn_text');
                                $box_btn_url = get_sub_field('box_btn_url');
                        ?>
                                <div class="box">
                                    <img src="<?php echo $box_image['url']; ?>">
                                    <h3><?php echo $box_text; ?></h3>
                                    <div class="box_btn">
                                        <span><?php echo $box_btn_text; ?></span>
                                        <a href="<?php echo $box_btn_url; ?>"></a>
                                    </div>
                                </div>

                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="under_boxes">
                    <?php
                        if (have_rows('under_boxes')) :
                            while (have_rows('under_boxes')) : the_row();
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $btn_text = get_sub_field('btn_text');
                                $btn_url = get_sub_field('btn_url');
                        ?>
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $title; ?></p>
                                <div class="btn">
                                    <span><?php echo $btn_text; ?></span>
                                    <a href="<?php echo $btn_url; ?>"></a>
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