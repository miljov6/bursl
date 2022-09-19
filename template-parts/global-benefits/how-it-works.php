<?php if (have_rows('how_it_works')) : ?>
    <?php while (have_rows('how_it_works')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $text_2 = get_sub_field('text_2');
        $subtitle = get_sub_field('subtitle');
    ?>
        <div class="how_it_works_benefits radius">
            <div class="container-fluid">
                <div class="container">
                <div class="intro">
                         <div class="subtitle">
                                <?php if (!empty($subtitle)): ?>
                                    
                                     <?php endif;?>
                                </div>
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                            <div style="display:flex; gap: 20px;">
                            <p><?php echo $text; ?></p>
                            <p><?php echo $text_2; ?></p>
                            </div>
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
