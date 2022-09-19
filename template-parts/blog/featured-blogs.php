<?php if (have_rows('featured_blogs')) : ?>
    <?php while (have_rows('featured_blogs')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $blog_btn = get_sub_field('blog_btn');
    ?>
        <div class="featured_blogs">
            <div class="container-fluid">
                <div class="container">
                    <div class="intro">
                        <div class="subtitle">
                            <?php if (!empty($subtitle)) : ?>
                                
                            <?php endif; ?>
                        </div>
                        <div class="title">
                            <?php if (($title)) : ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; ?>
                            <?php if (($text)) : ?>
                                <p><?php echo $text; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="boxes">
                        <?php
                        $i = 1;
                        if (have_rows('blog_posts_picker')) :
                            while (have_rows('blog_posts_picker')) : the_row();
                                if ($i == 1) {
                                    $blog1 = get_sub_field('choose_post');
                                }
                                $i++;
                            endwhile;
                        endif;

                        ?>
                        <div class="left-box">
                            <a href="<?php echo get_permalink($blog1); ?>">
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($blog1->ID), array(500, 500)); ?>">
                            <div id="details">
                            <span id="date-read"><?php echo get_the_date('F j Y', $blog1->ID);?> • <?php echo reading_time(get_post_field('post_content', $blog1->ID)); ?></span>
                            <h4><?php echo $blog1->post_title; ?></h4>
                            <p><?php echo substr(wp_strip_all_tags($blog1->post_content), 0, 200) . '...'; ?></p>
                            </div>
                            </a>
                        </div>
                        <div class="right-box">
                            <?php
                            if (have_rows('blog_posts_picker')) :
                                while (have_rows('blog_posts_picker')) : the_row();
                                    $blog = get_sub_field('choose_post');

                            ?>
                                    <div class="box" data-title="<?php echo esc_html($blog->post_title); ?>" 
                                    data-url="<?php echo get_permalink($blog); ?>" 
                                    data-img="<?php echo wp_get_attachment_url(get_post_thumbnail_id($blog->ID), 'thumbnail'); ?>" 
                                    data-date-read="<?php echo get_the_date('F j Y', $blog->ID); ?> • <?php echo reading_time(get_post_field('post_content', $blog->ID)); ?>" 
                                    data-content="<?php echo substr(wp_strip_all_tags($blog->post_content), 0, 200) . '...'; ?>">
                                    <span><?php echo get_the_date('F j Y', $blog->ID); ?> • <?php echo reading_time(get_post_field('post_content', $blog->ID)); ?></span>    
                                    <a href="<?php echo get_permalink($blog); ?>">
                                            <h4><?php echo esc_html($blog->post_title); ?></h4>
                                        </a>
                                        <p><?php echo substr($blog->post_content, 0, 80) . '...'; ?></p>
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
<script>

$('.right-box .box').each(function() {
        $(this).hover(function() {
           var date = $(this).attr('data-date-read');
           var title = $(this).attr('data-title');
           var img = $(this).attr('data-img');
           var url = $(this).attr('data-url');
           var content = $(this).attr('data-content');
           $('#date-read').text(date);
           $('.left-box p').text(content);
           $('.left-box a').attr('href',url);
           $('#details h4').text(title);
           $('.left-box img').attr('src', img);
        })
    }) 

</script>