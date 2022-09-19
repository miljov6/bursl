<style>
  .boxesnews {
    display: grid;
    grid-template-columns: 1fr 1fr;
	}
	.box-new-text {
	height:600px
	}
  .box-left-img {
    position: sticky;
    align-self: end;
    bottom: 22rem;
  }
  .fade {
    margin: 100px;
    padding: 50px;
  transition: opacity 0.7s ease-in;
}

.fadeOut { opacity: 0; }
.fadeIn { opacity: 1; }
  </style>
<?php if (have_rows('onboard')) : ?>
  <?php while (have_rows('onboard')) : the_row();

    // Get sub field values.
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $text = get_sub_field('text');
  ?>
    <div class="onboard">
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
          <div class="boxesnews">
          <div class="box-left-img">
          <?php
                $i=1;
            $count = count(get_sub_field('boxes'));
            if (have_rows('boxes')) :
              while (have_rows('boxes')) : the_row();
                $box_image = get_sub_field('box_image');
                $box_title = get_sub_field('box_title');
                $box_text = get_sub_field('box_text');
                  ?>
                    <img src="<?php echo $box_image['url'];?>" id="img-<?php echo $i;?>" <?php if($i!=1):?>style="display:none;"<?php endif;?>>
                  
<?php
                $i++;
endwhile;
endif;
            ?>
            </div>
            <div class="box-texts">
            <?php
            $i = 1;
            $count = count(get_sub_field('boxes'));
            if (have_rows('boxes')) :
              while (have_rows('boxes')) : the_row();
                $box_image = get_sub_field('box_image');
                $box_title = get_sub_field('box_title');
                $box_text = get_sub_field('box_text');
            ?>
           <div class="box-new-text fade fadeOut" id="box-<?php echo $i; ?>" data-img="<?php echo $box_image['url']; ?>">
                        <h3><?php echo $box_title; ?></h3>
                    </div>
                    <?php
                    $i++;                  
              endwhile;
            endif;
            ?>
            </div>
          </div>
          <div class="boxes">
                <?php
                $i=1;
            $count = count(get_sub_field('boxes'));
            if (have_rows('boxes')) :
              while (have_rows('boxes')) : the_row();
                $box_image = get_sub_field('box_image');
                $box_title = get_sub_field('box_title');
                $box_text = get_sub_field('box_text');
                if($i==1):
            ?>
                  <div class="box-left" style="background:url(<?php echo $box_image['url'];?>);">

                  </div>
                  <?php
                   endif;
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
    w = Math.floor($(window).scrollTop());
    if (w <= $('#box-1').offset().top+300) {
    $('#img-1').show('slow');
    $('#img-2').hide('slow');
    $('#img-3').hide();
    } else if (w <= $('#box-2').offset().top+300) {
      $('#img-1').hide('slow');
      $('#img-3').hide('slow');
    $('#img-2').show('slow');
    } else if (w <= $('#box-3').offset().top+300) {
      $('#img-1').hide();
      $('#img-3').show('slow');
    $('#img-2').hide('slow');
    }

  });

  const observerOptions = {
  root: null,
  rootMargin: "0px",
  threshold: 0.7
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