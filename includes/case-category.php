                <?php
                $terms = get_the_terms(get_the_ID(), 'case-category');
                if ($terms):
                ?>

                    <?php foreach ($terms as $term): ?>
                        <p class="c-case-item-category"><?php echo $term->name; ?></p>
                    <?php endforeach; ?>

                <?php endif; ?>