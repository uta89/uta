<?php get_header(); ?>

<main class="l-contact">

  <!-- Hero -->
  <section class="c-hero">
    <div class="l-container">
      <h1 class="c-hero__title">
        お問い<span class="u-accent">合わせ</span>
      </h1>
      <p class="c-hero__subtitle">CONTACT US</p>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="c-section">
    <div class="l-container">

      <h2 class="c-title">
        お気軽に<span class="u-accent">ご相談</span>ください
      </h2>

      <div class="c-grid c-grid--contact">

        <!-- 左：情報 -->
        <div class="c-contact-info">

          <?php
          get_template_part('template-parts/info-card', null, [
            'title' => 'メールでのお問い合わせ',
            'desc' => '通常1〜2営業日以内に返信します'
          ]);
          ?>

          <?php
          get_template_part('template-parts/info-card', null, [
            'title' => '営業時間',
            'desc' => '平日 9:00 - 18:00',
            'sub'  => '土日祝休み'
          ]);
          ?>

        </div>

        <!-- 右：フォーム -->
        <div class="c-contact-form">

          <?php if (isset($_GET['success'])) : ?>
            <div class="c-form-success">
              送信完了しました。ありがとうございます。
            </div>
          <?php endif; ?>

          <form method="post" action="">
            <input type="hidden" name="contact_nonce" value="<?php echo wp_create_nonce('contact_form'); ?>">

            <div class="c-form-group">
              <label>お名前 *</label>
              <input type="text" name="name" required>
            </div>

            <div class="c-form-group">
              <label>メールアドレス *</label>
              <input type="email" name="email" required>
            </div>

            <div class="c-form-group">
              <label>会社名</label>
              <input type="text" name="company">
            </div>

            <div class="c-form-group">
              <label>お問い合わせ内容 *</label>
              <textarea name="message" required></textarea>
            </div>

            <button type="submit" name="contact_submit" class="c-btn">
              送信する
            </button>

          </form>

        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>