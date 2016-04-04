
</div>
    </div>
  </div>
<!-- egf account for more or less call out boxes? -->
  <div class="section attorneys">
    <div class="container">
      <div class="row">
        <div class="one-third column">
          <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Callout Widget Area 1')) : ?>
            <h2>Title: Name</h2>
            <img src="http://placehold.it/274x180" alt="" />
            <p>Words go here: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper est nibh, suscipit scelerisque leo molestie sit amet. Morbi ullamcorper vestibulum est, eget vestibulum felis sollicitudin ac. Aenean pharetra mattis lectus, ut fringilla metus tempor sed.</p>
            <a class="button" href="#">Learn More</a>
          <?php endif; ?>
        </div>
        <div class="one-third column">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Callout Widget Area 2')) : ?>
          <h2>Title: Name</h2>
          <img src="http://placehold.it/274x180" alt="" />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper est nibh, suscipit scelerisque leo molestie sit amet. Morbi ullamcorper vestibulum est, eget vestibulum felis sollicitudin ac. Aenean pharetra mattis lectus, ut fringilla metus tempor sed.</p>
          <a class="button" href="#">Learn More</a>
          <?php endif; ?>
        </div>
        <div class="one-third column">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Callout Widget Area 3')) : ?>
          <h2>Title: Name</h2>
          <img src="http://placehold.it/274x180" alt="" />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper est nibh, suscipit scelerisque leo molestie sit amet. Morbi ullamcorper vestibulum est, eget vestibulum felis sollicitudin ac. Aenean pharetra mattis lectus, ut fringilla metus tempor sed.</p>
          <a class="button" href="#">Learn More</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="section footer">
    <div class="container">
      <!-- egf put this in the customizer -->
        <img src="http://placehold.it/409x272" alt="" />
        
        <div class="disclaimer">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Disclaimer Area')) : ?>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper est nibh, suscipit scelerisque leo molestie sit amet. Morbi ullamcorper vestibulum est, eget vestibulum felis sollicitudin ac. Aenean pharetra mattis lectus, ut fringilla metus tempor sed.</p>
        <?php endif; ?>
        </div>
     
    </div>
  </div>
  

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript">
  $(document).ready(function(){
     $(".entry img").addClass("u-max-full-width");
      $("#nav-mobile").html($("#nav-main").html());
      $("#nav-trigger span").click(function(){
          if ($("nav#nav-mobile ul").hasClass("expanded")) {
              $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
              $(this).removeClass("open");
          } else {
              $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
              $(this).addClass("open");
          }
      });
  });
  jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
</script>
<?php wp_footer(); ?> 
</body>
</html>
