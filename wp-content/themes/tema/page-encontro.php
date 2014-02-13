<?
/*
  Template Name: Encontro Economia Criativa
 */
?>
<? get_header('encontro-economia-criativa') ?>
<? the_post(); ?>
<article>
    <h1><? the_title() ?></h1>
    <section id="content">
        <? the_content() ?>
    </section>
</article>
<? get_footer('encontro-economia-criativa') ?>