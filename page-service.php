<?php get_header(); ?>

<?php get_template_part("includes/header"); ?>

<main>
    <div class="c-page-kv js-header-trigger">
        <div class="l-container">
            <div class="c-page-kv-inner">
                <div class="c-page-kv-title-wrap">
                    <span class="c-page-kv-title-en">service</span>
                    <h1 class="c-page-kv-title--ja">サービス</h1>
                </div>

                <div class="c-page-kv-breadcrumb">
                    <ol class="c-breadcrumb">
                        <li class="c-breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>"> top </a>
                        </li>
                        <li class="c-breadcrumb-item c-breadcrumb-item--current">
                            sevice
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="service-detail-wrap u-pb l-container">
        <section class="service-detail">
            <div class="service-detail-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/service/services01.jpg" media="(min-width:900px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/services01-sp.jpg" alt="紺と白のモダンな家" decoding="async" width="287"
                        height="187">
                </picture>
            </div>

            <div class="service-detail-content">
                <h2 class="service-detail-title-ja">建築工事（新築・増築）</h2>
                <span class="service-detail-title-en">new construction / extension</span>

                <p class="service-detail-text">
                    <span>住宅・事務所・店舗など、</span>
                    <span>用途や将来計画に合わせた新築・増築工事を行っています。</span>
                </p>

                <ul class="service-detail-list">
                    <li class="service-detail-item">住宅・建物の新築工事</li>
                    <li class="service-detail-item">増築・用途変更に伴う工事</li>
                    <li class="service-detail-item">法人・個人問わず対応</li>
                </ul>
            </div>
        </section>

        <section class="service-detail">
            <div class="service-detail-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/service/services02.jpg" media="(min-width:900px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/services02-sp.jpg" alt="コンクリートが剝き出しの改修中の部屋" decoding="async" width="287"
                        height="187">
                </picture>
            </div>

            <div class="service-detail-content">
                <h2 class="service-detail-title-ja">改修・修繕工事</h2>
                <span class="service-detail-title-en">renovation / repair</span>

                <p class="service-detail-text">
                    <span>建物の状態を確認したうえで、</span>
                    <span>安全性・使いやすさ・コストのバランスを考えた最適な施工をご提案します。</span>
                </p>

                <ul class="service-detail-list">
                    <li class="service-detail-item">内装・外装の改修工事</li>
                    <li class="service-detail-item">設備の更新・修繕</li>
                    <li class="service-detail-item">定期メンテナンス・部分補修</li>
                </ul>
            </div>
        </section>
    </div>

    <section class="service-case u-ptb l-container">
        <div class="service-case-title">
            <div class="c-title">
                <span class="c-title-en">case</span>
                <h2 class="c-title-ja">施工事例</h2>
            </div>
        </div>

        <?php
        $args = [
            'post_type' => 'case',
            'posts_per_page' => 3,
        ];

        $case_query = new WP_Query($args);
        ?>

        <?php if ($case_query->have_posts()) : ?>

            <div class="service-case-list c-case-list">
                <?php while ($case_query->have_posts()) : $case_query->the_post(); ?>
                    <?php get_template_part("includes/case-item"); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <div class="service-case-button">
            <a href="<?php echo get_post_type_archive_link('case'); ?>" class="c-button">
                view more
            </a>
        </div>
    </section>
</main>

<?php get_template_part("includes/footer"); ?>

<?php get_footer(); ?>