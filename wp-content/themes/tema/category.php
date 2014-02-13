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
            <h3>
                <? $category = get_category(get_query_var('cat')) ?>
                <? $slug = str_replace('-','_', $category->slug); ?>
                <? $img = ot_get_option('header_' . $slug, 'http://www.paraibacriativa.com.br/wp-content/uploads/2013/06/header-category.jpg') ?>
                <img src="<?= $img ?>" width="630" />
            </h3>
            <form action="/categoria/area/<?= $cat->slug ?>" id="filtro-form">
                <label for="text">Filtro</label>
                <input type="text" name="text" id="filtro" value="<?= $text ?>" placeholder="Procure por palavras-chave">
                <? if (isset($_GET['text'])): ?>
                    <a id="link-emptyfilter" href="/categoria/area/<?= $cat->slug ?>">Limpar filtro</a>
                <? endif ?>
            </form>
            <div class="clear"></div>
            <?
            if (isset($_GET['text']))
                query_posts('orderby=title&order=ASC&paged=' . $paged . '&cat=' . get_query_var('cat') . '&s=' . $text);
            else
                query_posts('orderby=title&order=ASC&paged=' . $paged . '&cat=' . get_query_var('cat'));
            ?>
            <? if (have_posts()): ?>
                <? while (have_posts()): the_post(); ?>
                    <article>
                        <h3><? the_title() ?></h3>
                        <? the_content() ?>
                    </article>
                <? endwhile ?>
                <center><? wp_pagenavi(); ?></center>
            <? else: ?>
                <p class="not-found">Nenhum verbete foi encontrado</p>
            <? endif ?>
        </div>
    </section>
    <? get_sidebar() ?>
    <? get_footer() ?>