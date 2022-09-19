<?php if (have_rows('local_partnerships')) : ?>
    <?php while (have_rows('local_partnerships')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
    ?>
        <div class="local_partnerships">
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
                            <?php
                            $index = 1;
                            if (have_rows('boxes')) :
                                while (have_rows('boxes')) : the_row();
                                    $box_title = get_sub_field('box_title');
                            ?>
                                    <div class="box" <?php if($index==3){echo 'style="border:0;"';}?>>
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
                        <div class="right">
                            <img src="<?php echo $img['url']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>