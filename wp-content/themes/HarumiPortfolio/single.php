<?php get_header(); ?>


<main id="top" class="work-page">
  <canvas id="waveCanvas"></canvas>
  <div class="main-inner">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section id="post-<?php the_ID(); ?>" <?php post_class('sect', 'sect-works'); ?>>
          <div class="h2"><span class="title-big-b">works</span><br><span class="jp-sm-b">-制作したもの-</span></div>


          <?php get_template_part('template-parts/loop-single'); ?>




          <div class="work-explanation">
            <?php the_content(); ?>
          </div>



          <section class="sect skip">
            <div class="category">

              <?php $categories = get_the_category();
              if ($categories) :
              ?>
                <?php foreach ($categories as $category) : ?>
                  <?php
                  $previous_post = get_previous_post(true);
                  if ($previous_post) :
                  ?>
                    <div class="prev-next-item">
                      <button class="category-btn">
                        <a href="<?php the_permalink($previous_post); ?>">
                          <p>
                            <sapn class="jp-sm-b">Prev</sapn><br>
                            <sapn class="jp-sm-b">-前へ-</sapn>
                          </p>
                        </a>
                      </button>
                      <p class="jp-sm-b prenext-title"><?= get_the_title($previous_post); ?></p>
                    </div>
                  <?php endif; ?>

                  <?php
                  $next_post = get_next_post(true);
                  if ($next_post) :
                  ?>
                    <div class="prev-next-item">
                      <button class="category-btn">
                        <a href="<?php the_permalink($next_post); ?>">
                          <p><span class="jp-sm-b">Next</span><br><span class="jp-sm-b">-次へ-</span></p>
                        </a>
                      </button>
                      <p class="jp-sm-b prenext-title"><?= get_the_title($next_post); ?></p>
                    </div>
                  <?php endif; ?>
            </div>

            <div class="category-item">
              <div class="btn"><a href="<?= get_category_link($category); ?>">
                  <p class="jp-sm-b">
                    <?= $category->name; ?>
                    一覧へ</p>
                </a>
              </div>
              <div class="btn">
                <a href="#">
                  <p class="jp-sm-b">制作したもの一覧へ</p>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
          </section>


        <?php endif; ?>


      <?php endwhile; ?>
    <?php endif; ?>




  </div>
</main>


<?php get_footer(); ?>