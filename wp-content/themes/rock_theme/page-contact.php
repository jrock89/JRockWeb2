
<?php
/**
* Template Name: Contact Us
*/

get_header(); ?>



<!-- contact US SECTION -->
<section id="contact">
  <div class="container">

    <div class="title_contact">
       <h2>CONTACT</h2>
    </div>


    <div class="row contact_box">
        <div class="col-sm-6 address">

          <i class="fa fa-user"></i><?php contactMyName(); ?><br>
          <i class="fa fa-map-marker"></i><?php contactAddress(); ?><br>
          <a href="mailto:<?php contactemail(); ?>"><i class="fa fa-envelope-o"></i><?php contactEmail(); ?><br></a>
          <a href="tel:<?php contactphone(); ?>"><i class="fa fa-phone"></i><?php contactPhone(); ?></a>
        </div>

        <div class="row message-area col-sm-6">
            <div class="">
              <?php echo do_shortcode('[contact-form-7 id="46" title="Contact form 1"]'); ?>
            </div>
        </div>

    </div>

    <!-- end diver row -->


  </div>
  <!-- end diveder container -->
</section>



<?php get_footer(); ?>
