<?php if (have_rows('partners')) : ?>
    <?php while (have_rows('partners')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
    ?>
        <div class="partners_page_slider">
            <div class="container-fluid radius">
                <div class="container">
                    <div class="intro">
                        <?php if (!empty($subtitle)) : ?>
                            <div class="subtitle">
                                
                            </div>
                        <?php endif; ?>
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                        </div>
                    </div>
                    <div class="partners_slider">
                        <?php
                        if (have_rows('logos')) :
                            while (have_rows('logos')) : the_row();
                                $logo = get_sub_field('logo');
                        ?>
                                <div class="partner_logo">
                                    <img src="<?php echo $logo['url']; ?>">

                                </div>
                                <?php
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
