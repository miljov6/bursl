<?php
if (have_rows('hero')) : ?>
    <?php while (have_rows('hero')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $contact_form = get_sub_field('contact_form');
        $text_box_1 = get_sub_field('text_box_1');
        $text_box_2 = get_sub_field('text_box_2');
    ?>
<div class="container-fluid">
            <div class="container">
                <div class="contact-head">
                <div class="title">
                    <h1><?php echo $title; ?></h1>
                
                <div class="under_title">
                    <div class="txt_1">
                        <p><?php echo $text_box_1; ?></p>
                    </div>
                    <div class="txt_2">
                        <p><?php echo $text_box_2; ?></p>
                    </div>
                </div>
                </div>
                <div class="contact-form">
                    <h2>Get started</h2>
                <?php echo do_shortcode($contact_form); ?>
                </div>
            </div>
        </div>
        </div>
    <?php endwhile;
endif; ?>