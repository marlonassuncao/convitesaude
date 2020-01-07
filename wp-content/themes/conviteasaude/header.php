<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#009F7B">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/app/images/favicon.png?v=2"
        type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/app/styles/main.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div class="btnav">
        <i class="ion-navicon"></i>
    </div>
    <header id="header">
        <div class="container-fluid" data-aos="fade-in">
            <div class="logo">
                <figure>
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/app/images/logo.png" alt="">
                    </a>
                </figure>
            </div>
            <span>
                <div>
                    <a href="<?php bloginfo('url'); ?>/?page_id=13428">Minha Saúde</a>
                    <a href="<?php bloginfo('url'); ?>/?page_id=13430">Saúde do Animal</a>
                </div>
            </span>
            <nav>
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/?page_id=13387">Sobre</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/?page_id=3">Política do Site</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/?page_id=13391">Contato</a></li>
                </ul>
                <form action="<?php bloginfo('url'); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
                    <input type="search" class="form-control" placeholder="Digite sua busca" name="s" id="s" value="<?php the_search_query(); ?>">
                    <button><i class="ion-ios-search-strong"></i></button>
                </form>
            </nav>
        </div>
    </header>