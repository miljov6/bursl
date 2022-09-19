<div class="all-blogs">
<div class="container-fluid">
    <div class="container">
        <div class="all-title">
            <h2>All Content</h2>
        </div>
        <div class="catts" style="display:none;">
            <div class="category-box" id="all"><span>All</span></div>
            <?php
            function cats($cat)
            {
                $count = count($cat);
                $i = 1;
                foreach ($cat as $c) {
                    if ($i != $count) {
                        echo $c->slug . ',';
                    } else {
                        echo $c->slug;
                    }
                    $i++;
                }
            }
            $categories = get_categories();
            //var_dump($categories);
            foreach ($categories as $category) :
                if ($category->slug != 'uncategorized') :
            ?>
                    <div class="category-box" id="<?php echo $category->slug; ?>"><span><?php echo $category->name; ?></span></div>
            <?php
                endif;
            endforeach;
            ?>
        </div>
        <div class="all-posts">
            <?php $recent_posts = wp_get_recent_posts(array(
                'numberposts' => -1, // Number of recent posts thumbnails to display
                'post_status' => 'publish' // Show only the published posts
            ));
            $i = 1;
            foreach ($recent_posts as $post_item) :
                $cats = get_the_category($post_item['ID']);
            ?>

                <div class="post-box <?php if ($i >= 10) : echo 'show-more';
                                        endif; ?>" data-category="<?php cats($cats); ?>">
                    <div class="post-img">
                        <?php if (has_category('Articles', $post_item['ID'])) : ?><div class="cat-div articles">Articles</div><? endif; ?>
                        <?php if (has_category('Insight', $post_item['ID'])) : ?><div class="cat-div insight">Insights</div><? endif; ?>
                        <?php if (has_category('Podcast', $post_item['ID'])) : ?><div class="cat-div podcast">Podcast</div><? endif; ?>
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_item['ID']), array(500, 500)); ?>">
                    </div>
                    <div class="post-rest">
                        <span id="date-read"><?php echo get_the_date('F j Y', $post_item['ID']); ?> • <?php echo reading_time(get_post_field('post_content', $post_item['ID'])); ?></span>
                        <h4><a href="<?php echo get_permalink($post_item['ID']); ?>"><?php echo $post_item['post_title']; ?></a></h4>
                        <p><?php echo substr(wp_strip_all_tags($post_item['post_content']), 0, 80) . '...'; ?></p>
                    </div>
                </div>
            <?php $i++;
            endforeach;
            ?>
        </div>
        <div class="view-more">View More</div>
    </div>
</div>
<script>
    $('#articles').click(function(){
        $('.post-box').each(function(){
            var category = $(this).attr('data-category');
            if(category != 'articles') {
                $(this).hide();
            } else {
                $(this).show();
            }
        })
    })
    $('#insight').click(function(){
        $('.post-box').each(function(){
            var category = $(this).attr('data-category');
            if(category != 'insight') {
                $(this).hide();
            } else {
                $(this).show();
            }
        })
    })
    $('#podcast').click(function(){
        $('.post-box').each(function(){
            var category = $(this).attr('data-category');
            if(category != 'podcast') {
                $(this).hide();
            } else {
                $(this).show();
            }
        })
    })
    $('#all').click(function(){
        $('.post-box').each(function(){
                $(this).show();
        })
    })
        $('.view-more').click(function(){
            $('.show-more:hidden').slice(0,3).show();
    })
   
</script>
</div>