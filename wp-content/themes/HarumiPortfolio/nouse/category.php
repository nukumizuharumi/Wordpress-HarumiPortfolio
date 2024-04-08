//全カテゴリーをブロック毎に表示可能、だけど各カテゴリーページにしても４つ全て表示される。

<?php get_header(); ?>

<main id="top">
  <canvas id="waveCanvas"></canvas>
  <div class="main-top main-inner">
  </div>
  </div>

  <div class="main-inner">
    <div class="h2 m-b-0"><span class="title-big-b">works</span><br><span class="jp-sm-b">-制作したもの-</span>
    </div>

    <nav class="works-nav category">
      <ul class="category-page">
        <?php
        $args = [
          'title_li' => '',
        ];
        wp_list_categories($args);
        ?>
      </ul>
    </nav>

    <?php
    // カテゴリーの取得
    $categories = get_categories();
    $category_count = count($categories);
    $blocks_per_page = 4;
    $blocks_count = ceil($category_count / $blocks_per_page);

    // カテゴリーブロックの表示
    for ($i = 0; $i < $blocks_count; $i++) {
      $start_index = $i * $blocks_per_page;
      $end_index = min(($i + 1) * $blocks_per_page, $category_count);

      echo '<div class="category-block">';
      for ($j = $start_index; $j < $end_index; $j++) {
        $category = $categories[$j];
        echo '<h2>' . $category->name . '</h2>';
        echo '<p>' . $category->description . '</p>';

        // カテゴリーに属する投稿を取得するクエリ
        $args = array(
          'category__in' => array($category->term_id),
          'posts_per_page' => -1
        );
        $posts_query = new WP_Query($args);

        // 取得した投稿をループして表示
        if ($posts_query->have_posts()) {
          while ($posts_query->have_posts()) {
            $posts_query->the_post();
            echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
            if (has_post_thumbnail()) {
              echo '<div class="thumbnail">';
              the_post_thumbnail('thumbnail', array('class' => 'post-thumbnail'));
              echo '</div>';
            }
          }
        } else {
          echo '投稿がありません。';
        }

        // クエリをリセット
        wp_reset_postdata();
      }
      echo '</div>';
    }
    ?>

  </div>

  <?php if (function_exists('wp_pagenavi')) : ?>
    <div class="pagination">
      <?php wp_pagenavi(); ?>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>