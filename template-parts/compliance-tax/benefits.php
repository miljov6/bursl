<?php if (have_rows('benefits')) : ?>
    <?php while (have_rows('benefits')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $subtitle = get_sub_field('subtitle');
    ?>
        <div class="benefits">
            <div class="container-fluid">
                <div class="container">
                    <div class="intro">
                         <div class="subtitle">
                                </div>
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                    <div class="boxes">
                        <?php
                        $index = 1;
                        if (have_rows('boxes')) :
                            while (have_rows('boxes')) : the_row();
                                $box_image = get_sub_field('box_image');
                                $box_title = get_sub_field('box_title');
                                $box_text = get_sub_field('box_text');
                        ?>
                                <?php if ($index % 2 == 0) { ?>
                                    <div class="box box-1">
                                        <div class="box-img">
                                            <img src="<?php echo $box_image['url']; ?>">
                                        </div>
                                        <div class="txt">
                                            <h4><?php echo $box_title; ?></h4>
                                            <p><?php echo $box_text; ?></p>
                                        </div>
                                    </div>

                                <?php } else { ?>

                                    <div class="box box-2">
                                        <div class="txt">
                                            <h4><?php echo $box_title; ?></h4>
                                            <p><?php echo $box_text; ?></p>
                                        </div>
                                        <div class="box-img">
                                            <img src="<?php echo $box_image['url']; ?>">
                                        </div>
                                    </div>

                        <?php
                                }
                                $index++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>