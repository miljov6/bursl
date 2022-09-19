<?php if (have_rows('first')) : ?>
    <?php while (have_rows('first')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
    ?>
        <div class="conctact_us_section">
            <div class="container-fluid">
                <div class="container first">
                    <div class="boxes">
                    <div class="left">
                            <img src="<?php echo $img['url']; ?>">
                        </div>
                        <div class="right">
                            <div class="intro">
                                <?php if (!empty($subtitle)): ?>
                                <div class="subtitle">
                                    
                                </div>
                                <?php  endif; ?>
                                <div class="title">
                                    <h2><?php echo $title; ?></h2>
                                    <p><?php echo $text; ?></p>
                                </div>
                            </div>
                            <div class="items">
                                <ul>
                                    <?php
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
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
