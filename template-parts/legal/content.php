<div class="legal_content">
    <div class="container-fluid">
        <div class="container">
            <div class="legal_section">
                <div class="legal_menu">
                   
      <?php $menu_name = 'legal_menu';  
					$menu = wp_nav_menu(
						array(
							'theme_location' => 'legal_menu',
							'menu_id'        => 'legal_menu'
						)
					);
      ?>

                </div>
                <div class="legal_text">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>