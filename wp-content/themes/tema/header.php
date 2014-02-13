<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="pt-br"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="pt-br"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt-br"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <title><?= HOME_NAME ?></title>
        <meta name="author" content="Bossa Criativa">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/stylesheets/base.css">
        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/stylesheets/960_24_col.css">
        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/stylesheets/quicksand/quicksand.css">
        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/style.css?rand=<?= rand(1, 9999999999) ?>">
        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/stylesheets/wordpress.css">
        <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example2/colorbox.css">

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="<?= TEMPLATE_URL ?>/images/favicon.png">
        <link rel="apple-touch-icon" href="<?= TEMPLATE_URL ?>/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= TEMPLATE_URL ?>/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= TEMPLATE_URL ?>/images/apple-touch-icon-114x114.png">
        <? wp_head() ?>
        <style type='text/css'>
            #wnb-bar {
                height: 40px;line-height: 40px;font-weight: bold;font-size: 24px;
            }
        </style>
    </head>
    <body>

        <div class="container_24">
            <header class="grid_24">
                <nav class="redes">
                    <ul class="lista-h right">
                        <li class="twitter"><a class="sprite no-indent" target="_blank" href="https://twitter.com/ParaibaCriativa">Twitter</a></li>
                        <li class="facebook"><a class="sprite no-indent" target="_blank" href="http://fb.com/ParaibaCriativa">Facebook</a></li>
                        <li class="youtube"><a class="sprite no-indent" target="_blank" href="#">Youtube</a></li>
                        <li class="instagram"><a class="sprite no-indent" target="_blank" href="#">Instagram</a></li>
                    </ul>
                </nav>
                <h1><a href="<?= HOME_URL ?>" class="no-indent"><?= HOME_NAME ?></a></h1>
                <span id="titulo">PROEXT 2013</span>
                <span id="subtitulo">MINISTÉRIO DA EDUCAÇÃO - Secretaria de Educação Superior</span>
                <span id="antetitulo">
                    Programa de Extensão da Universidade Federal da Paraíba<br />
                    Pró-reitoria de Extensão e Assuntos Comunitários<br />
                    Centro de Comunicação, Turismo e Artes<br />
                    Departamento de Comunicação e Turismo<br />
                </span>
                <div class="clear"></div>
                <p>Ações para o desenvolvimento e inovação das artes, saberes e fazeres da Paraíba no universo
                    da economia da cultura</p>
                <nav id="menu-superior">
                    <? wp_nav_menu('theme_location=menu-principal') ?>
                </nav><div class="clear"></div>
                <div class="barra"></div>
            </header>
            <div class="clear"></div>