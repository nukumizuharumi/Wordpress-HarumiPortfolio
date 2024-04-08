<?php
$work_category_slug = get_query_var('work_category');
$work_category = get_term_by('slug', $work_category_slug, 'work_category');
?>


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
    </div>


    <div class="main-inner">
        <div class="h2 m-b-0"><span class="title-big-b"><?= strtoupper($work_category->slug); ?></span><br><span class="jp-sm-b"><?php single_term_title(''); ?></span>
        </div>



        <section class="sect sect-website" id="website">
            <div class="h2-sub">
                <span class="title-big-n">website</span><br><span class="jp-sm-b">-ウェブサイト-</span>
            </div>

            <?php if (have_posts()) : ?>
                <div class="works">
                    <?php while (have_posts()) : the_post() ?>

                        <?php get_template_part('template-parts/loop-works'); ?>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>


            <div class="work-explanation">
                <!-- <?php the_content(); ?> -->
            </div>

        </section>





        <section class="sect sect-banner" id="banner">
            <div class="h2-sub"><span class="title-big-n">banner</span><br><span class="jp-sm-b">-バナー-</span></div>
            <div class="works">
            </div>

        </section>

        <section class="sect sect-logo " id="logo">
            <div class="h2-sub"><span class="title-big-n">logo</span><br><span class="jp-sm-b">-ロゴ-</span></div>
            <div class="works">

            </div>

        </section>

        <section class="sect sect-other" id="other">
            <div class="h2-sub"><span class="title-big-n">other</span><br><span class="jp-sm-b">-その他-</span></div>
            <div class="works">

            </div>

        </section>

    </div>
</main>



<?php get_footer(); ?>