<!-- FOOTER SECTION -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center margin-bottom">
        <h2>Keep in touch</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <address class="">
          Rock Theme<br>
          501 Union Ave<br>
          Saratoga Springs, Ny 12866
        </address>
      </div>
      <div class="col-sm-4">
        <?php
            wp_nav_menu( array(
                'menu'              => 'footer',
                'container'         => 'ul',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      </div>
      <div class="col-sm-4">
        <p>
          Follow Us
        </p>
        <i class="fa fa-facebook fa-lg"></i>
        <i class="fa fa-twitter fa-lg"></i>
        <i class="fa fa-google-plus fa-lg"></i>
        <i class="fa fa-pinterest fa-lg"></i>
        <i class="fa fa-youtube fa-lg"></i>
      </div>
    </div>

  </div>
<!--
  <div class="container-fluid" id="copy">
    <div class="col-sm-12">
      <p>
        &copy; <?php echo date('Y'); ?> Rock Theme
      </p>
    </div>
  </div> -->

</footer>

<div class="info_bar">

</div>

<?php wp_footer(); ?>

</body>
</html>
