<?php if (have_rows('global_contractor')) : ?>
    <?php while (have_rows('global_contractor')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $text2 = get_sub_field('text_2');
        $subtitle = get_sub_field('subtitle');
        $img = get_sub_field('image');
    ?>
        <div class="global_contractor_how">
            <div class="container-fluid">
                <div class="container">
                <div class="mobile-img">
                    <img src="<?php echo $img['url']; ?>">
                    </div>
                    <div class="intro">
                         <div class="subtitle">
                                <?php if (!empty($subtitle)): ?>
                                    
                                     <?php endif;?>
                                </div>
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                            <div class="two-texts">
                            <p><?php echo $text; ?></p>
                            <p><?php echo $text2; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="boxes">
                        <div class="left desktop">
                            <img src="<?php echo $img['url']; ?>">
                        </div>
                        <div class="right">
                            <?php
                            $index = 1;
                            if (have_rows('boxes')) :
                                while (have_rows('boxes')) : the_row();
                                    $box_title = get_sub_field('box_title');
                            ?>
                                    <div class="box" <?php if ($index == 3) {
                                                            echo 'style="border:0;"';
                                                        } ?>>
                                        <span><?php echo '0'.$index.'.'; ?></span>
                                        <div class="points">
                                            <h4><?php echo $box_title; ?></h4>
                                        </div>
                                    </div>

                            <?php
                                    $index++;
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>