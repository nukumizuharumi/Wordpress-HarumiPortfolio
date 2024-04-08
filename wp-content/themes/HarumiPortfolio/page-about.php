<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <main id="top" class="profile-page">
            <canvas id="waveCanvas"></canvas>
            <div class="main-inner">
                <section class="sect profile" id="profile">
                    <div class="h2"><span class="title-big-b">
                            <?= strtoupper($post->post_name); ?></span><br><span class="jp-sm-b">
                            <?php the_title(); ?></span>
                    </div>
                    <div class="about">
                        <img src="<?= get_template_directory_uri(); ?>/img/about/profile.jpg" alt="制作者イメージ">
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
                </section>






                <section class="sect biography">
                    <div class="h2-sub">
                        <span class="title-big-b">biography</span><br><span class="jp-sm-b">-これまで-</span>
                    </div>
                    <div class="swiper sect-content biography-cover">
                        <div class="swiper-wrapper biography-wrapper">

                            <div class="biography-content swiper-slide">
                                <p class="title-sm-b biography-content-title">学生時代</p>
                                <p class="sun-sm biography-content-line"></p>
                                <p class="biography-content-text">クラス委員長などを務め、クラスをまとめる機会が多くありました。<br>
                                    個性の光るクラスメイトをまとめるにあたり、人との関わりなどを学び自分の成長になりました。<br>
                                    卒業時には、功労賞をいただきました。</p>
                            </div>
                            <div class="biography-content swiper-slide">
                                <p class="title-sm-b biography-content-title">看護師・助産師</p>
                                <p class="sun-sm biography-content-line"></p>
                                <p class="biography-content-text">卒業後、看護師・助産師として就職し総合病院で働いていました<br>
                                    産婦人科や小児科で勤務し、たくさんの人に出会い、それぞれの患者さんや家族のサポートをしてきました。</p>
                            </div>
                            <div class="biography-content swiper-slide">
                                <p class="title-sm-b biography-content-title">Webデザイナー</p>
                                <p class="sun-sm biography-content-line"></p>
                                <p class="biography-content-text">
                                    たくさんの命に関わったことで、自身の今後について考えました。<br>自分が興味のあったWeb関係について「やりたい！」と思い、デザインとコーディングについてスクールで学びはじめました。
                                </p>
                            </div>
                            <div class="biography-content swiper-slide">
                                <p class="title-sm-b biography-content-title">現在と未来</p>
                                <p class="sun-sm biography-content-line"></p>
                                <p class="biography-content-text">Webのデザインとコーディングの学習を今も継続してしています。<br>
                                    大切な想いをカタチにし、課題解決に向けられるように制作をしたいと考えています<br>
                                    数年後には要望だけではなく、より良い提案を自ら行えるようにしていきたいです。</p>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </section>

                <section class="sect strength">
                    <div class="h2-sub">
                        <span class="title-big-b">strength</span><br><span class="jp-sm-b">-強み-</span>
                    </div>
                    <div class="sect-content strength-cover">
                        <div class="circle">
                            <div class="circle-content">
                                <span class="title-sm-b">communication</span><span class="jp-sm-b">-対話と傾聴-</span>
                            </div>
                            <div class="circle-content">
                                <span class="title-sm-b">positivity</span><span class="jp-sm-b">-積極性-</span>
                            </div>
                            <div class="circle-content">
                                <span class="title-sm-b">cooperation</span><span class="jp-sm-b">-協力-</span>
                            </div>
                        </div>
                        <div class="circle-text">
                            <div class="circle-text-area">
                                <p class="circle-text-area-title"><span class="title-sm-b">communication</span><br><span class="jp-sm-b">-対話と傾聴-</span>
                                </p>
                                <P class="circle-text-area-text">学生時代や前職で多くの人と話す機会があり、相手への伝え方や話を聞く力をやしなってきました。<br>
                                    伝え方や聞く力から、ご依頼主の考えや想いを把握してデザインへの反映につなげられると考えています。
                                </P>
                            </div>

                            <div class="circle-text-area">
                                <p class="circle-text-area-title">
                                    <span class="title-sm-b">positivity</span><br><span class="jp-sm-b">-積極性-</span>
                                </p>
                                <p class="circle-text-area-text">
                                    日々、自分の知らないことを学習して知識を広げています。前職では自分から先輩や上司に声をかけ、解決策の提案を行うことなどもしてきました。<br>
                                    今年は、資格の取得も目指していきたいと考えています。
                                </p>
                            </div>

                            <div class="circle-text-area">
                                <p class="circle-text-area-title">
                                    <span class="title-sm-b">cooperation</span><br><span class="jp-sm-b">-協力-</span>
                                </p>
                                <p class="circle-text-area-text">
                                    患者さんの問題について、さまざまな職種の力を合わせて、チームで協力して支援や解決に向けて取り組んでいました。<br>お互いの役割を理解して、チームで協力しあいながら物事に取り組めます。
                                </p>
                            </div>
                        </div>

                    </div>
                </section>

                <section class="sect skill">
                    <div class="h2-sub">
                        <span class="title-big-b">skill</span><br><span class="jp-sm-b">-できること-</span>
                    </div>
                    <div class="sect-content skill-cover">
                        <div class="skill-content">
                            <img class="skill-img" src="<?= get_template_directory_uri(); ?>/img/about/skill-design.png" alt="デザインのイラスト">
                            <p class="skill-content-title">
                                <span class="title-sm-b">design</span><br><span class="title-sm-b">-デザイン-</span>
                            </p>
                            <p class="skill-content-icon"><img src="<?= get_template_directory_uri(); ?>/img/about/skill-icons_figma-dark.png" alt="Figmaアイコン"><img src="<?= get_template_directory_uri(); ?>/img/about/skill-icons_illustrator.png" alt=illustratorアイコン"><img src="<?= get_template_directory_uri(); ?>/img/about/skill-icons_photoshop.png" alt="Photoshopアイコン">
                            </p>

                            <p class="skill-content-text">
                                デザインの学習を行い、レイアウトや色味の学習を日々、継続しています。<br>
                                FigmaでWebサイトデザイン、AdobeのillustratorやPhotoshopでバナーやアイコンの制作を行います。
                            </p>
                        </div>
                        <div class="skill-content">
                            <img class="skill-img" src="<?= get_template_directory_uri(); ?>/img/about/skill-code.png" alt="">
                            <p class="skill-content-title">
                                <span class="title-sm-b">coding</span><br><span class="title-sm-b">-コーディング-</span>
                            </p>
                            <p class="skill-content-icon"><img src="<?= get_template_directory_uri(); ?>/img/about/skill-icons_html.png" alt="HTML5アイコン"><img src="<?= get_template_directory_uri(); ?>/img/about/skill-icons_css.png" alt="CSS5アイコン"><img src="<?= get_template_directory_uri(); ?>/img/about/skill-icons_javascript.png" alt="JavaScriptアイコン"></p>
                            <p class="skill-content-text">
                                HTML/CSSでの基本的なサイト制作ではレスポンシブデザインを意識して制作をしています。<br>
                                JavaScriptを取り入れた基本的な動作も実装しています。<br>
                                プラグインの導入なども行っています。
                            </p>
                            <p class="skill-content-icon"><img src="<?= get_template_directory_uri(); ?>/img/about/skill-icons_wordpress.png" alt="Wordpressアイコン">
                            </p>
                            <p class="skill-content-text">
                                Wordpressではテーマの導入、カスタマイズを学習し、オリジナルテーマの作成を行います。
                            </p>
                        </div>
                        <div class="skill-content">
                            <img class="skill-img" src="<?= get_template_directory_uri(); ?>/img/about/skill-direction.png" alt="">
                            <p class="skill-content-title">
                                <span class="title-sm-b">direction</span><br><span class="title-sm-b">-ディレクション-</span>
                            </p>
                            <p class="skill-content-text">
                                プロジェクト毎の制作や保守、進行管理などに関わる全体のことを見据えられるように、少しずつ知識を増やしています。
                            </p>
                        </div>

                    </div>
                </section>
            </div>
        </main>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>