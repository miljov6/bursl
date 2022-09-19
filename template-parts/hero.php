<?php if (have_rows('hero')) : ?>
    <?php while (have_rows('hero')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $title_2 = get_sub_field('title_2');
        $button_1_text = get_sub_field('button_1_text');
        $button_1_url = get_sub_field('button_1_url');
        $button_2_text = get_sub_field('button_2_text');
        $button_2_url = get_sub_field('button_2_url');
        $text_box_1 = get_sub_field('text_box_1');
        $text_box_2 = get_sub_field('text_box_2');
    ?>
<div class="container-fluid">
            <div class="container">
                <div class="title">
                    <div class="desktop" id="text-desktop">
                    <h1><?php echo $title; ?>
                    <?php if (have_rows('words')) : ?>
    <?php while (have_rows('words')) : the_row(); ?>
                <span class="word"><?php echo get_sub_field('word');?></span>
                <?php endwhile; ?>
<?php endif; ?></h1>
<h1><?php echo $title_2; ?>
                </h1>
                </div>
                <div class="mobile">
                <h1><?php echo $title; ?></h1>
                <br>
                <h1><?php if (have_rows('words')) : ?>
    <?php while (have_rows('words')) : the_row(); ?>
                <span class="word-mob"><?php echo get_sub_field('word');?></span>
                <?php endwhile; ?>
<?php endif; ?></h1>
<br>
<h1><?php echo $title_2; ?>
                </div>
                </div>
                <div class="under_title">
                    <div class="btns">
                        <div class="talk">
                            <span>
                                <?php echo $button_1_text; ?>
                            </span>
                            <a href="<?php echo $button_1_url; ?>"></a>
                        </div>
                        <div class="try">
                            <span>
                                <?php echo $button_2_text; ?>
                    </span>
                            <a href="<?php echo $button_2_url; ?>"></a>
                        </div>
                    </div>
                    <div class="txt_1">
                        <p><?php echo $text_box_1; ?></p>
                    </div>
                    <div class="txt_2">
                        <p><?php echo $text_box_2; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<script>
    $(document).ready(function(){
        if($(window).width()<480){
            $('#text-desktop').remove();
        }
    })
</script>