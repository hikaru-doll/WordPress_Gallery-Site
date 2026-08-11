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
    <div class="attention">
      <p>本サイトは架空のクリエイターを想定して制作したポートフォリオ作品です。実在するクリエイターではありません。</p>
      <p>アクセサリー画像は、スマホ撮影です（一部<a href="https://minne.com/@hikaridoll" target="_blank" rel="noopener noreferrer">minne🔗</a> にて販売中）。</p>
    </div>
    <p class="copyright">&copy;<span id="year"></span> Hikaru doll Gallery-Site</p>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>