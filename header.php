<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:site_name" content="ユナイテッド建設">
    <meta name="format-detection" content="telephone=no, email=no">

    <!-- favicon/webclipicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/webclip.png">

    <!-- font -->
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link
        href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor/splide-core.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <!-- noindex -->
    <meta name="robots" content="noindex">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>