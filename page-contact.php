<?php get_header(); ?>

<?php get_template_part("includes/header"); ?>

<main>
    <div class="c-page-kv js-header-trigger">
        <div class="l-container">
            <div class="c-page-kv-inner">
                <div class="c-page-kv-title-wrap">
                    <span class="c-page-kv-title-en">contact</span>
                    <h1 class="c-page-kv-title--ja">お問い合わせ</h1>
                </div>

                <div class="c-page-kv-breadcrumb">
                    <ol class="c-breadcrumb">
                        <li class="c-breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>"> top </a>
                        </li>
                        <li class="c-breadcrumb-item c-breadcrumb-item--current">
                            contact
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="l-container-s u-pb">
        <form action="" class="contact-form">
            <div class="contact-form-item">
                <label for="name" class="contact-form-label">
                    <span class="contact-form-labe-text">お名前</span>
                    <span class="c-form-required">必須</span>
                </label>

                <input type="text" name="name" id="name" placeholder="山田 太郎" class="c-form-text">
            </div>
            <div class="contact-form-item">
                <label for="email" class="contact-form-label">
                    <span class="contact-form-labe-text">メールアドレス</span>
                    <span class="c-form-required">必須</span>
                </label>

                <input type="text" name="email" id="email" placeholder="taro@example.com" class="c-form-text">
            </div>
            <div class="contact-form-item">
                <label for="tel" class="contact-form-label">
                    <span class="contact-form-labe-text">電話番号</span>
                    <span class="c-form-required">必須</span>
                </label>

                <input type="text" name="tel" id="tel" placeholder="080-1234-5678" class="c-form-text">
            </div>
            <div class="contact-form-item">
                <label for="message" class="contact-form-label">
                    <span class="contact-form-labe-text">お問い合わせ内容</span>
                    <span class="c-form-required">必須</span>
                </label>

                <textarea name="message" id="message" placeholder="ご自由にご記入ください"
                    class="c-form-text c-form-text--textarea"></textarea>
            </div>

            <div class="contact-form-item contact-form-item--submit">
                <p class="contact-form-consent">
                    <a href="" target="_blank">プライバシーポリシー</a>
                    に同意して
                </p>
                <div class="contact-form-button">
                    <button type="submit" class="c-form-button">送信する</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php get_template_part("includes/footer"); ?>

<?php get_footer(); ?>