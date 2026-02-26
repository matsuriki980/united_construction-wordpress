        <article class="c-case-item">
            <a href="<?php the_permalink(); ?>">
                <div class="c-case-item-img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php endif; ?>
                </div>

                <?php get_template_part("includes/case-category"); ?>

                <p class="c-case-item-title"><?php the_title(); ?></p>
            </a>
        </article>