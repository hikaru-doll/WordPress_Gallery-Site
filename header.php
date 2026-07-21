<?php
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- 構造化データ ------------------------------->
  <!-- /構造化データ end--------------------------->
  <!-- Google Analyticsのタグを貼る場所 ----------->
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <!-- header  ------------------------------------->
  <header class="header">
    <button class="ham">
      <span class="ham1"></span>
      <span class="ham2"></span>
      <span class="ham3"></span>
    </button>
    <div class="logo">
      <a href="<?php echo esc_url(home_url()); ?>">
        Gallery-site
      </a>
    </div>

    <!-- WP標準メニューの使用  ----------->
    <?php wp_nav_menu(
      array(
        'theme_location' => 'header_nav',
        'container' => 'nav',
        'container_class' => 'main-navigation',
        'menu_class' => 'nav-menu',
      )
    ); ?>
  </header>