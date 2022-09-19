<?php if (have_rows('compliance')) : ?>
    <?php while (have_rows('compliance')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
    ?>
        <div class="employee_compliance">
            <div class="container-fluid">
                <div class="container">
                    <div class="boxes">
                        <div class="left">
                            <div class="intro">
                                <div class="subtitle">
                                    <?php if (!empty($subtitle)) : ?>
                                        
                                    <?php endif; ?>
                                </div>
                                <div class="title">
                                    <h2><?php echo $title; ?></h2>
                                    <p><?php echo $text; ?></p>
                                </div>
                                <div class="mobile-img">
                                    <img src="<?php echo $img['url']; ?>">
                                </div>
                            </div>
                            <?php
                            $index = 1;
                            $count = count(get_sub_field('boxes'));
                            if (have_rows('boxes')) :
                                while (have_rows('boxes')) : the_row();
                                    $box_title = get_sub_field('box_title');
                                    $box_text = get_sub_field('box_text');
                            ?>
                                    <div class="box" <?php if ($index == $count) {
                                                            echo 'style="border:0;"';
                                                        } ?>>
                                        <span><?php echo '0' . $index . '.'; ?></span>
                                        <div class="points">
                                            <h4><?php echo $box_title; ?></h4>
                                            <p><?php echo $box_text; ?></p>
                                        </div>
                                    </div>

                            <?php
                                    $index++;
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="right desktop">
                            <img src="<?php echo $img['url']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>