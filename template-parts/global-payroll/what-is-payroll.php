<?php if (have_rows('what_is_payroll')) : ?>
    <?php while (have_rows('what_is_payroll')) : the_row();
    ?>
        <div class="what_is_payroll">
            <div class="container-fluid">
                <div class="container">
                    <div class="faq-title">
                        <h2>FAQs</h2>
                    </div>
                    <div class="faq">
                        <?php
                        if (have_rows('boxes')) :
                            while (have_rows('boxes')) : the_row();
                                $question = get_sub_field('question');
                                $answer = get_sub_field('answer');
                        ?>
                                <div class="question">
                                    <h3><?php echo $question; ?></h3>
                                    <div class="answer">
                                        <p><?php echo $answer; ?></p>
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
    $('.question').each(function() {
        $(this).click(function() {
            if ($(this).hasClass('active') == true) {
                $(this).removeClass('active');
                $(this).children().last().attr('style', 'display:none;');
            } else {
                $('.question').removeClass('active');
                $('.answer').hide();
                $(this).addClass('active');
                $(this).children().last().attr('style', 'display:block; opacity: 1; visibility: visible; transition: opacity 1s linear;');
            }
        })
    })
</script>