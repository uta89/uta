<?php get_header(); ?>

<main class="l-home">

  <!-- Hero -->
  <?php get_template_part('template-parts/hero'); ?>

  <!-- スクロールテキスト -->
  <div class="c-scroll-banner">
    <div class="c-scroll-track">
      <div class="c-scroll-text">
        PASSION × CONNECTION × VALUE CREATION
      </div>      
      <div class="c-scroll-text">
        PASSION × CONNECTION × VALUE CREATION
      </div>
      <div class="c-scroll-text">
        PASSION × CONNECTION × VALUE CREATION
      </div>
      <div class="c-scroll-text">
        PASSION × CONNECTION × VALUE CREATION
      </div>
    </div>
  </div>

  <!-- Vision -->
  <section class="c-section">
<!--メモhero 右側とcss共通っぽいけどいじってるからクラス名から変える必要あるかも-->
    <div class="l-container grid-vision">
      <div class="c-main-vision-left">
        <h2 class="c-title">
        <span class="c-title_icon">⚡</span>
        Vision
        </h2>
        <p>仕事は人生の大きな部分を占めています。だからこそ、私たちは<span class="c-title_accent">仕事を通じて人生に情熱をもたらす</span>ことを目指しています。</p>
        <p>人とのご縁を大切にし、お客様一人ひとりに最適なソリューションを提供することで、共に成長していきます。</p>
      </div>
      
      <div class="c-card_indexVision">
        <div class="pill-list">
          <div class="pill">
            <span class="icon">🤝</span>
            人とのご縁
          </div>

          <div class="pill-accent">
            <span class="icon">🔥</span>
            情熱
          </div>

          <div class="pill">
            <span class="icon">💎</span>
            価値創出
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="c-section c-section--bg">
    <div class="l-container">

      <h2 class="c-title">4つの事業領域</h2>

      <div class="c-grid c-grid--4">

        <?php
        get_template_part('template-parts/service-card', null, [
          'title' => '営業代行',
          'desc' => '成長を加速'
        ]);
        ?>

      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="c-cta">
    <div class="l-container text-center">
      <h2>まずはご相談ください</h2>
      <a href="<?php echo home_url('/contact'); ?>" class="c-btn">
        お問い合わせ
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>