
<?php
/**
* Template Name: 404 page
*/

get_header(); ?>




<!-- ABOUT US SECTION -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2> <?php _e('Let\'s get back on track.'); ?> </h2>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" />
      </div>
      <!-- end diver col -->
    </div>

    <div class="row">
      <div class="col-sm-6">
        <?php the_widget('WP_Widget_Archives'); ?>
      </div>
      <div class="col-sm-6">
        <?php the_widget('WP_Widget_Categories'); ?>
      </div>
      <div class="col-sm-6">
        <?php the_widget('WP_Widget_Recent_Posts'); ?>
      </div>
      <div class="col-sm-6">
        <?php the_widget('WP_Widget_Tag_Cloud'); ?>
      </div>
    </div>

    <!-- end diver row -->
    <?php get_template_part('content-facilities'); ?>

  </div>
  <!-- end diveder container -->
</section>








<?php get_footer(); ?>
