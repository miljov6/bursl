<?php if (have_rows('legal_partners')) : ?>
    <?php while (have_rows('legal_partners')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
    ?>
        <div class="legal_partners">
            <div class="container-fluid">
                <div class="container">
                    <div class="boxes">
                        <div class="left-box">
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
                        </div>
                        <div class="right-box">
                            <?php
                            $index = 1;
                            if (have_rows('services')) :
                                while (have_rows('services')) : the_row();
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $icon = get_sub_field('icon');
                            ?>
                                    <div class="box" <?php if($index==4){echo 'style="border:0;"';}?>>
                                        <div class="icon">
                                            <img src="<?php echo $icon['url'];?>">
                                        </div>
                                        <div class="text">
                                            <h4><?php echo $title; ?></h4>
                                            <p><?php echo $text; ?></p>
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