<div id="post-<?php the_ID(); ?>" <?php post_class('work'); ?>>

  <a href="<?php the_field('siteurl'); ?>" target="_blank">
    <div class="img-cover">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php else : ?>
        <img src="<?= get_template_directory_uri(); ?>/img/box-work-1 .png" alt="">
      <?php endif; ?>
    </div>
  </a>

  <h3><?php the_title(); ?></h3>
  <p><?php
      $done = get_field('done');
      foreach ($done as $kye => $dones) {
        echo $dones;
        if ($dones !== end($done)) {
          echo '　';
        }
      } ?></p>
</div>