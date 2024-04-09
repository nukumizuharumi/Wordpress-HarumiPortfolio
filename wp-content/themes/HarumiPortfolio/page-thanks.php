<?php get_header(); ?>


<main class="main-inner thanks-page">
  <canvas id="waveCanvas"></canvas>
  <div class="h2 m-b-0">
    <span class="title-big-b">thank you</span><br><span class="jp-sm-b">-ありがとうございます-</span>
  </div>

  <p class="h3"><?php wp_title('') ?></p>
  <?php the_content(); ?>
  <p>下記から、トップページにお戻りいただけます。<br>
    <a href="<?= home_url('/'); ?>"><span class="jp-sm-b">トップページに戻る</span></a>
  </p>
</main>

<?php get_footer('send'); ?>