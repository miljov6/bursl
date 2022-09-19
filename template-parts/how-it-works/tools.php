<?php if (have_rows('tools')) : ?>
    <?php while (have_rows('tools')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
        $btn_text = get_sub_field('btn_text');
        $btn_url = get_sub_field('btn_url');
    ?>
        <div class="how_it_tools">
            <div class="container-fluid">
                <div class="container">
                    <div class="boxes">
                        <div class="left">
                        <div class="intro">
                         <div class="subtitle">
                                <?php if (!empty($subtitle)): ?>
                                    
                                     <?php endif;?>
                                </div>
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $text; ?></p>
                        </div>
                        <div class="btn">
                                <span>
                                    <?php echo $btn_text; ?>
                                </span>
                                <a href="<?php echo $btn_url; ?>"></a>
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