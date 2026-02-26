<?php get_header(); ?>

<?php get_template_part("includes/header"); ?>

<main class="u-pb">
    <div class="c-page-kv js-header-trigger">
        <div class="l-container">
            <div class="c-page-kv-inner">
                <div class="c-page-kv-title-wrap">
                    <span class="c-page-kv-title-en">case</span>
                    <p class="c-page-kv-title--ja">施工事例</p>
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

    <article class="case-detail l-container-s">
        <h1 class="case-detail-title"><?php the_title(); ?></h1>
        <?php get_template_part("includes/case-category"); ?>
        <figure class="case-detail-img">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
            <?php endif; ?>
        </figure>

        <div class="case-detail-text-wrap">
            <?php the_content(); ?>
        </div>

        <div class="case-detail-button">
            <a href="<?php echo get_post_type_archive_link('case'); ?>" class="c-button c-button--back">
                Back to list
            </a>
        </div>

    </article>
</main>

<?php get_template_part("includes/footer"); ?>

<?php get_footer(); ?>