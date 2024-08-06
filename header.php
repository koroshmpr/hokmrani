<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="keywords" content="<?= get_bloginfo('name'); ?>">
    <meta name="author" content="<?= get_bloginfo('author'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <?= get_field('scripts', 'option') ?? ''; ?>
</head>

<body <?php body_class(); ?> >
    <?= get_field('body-scripts', 'option') ?? ''; ?>
    <nav class="py-lg-1 py-2 text-center bg-secondary">
        <a href="tel:<?= get_field('phone' , 'option') ?? ''; ?>" aria-label="phone number for call" data-aos="fade-bottom"
           class="bg-secondary text-white gap-3 fs-4 d-flex justify-content-center align-items-center">
            <span><?= get_field('phone' , 'option'); ?></span>
            <svg width="20" height="20" fill="currentColor" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5"/>
            </svg>
        </a>
    </nav>
<header class="py-1 px-2 bg-primary" data-aos="fade-down">
    <nav class="container ">
        <div class="d-flex justify-content-between align-items-center ">
            <?php
            get_template_part('template-parts/global/site_logo');

            $uniLogo = get_field('uniLogo', 'options');
            if ($uniLogo):?>
                <img width="60" height="60" src="<?= $uniLogo['url'] ?? '' ?>" alt="<?= $uniLogo['title'] ?? '' ?>">
            <?php endif;
            ?>

        </div>
    </nav>
</header>
<?php get_template_part('template-parts/global/backToTop'); ?>
<?php get_template_part('template-parts/global/sticky-phone'); ?>
<main>





