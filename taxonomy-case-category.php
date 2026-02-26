<?php get_header(); ?>

<?php get_template_part("includes/header"); ?>

<main>
    <div class="c-page-kv js-header-trigger">
        <div class="l-container">
            <div class="c-page-kv-inner">
                <div class="c-page-kv-title-wrap">
                    <span class="c-page-kv-title-en">case</span>
                    <h1 class="c-page-kv-title--ja">施工事例</h1>
                </div>

                <div class="c-page-kv-breadcrumb">
                    <ol class="c-breadcrumb">
                        <li class="c-breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>"> top </a>
                        </li>
                        <li class="c-breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/service/')); ?>"> service </a>
                        </li>
                        <li class="c-breadcrumb-item c-breadcrumb-item--current">
                            case
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part("includes/case-content"); ?>
</main>

<?php get_template_part("includes/footer"); ?>

<?php get_footer(); ?>