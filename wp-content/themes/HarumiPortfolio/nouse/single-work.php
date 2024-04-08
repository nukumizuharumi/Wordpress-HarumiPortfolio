<?php get_header(); ?>


<main id="top">
  <canvas id="waveCanvas"></canvas>
  <div class="main-inner">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section id="post-<?php the_ID(); ?>" <?php post_class('sect', 'sect-works'); ?>>
          <div class="h2"><span class="title-big-b">works</span><br><span class="jp-sm-b">-制作したもの-</span></div>
          <div class="works">
            <div class="work">
              <a href="https://nukumizuharumi.github.io/nappa69/" target="_blank">
                <div class="img-cover">


                  <?php
                  $pic = get_field('pic');
                  $pic_url = $pic['sizes']['medium'];
                  ?>
                  <img src="<?= $pic_url; ?>" alt="">



                </div>
                <h3><?php the_title(); ?></h3>
                <p>
                  <?php
                  $done = get_field('done');
                  foreach ($done as $kye => $dones) {
                    echo $dones;
                    if ($dones !== end($done)) {
                      echo ' ';
                    }
                  } ?></p>
              </a>
            </div>
          </div>
          <div class="work-explanation">
            <?php the_content(); ?>
          </div>

          <div class="category">
            <?php $categories = get_the_category();
            if ($categories) :
            ?>
              <?php foreach ($categories as $category) : ?>


                <div class="category-item btn"><a href="<?= get_category_link($category); ?>" class="btn">
                    <?= $category->name; ?>
                    一覧へ</a>
                </div>

                <div class="prev-next">
                  <?php
                  $previous_post = get_previous_post(true);
                  if ($previous_post) :
                  ?>
                    <div class="prev-next-item">
                      <button class="category-btn">
                        <a href="<?php the_permalink($previous_post); ?>">
                          <span>前-<?= get_the_title($previous_post); ?></span></a>
                      </button>
                    </div>
                  <?php endif; ?>

                  <?php
                  $next_post = get_next_post(true);
                  if ($next_post) :
                  ?>
                    <div class="prev-next-item">
                      <button class="category-btn">
                        <a href="<?php the_permalink($next_post); ?>">
                          <span>次-<?= get_the_title($next_post); ?></span></a>
                      </button>
                    </div>
                  <?php endif; ?>
                </div>


              <?php endforeach; ?>
          </div>
        <?php endif; ?>


      <?php endwhile; ?>
    <?php endif; ?>




  </div>
</main>


<?php get_footer(); ?>