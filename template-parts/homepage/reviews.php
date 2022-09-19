<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<?php if (have_rows('reviews')) : ?>
    <?php while (have_rows('reviews')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
    ?>
        <div class="reviews">
            <div class="container-fluid">
                <div class="container">
                    <div class="intro">
                         <div class="subtitle">
                                <?php if (!empty($subtitle)): ?>
                                    
                                     <?php endif;?>
                                </div>
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                        </div>
                    </div>
                    <div class="reviews_slider">
                        <?php
                        if (have_rows('review')) :
                            while (have_rows('review')) : the_row();
                                $review_icon = get_sub_field('review_icon');
                                $review_text = get_sub_field('review_text');
                                $review_name = get_sub_field('review_name');
                                $review_position = get_sub_field('review_position');
                        ?>
                                <div class="review">
                                    <p class="review_text"><?php echo $review_text; ?></p>
                                    <div class="review_details">
                                    <img src="<?php echo $review_icon['url']; ?>">
                                    <p class="review_name"><?php echo $review_name; ?></p>
                                    <p class="review_position"><?php echo $review_position; ?></p>
                                    </div>
                                </div>

                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<script>
    $('.reviews_slider').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
    })
</script>