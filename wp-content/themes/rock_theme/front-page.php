
<?php get_header(); ?>




<!-- LATEST OFFERS -->
<section id="latest-offers">
  <div class="container">

    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-4">
            <div class="offer">
              <span><i class="fa fa-desktop"></i></span>
              <h3><?php the_field('offer_name'); ?></h3>
              <p>
                <?php the_field('offer_line_1'); ?>
              </p>

              <p>
                <?php the_field('offer_line_2'); ?>
              </p>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="offer">
              <span><?php the_field('offer_price_2'); ?></span>
              <h3><?php the_field('offer_name_2'); ?></h3>
              <p>
                <?php the_field('offer_2_line_1'); ?>
              </p>

              <p>
                <?php the_field('offer_2_line_2'); ?>
              </p>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="offer">
              <span><?php the_field('offer_price_3'); ?></span>
              <h3><?php the_field('offer_name_3'); ?></h3>
              <p>
                <?php the_field('offer_3_line_1'); ?>
              </p>

              <p>
                <?php the_field('offer_3_line_2'); ?>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- container end -->
</section>



    <!-- WELCOME SECTION -->
    <section id="welcome">
      <!-- <div class="container"> -->
        <!-- <div class="row quote-text">

            <h3>"<?php quoteText(); ?>" -<?php quoteAuthor(); ?></h3>
        </div> -->

        <div class="row about_me">
          <div class="col-sm-6 col-sm-offset-3">
            <h2>About</h2>
            <img src="<?php aboutPicture(); ?>" alt="Profile Picture Missing" />
          </div>
          <!-- end diver col -->
          <div class="col-sm-6 col-sm-offset-3 about_paragraph">
            <p><?php aboutParagraph(); ?></p>
          </div>
        </div>


        <!-- end diver row -->

        <!-- <?php get_template_part('content-facilities'); ?> -->

      <!-- </div> -->
      <!-- end diveder container -->
    </section>


    <section id="my_work">
<!-- <?php get_template_part('content-facilities'); ?> -->


<div class="row">
  <div class="col-sm-12" style="padding:0;">
    <div class="col-sm-4">
      <div class="project_box">
        <div class="inner_project_box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/saw.png" alt="" />
        </div>
      </div>
      <div class="project_box">
        <div class="inner_project_box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/jrvnewsite.jpg" alt="" />
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="project_box">
        <div class="inner_project_box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/jrwscreensnap.png" alt="" />
        </div>
      </div>
      <div class="project_box">
        <div class="inner_project_box">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pdental.png" alt="" />
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="project_box">
        <div class="inner_project_box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/NLSscreen2.png" alt="" />
        </div>
      </div>
      <div class="project_box">
        <div class="inner_project_box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/KLPhomescreen.png" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>

          

    </section>









<?php get_footer(); ?>
