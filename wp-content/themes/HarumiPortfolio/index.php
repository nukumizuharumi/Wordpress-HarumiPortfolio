<?php get_header(); ?>


<main id="top" class="works-page">
    <canvas id="waveCanvas"></canvas>
    <div class="main-top main-inner">
        <div class="h2 m-b-0"><span class="title-big-b">works</span><br><span class="jp-sm-b">-制作したもの-</span>
        </div>

        <div class="page-nav">
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
            <nav class="works-nav">
                <p class="h3 sun-sm"><a href="<?= get_permalink(58); ?>">制作したもの一覧へもどる</a></p>
            </nav>
        </div>

    </div>


    <div class="main-inner">
        <section class="sect sect-website" id="website">
            <div class="h2-sub">
                <span class="title-big-b"><?php wp_title('') ?></span><br><span class="jp-sm-b">-ウェブサイト-</span>
            </div>

            <?php if (have_posts()) : ?>
                <div class="works-area">

                    <?php while (have_posts()) : the_post() ?>

                        <?php get_template_part('template-parts/loop-works'); ?>

                    <?php endwhile; ?>

                </div>
            <?php endif; ?>


    </div>


    <?php if (function_exists('wp_pagenavi')) : ?>
        <div class="pagination">
            <?php wp_pagenavi(); ?>
        </div>
    <?php endif; ?>
</main>


<?php get_footer(); ?>