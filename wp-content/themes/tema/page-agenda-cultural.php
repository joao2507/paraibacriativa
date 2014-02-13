<? get_header() ?>
<? wp_reset_query() ?>
<div id="interna">
    <section id="page" class="grid_16 agenda">
        <div class="page-container">
            <h2><strong>Agenda</strong> Cultural <span class="barra-titulo">|</span> <?= date('Y') ?></h2>
            <?
            $p = array(
                'post_type' => 'agenda',
                'posts_per_page' => -1,
                'orderby' => 'meta_value',
                'meta_key' => 'data',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'data',
                        'value' => date('Y-m-d'),
                        'compare' => '>=',
                        'type' => 'DATE'
                    )
                )
            );
            $data = null;
            ?>
            <? query_posts($p) ?>

            <div id="agenda">
                <? while (have_posts()): the_post(); ?>
                    <? if (!empty($data) && $data != get_the_metakey('data')): ?>
                        </ul></div></div><div class="clear"></div>
            <? endif ?>

            <? if ($data != get_the_metakey('data')): ?>
                <div class="linha">
                    <div class="data">
                        <div class="data-diasemana"><?= strftime('%A', strtotime(get_the_metakey('data'))) ?></div>
                        <div class="data-dia"><?= strftime('%e', strtotime(get_the_metakey('data'))) ?></div>
                        <div class="data-mes"><?= strftime('%b', strtotime(get_the_metakey('data'))) ?></div>
                    </div>
                    <div class="shows"><ul>
                        <? endif ?>

                        <li>
                            <a class="evento-image" href="<? the_permalink() ?>"><? the_post_thumbnail('thumbnail') ?></a>
                            <div class="evento-detalhe">
                                <h3><a href="<? the_permalink() ?>"><? the_title() ?></a></h3>
                                <p><strong>Hora</strong> <br /> <?= strftime('%H:%M', strtotime(get_the_metakey('hora'))) ?></p>
                                <p><strong>Local</strong> <br /> <? the_metakey('local') ?></p>
                                <a href="<? the_permalink() ?>">(+) Mais informações</a>
                            </div>
                        </li>

                        <? $data = get_the_metakey('data') ?>
                    <? endwhile ?>
            </div>

        </div>
    </section>
    <? get_sidebar() ?>
    <? get_footer() ?>