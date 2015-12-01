<!-- FOOTER SECTION -->
<footer>





    <div class="row footer_strip">
      <div class="col-sm-4 foot_block">
        <p>
          &copy; <?php echo date('Y'); ?> <?php footerBlock1(); ?>
        </p>
      </div>
      <div class="col-sm-4 foot_block">
        <?php footerBlock2(); ?>
      </div>
      <div class="col-sm-4 foot_block">
        <a target="blank" href="<?php socialBehance(); ?>"><i class="fa fa-behance fa-lg"></i></a>
        <a target="blank" href="<?php SocialInstagram(); ?>"><i class="fa fa-instagram fa-lg"></i></a>
        <a target="blank" href="<?php socialGithub(); ?>"><i class="fa fa-github fa-lg"></i></a>
        <a target="blank" href="<?php socialFacebook(); ?>"><i class="fa fa-facebook fa-lg"></i></a>
        <a target="blank" href="<?php socialLinkedin(); ?>"><i class="fa fa-linkedin fa-lg"></i></a>
        <a target="blank" href="mailto:<?php contactEmail(); ?>"><i class="fa fa-envelope fa-lg"></i></a>
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
