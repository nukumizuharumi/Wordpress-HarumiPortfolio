<!-- //全カテゴリーをブロック毎に表示可能、だけど各カテゴリーページにしても４つ全て表示される。 -->

<?php get_header(); ?>

<main id="top" class="works-page">
  <canvas id="waveCanvas"></canvas>
  <div class="main-top main-inner">

    <div class="h2 m-b-0"><span class="title-big-b">works</span><br><span class="jp-sm-b">-制作したもの-</span>
    </div>

    <div class="page-nav">
      <nav class="works-nav">
        <p class="h3 sun-sm">ページ内の各項目へ移動</p>
        <ul>
          <li><a href="#website"><span class="">website</span><br><span>-ウェブサイト-</span></a></li>
          <li><a href="#banner"><span>banner</span><br><span>-バナー-</span></a></li>
          <li><a href="#logo"><span>logo</span><br><span>-ロゴ-</span></a></li>
          <li><a href="#other"><span>other</span><br><span>-その他-</span></a></li>
        </ul>
      </nav>
      <nav class="works-nav category">
        <p class="h3 sun-sm">各項目ページへ移動</p>
        <ul class="category-page">
          <?php
          $args = [
            'title_li' => '',
          ];
          wp_list_categories($args);
          ?>
        </ul>
      </nav>
      <nav class="works-nav category">
        <p class="h3 sun-sm">各使用ツールページへ移動</p>
        <ul class="category-page">
          <?php
          $posttags = get_tags();
          if ($posttags) {
            foreach ($posttags as $tag) {
              echo ' <li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>(' . $tag->count . ')</li>';
            }
          }
          ?>
        </ul>
      </nav>
    </div>

  </div>

  <div class="main-inner">
    <section class="sect sect-website" id="website">
      <div class="h2-sub">
        <span class="title-big-b">website</span><br><span class="jp-sm-b">-ウェブサイト-</span>
      </div>

      <div class="works-area">
        <?php
        $args = [
          'post_type' => 'post',
          'posts_per_page' => -1,
          'category_name' => 'website',
        ];

        $the_query = new
          WP_Query($args);
        ?>


        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <?php get_template_part('template-parts/loop-works'); ?>

        <?php endwhile; ?>


        <?php
        $website = get_term_by('slug', 'website', 'category');
        $website_link = get_term_link($website, 'category')
        ?>
      </div>

    </section>



    <section class="sect sect-banner" id="banner">
      <div class="h2-sub">
        <span class="title-big-b">banner</span><br><span class="jp-sm-b">-バナー-</span>
      </div>

      <div class="works-area">
        <?php
        $args = [
          'post_type' => 'post',
          'posts_per_page' => -1,
          'category_name' => 'banner',
        ];

        $the_query = new
          WP_Query($args);
        ?>


        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <?php get_template_part('template-parts/loop-works'); ?>

        <?php endwhile; ?>


        <?php
        $banner = get_term_by('slug', 'banner', 'category');
        $banner_link = get_term_link($banner, 'category')
        ?>
      </div>

    </section>



    <section class="sect sect-logo" id="logo">
      <div class="h2-sub">
        <span class="title-big-b">logo</span><br><span class="jp-sm-b">-ロゴ-</span>
      </div>

      <div class="works-area">
        <?php
        $args = [
          'post_type' => 'post',
          'posts_per_page' => -1,
          'category_name' => 'logo',
        ];

        $the_query = new
          WP_Query($args);
        ?>


        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <?php get_template_part('template-parts/loop-works'); ?>

        <?php endwhile; ?>


        <?php
        $logo = get_term_by('slug', 'logo', 'category');
        $logo_link = get_term_link($logo, 'category')
        ?>
      </div>

    </section>



    <section class="sect sect-other" id="other">
      <div class="h2-sub">
        <span class="title-big-b">other</span><br><span class="jp-sm-b">-その他-</span>
      </div>

      <div class="works-area">
        <?php
        $args = [
          'post_type' => 'post',
          'posts_per_page' => -1,
          'category_name' => 'other',
        ];

        $the_query = new
          WP_Query($args);
        ?>


        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <?php get_template_part('template-parts/loop-works'); ?>

        <?php endwhile; ?>


        <?php
        $other = get_term_by('slug', 'other', 'category');
        $other_link = get_term_link($other, 'category')
        ?>
      </div>

    </section>






  </div>

  <!-- ページネーション -->
  <?php if (function_exists('wp_pagenavi')) : ?>
    <div class="pagination">
      <?php wp_pagenavi(); ?>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>