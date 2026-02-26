    <article class="news-detail l-container-s">

        <div class="news-detail-info">
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="c-news-item-date"><?php echo get_the_date('Y.m.d'); ?></time>
            <?php
            $categories = get_the_category();
            if ($categories):
            ?>
                <?php foreach ($categories as $category): ?>
                    <span class="c-news-item-category"><?php echo $category->name; ?></span>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <h1 class="news-detail-title"><?php the_title(); ?></h1>
        <div class="news-detail-text-wrap">
            <?php the_content(); ?>
        </div>

        <div class="news-detail-button">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-button c-button--back">
                Back to list
            </a>
        </div>
    </article>