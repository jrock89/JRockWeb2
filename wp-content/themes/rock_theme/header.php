<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(''); ?></title>


    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo2.png" rel="shortcut icon">
    <!-- custom google font -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php include_once("analyticstracking.php") ?>


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
            <div class="jumbotron loading_box" style="background:transparent;text-align:center;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="" />
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
          <!-- <img src="<?php header_image(); ?>" alt="lake background" /> -->


          <div class="feature-text col-xs-12">

                <a href="<?php echo esc_url( home_url() ); ?>"><div class="brand_box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="" />
              </div></a>

              <div class="main_menu">
                <!-- <i class="fa fa-navicon"></i> -->
                  <section class="material-design-hamburger">
                    <button class="material-design-hamburger__icon">
                      <span class="material-design-hamburger__layer"></span>
                    </button>
                  </section>

                  <!-- <section class="menu menu--off">
                    <div>Android's Material Design Hamburger Animation</div>
                    <div>Adapted for the web by <a href="https://swirlycheetah.com" target="_blank">Chris Wheatley</a></div>
                    <div><a href="https://github.com/swirlycheetah/material-design-hamburger" target="_blank">Available on GitHub</a></div>
                    <div><a href="https://twitter.com/swirlycheetah" target="_blank">Follow me on Twitter @swirlycheetah</a></div>
                  </section> -->
              </div>


              <div class="my_menu">

                <div class="menu_pic">
                  <img src="<?php aboutPicture(); ?>" alt="Profile Picture Missing" />
                </div>

                <div class="menu_items">
                  <div id="what_menu" class="menu_item underline">
                    WHAT I DO
                  </div>
                  <div id="who_menu" class="menu_item underline">
                    WHO I AM
                  </div>
                  <div id="work_menu" class="menu_item underline">
                    MY WORK
                  </div>
                  <div id="contact_menu" class="menu_item underline">
                    CONTACT
                  </div>
                </div>


                <div class="menu_social">
                  <a target="blank" href="<?php socialBehance(); ?>"><i class="fa fa-behance fa-lg"></i></a>
                  <a target="blank" href="<?php SocialInstagram(); ?>"><i class="fa fa-instagram fa-lg"></i></a>
                  <a target="blank" href="<?php socialGithub(); ?>"><i class="fa fa-github fa-lg"></i></a>
                  <a target="blank" href="<?php socialFacebook(); ?>"><i class="fa fa-facebook fa-lg"></i></a>
                  <a target="blank" href="<?php socialLinkedin(); ?>"><i class="fa fa-linkedin fa-lg"></i></a>
                  <a target="blank" href="mailto:<?php contactEmail(); ?>"><i class="fa fa-envelope fa-lg"></i></a>
                </div>

              </div>


              <!-- <?php featureText(); ?> -->
              <h1><i>JRockWeb brings to you</i>
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
