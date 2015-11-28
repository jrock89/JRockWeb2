












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
    <?php get_template_part('content-facilities'); ?>

            <!-- <div class="row">
              <div class="col-md-4 project_box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/saw.png" alt="" />
              </div>
              <div class="col-md-4 project_box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/jrvnewsite.jpg" alt="" />
              </div>
              <div class="col-md-4 project_box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/jrwscreensnap.png" alt="" />
              </div>
              </div>
                <div class="row">
              <div class="col-md-4 project_box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pdental.png" alt="" />
              </div>
              <div class="col-md-4 project_box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/NLSscreen2.png" alt="" />
              </div>
              <div class="col-md-4 project_box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/KLPhomescreen.png" alt="" />
              </div>
            </div> -->
            <div class="container">
                    <!-- blog section -->
                  <div class="row">
                    <div class="">

                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                      <div class="blog-post col-md-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2 class="blog-post-title">
                          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                          </a>
                        </h2>
                        <p class="blog-post-meta"><?php echo get_the_date('F, j, Y'); ?><a href="#"> by <?php the_author(); ?></a>

                          <i class="fa fa-tag"></i>
                          <?php the_tags(); ?><br>

                          <i class="fa fa-folder-open"></i>
                          <?php _e('Category: '); ?>
                          <?php the_category(', '); ?>
                        </p>

                        <?php the_post_thumbnail(); ?>
                        <?php the_excerpt(); ?>

                        <a href="<?php echo get_permalink(); ?>">
                          <?php _e('Read more...'); ?>
                        </a>

                      </div><!-- /.blog-post -->

                      <?php endwhile; else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                      <?php endif; ?>

                      <nav>
                        <ul class="pager">
                          <li><?php next_posts_link('Older Posts'); ?></li>
                          <li><?php previous_posts_link('Newer Posts'); ?></li>
                        </ul>
                      </nav>
                    </div><!-- /.blog-main -->


                    <!-- sidebar section -->
                    <!-- <div class="col-sm-12 col-md-3 col-md-offset-1 blog-sidebar"> -->
                      <!-- <?php get_sidebar(); ?> -->
                    <!-- </div> -->

                  </div><!-- /.row -->

                </div><!-- /.container -->





        </section>









    <?php get_footer(); ?>
