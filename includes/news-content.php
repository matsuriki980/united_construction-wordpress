    <div class="news-archive l-container-s">

        <ul class="c-tab-list">
            <li class="c-tab-item c-tab-item--current">
                <a href="<?php echo home_url('/news/'); ?>" class="c-tab-link <?php if (is_home()) echo 'active'; ?>">all</a>
            </li>
            <li class="c-tab-item">
                <a href="<?php echo get_term_link('お知らせ', 'category'); ?>" class="c-tab-link <?php if (is_category('お知らせ')) echo 'active'; ?>">お知らせ</a>
            </li>
            <li class="c-tab-item">
                <a href="<?php echo get_term_link('採用情報', 'category'); ?>" class="c-tab-link <?php if (is_category('採用情報')) echo 'active'; ?>">採用情報</a>
            </li>
            <li class="c-tab-item">
                <a href="<?php echo get_term_link('施工事例', 'category'); ?>" class="c-tab-link <?php if (is_category('施工事例')) echo 'active'; ?>">施工事例</a>
            </li>
        </ul>

        <?php if (have_posts()) : ?>
            <div class="news-archive-list">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part("includes/news-item"); ?>
                <?php endwhile; ?>
            </div>

        <?php else : ?>
            <div class="c-news-item">
                <p class="c-news-item-link">投稿が見つかりませんでした</p>
            </div>
        <?php endif; ?>

        <div class="news-archive-pagination">
            <div class="c-pagination">
                <nav class="c-pagination-nav">

                    <?php
                    global $wp_query;

                    $total   = (int) $wp_query->max_num_pages;
                    $current = max(1, (int) get_query_var('paged'));

                    if ($total > 1) :

                        // ページネイション設定
                        $items = paginate_links([
                            'total'     => $total,
                            'current'   => $current,
                            'type'      => 'array',
                            'mid_size'  => 1,
                            'end_size'  => 1,
                            'prev_next' => false,
                        ]);

                        $prev_url = ($current > 1)      ? get_pagenum_link($current - 1) : '';
                        $next_url = ($current < $total) ? get_pagenum_link($current + 1) : '';
                    ?>

                        <ul class="c-pagination-list">

                            <!-- prev -->
                                <li class="c-pagination-item <?php echo ($current === 1) ? 'is-disabled' : ''; ?>">
                                    <?php if ($prev_url) : ?>
                                        <a href="<?php echo esc_url($prev_url); ?>" class="c-pagination-link" aria-label="ページネイション(prev)">
                                            <span class="c-pagination-icon c-pagination-icon--prev"></span>
                                        </a>
                                    <?php else : ?>
                                        <span class="c-pagination-link" aria-hidden="true">
                                            <span class="c-pagination-icon c-pagination-icon--prev"></span>
                                        </span>
                                    <?php endif; ?>
                                </li>

                            <!-- numbers / dots -->
                            <?php if ($items) : ?>
                                <?php foreach ($items as $item) : ?>
                                    <li class="c-pagination-item">
                                        <?php
                                        // dots（…）
                                        if (strpos($item, 'dots') !== false) {
                                            echo '<span class="c-pagination-dots"><span class="c-pagination-dot-icon"></span></span>';
                                            continue;
                                        }

                                        // current（現在ページ）
                                        if (strpos($item, 'current') !== false) {
                                            $n = strip_tags($item);
                                            echo '<span class="c-pagination-number c-pagination-number-curret">' . esc_html($n) . '</span>';
                                            continue;
                                        }

                                        // number link（通常リンク）
                                        $item = str_replace('class="page-numbers"', 'class="c-pagination-number"', $item);
                                        echo $item;
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <!-- next -->
                                <li class="c-pagination-item <?php echo ($current === $total) ? 'is-disabled' : ''; ?>">
                                    <?php if ($next_url) : ?>
                                        <a href="<?php echo esc_url($next_url); ?>" class="c-pagination-link" aria-label="ページネイション(next)">
                                            <span class="c-pagination-icon c-pagination-icon--next"></span>
                                        </a>
                                    <?php else : ?>
                                        <span class="c-pagination-link" aria-hidden="true">
                                            <span class="c-pagination-icon c-pagination-icon--next"></span>
                                        </span>
                                    <?php endif; ?>
                                </li>
                        </ul>

                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </div>