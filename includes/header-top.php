    <header class="l-header l-header--top js-header">
        <h1 class="l-header-logo u-logo-hover">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img width="251" height="46" src="<?php echo get_template_directory_uri(); ?>/img/logo(white).png" alt="建築サービス <?php bloginfo("name"); ?>" decoding="async"
                    class="l-header-logo-white">
                <a href="index.html">
                    <img width="251" height="46" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="UNITED CONSTRUCTION 建築サービス"
                        decoding="async" class="l-header-logo-black">
                </a>
        </h1>

        <dialog class="l-header-menu js-header-menu" aria-label="ナビメニュー">
            <button class="l-header-menu-close-button js-header-menu-close-button">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.svg" width="28" height="28" alt="メニューを閉じる" decoding="async">
            </button>

            <nav class="l-header-menu-nav">
                <ul class="l-header-menu-list">
                    <li class="l-header-menu-item l-header-item--top">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header-menu-link l-header-menu-link--white">
                            <span class="l-header-menu-text-en">top</span>
                            <span class="l-header-menu-text-ja">トップ</span>
                        </a>
                    </li>
                    <li class="l-header-menu-item">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="l-header-menu-link l-header-menu-link--white u-text-hover">
                            <span class="l-header-menu-text-en">about</span>
                            <span class="l-header-menu-text-ja">私たちについて</span>
                        </a>
                    </li>
                    <li class="l-header-menu-item">
                        <a href="<?php echo esc_url(home_url('/service/')); ?>" class="l-header-menu-link l-header-menu-link--white u-text-hover">
                            <span class="l-header-menu-text-en">service</span>
                            <span class="l-header-menu-text-ja">サービス</span>
                        </a>
                    </li>
                    <li class="l-header-menu-item">
                        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="l-header-menu-link l-header-menu-link--white u-text-hover">
                            <span class="l-header-menu-text-en">news</span>
                            <span class="l-header-menu-text-ja">お知らせ</span>
                        </a>
                    </li>
                    <li class="l-header-menu-item">
                        <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="l-header-menu-link l-header-menu-link--white u-text-hover">
                            <span class="l-header-menu-text-en">recruit</span>
                            <span class="l-header-menu-text-ja">採用情報</span>
                        </a>
                    </li>
                    <li class="l-header-menu-item">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                            class="l-header-menu-link l-header-menu-link--contact l-header-menu-link--white">
                            <span class="l-header-menu-text-en">contact</span>
                            <span class="l-header-menu-text-ja">お問い合わせ</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </dialog>

        <button class="l-header-menu-open-button js-header-menu-open-button">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-dots.svg" width="24" height="4" alt="メニューを開く" decoding="async">
        </button>
    </header>