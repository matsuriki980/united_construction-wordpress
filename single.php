<?php get_header(); ?>

<?php get_template_part("includes/header"); ?>

<main class="u-pb">
    <div class="c-page-kv js-header-trigger">
        <div class="l-container">
            <div class="c-page-kv-inner">
                <div class="c-page-kv-title-wrap">
                    <span class="c-page-kv-title-en">news</span>
                    <p class="c-page-kv-title--ja">お知らせ</p>
                </div>

                <div class="c-page-kv-breadcrumb">
                    <ol class="c-breadcrumb">
                        <li class="c-breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>"> top </a>
                        </li>
                        <li class="c-breadcrumb-item c-breadcrumb-item--current">
                            news
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part("includes/news-detail"); ?>
</main>

<?php get_template_part("includes/footer"); ?>

<?php get_footer(); ?>