<?php get_header(); ?>


<main class="main-inner check-page">
<canvas id="waveCanvas"></canvas>
  <div class="h2 m-b-0">
    <span class="title-big-b">check</span><br><span class="jp-sm-b">-確認-</span>
  </div>

  <p class="h3"><?php wp_title('') ?></p>
  <?php the_content(); ?>
</main>

<?php get_footer('send'); ?>