<?php get_header(); ?>

<main class="l-about">

  <!-- Hero -->
  <section class="c-hero">
    <div class="c-hero__bg"></div>

    <div class="l-container">
      <h1 class="c-hero__title">
        <span class="u-accent">会社</span>概要
      </h1>
      <p class="c-hero__subtitle">ABOUT US</p>
    </div>
  </section>

  <!-- Vision -->
  <section class="c-section">
    <div class="l-container l-container--narrow">

      <div class="c-vision">
        <p class="c-vision__main">
          仕事と、<span class="u-accent">人生</span>に、情熱を
        </p>
        <p class="c-vision__sub">
          人とのご縁で価値を創出する
        </p>
      </div>

      <div class="c-grid c-grid--2">
        <div>
          <p>
            desafioは、「仕事と、人生に、情熱を」というビジョンのもと...
          </p>
        </div>
        <div>
          <p>
            お客様一人ひとりとの出会いを大切にし...
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Company Info -->
  <section class="c-section c-section--bg">
    <div class="l-container l-container--narrow">

      <h2 class="c-title">会社<span class="u-accent">情報</span></h2>

      <div class="c-card">

        <?php
        get_template_part('template-parts/company-info-row', null, [
          'label' => '会社名',
          'value' => 'desafio',
          'highlight' => true
        ]);
        ?>

        <?php
        get_template_part('template-parts/company-info-row', null, [
          'label' => 'ビジョン',
          'value' => '仕事と、人生に、情熱を',
          'highlight' => true
        ]);
        ?>

      </div>

    </div>
  </section>

  <!-- Values -->
  <section class="c-section">
    <div class="l-container">

      <h2 class="c-title">私たちの<span class="u-accent">価値観</span></h2>

      <div class="c-grid c-grid--4">

        <?php
        get_template_part('template-parts/value-card', null, [
          'title' => '人とのご縁',
          'desc' => '一つひとつの出会いを大切にし...',
        ]);
        ?>

      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>