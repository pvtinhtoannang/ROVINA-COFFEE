<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site <?php if (is_home()) {
    echo "site-wrapper";
} ?>">
    <?php get_template_part('templates/template-header'); ?>
    <div id="content" class="site-content <?php if (is_home()) {
        echo "main";
    } ?>">
