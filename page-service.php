<?php get_header(); ?>

<main class="l-services">

  <!-- Header -->
  <section class="c-hero">
    <div class="l-container">
      <h1><span class="u-accent">サービス</span></h1>
      <p>SERVICES</p>
    </div>
  </section>

  <!-- Intro -->
  <section class="c-section">
    <div class="l-container text-center">
      <h2><span class="u-accent">4</span>つの事業で成長をサポート</h2>
    </div>
  </section>

  <!-- Services -->
  <section class="c-section">
    <div class="l-container">

      <?php
      $services = get_posts([
        'post_type' => 'service',
        'posts_per_page' => -1
      ]);

      foreach ($services as $index => $service) :
        get_template_part('template-parts/service-detail', null, [
          'post' => $service,
          'index' => $index + 1
        ]);
      endforeach;
      ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>