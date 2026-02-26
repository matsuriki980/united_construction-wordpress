    <section class="case l-container u-pb">

        <ul class="c-tab-list">
            <li class="c-tab-item">
                <a href="<?php echo get_post_type_archive_link('case'); ?>" class="c-tab-link <?php if (is_post_type_archive('case')) echo 'active'; ?>">all</a>
            </li>
            <li class="c-tab-item">
                <a href="<?php echo get_term_link('apartment', 'case-category'); ?>" class="c-tab-link <?php if (is_tax('case-category', 'apartment')) echo 'active'; ?>">マンション</a>
            </li>
            <li class="c-tab-item">
                <a href="<?php echo get_term_link('repair', 'case-category'); ?>" class="c-tab-link <?php if (is_tax('case-category', 'repair')) echo 'active'; ?>">修繕工事</a>
            </li>
            <li class="c-tab-item">
                <a href="<?php echo get_term_link('office', 'case-category'); ?>" class="c-tab-link <?php if (is_tax('case-category', 'office')) echo 'active'; ?>">事務所</a>
            </li>
        </ul>

        <?php if (have_posts()) : ?>
            <div class="case-list c-case-list">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part("includes/case-item"); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>