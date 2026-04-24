/*Layoutの中身をheader/footerに分解する */
/*Layoutの中身をheader/footerに分解する */
<footer class="c-footer">
  <div class="l-container">

    <div class="c-footer__grid">

      <!-- Company -->
      <div class="c-footer__col">
        <h3 class="c-footer__logo">
          desafio <span class="c-footer__icon">♥</span>
        </h3>
        <p>仕事と、人生に、情熱を</p>
        <p class="c-footer__sub">人とのご縁で価値を創出する</p>
      </div>

      <!-- Links -->
      <div class="c-footer__col">
        <h4>クイックリンク</h4>
        <ul class="c-footer__links">
          <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li><a href="<?php echo home_url('/about'); ?>">会社概要</a></li>
          <li><a href="<?php echo home_url('/services'); ?>">サービス</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="c-footer__col">
        <h4>事業内容</h4>
        <div class="c-footer__tags">
          <span>営業代行</span>
          <span>キャリア支援</span>
          <span>不動産営業支援</span>
          <span>イベント事業</span>
        </div>
      </div>

    </div>

    <!-- Bottom -->
    <div class="c-footer__bottom">
      <p>
        © <?php echo date('Y'); ?> desafio. All rights reserved.
      </p>
      <p>Made with ♥ and Passion</p>
    </div>

  </div>

  <?php wp_footer(); ?>
</footer>