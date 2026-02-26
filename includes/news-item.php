            <article class="c-news-item">
                <a href="<?php the_permalink(); ?>" class="c-news-item-link">
                    <div class="c-news-item-info">
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
                    <h3 class="c-news-item-title"><?php the_title(); ?></h3>
                </a>
            </article>