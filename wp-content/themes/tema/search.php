<? get_header() ?>
<? wp_reset_query() ?>

<?
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<div id="interna">
    <section id="page" class="grid_16">
        <div class="page-container">
            <h2>Procura</h2>
            <div class="clear"></div>
                <? if (have_posts()): ?>
                <? while (have_posts()): the_post(); ?>
                <article>
                    <? if (has_post_thumbnail()): ?>
                    <a href="<? the_permalink() ?>"><? the_post_thumbnail('thumbnail', array('class'=>'alignright')) ?></a>
                    <? endif ?>
                    <h4><a href="<? the_permalink() ?>"><? the_title() ?></a></h4>
                    <? the_excerpt() ?>
                </article><hr />
                <? endwhile ?>
                <center><? wp_pagenavi(); ?></center>
                <? else: ?>
                <p class="not-found">Nenhum post foi encontrado</p>
                <? endif ?>
        </div>
    </section>
    <? get_sidebar() ?>
    <? get_footer() ?>