<div class="c-info-row <?php echo $args['highlight'] ? 'is-highlight' : ''; ?>">
  <dt class="c-info-row__label">
    <?php echo esc_html($args['label']); ?>
  </dt>
  <dd class="c-info-row__value">
    <?php echo wp_kses_post($args['value']); ?>
  </dd>
</div>