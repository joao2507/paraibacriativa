<? get_header() ?>
<? wp_reset_query() ?>

<?
$cat = get_query_var('cat');
$cat = get_category($cat);
$text = filter_input(INPUT_GET, 'text', FILTER_SANITIZE_STRING);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<div id="interna">
    <section id="page" class="grid_16">
        <div class="page-container">
            <h2>Notícias</h2>
            <div class="clear"></div>
            <br />
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
                <p class="not-found">Nenhuma notícia foi encontrada</p>
                <? endif ?>
        </div>
    </section>
    <? get_sidebar() ?>
    <? get_footer() ?>