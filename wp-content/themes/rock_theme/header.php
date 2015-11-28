<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(''); ?></title>

    <!-- custom google font -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>


    <div class="loader" >
        <div id="load">
          <div>G</div>
          <div>N</div>
          <div>I</div>
          <div>D</div>
          <div>A</div>
          <div>O</div>
          <div>L</div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="jumbotron loading_box" style="background:transparent;text-align:center;color:#2cf08b;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/jrwlogowhite.png" alt="" />
              <h1 class="mob_loader">Loading...</h1>
            </div>
          </div>
        </div>
    </div>



    <!-- HEADER  -->
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" name="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="<?php echo esc_url( home_url() ); ?>" class="navbar-brand">
              <!-- <img id="logoBox" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/jrwlogowhite.png"> -->
              <img id="faceBox"src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png">
<!-- <?php echo get_bloginfo( 'name' ); ?> -->
            </a>
          </div>
          <!-- navbar header end -->

          <div class="collapse navbar-collapse">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
          </div>
          <!-- navrbar collapse end -->
        </div>
        <!-- container fluid end -->
      </nav>







      <!-- hero section -->
      <div class="container-fluid">
        <div class="row feature">
          <img src="<?php header_image(); ?>" alt="lake background" />


          <div class="feature-text col-xs-12">


              <!-- <?php featureText(); ?> -->
              <h1><i>JRock<span style="opacity:0.5">Web</span> brings to you</i>
              <br>CREATIVE DESIGN, <br> DEVELOPMENT, AND BRANDING.</h1>


          </div>
          <!-- <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'my_home_menu',
                  'container_id'      => 'my_home_menu',
                  'menu_class'        => 'menu_jr',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?> -->
          <!-- feature text end -->
        </div>
        <!-- row end -->
      </div>
      <!-- fluid container end -->






    </header>







                              <!-- <img id="faceBox"src="<?php echo esc_url(get_template_directory_uri()); ?>/images/me.png"> -->
