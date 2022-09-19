<?php if (have_rows('fifth')) : ?>
    <?php while (have_rows('fifth')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
    ?>
        <div class="for_startups_section">
            <div class="container-fluid">
                <div class="container">
                    <div class="boxes">
                        <div class="left">
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
                        <div class="right">
                            <img src="<?php echo $img['url']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
