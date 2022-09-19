<?php if (have_rows('how_it_works_2')) : ?>
    <?php while (have_rows('how_it_works_2')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
    ?>
        <div class="contracts_how_2">
            <div class="container-fluid">
                <div class="container">
                    <div class="intro">
                         <div class="subtitle">
                                <?php if (!empty($subtitle)): ?>
                                    
                                     <?php endif;?>
                                </div>
                    </div>
                    <div class="boxes">
                        <div class="left-box">
                            <div class="title">
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $text; ?></p>
                            </div>
                        </div>
                        <div class="right-box">
                            <?php
                            $index = 1;
                            $count = count(get_sub_field('services'));
                            if (have_rows('services')) :
                                while (have_rows('services')) : the_row();
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $icon = get_sub_field('icon');
                            ?>
                                    <div class="box" <?php if($index==$count){echo 'style="border:0;"';}?>>
                                        <div class="icon">
                                            <img src="<?php echo $icon['url']; ?>">
                                        </div>
                                        <div class="text">
                                            <h4><?php echo $title; ?></h4>
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