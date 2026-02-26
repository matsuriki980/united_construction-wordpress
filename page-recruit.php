<?php get_header(); ?>

<?php get_template_part("includes/header"); ?>

<main>
    <div class="c-page-kv js-header-trigger">
        <div class="l-container">
            <div class="c-page-kv-inner">
                <div class="c-page-kv-title-wrap">
                    <span class="c-page-kv-title-en">recruit</span>
                    <h1 class="c-page-kv-title--ja">採用情報</h1>
                </div>

                <div class="c-page-kv-breadcrumb">
                    <ol class="c-breadcrumb">
                        <li class="c-breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>"> top </a>
                        </li>
                        <li class="c-breadcrumb-item c-breadcrumb-item--current">
                            recruit
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="recruit-position u-pb l-container">
        <div class="c-title">
            <span class="c-title-en">open position</span>
            <h2 class="c-title-ja">募集職種</h2>
        </div>

        <div class="recruit-position-list">
            <section class="recruit-position-item">
                <h3 class="recruit-position-title-ja">現場監督（施工管理）</h3>
                <span class="recruit-position-title-en">site manager</span>
                <p class="recruit-position-text">
                    <span>工事現場の進行管理を担当します。</span>
                    <span>工程・品質・安全を管理し、</span>
                    <span>職人や協力会社と連携しながら現場をまとめる役割です。</span>
                </p>
            </section>
            <section class="recruit-position-item">
                <h3 class="recruit-position-title-ja">施工スタッフ</h3>
                <span class="recruit-position-title-en">construction staff</span>
                <p class="recruit-position-text">
                    <span>建築工事・改修工事の施工を担当します。</span>
                    <span>道具の使い方や作業の流れを学びながら、</span>
                    <span>現場で技術を身につけていきます。</span>
                </p>
            </section>
        </div>
    </section>

    <section class="recruit-benefit u-ptb l-container">
        <div class="c-title">
            <span class="c-title-en">benefit</span>
            <h2 class="c-title-ja">福利厚生・待遇</h2>
        </div>

        <table class="recruit-benefit-table" aria-label="福利厚生・待遇">
            <tbody class="recruit-benefit-table-body">
                <tr class="recruit-benefit-table-item">
                    <th>給料</th>
                    <td>月給25万円〜35万円（経験・能力による）</td>
                </tr>
                <tr class="recruit-benefit-table-item">
                    <th>賞与</th>
                    <td>年2回（6月・12月）</td>
                </tr>
                <tr class="recruit-benefit-table-item">
                    <th>昇給</th>
                    <td>年1回（4月）</td>
                </tr>
                <tr class="recruit-benefit-table-item">
                    <th>休日・休暇</th>
                    <td>完全週休2日制、年間休日120日</td>
                </tr>
                <tr class="recruit-benefit-table-item">
                    <th>有給休暇</th>
                    <td>年10日〜20日（勤続年数による）</td>
                </tr>
                <tr class="recruit-benefit-table-item">
                    <th>社会保険</th>
                    <td>健康保険、厚生年金、雇用・労災保険</td>
                </tr>
                <tr class="recruit-benefit-table-item">
                    <th>研修制度</th>
                    <td>入社時研修、外部セミナー参加支援</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="recruit-culture u-ptb">
        <div class="l-container">
            <div class="c-title">
                <span class="c-title-en">culture</span>
                <h2 class="c-title-ja">働く環境</h2>
            </div>
        </div>

        <div class="js-recruit-culture-gallery recruit-culture-gallery splide">
            <div class="splide__track">
                <ul class="recruit-culture-gallery-list splide__list">
                    <li class="recruit-culture-gallery-item splide__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/culture01.jpg" alt="電動ドリルで釘を打つ若手大工" width="223" height="149">
                    </li>
                    <li class="recruit-culture-gallery-item splide__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/culture02.jpg" alt="足場の上で作業をする4人の職人" width="223" height="149">
                    </li>
                    <li class="recruit-culture-gallery-item splide__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/culture03.jpg" alt="パソコンで確認をしながら打ち合わせをする作業服を着た男性とリクルートスーツの男性"
                            width="223" height="149">
                    </li>
                    <li class="recruit-culture-gallery-item splide__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/culture04.jpg" alt="木材の梁に乗って作業をする大工" width="223" height="149">
                    </li>
                    <li class="recruit-culture-gallery-item splide__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/culture05.jpg" alt="打ち合わせをするヘルメットを被った作業員とリクルートスーツ姿の男性" width="223"
                            height="149">
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <div class="recruit-entry u-pb">
        <div class="c-entry-button">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-entry-button-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-button-text.svg" alt="" width="355" height="360">
                <span class="c-entry-button-text">
                    <span class="c-button">
                        entry from</span>
                </span>
            </a>
        </div>
    </div>
</main>

<?php get_template_part("includes/footer"); ?>

<?php get_footer(); ?>