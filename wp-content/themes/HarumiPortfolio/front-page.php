<?php get_header(); ?>


    <main id="top">
      <div class="main-top">
        <div class="main-visual">
          <div class="main-visual-sun"></div>
          <div class="main-visual-text">
            <div class="TextFlow-cover">
              <p class="cursive TextFlow">welcome portfolio site.</p>
            </div>
            <p class="main-visual-text-title">harumi<br>nukumizu</p>
            <p class="main-visual-text-phrase TextTyping">Hello,I'm a growing web designer.</p>
          </div>
        </div>
        <div class="main-visual-bottom">
          <canvas id="waveCanvas"></canvas>
          <img src="<?= get_template_directory_uri(); ?>/img/common/suzuran-lg.png" alt="鈴蘭の花">
        </div>
      </div>


      <div class="main-inner">
        <section class="sect sect-works">
          <div class="h2"><span class="title-big-b">works</span><br><span class="jp-sm-b">-制作したもの-</span></div>
          <div class="works">
            <div class="work">
              <a href="">
                <div class="img-cover"><img src="<?= get_template_directory_uri(); ?>/img/box-work-1 .png" alt=""></div>
                <h3>-まだ未定-</h3>
                <p>Webdesign　Coding　Logo</p>
              </a>
            </div>
            <div class="work">
              <a href="">
                <div class="img-cover"><img src="<?= get_template_directory_uri(); ?>/img/works/website/nappa69-first-view.png" alt=""></div>
                <h3>HanaCAFE nappa69</h3>
                <p>Webdesign　Coding　Logo</p>
              </a>
            </div>
            <div class="work">
              <a href="">
                <div class="img-cover"><img src="<?= get_template_directory_uri(); ?>/img/works/website/portfolio-first-view.png" alt=""></div>
                <h3>HARUMI's Portfolio Site.</h3>
                <p>Webdesign　Coding　Logo</p>
              </a>
            </div>
            <div class="work">
              <a href="">
                <div class="img-cover"><img src="<?= get_template_directory_uri(); ?>/img/box-work-4.png" alt=""></div>
                <h3>-タイトル-</h3>
                <p>Webdesign　Coding　Logo</p>
              </a>
            </div>
          </div>

          <button><a href="works/works.html"><span class="title-big-b">more</span><br><span class="jp-sm-b">-くわしく-</a></span></button>
        </section>

        <section class="sect sect-about">
          <div class="h2"><span class="title-big-b">about</span><br><span class="jp-sm-b">-私について-</span></div>
          <div class="about">
            <img src="<?= get_template_directory_uri(); ?>/img/common/android-chrome-192x192.png" alt="制作者イメージ">
            <div class="about-text">
              <p class="about-text-name"><span class="title-big-n">harumi nukumizu</span><br><span class="jp-mid">温水 晴海</span></p>
              <p>海外生まれ、日本育ち。<br>
                大学卒業後は看護師・助産師として総合病院に勤務する。<br>
                人生について考え興味のあったWebデザインやコーディングについて学ぶ。<br>
                性格は明るく元気、責任感があると周囲からは言ってもらえます。</p>
              <p>「笑う門には福来る」「日進月歩」をモットーに対話を大切にしています。<br>
                人の大切な想いをカタチにすることを心がけ、課題解決につなぐことで喜んでもらえる制作をしたいと考えています。</p>
            </div>
          </div>

          <button><a href="about.html"><span class="title-big-b">more</span><br><span class="jp-sm-b">-くわしく-</a></span></button>
        </section>

      </div>
    </main>



<?php get_footer(); ?>