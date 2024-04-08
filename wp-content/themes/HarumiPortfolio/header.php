<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?= bloginfo('description'); ?>" />

  <!-- フォントの種類設定 -->
  <!-- <?php
        wp_enqueue_style('google-web-fonts', 'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap')
        ?> -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />




  <!-- cssのリンクファイル -->
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/normalize.css" type="text/css" />
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.min.css" type="text/css" />



  <?php
  // wp_enqueue_script('jquery');
  wp_head();
  ?>
</head>


<body>
  <?php wp_body_open(); ?>

  <div id="loading">
    <div id="loading_logo">
      <img src="<?= get_template_directory_uri(); ?>/img/common/moon-cloud-line.png" alt="お月さま">
      <p class="title-big-b">please waiting</p>
      <p class="jp-sm-b"">お待ちください</?>
    </div>
  </div>


  <header>
    <div class=" menu-container">
      <h1 class="title-big-b" id="h1"><a href="<?= home_url(); ?>">harumi</a></h1>
      <div class="line-before-wrapper">
        <span class="line-before"></span>
        <span class="line-before"></span>
        <span class="line-before"></span>
      </div>
      <div class="menu-circle" id="menu-circle">
        <div class="line-wrapper" id="line-wrapper">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
    </div>

    <div class="nav" id="nav">
      <ul class="nav-list">
        <li class="nav-list-item"><a href="<?= get_permalink(58); ?>"><span class="title-big-b">works</span><br><span class="jp-sm-b">-制作したもの-</a></span></li>
        <li class="nav-list-item"><a href="<?= get_permalink(34); ?>">
            <spna class="title-big-b">about</spna><br><span class="jp-sm-b">-私について-</span>
          </a></li>
        <li class="nav-list-item"><a href="#contact">
            <spna class="title-big-b">contact</spna><br><span class="jp-sm-b">-お声かけ-</span>
          </a></li>
      </ul>
    </div>

    </header>