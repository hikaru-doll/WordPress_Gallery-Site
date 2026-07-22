  <?php
  defined('ABSPATH') || exit;
  ?>
  <!-- footer  --------------------->
  <footer class="footer wrapper">
    <!-- contact(mailing list)------>
    <div class="contact-container">
      <p>Contact</p>

      <?php echo do_shortcode('[contact-form-7 id="604bdc8" title="Email-address"]'); ?>
    </div>
    <p class="copyright">&copy;<span id="year"></span> GALLERY-SITE</p>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>