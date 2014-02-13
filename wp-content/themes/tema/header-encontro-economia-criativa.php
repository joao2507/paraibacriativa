<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="pt-br"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="pt-br"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt-br"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <title>1º Encontro Paraibano de Economia Criativa, Turismo e Cultura | <?= HOME_NAME ?></title>
        <meta name="author" content="Bossa Criativa">

        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/stylesheets/reset.css">
        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/stylesheets/text.css">
        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/stylesheets/960_24_col.css">
        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/stylesheets/quicksand/quicksand.css">
        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/style-encontro.css?rand=<?= rand(1, 9999999999) ?>">
        <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/stylesheets/wordpress.css">

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="<?= TEMPLATE_URL ?>/images/favicon.png">
        <link rel="apple-touch-icon" href="<?= TEMPLATE_URL ?>/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= TEMPLATE_URL ?>/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= TEMPLATE_URL ?>/images/apple-touch-icon-114x114.png">
        <? wp_head() ?>
    </head>
    <body>
        <div class="container_24">
            <div id="container" class="grid_24">
                <header>
                    <nav id="menu-superior">
                        <? wp_nav_menu('theme_location=menu-encontro-economia-criativa') ?>
                    </nav><div class="clear"></div>
                </header>
                <div class="clear"></div>
                <div id="conteudo">

