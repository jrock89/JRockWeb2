
<?php get_header(); ?>




<!-- LATEST OFFERS -->
<section id="latest-offers">
  <div class="container">

    <div class="title_what">
       <h2>WHAT I DO</h2>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="offer offer_1">
              <span><i class="fa fa-<?php offer1Icon(); ?>"></i></span>
              <h3><?php offer1Title(); ?></h3>
              <p>
                <?php offer1Info(); ?>
              </p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="offer offer_2">
              <span><i class="fa fa-<?php offer2Icon(); ?>"></i></span>
              <h3><?php offer2Title(); ?></h3>
              <p>
                <?php offer2Info(); ?>
              </p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="offer offer_3">
              <span><i class="fa fa-<?php offer3Icon(); ?>"></i></span>
              <h3><?php offer3Title(); ?></h3>
              <p>
                <?php offer3Info(); ?>
              </p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="offer offer_4">
              <span><i class="fa fa-<?php offer4Icon(); ?>"></i></span>
              <h3><?php offer4Title(); ?></h3>
              <p>
                <?php offer4Info(); ?>
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
        <div class="container">
          <div class="row about_me">
            <div class="col-sm-6 col-sm-offset-3">
              <div class="title_who">
                 <h2>WHO I AM</h2>
              </div>

              <img src="<?php aboutPicture(); ?>" alt="Profile Picture Missing" />
            </div>
            <!-- end diver col -->
            <div class="col-sm-6 col-sm-offset-3 about_paragraph">
              <p><?php aboutParagraph(); ?></p>
            </div>
          </div>
        </div>



        <!-- end diver row -->

        <!-- <?php get_template_part('content-facilities'); ?> -->

      <!-- </div> -->
      <!-- end diveder container -->
    </section>


    <section id="my_work">
      <div class="work_info_box_mask"></div>
      <div class="work_info_box">
        <div class="close_info_box">
            <i class="fa fa-close fa-lg"></i>
        </div>
        <div class="col-sm-6">
          <img src="" alt="" />
        </div>
        <div class="col-sm-6">
          <h2></h2>
          <p>

          </p>
          <i class="tech_info"></i>
          <a target="blank" href=""><div class="visit_site">
            Visit Site <i class="fa fa-arrow-right fa-lg"></i>
          </div></a>
        </div>


      </div>

<!-- <?php get_template_part('content-facilities'); ?> -->


<div class="title_work">
   <h2>MY WORK</h2>
</div>

<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-3">
    <div class="project_box">
      <div class="inner_project_box">

        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/jrw.png" alt="" />
        <h2>JRockWeb</h2>
        <p>
          My Web Designer portfolio site built with my custom wordpress theme.
          Fully responsive, with an easy to use content management system.<br>
        </p>
        <i style="font-size:12px;">$jrockweb = ['PHP', 'HTML5', 'CSS3', 'jQuery', 'WordPress'];</i>
        <h3>http://jrockweb.com/</h3>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
      <div class="project_box">
        <div class="inner_project_box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sa.png" alt="" />
          <h2>Saratoga Awareness</h2>
          <p>
            Feldenkrais Practioner personal website with class listings, general information and a blog.
            Fully responsive, and will soon be moved into a fully responsive custom WordPress theme.<br>
          </p>
          <i style="font-size:12px;">$saratoga_awareness = ['PHP', 'HTML5', 'CSS3', 'jQuery'];</i>
          <h3>http://www.saratogaawareness.com/</h3>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
      <div class="project_box">
        <div class="inner_project_box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/jrv.png" alt="" />
          <h2>JRockVision</h2>
          <p>
            Photographer and Videoagrapher portfolio website.
            Fully responsive, in the process of being moved into a fully responsive custom WordPress theme.<br>
          </p>
          <i style="font-size:12px;">$jrockvision = ['PHP', 'HTML5', 'CSS3', 'jQuery'];</i>
          <h3>http://www.jrockvision.com/</h3>

        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-6 col-lg-3">
      <div class="project_box">
        <div class="inner_project_box">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/park.png" alt="" />
        <h2>Park Dental Care</h2>
        <p>
          Dental office website, built with Avada premade wordpress theme.
          Fully responsive, with an easy to use content management system.<br>
        </p>
        <i style="font-size:12px;">$park_dental_care = ['PHP', 'HTML5', 'CSS3', 'WordPress'];</i>
        <h3>http://parkdentalcarecliftonpark.com/</h3>
        </div>
      </div>
    </div>

</div>
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-3">
    <div class="project_box">
      <div class="inner_project_box">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/nationwide.png" alt="" />
        <h2>Nationwide Legal Services</h2>
        <p>
          Legal office website, built with Avada premade wordpress theme.
          Fully responsive, with an easy to use content management system.<br>

        </p>
        <i style="font-size:12px;">$nationwide_legal = ['PHP', 'HTML5', 'CSS3', 'WordPress'];</i>
        <h3>http://www.nationwidelegalsvc.com/</h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-6 col-lg-3">
    <div class="project_box">
      <div class="inner_project_box">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/kaila.png" alt="" />
        <h2>KLassey Productions</h2>
        <p>
          Wedding Videographer website, built with Avada premade wordpress theme.
          Fully responsive, with an easy to use content management system.<br>

        </p>
        <i style="font-size:12px;">$klassey_productions = ['PHP', 'HTML5', 'CSS3', 'WordPress'];</i>
        <h3>http://klasseyproductions.com/</h3>
      </div>
    </div>
  </div>
</div>

<h3 class="view_on">Head over to Behance to view my graphic design work.</h3>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3 ">
  <a target="blank" href="https://www.behance.net/jesserock143b6"><div class="on_behance">
      Behance <i class="fa fa-behance fa-lg"></i>
    </div></a>

  </div>
</div>





    </section>



<section>
  <?php get_template_part('page-contact'); ?>
</section>





<?php get_footer(); ?>
