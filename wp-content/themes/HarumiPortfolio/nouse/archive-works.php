<?php get_header(); ?>

<main id="top">
  <canvas id="waveCanvas"></canvas>
  <div class="main-top main-inner">
    <nav class="works-nav">
      <ul>
        <li><a href="#website"><span class="">website</span><br><span>-ウェブサイト-</span></a></li>
        <li><a href="#banner"><span>banner</span><br><span>-バナー-</span></a></li>
        <li><a href="#logo"><span>logo</span><br><span>-ロゴ-</span></a></li>
        <li><a href="#other"><span>other</span><br><span>-その他-</span></a></li>
      </ul>
    </nav>
  </div>

  <div class="main-inner">
    <div class="h2 m-b-0"><span class="title-big-b">works</span><br><span class="jp-sm-b">-制作したもの-</span>
    </div>

    <?php
    $work_category_terms = get_terms(['taxonomy' => 'work_category']);
    ?>
    <?php if (!empty($work_category_terms)) : ?>
      <?php foreach ($work_category_terms as $work_category) : ?>

        <section class="sect sect-website" id="website">
          <div class="h2-sub">
            <a href="<?= get_term_link($work_category); ?>"><?= $work_category->name; ?></a>
            <span class="title-big-n"><?= strtoupper($work_category->slug); ?></span>
          </div>

          <div class="works">
            <?php
            $args = [
              'post_type' => 'works',
              'posts_per_page' => -1,
            ];
            $taxquerysp = [
              'relation' => 'AND',
              [
                'taxonomy' => 'work_category',
                'field' => 'slug',
                'terms' => $work_category->slug,
              ],
            ];
            $args['tax_query'] = $taxquerysp;
            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <?php get_template_part('template-parts/loop', 'works'); ?>

              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </section>

      <?php endforeach; ?>
    <?php endif; ?>


  </div>
</main>

<?php get_footer(); ?>