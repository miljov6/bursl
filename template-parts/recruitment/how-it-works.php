<?php if (have_rows('how_it_works')) : ?>
    <?php while (have_rows('how_it_works')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
    ?>
        <div class="recru_how">
            <div class="container-fluid">
                <div class="container">
                    <div class="two_boxes">
                        <div class="intro">
                            <div class="subtitle">
                                
                            </div>
                            <div class="title">
                                <h2><?php echo $title; ?></h2>
                                <p><?php echo $text; ?></p>
                            </div>
                        </div>
                        <div class="img">
                            <div class="right">
                                <img src="<?php echo $img['url']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>