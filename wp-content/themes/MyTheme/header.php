<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="wrapper flex justify center-v">
        <div>
            <a href="<?php echo home_url()?>" class="logo"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg" alt="logo"></a>
        </div>
        <?php
        wp_nav_menu([
            'theme_location' => 'main',
            'container' => 'nav',
            'container_class' => 'main-nav no-scrollbars hide-on-mob',
            'container_aria_label' => 'Main',
            'menu_class' => 'main-menu flex only-desk'
        ]);
        ?>
        <div><a href="#" class="btn col-white bg-gradient">About Us</a></div>
        <div class="only-mob">
            <button class="hamburger desk-hid" id="hamburger" aria-label="Mobile Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>