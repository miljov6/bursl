<?php if (have_rows('payroll_compliance')) : ?>
    <?php while (have_rows('payroll_compliance')) : the_row();

        // Get sub field values.
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
    ?>
        <div class="payroll_compliance">
            <div class="container-fluid">
                <div class="container">
                    <div class="intro">
                        <div>
                            <div class="subtitle">
                                <?php if (!empty($subtitle)) : ?>

                                <?php endif; ?>
                            </div>
                            <div class="title">
                                <h2><?php echo $title; ?></h2>
                            </div>
                            <div class="title">
                                <p><?php echo $text; ?></p>
                            </div>
                        </div>
                        <div></div>
                    </div>
                    <div class="boxes">
            <?php
            $i = 1;
            $count = count(get_sub_field('boxes'));
            if (have_rows('boxes')) :
              while (have_rows('boxes')) : the_row();
                $box_image = get_sub_field('box_image');
                $box_title = get_sub_field('box_title');
                $box_text = get_sub_field('box_text');
            ?>
                <div class="box fade fadeOut">
                  <div class="box-left" style="background:url(<?php echo $box_image['url']; ?>);">

                  </div>
                  <div class="box-right">
                    <div class="box-new" id="box-<?php echo $i; ?>" data-img="<?php echo $box_image['url']; ?>">
                      <div class="box-right">
                        <h3><?php echo $box_text; ?></h3>
                      </div>
                    </div>
                  </div>
                </div>

            <?php
                $i++;
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
  $(window).scroll(function() {
    ;
    w = Math.floor($(window).scrollTop());
    $('.box').css('background-color', '');
    if (w <= $('#box-1').offset().top) {
      $('.box-left img').attr('src', $('#box-1').attr('data-img'));
    } else if (w <= $('#box-2').offset().top) {
      $('.box-left img').attr('src', $('#box-2').attr('data-img'));
    } else if (w <= $('#box-3').offset().top) {
      $('.box-left img').attr('src', $('#box-3').attr('data-img'));
    }

  });

  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.8
  };

  function observerCallback(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // fade in observed elements that are in view
        entry.target.classList.replace('fadeOut', 'fadeIn');
      } else {
        // fade out observed elements that are not in view
        entry.target.classList.replace('fadeIn', 'fadeOut');
      }
    });
  }

  const observer = new IntersectionObserver(observerCallback, observerOptions);

  const fadeElms = document.querySelectorAll('.fade');
  fadeElms.forEach(el => observer.observe(el));
</script>