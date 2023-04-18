<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#575289">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header id="header" class="js-header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="container">
            <div class="row">
                <div class="header__top">
                    <?php get_template_part('templates-parts/header/header', 'brand'); ?>
                    <?php get_template_part('templates-parts/header/header', 'contact'); ?>
                </div>
                <div class="header__bottom">
                    <?php get_template_part('templates-parts/header/header', 'nav'); ?>
                    <?php get_template_part('templates-parts/header/header', 'links'); ?>

                    <?php get_template_part('templates-parts/header/header', 'burger'); ?>
                </div>
            </div>
        </div>
    </header>
    <?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
    <main id="main">
        <div class="container">
            <div class="row">
