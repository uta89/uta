/**serviceページのphp */
<?php
$post = $args['post'];
$index = $args['index'];

$title = get_the_title($post);
$desc = get_field('description', $post->ID);
$features = get_field('features', $post->ID); // ACF想定
?>

<div class="c-service-detail">

  <div class="c-service-detail__text">
    <span class="c-service-detail__num">
      <?php echo str_pad($index, 2, '0', STR_PAD_LEFT); ?>
    </span>

    <h3><?php echo esc_html($title); ?></h3>
    <p><?php echo esc_html($desc); ?></p>
  </div>

  <div class="c-service-detail__features">
    <ul>
      <?php if ($features) : foreach ($features as $f) : ?>
        <li>
          <strong><?php echo esc_html($f['title']); ?></strong>
          <p><?php echo esc_html($f['desc']); ?></p>
        </li>
      <?php endforeach; endif; ?>
    </ul>
  </div>

</div>