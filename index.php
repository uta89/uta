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
        <p>仕事は人生の大きな部分を占めています。だからこそ、私たちは<span class="c-title_accent u-accent">仕事を通じて人生に情熱をもたらす</span>ことを目指しています。</p>
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
  <section class="c-section c-section--bg dark">
    <div class="l-container main-center">

      <h2 class="c-title">
        <span class=u-accent>4</span>つの事業領域</h2>
        <p class ="c-hero__subtitle">多様なサービスで、お客様の成長をサポート</p>
      <div class="c-grid c-grid--4">

      <div class="index-service-grid">
        <div class="index-service-card">
          <div class="index-service-icon">🎯</div>
          <h3>営業代行</h3>
          <p>経験豊富なプロフェッショナルが成長を加速</p>
        </div>

        <div class="index-service-card card-orange">
          <div class="index-service-icon">👥</div>
          <h3>キャリア支援</h3>
          <p>一人ひとりのキャリアビジョンに寄り添う</p>
        </div>

        <div class="index-service-card card-yellow">
          <div class="index-service-icon">📈</div>
          <h3>不動産営業支援</h3>
          <p>専門的な知識でバックアップ</p>
        </div>

        <div class="index-service-card">
          <div class="index-service-icon">📅</div>
          <h3>イベント事業</h3>
          <p>人と人をつなぐ価値あるイベント</p>
        </div>

      </div>

      <a class ="main_servicelink" href="/services">
        <span class ="main_servicelink-text">サービス詳細を見る</span>
        <span class ="main_servicelink-icon">→</span>
      </a>
    </div>
  </section>

  <!-- CTA -->
  <section class="c-cta">
    <div class="cta-bg"></div>
    
    <div class="l-container main-service">
      <h2 class="cta-title">
        まずは<span class="u-accent">お気軽</span>に<br>
        ご相談ください
      </h2>

       <p class="c-hero__subtitle">
        お客様のビジネスやキャリアについて、<br>
        私たちがどのようにサポートできるかをご提案させていただきます
      </p>

      <a href="/contact" class="cta-button">
        <span>お問い合わせ</span>
        <span class="cta-icon">→</span>
      </a>
      
    </div>
  </section>

</main>

<?php get_footer(); ?>