<?php if (have_rows('insights')) : ?>
    <?php while (have_rows('insights')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $subtitle = get_sub_field('subtitle');
        $blog_btn = get_sub_field('blog_btn');
    ?>
        <div class="how_insights">
            <div class="container-fluid">
                <div class="container">
                    <div class="intro how-it-works-insights">
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                    <div class="boxes">
                    <?php
                        if (have_rows('left_post')) :
                            while (have_rows('left_post')) : the_row();
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $img = get_sub_field('image');
                                $btn_text = get_sub_field('btn_text');
                                $btn_url = get_sub_field('btn_url');
                        ?>
                        <div class="left-box">
                        <img src="<?php echo $img['url']; ?>">
                        <h4><?php echo $title; ?></h4>
                        <p><?php echo $text; ?></p>
                        <div class="btn">
                            <span><?php echo $btn_text; ?></span>
                            <a href="<?php echo $btn_url; ?>"></a>
                        </div>
                        </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                        <div class="right-box">
                        <?php
                        if (have_rows('blog_posts_picker')) :
                            while (have_rows('blog_posts_picker')) : the_row();
                                $blog = get_sub_field('choose_post');
                        ?>
                                <div class="box">
                                    <a href="<?php echo get_permalink($blog); ?>">
                                    <h4><?php echo esc_html($blog->post_title); ?></h4></a>
                                    <p><?php echo substr($blog->post_content, 0, 88).'...'; ?></p>
                                </div>

                        <?php
                            endwhile;
                        endif;
                        ?>
                        <div class="btn">
                            <span><?php echo $blog_btn; ?></span>
                            <a href="<?php echo esc_url(site_url('/blog/')); ?>"></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>