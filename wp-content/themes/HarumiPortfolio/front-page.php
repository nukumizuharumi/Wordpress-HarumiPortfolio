<?php get_header(); ?>


<main id="top" class="top-page">
  <div class="main-top">
    <div class="main-visual">
      <div class="main-visual-sun"></div>
      <div class="main-visual-text">
        <div class="TextFlow-cover">
          <p class="cursive TextFlow">welcome portfolio site.</p>
        </div>
        <p class="main-visual-text-title">harumi<br>nukumizu</p>
        <p class="main-visual-text-phrase TextTyping">Hello,I'm a growing web designer.</p>
      </div>
    </div>
    <div class="main-visual-bottom">
      <canvas id="waveCanvas"></canvas>
      <img src="<?= get_template_directory_uri(); ?>/img/common/suzuran-lg.png" alt="鈴蘭の花">
    </div>
  </div>


  <div class="main-inner">
    <?php
    $args = [
      'post_type' => 'post',
      'posts_per_page' => 4,
      // 'category_name' => 'news',
    ];

    $the_query = new
      WP_Query($args);
    ?>



    <?php if ($the_query->have_posts()) : ?>

      <section class="sect sect-works">
        <div class="h2"><span class="title-big-b">works</span><br><span class="jp-sm-b">-制作したもの-</span></div>
        <div class="works-area">

          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <?php get_template_part('template-parts/loop-works'); ?>

          <?php endwhile; ?>

        </div>


        <button><a href="<?= get_permalink(58); ?>"><span class="btn-text">more</span><br><span class="jp-sm-b">-くわしく-</a></span></button>
      </section>

    <?php endif; ?>





    <section class="sect sect-about">
      <div class="h2"><span class="title-big-b">about</span><br><span class="jp-sm-b">-私について-</span></div>
      <div class="about">
        <img src="<?= get_template_directory_uri(); ?>/img/about/profile.jpg" alt="制作者イメージ">
        <div class="about-text">
          <p class="about-text-name"><span class="title-big-b">harumi nukumizu</span><br><span class="jp-mid">温水 晴海</span></p>
          <p>海外生まれ、日本育ち。<br>
            大学卒業後は看護師・助産師として総合病院に勤務する。<br>
            人生について考え興味のあったWebデザインやコーディングについて学ぶ。<br>
            性格は明るく元気、責任感があると周囲からは言ってもらえます。</p>
          <p>「笑う門には福来る」「日進月歩」をモットーに対話を大切にしています。<br>
            人の大切な想いをカタチにすることを心がけ、課題解決につなぐことで喜んでもらえる制作をしたいと考えています。</p>
        </div>
      </div>

      <button><a href="<?= get_permalink(34); ?>"><span class="btn-text">more</span><br><span class="jp-sm-b">-くわしく-</span></a></button>
    </section>

  </div>
</main>



<?php get_footer(); ?>