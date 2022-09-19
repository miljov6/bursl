<?php if (have_rows('compliance_on_all')) : ?>
    <?php while (have_rows('compliance_on_all')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $img = get_sub_field('image');
    ?>
        <div class="compliance_on_all">
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
                            <p class="compl"><?php echo $text; ?></p>
                        </div>
                    </div>
                    </div>
                    <div class="right">
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