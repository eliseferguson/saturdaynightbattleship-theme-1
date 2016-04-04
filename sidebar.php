<div class="five columns sidebar">
      <!-- egf styl this -->
          <?php if (has_nav_menu('extra-menu')) {
            wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class' ) );
          }?>
          <div class="extra-info">
            
              <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Extra Info Area')) : ?>
              <p><img src="http://placehold.it/128x128" alt="" />
              <strong>Words and stuff</strong>, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper est nibh, suscipit scelerisque leo molestie sit amet. Morbi ullamcorper vestibulum est, eget vestibulum felis sollicitudin ac.
              <?php endif; ?>
              </p>
            <p><a class="button button-primary" href="#">Learn More</a></p>
          </div>
          <div class="contact-info">
            
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Contact Info Area')) : ?>
              <p><img src="http://placehold.it/128x128" alt="" />
              <strong><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></strong> <br />
              123 Street Lane<br />
              Anytown, US 00000
              <?php endif; ?>
            
            </p>
            <!-- egf is this a widget or something? -->
            <p class="phone">Local: <span>555-555-1234</span><br />
              Toll Free: <span>800-555-1212</span></p>
            <p><a class="button button-primary" href="#">Contact Us</a></p>
          </div>
        </div>