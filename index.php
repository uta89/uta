<?php get_header(); ?>

<main class="l-home">

  <!-- Hero -->
  <?php get_template_part('template-parts/hero'); ?>

  <!-- スクロールテキスト -->
  <div class="c-scroll-banner">
    <div class="c-scroll-text">
      PASSION × CONNECTION × VALUE CREATION
    </div>
  </div>

  <!-- Vision -->
  <section class="c-section">
    <div class="l-container c-grid c-grid--2">

      <div>
        <h2 class="c-title">Vision</h2>
        <p>
          仕事を通じて人生に情熱をもたらす...
        </p>
      </div>

      <div class="c-card">
        <?php get_template_part('template-parts/value-pill', null, [
          'icon' => '🤝',
          'text' => '人とのご縁'
        ]); ?>
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