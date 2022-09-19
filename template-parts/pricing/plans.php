<?php if (have_rows('plans')) : ?>
    <?php while (have_rows('plans')) : the_row();
    ?>
        <div class="pricing_plans">
            <div class="container-fluid">
                <div class="container">
                    <div class="boxes-grid">
                        <div class="boxes-column">
                            <div class="boxes-1">
                                <h4>Plan</h4>
                            </div>
                            <div class="boxes-1">
                                <?php if (have_rows('plan_1')) : ?>
                                    <?php while (have_rows('plan_1')) : the_row(); ?>
                                        <h2><?php echo get_sub_field('title'); ?></h2>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                            <div class="boxes-1">
                                <?php if (have_rows('plan_2')) : ?>
                                    <?php while (have_rows('plan_2')) : the_row(); ?>
                                        <h2><?php echo get_sub_field('title'); ?></h2>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                            <div class="boxes-1 boxes-2">
                                <?php if (have_rows('plan_3')) : ?>
                                    <?php while (have_rows('plan_3')) : the_row(); ?>
                                        <h2><?php echo get_sub_field('title'); ?></h2>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="boxes-column">
                            <div class="boxes-1">
                                <h4>Description</h4>
                            </div>
                            <div class="boxes-1">
                                <?php if (have_rows('plan_1')) : ?>
                                    <?php while (have_rows('plan_1')) : the_row(); ?>
                                        <p><?php echo get_sub_field('description'); ?></p>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                            <div class="boxes-1">
                                <?php if (have_rows('plan_2')) : ?>
                                    <?php while (have_rows('plan_2')) : the_row(); ?>
                                        <p><?php echo get_sub_field('description'); ?></p>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                            <div class="boxes-1 boxes-2">
                                <?php if (have_rows('plan_3')) : ?>
                                    <?php while (have_rows('plan_3')) : the_row(); ?>
                                        <p><?php echo get_sub_field('description'); ?></p>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="boxes-column">
                            <div class="boxes-1">
                                <h4 style="margin-top: 30px">Pricing</h4>
                            </div>
                            <div class="boxes-1">
                                <?php if (have_rows('plan_1')) : ?>
                                    <?php while (have_rows('plan_1')) : the_row(); ?>
                                        <h3><?php echo get_sub_field('price'); ?></h3>
                                        <p><?php echo get_sub_field('prices_per'); ?></p>
                                        <div class="btns">
                                            <div class="btn-1">
                                                <span>
                                                    <?php echo get_sub_field('button_1_text'); ?>
                                                </span>
                                                <a href="<?php echo get_sub_field('button_1_url'); ?>"></a>
                                            </div>
                                            <div class="btn-2">
                                                <span>
                                                    <?php echo get_sub_field('button_2_text'); ?>
                                                </span>
                                                <a href="<?php echo get_sub_field('button_2_url'); ?>"></a>
                                            </div>
                                        </div>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                            <div class="boxes-1">
                                <?php if (have_rows('plan_2')) : ?>
                                    <?php while (have_rows('plan_2')) : the_row(); ?>
                                        <h3><?php echo get_sub_field('price'); ?></h3>
                                        <p><?php echo get_sub_field('prices_per'); ?></p>
                                        <div class="btns">
                                            <div class="btn-1">
                                                <span>
                                                    <?php echo get_sub_field('button_1_text'); ?>
                                                </span>
                                                <a href="<?php echo get_sub_field('button_1_url'); ?>"></a>
                                            </div>
                                            <div class="btn-2">
                                                <span>
                                                    <?php echo get_sub_field('button_2_text'); ?>
                                                </span>
                                                <a href="<?php echo get_sub_field('button_2_url'); ?>"></a>
                                            </div>
                                        </div>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                            <div class="boxes-1 boxes-2">
                                <?php if (have_rows('plan_3')) : ?>
                                    <?php while (have_rows('plan_3')) : the_row(); ?>
                                        <h3><?php echo get_sub_field('price'); ?></h3>
                                        <p><?php echo get_sub_field('prices_per'); ?></p>
                                        <div class="btns">
                                            <div class="btn-1">
                                                <span>
                                                    <?php echo get_sub_field('button_1_text'); ?>
                                                </span>
                                                <a href="<?php echo get_sub_field('button_1_url'); ?>"></a>
                                            </div>
                                            <div class="btn-2">
                                                <span>
                                                    <?php echo get_sub_field('button_2_text'); ?>
                                                </span>
                                                <a href="<?php echo get_sub_field('button_2_url'); ?>"></a>
                                            </div>
                                        </div>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="boxes-column">
                            <div class="boxes-1">
                                <h4>Features</h4>
                            </div>
                            <div class="boxes-1">
                                <?php if (have_rows('plan_1')) : ?>
                                    <?php while (have_rows('plan_1')) : the_row(); ?>
                                        <?php if (have_rows('includes')) : ?>
                                            <?php while (have_rows('includes')) : the_row();
                                                $icon = get_sub_field('icon');
                                                $text = get_sub_field('text');
                                            ?>
                                                <div class="includes">
                                                    <img src="<?php echo $icon['url']; ?>">
                                                    <span><?php echo $text; ?></span>
                                                </div>
                                        <?php endwhile;
                                        endif;
                                        ?>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                            <div class="boxes-1">
                                <?php if (have_rows('plan_2')) : ?>
                                    <?php while (have_rows('plan_2')) : the_row(); ?>
                                        <?php if (have_rows('includes')) : ?>
                                            <?php while (have_rows('includes')) : the_row();
                                                $icon = get_sub_field('icon');
                                                $text = get_sub_field('text');
                                            ?>
                                                <div class="includes">
                                                    <img src="<?php echo $icon['url']; ?>">
                                                    <span><?php echo $text; ?></span>
                                                </div>
                                        <?php endwhile;
                                        endif;
                                        ?>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                            <div class="boxes-1 boxes-2">
                                <?php if (have_rows('plan_3')) : ?>
                                    <?php while (have_rows('plan_3')) : the_row(); ?>
                                        <?php if (have_rows('includes')) : ?>
                                            <?php while (have_rows('includes')) : the_row();
                                                $icon = get_sub_field('icon');
                                                $text = get_sub_field('text');
                                            ?>
                                                <div class="includes">
                                                    <img src="<?php echo $icon['url']; ?>">
                                                    <span><?php echo $text; ?></span>
                                                </div>
                                        <?php endwhile;
                                        endif;
                                        ?>
                                <?php endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>