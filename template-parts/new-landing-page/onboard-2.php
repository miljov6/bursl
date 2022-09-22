<?php if (have_rows('onboard_2')) : ?>
    <?php while (have_rows('onboard_2')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
    ?>
        <div class="onboard_2">
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
                        ?>
                                <div class="box">
                                    <img src="<?php echo $box_image['url']; ?>">
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