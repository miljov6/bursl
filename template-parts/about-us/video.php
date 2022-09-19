<?php if (have_rows('video')) : ?>
    <?php while (have_rows('video')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $video = get_sub_field('video');
        $text = get_sub_field('text');
    ?>
     <div class="video_group">
            <div class="container-fluid">
                <div class="container">
                <div class="intro">
                                <div class="title">
                                    <h2><?php echo $title; ?></h2>
                                    <p><?php echo $text; ?></p>
                                </div>
                            </div>
                            <div class="video-section">
                                <?php echo $video; ?>
                            </div>
                </div>
                </div>
                </div>

<?php endwhile; ?>
<?php endif; ?>
