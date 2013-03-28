<!DOCTYPE html>
<html lang="<?php get_bloginfo('language') ?>">
<head>
    <meta charset="utf-8">
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon"
          href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingbakc_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body>
    <div class="page">
        <header id="header">
            <nav id="main-nav">
                <ul class="nav">
                    <li class="menu-item menu-item-home menu-item-archives">
                        <a href="<?php echo home_url(); ?>">Home</a>
                    </li>
                    <li class="menu-item menu-item-colophon"><a href="/colophon/">Colophon</a></li>
                    <li class="menu-item menu-item-twitter"><a href="http://twitter.com/fra_cek">Twitter</a></li>
                    <li class="menu-item menu-item-github"><a href="http://github.com/fracek">GitHub</a></li>
                </ul>
            </nav>
        </header>
        <section role="main">
