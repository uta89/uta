/**Homeのコード */
<section class="c-hero">
  <div class="l-container c-grid c-grid--2">

    <div>
      <h1 class="c-hero__title">
        仕事と、<br>
        <span class="u-accent">人生</span>に、情熱を
      </h1>

      <p class="c-hero__lead">
        人とのご縁を大切にしながら価値を創出
      </p>

      <div class="c-hero__btns">
        <a href="<?php echo home_url('/contact'); ?>" class="c-btn">
          お問い合わせ
        </a>
        <a href="<?php echo home_url('/services'); ?>" class="c-btn c-btn--ghost">
          サービスを見る
        </a>
      </div>
    </div>

    <div class="c-grid c-grid--2">
      <?php
      get_template_part('template-parts/stat-card', null, [
        'num' => '4',
        'label' => '事業領域'
      ]);
      ?>
    </div>

  </div>
</section>