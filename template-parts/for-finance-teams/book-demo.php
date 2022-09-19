<?php if (have_rows('book_demo')) : ?>
    <?php while (have_rows('book_demo')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $subtitle = get_sub_field('subtitle');
        $img_1 = get_sub_field('image_1');
        $img_2 = get_sub_field('image_2');
        $btn_text = get_sub_field('btn_text');
        $btn_url = get_sub_field('btn_url');
    ?>
        <div class="for_finance_teams_demo fnt">
            <div class="container-fluid">
                <div class="container">
                    <div class="three_boxes">
                        <div class="left-image-box">
                            <img src="<?php echo $img_1['url']; ?>">
                        </div>
                        <div class="intro">
                            <div class="subtitle">
                                
                            </div>
                            <div class="title">
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $text; ?></p>
                            </div>
                            <?php if( get_sub_field('btn_text')) : ?>
                            <div class="btn">
                                <span>
                                    <?php echo $btn_text; ?>
                                </span>
                                <a href="<?php echo $btn_url; ?>"></a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="right-image-box">
                            <img src="<?php echo $img_2['url']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>