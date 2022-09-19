<?php if (have_rows('integrate_with_tools')) : ?>
    <?php while (have_rows('integrate_with_tools')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
    ?>
        <div class="integrate_with_tools">
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
                            <div class="items">
                                <ul>
                                    <?php
                                    $index = 1;
                                    if (have_rows('items')) :
                                        while (have_rows('items')) : the_row();
                                            $item = get_sub_field('item');
                                    ?>
                                            <li><?php echo $item; ?></li>

                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                            </div>
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
