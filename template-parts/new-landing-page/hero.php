<?php if (have_rows('hero')) : ?>
    <?php while (have_rows('hero')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $title_2 = get_sub_field('title_2');
        $contact_form = get_sub_field('contact_form');
        $text_box_1 = get_sub_field('text_box_1');
        $text_box_2 = get_sub_field('text_box_2');
        $button_1_text = get_sub_field('button_1_text');
        $button_1_url = get_sub_field('button_1_url');
    ?>
        <div class="container-fluid">
            <div class="container">
                <div class="new-landing-head">
                    <div class="title">
                        <div class="desktop" id="text-desktop">
                            <h1><?php echo $title; ?></h1>
                            <div class="words">    
                            <h1> 
                            <?php if (have_rows('words')) : ?>
                                    <?php while (have_rows('words')) : the_row(); ?>
                                      <span class="word"><?php echo get_sub_field('word'); ?></span>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </h1>
                            </div>
                            <br>
                            <br>
                            <h1><?php echo $title_2; ?>
                            </h1>
                        </div>

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
                        <?php echo do_shortcode($contact_form); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <script>
        $(document).ready(function() {
            if ($(window).width() < 480) {
                $('#text-desktop').remove();
            }
        })
    </script>