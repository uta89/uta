<!-- Layoutを分割-->
<footer class="c-footer">
  <div class="l-container">

    <div class="c-footer__grid">

      <!-- Company -->
      <div class="c-footer__col">
        <h3 class="c-footer__logo">
          desafio
        </h3>
        <p>仕事と、人生に、情熱を</p>
        <p>人とのご縁で価値を創出する</p>
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
          <span class="tags-red">営業代行</span>
          <span class="tags-orange">キャリア支援</span>
          <span class="tags-yellow">不動産営業支援</span>
          <span class="tags-red">イベント事業</span>
        </div>
      </div>

    </div>

    <!-- Bottom -->
    <div class="c-footer__bottom">
      <p>
        © <?php echo date('Y'); ?> desafio. All rights reserved.
      </p>
      <!-- <p>Made with ♥ and Passion</p> -->
    </div>

  </div>

  <?php wp_footer(); ?>
</footer>