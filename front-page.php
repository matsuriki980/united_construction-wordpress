<?php get_header(); ?>

<?php get_template_part("includes/header-top"); ?>

<main>
    <div class="top-kv js-header-trigger">
        <div class="top-kv-text l-container">
            <p class="top-kv-text-en">
                <span>Creating the future</span>
                <span>with technology</span>
            </p>
            <p class="top-kv-text-ja">確かな技術で未来を創造する。</p>
        </div>

        <div class="top-kv-scroll">
            <div class="top-kv-scroll-hint">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/scroll-hint.svg" width="4" height="90" alt="" decoding="async">
            </div>
            <span class="top-kv-scroll-text">scrooll</span>
        </div>
    </div>

    <section class="top-about u-ptb">
        <div class="top-abput-content">
            <h2 class="c-title-small">about</h2>
            <p class="top-about-massage-ja">
                <span>現場に向き合う姿勢が、</span>
                <span>信頼をつくる。</span>
            </p>

            <p class="top-about-message-en">
                Our work is built on responsibility, safety, and trust.
            </p>

            <p class="top-about-text">
                <span>
                    私たちは、地域に根ざした建設会社として、
                    一つひとつの現場に真摯に向き合ってきました。
                </span>
                <span>
                    建物は、完成した瞬間だけでなく、
                    その後の暮らしや事業を長く支えるものです。
                </span>
                <span>
                    だからこそ、安全・品質・工程管理を徹底し、
                    「安心して任せられる存在」であることを大切にしています。
                </span>
            </p>

            <div class="top-about-button">
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-button">
                    view more
                </a>
            </div>
        </div>
        <div class="top-about-img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/top-about.jpg" media="(min-width:900px)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-about-sp.jpg" alt="現場調査を行う、2人の男性作業員" decoding="async" width="355"
                    height="237">
            </picture>
        </div>
    </section>

    <section class="top-service l-container">
        <div class="top-service-text-wrap">
            <div class="c-title c-title--white">
                <span class="c-title-en c-title-en--white">service</span>
                <h2 class="c-title-ja c-title-ja--white">サービス</h2>
            </div>

            <div class="top-service-text">
                <span>新築工事から改修・修繕まで、
                </span>
                <span>用途や規模に応じた最適な施工を行います。</span>
            </div>
        </div>
        <div class="top-service-list">
            <article class="top-service-item">
                <div class="top-service-item-img">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/top-services01.jpg" media="(min-width:900px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-services01-sp.jpg" alt="新築の紺と白のモダンな家" decoding="async" width="316"
                            height="251">
                    </picture>
                </div>

                <h3 class="top-service-item-ja">建築工事（新築・増築）</h3>
                <span class="top-service-item-en">New Construction</span>
                <p class="top-service-item-text">
                    <span>法人・個人を問わず、</span>
                    <span>用途・将来性を見据えた建築工事を行います。</span>
                </p>
            </article>
            <article class="top-service-item">
                <div class="top-service-item-img">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/top-services02.jpg" media="(min-width:900px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-services02-sp.jpg" alt="改装工事中の家の中の様子" decoding="async" width="316"
                            height="251">
                    </picture>
                </div>

                <h3 class="top-service-item-ja">改修・修繕工事</h3>
                <span class="top-service-item-en">Renovation & Repair</span>
                <p class="top-service-item-text">
                    <span>老朽化対策や用途変更など、</span>
                    <span>建物の価値を維持・向上させる施工に対応します。</span>
                </p>
            </article>
        </div>

        <div class="top-service-button">
            <a href="<?php echo esc_url(home_url('/service/')); ?>" class="c-button">
                view more
            </a>
        </div>
    </section>

    <section class="top-recruit u-pb">
        <div class="top-recruit-img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/top-recruit.jpg" media="(min-width:900px)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-recruit-sp.jpg" alt="広い青空と、ビルが集まっている都市" decoding="async" width="375"
                    height="200">
            </picture>

            <p class="top-recruit-img-text">join us</p>
        </div>

        <div class="top-recruit-content-wrap l-container">
            <div class="top-recruit-content">
                <h2 class="c-title-small">recruit</h2>
                <p class="top-recruit-text">
                    <span>現場で、未来を支える仕事。</span>
                </p>

                <p class="top-recruit-text02">
                    <span>
                        建設の仕事は、
                        人の暮らしや事業を支える責任ある仕事です。
                    </span>
                    <span>
                        私たちは、経験の有無に関わらず、
                        誠実に仕事へ向き合える仲間を求めています。
                    </span>
                </p>

                <p class="top-recruit-text-en">
                    <span>Build skills. Build trust. Build the future.</span>
                </p>
            </div>

            <div class="top-recruit-button">
                <div class="c-entry-button">
                    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="c-entry-button-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-button-text.svg" alt="" width="355" height="360">
                        <span class="c-entry-button-text">
                            <span class="c-button">
                                view more</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="top-news l-container">
        <div class="top-news-title">
            <div class="c-title">
                <span class="c-title-en">news</span>
                <h2 class="c-title-ja">お知らせ</h2>
            </div>
        </div>

        <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
        ];

        $news_query = new WP_Query($args);
        ?>

        <?php if ($news_query->have_posts()) : ?>

            <div class="top-news-list">
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <?php get_template_part("includes/news-item"); ?>
                <?php endwhile; ?>
            </div>

        <?php else : ?>
            <div class="c-news-item">
                <p class="c-news-item-link">投稿が見つかりませんでした</p>
            </div>
        <?php endif; ?>

        <div class="top-news-button">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-button">
                view more
            </a>
        </div>
    </section>


</main>

<?php get_template_part("includes/footer"); ?>

<?php get_footer(); ?>