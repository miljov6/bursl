<?php if (have_rows('data_protection')) : ?>
    <?php while (have_rows('data_protection')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
    ?>
        <div class="data_protection">
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
                                $box_title = get_sub_field('box_title');
                                $box_text = get_sub_field('box_text');    
                                $box_icon = get_sub_field('box_icon');                            
                        ?>
                                <div class="box">
                                    <img src="<?php echo $box_icon['url']; ?>">
                                    <div class="box-text">
                                    <h4><?php echo $box_title; ?></h4>
                                    <p><?php echo $box_text; ?></p>
                                    </div>
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