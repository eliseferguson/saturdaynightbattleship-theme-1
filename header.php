<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>

  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /> 
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skeleton.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- <link rel="icon" type="image/png" href="images/favicon.png"> -->
  <script src="https://code.jquery.com/jquery-1.12.2.min.js" integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk=" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="section header">
    <div class="container">
      <div class="row">
        <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
            <div class='eight columns brand'>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            </div>
        <?php else : ?>
            <hgroup>
                <h1 class='eight columns brand'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
            </hgroup>
        <?php endif; ?>

        <div class="four columns cta">
        <!-- egf make this into a widget? -->
          <span>Local: <strong>555-555-1234</strong></span>
          <span>Toll Free: <strong>800-555-1212</strong></span>
        </div>
      </div>
      <!--Main menu-->
      <!-- egf add cascading functionality -->
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu' => 'Main', 'sort_column' => 'menu_order', 'container' => 'nav', 'container_class' => 'navbar', 'container_id' => 'nav-main', 'items_wrap' => '<ul class="navbar-list" >%3$s</ul>'  ) ); ?>
        
      <!--Main menu mobile button-->
      <div id="nav-trigger">
        <span>Menu <i class="fa fa-bars"></i></span>
      </div>
      <nav id="nav-mobile"></nav>
    </div>
  </div>
  
  <div class="section hero">
    <!-- egf add this image to the customizer -->
    <img class="u-max-full-width" src="http://placehold.it/1395x293" alt="" />
    <div class="container">
      
         <div class="tagline">
           <?php bloginfo('description'); ?>
         </div>
      
    </div>
  </div>

