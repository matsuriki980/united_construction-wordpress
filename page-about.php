<?php get_header(); ?>

<?php get_template_part("includes/header"); ?>

<main>
    <div class="c-page-kv js-header-trigger">
        <div class="l-container">
            <div class="c-page-kv-inner">
                <div class="c-page-kv-title-wrap">
                    <span class="c-page-kv-title-en">about</span>
                    <h1 class="c-page-kv-title--ja">私たちについて</h1>
                </div>

                <div class="c-page-kv-breadcrumb">
                    <ol class="c-breadcrumb">
                        <li class="c-breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>"> top </a>
                        </li>
                        <li class="c-breadcrumb-item c-breadcrumb-item--current">
                            about
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="about-philosophy u-pb l-container">
        <div class="c-title">
            <span class="c-title-en">philosophy</span>
            <h2 class="c-title-ja">私たちの価値</h2>
        </div>

        <div class="about-philosophy-list">
            <section class="about-philosophy-item">
                <h3 class="about-philosophy-item-title">mision</h3>
                <p class="about-philosophy-item-text">
                    <span>一人ひとりと</span>
                    <span>誠実に向き合う</span>
                </p>
                <p class="about-philosophy-item-text02">
                    <span>現場で働く仲間と</span>
                    <span> お客様一人ひとりを大切に。</span>
                </p>
            </section>
            <section class="about-philosophy-item">
                <h3 class="about-philosophy-item-title">vision</h3>
                <p class="about-philosophy-item-text">
                    <span>技術を育て</span>
                    <span>未来をつくる</span>
                </p>
                <p class="about-philosophy-item-text02">
                    <span>経験を重ね成長し</span>
                    <span> 未来を育てる。</span>
                </p>
            </section>
            <section class="about-philosophy-item">
                <h3 class="about-philosophy-item-title">value</h3>
                <p class="about-philosophy-item-text">
                    <span>「らしさ」を活かした</span>
                    <span>働き方</span>
                </p>
                <p class="about-philosophy-item-text02">
                    <span>個性を尊重しながら</span>
                    <span> 力を発揮できる環境をつくる。</span>
                </p>
            </section>
        </div>
    </section>

    <section class="about-member u-ptb">
        <div class="about-member-head l-container">
            <div class="c-title c-title--white">
                <span class="c-title-en c-title-en--white">member</span>
                <h2 class="c-title-ja c-title-ja--white">従業員紹介</h2>
            </div>

            <p class="about-member-text">
                <span>ユナイテッド建設には、</span>
                <span>さまざまな経験を持つスタッフが在籍しています。</span>
            </p>
        </div>
        <div class="js-about-member-slider about-member-slider splide">
            <div class="about-member-list splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="about-member-item">
                            <div class="about-member-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/about/staffs1.jpg" alt="貫禄ある作業服を着た中年男性" width="230" height="230"
                                    decoding="async">
                            </div>
                            <div class="about-member-item-position">代表取締役</div>
                            <div class="about-member-item-name">
                                <p class="about-member-item-name-ja">佐藤 雄一</p>
                                <span class="about-member-item-name-en">yuichi sato</span>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="about-member-item">
                            <div class="about-member-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/about/staffs2.jpg" alt="爽やかで親しみやすい若手作業員" width="230" height="230"
                                    decoding="async">
                            </div>
                            <div class="about-member-item-position">現場監督</div>
                            <div class="about-member-item-name">
                                <p class="about-member-item-name-ja">松田 圭一</p>
                                <span class="about-member-item-name-en">keiichi matsuda</span>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="about-member-item">
                            <div class="about-member-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/about/staffs3.jpg" alt="ヘルメットを着用する、笑顔の男性作業員" width="230" height="230"
                                    decoding="async">
                            </div>
                            <div class="about-member-item-position">施工スタッフ</div>
                            <div class="about-member-item-name">
                                <p class="about-member-item-name-ja">鈴木 健太</p>
                                <span class="about-member-item-name-en">keita suzuki</span>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="about-member-item">
                            <div class="about-member-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/about/staffs4.jpg" alt="書類記入を行う、笑顔の若手女性" width="230" height="230"
                                    decoding="async">
                            </div>
                            <div class="about-member-item-position">事務</div>
                            <div class="about-member-item-name">
                                <p class="about-member-item-name-ja">山田 恵子</p>
                                <span class="about-member-item-name-en">keiko yamada</span>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="about-member-item">
                            <div class="about-member-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/about/staffs5.jpg " alt="白ジャケットを着用する、キャリアウーマン風の女性" width="230"
                                    height="230" decoding="async">
                            </div>
                            <div class="about-member-item-position">人事</div>
                            <div class="about-member-item-name">
                                <p class="about-member-item-name-ja">田中 美咲</p>
                                <span class="about-member-item-name-en">tanaka misaki</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-comapny u-ptb l-container">
        <div class="about-company-title">
            <div class="c-title">
                <span class="c-title-en">company</span>
                <h2 class="c-title-ja">会社概要</h2>
            </div>
        </div>

        <div class="about-company-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/office.jpg" alt="" width="335" height="223">
        </div>

        <table class="about-company-table" aria-label="会社概要">
            <tbody class="about-company-table-body">
                <tr class="about-company-table-item">
                    <th>会社名</th>
                    <td>株式会社 UNITED CONSTRUCTION</td>
                </tr>
                <tr class="about-company-table-item">
                    <th>住所</th>
                    <td>
                        <span>〒101-0045</span>
                        <span>東京都千代田区神田鍛冶町3-2-1 神田サクラビル5F</span>
                    </td>
                </tr>
                <tr class="about-company-table-item">
                    <th>代表者</th>
                    <td>佐藤 雄一</td>
                </tr>
                <tr class="about-company-table-item">
                    <th>電話番号</th>
                    <td>03-1234-5678</td>
                </tr>
            </tbody>
        </table>

    </section>
</main>

<?php get_template_part("includes/footer"); ?>

<?php get_footer(); ?>