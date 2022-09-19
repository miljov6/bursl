<?php
if (have_rows('under_boxes')) :
    while (have_rows('under_boxes')) : the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('subtitle');
        $btn_text = get_sub_field('btn_text');
        $btn_url = get_sub_field('btn_url');
?>
        <div class="underbox">
            <div class="container-fluid">
                <div class="container">
                    <div class="under_boxes">

                        <h2><?php echo $title; ?></h2>
                        <p><?php echo $text; ?></p>
                        <div class="btn">
                            <span><?php echo $btn_text; ?></span>
                            <a href="<?php echo $btn_url; ?>"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
?>