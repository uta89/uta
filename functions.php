<?php

function register_my_menus() {
  register_nav_menus([
    'global_menu' => 'グローバルメニュー',
  ]);
}
add_action('after_setup_theme', 'register_my_menus');

function theme_customize_register($wp_customize) {
  $wp_customize->add_section('theme_colors', [
    'title' => 'カラー設定',
  ]);

  $wp_customize->add_setting('card_color', [
    'default' => '#1a1a1a',
  ]);

  $wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'card_color_control',
    [
      'label' => 'カード背景色',
      'section' => 'theme_colors',
      'settings' => 'card_color',
    ]
  ));
}
add_action('customize_register', 'theme_customize_register');

/*
function theme_scripts() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
  */
/*
add_action('wp_enqueue_scripts', 'theme_scripts');
*/
add_action('init', function () {
  if (!isset($_POST['contact_submit'])) return;
  if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form')) return;

  $name = sanitize_text_field($_POST['name']);
  $email = sanitize_email($_POST['email']);
  $company = sanitize_text_field($_POST['company']);
  $message = sanitize_textarea_field($_POST['message']);

  $to = get_option('admin_email');
  $subject = 'お問い合わせがありました';

  $body = "名前: $name\nメール: $email\n会社: $company\n\n$message";

  wp_mail($to, $subject, $body);
  wp_redirect(home_url('/contact?success=1'));
  exit;
});

function theme_scripts() {
  wp_enqueue_style('main-style', get_stylesheet_uri());

  wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/main.js',
    [],
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_scripts');