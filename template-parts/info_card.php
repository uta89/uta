<div class="c-info-card">
  <h3><?php echo esc_html($args['title']); ?></h3>
  <p><?php echo esc_html($args['desc']); ?></p>

  <?php if (!empty($args['sub'])) : ?>
    <small><?php echo esc_html($args['sub']); ?></small>
  <?php endif; ?>
</div>