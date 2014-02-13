<? global $NTO ?>
<? get_header() ?>
<section id="home" class="grid_24">
    <div class="alpha grid_12" style="width: 495px;margin-right: 20px;">
        <? if (function_exists('show_nivo_slider')) show_nivo_slider() ?>
    </div>

    <div class="omega grid_11 box-evento">
        <a href="<?= get_option_tree('link_evento') ?>">
            <img src="<?= get_option_tree('imagem_evento') ?>" />
        </a>
    </div>

    <div class="clear"></div>

    <div id="container-left" class="alpha grid_7 container_box">

        <?
        $param = array(
            'post_type' => 'agenda',
            'posts_per_page' => 5,
            'orderby' => 'meta_value',
            'meta_key' => 'data',
            'meta_query' => array(
                array(
                    'key' => 'data',
                    'value' => date('Y-m-d'),
                    'compare' => '>=',
                    'type' => 'DATE'
                )
            ),
        );
        ?>
        <? query_posts($param); ?>
        <? if (have_posts()): ?>
            <h2 class="titulo">Agenda Cultural</h2>
            <div class="slider-agenda-wrapper">
                <div id="slider-agenda" class="nivoSlider">
                    <? while (have_posts()):the_post(); ?>
                        <a href="<? HOME_URL ?>/agenda-cultural" title="<? the_title() ?>"><? the_post_thumbnail('box-agenda', array('title' => get_the_title())) ?></a>
                    <? endwhile ?>
                </div>
            </div>
        <? endif ?>

        <?
        query_posts('page_id=49');
        the_post();
        ?>
        <article class="box inventario">
            <? if (get_field('titulo_capa')): ?>
                <h2> <? the_title() ?></h2>
            <? endif ?>
            <a href="<? the_permalink() ?>"><? the_post_thumbnail('box-sidebar') ?></a>
        </article>

        <?
        query_posts('page_id=267');
        the_post();
        ?>
        <article class="box colabore">
            <a href="<? the_permalink() ?>"><? the_post_thumbnail('box-sidebar') ?></a>
        </article>

        <div id="areas-atuacao">
            <h3>Inventário da Cultura Paraibana</h3>
            <ul>
                <? wp_list_categories('orderby=name&child_of=4&hide_empty=0&use_desc_for_title=0&hierarchical=0&title_li='); ?> 
            </ul>
        </div>

        <div id="fb-like">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FParaibaCriativa&amp;width=270&amp;height=340&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=true&amp;appId=141450636027718" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:340px;" allowTransparency="true"></iframe>
        </div>
        <? get_search_form() ?>
    </div>
    <div id="container-right" class="omega container_box" style="padding-left: 20px;width: 655px;float: left;">
        
        <div class="grid_10 omega" style="height:320px;overflow: hidden;float:right;">
            <? query_posts('cat=35&posts_per_page=5'); ?>
            <? if (have_posts()): ?>
                <div class="slider-noticias-wrapper">
                    <div id="slider-noticias" class="nivoSlider">
                        <? while (have_posts()): ?>
                            <? the_post() ?>
                            <? addDeny() ?>
                            <a href="<? the_permalink() ?>" title="<? the_title() ?>"><? the_post_thumbnail('full-article', array('title' => get_the_title())) ?></a>
                        <? endwhile ?>
                    </div>
                </div>
            <? endif ?>
        </div>

        <?
        $param = array(
            'post__not_in'=>$NTO['deny'],
            'cat'=>38,
            'posts_per_page'=>1
        );
        ?>
        <? query_posts($param); ?>
        <? the_post() ?>
        <? addDeny() ?>
        <article class="box-noticia2 alpha left">
            <h2><a href="<? the_permalink() ?>"><? the_title() ?></a></h2>
            <a href="<? the_permalink() ?>"><? the_post_thumbnail('box-noticia') ?></a>
            <? the_excerpt() ?>
        </article>

        
        <div class="clear"></div>

        <?
        $param = array(
            'cat' => 38,
            'posts_per_page' => 3,
            'post__not_in' => $NTO['deny']
                )
        ?>
        <? $c = 0 ?>
        <? query_posts($param) ?>
        <? while (have_posts()): ?>
            <? the_post() ?>
            <? addDeny() ?>
            <article class="box-noticia2 grid_6 alpha" style="height:210px;<?= ($c < 2) ? ('margin-right: 10px;width: 211px;') : ('margin-right:0;width:212px') ?>">
                <h2><a href="<? the_permalink() ?>"><? the_title() ?></a></h2>
                <? the_excerpt() ?>
            </article>
            <? $c++ ?>
        <? endwhile ?>
        <div class="clear"></div>

        <div class="alpha left" style="width:250px;margin-right: 10px;">
            <?
            $param = array(
                'cat' => 1,
                'posts_per_page' => 4,
                'post__not_in' => $NTO['deny']
                    )
            ?>
            <? query_posts($param) ?>
            <? while (have_posts()): ?>
                <? the_post() ?>
                <? addDeny() ?>
                <article class="box-noticia2">
                    <h2><a href="<? the_permalink() ?>"><? the_title() ?></a></h2>
                    <a href="<? the_permalink() ?>"><? the_post_thumbnail('box-noticia') ?></a>
                    <? the_excerpt() ?>
                </article>
            <? endwhile ?>
        </div>

        <div class="omega grid_10" style="overflow: hidden">

            <?
            query_posts('page_id=53');
            the_post();
            ?>
            <article class="destaque">
                <? if (get_field('titulo_capa')): ?>
                    <h2> <? the_title() ?></h2>
                <? endif ?>
                <a class="imagem" href="<? the_permalink() ?>"><? the_post_thumbnail('box-destaque') ?></a>
                <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
            </article> 

            <?
            query_posts('page_id=66');
            the_post();
            ?>
            <article class="destaque">
                <? if (get_field('titulo_capa')): ?>
                    <h2> <? the_title() ?></h2>
                <? endif ?>
                <a class="imagem" href="<? the_permalink() ?>"><? the_post_thumbnail('box-destaque') ?></a>
                <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
            </article> 

            <?
            query_posts('page_id=56');
            the_post();
            ?>
            <article class="destaque">
                <? if (get_field('titulo_capa')): ?>
                    <h2> <? the_title() ?></h2>
                <? endif ?>
                <a class="imagem" href="<? the_permalink() ?>"><? the_post_thumbnail('box-destaque') ?></a>
                <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
            </article> 

            <?
            query_posts('page_id=55');
            the_post();
            ?>
            <article class="destaque">
                <? if (get_field('titulo_capa')): ?>
                    <h2> <? the_title() ?></h2>
                <? endif ?>
                <a class="imagem" href="<? the_permalink() ?>"><? the_post_thumbnail('box-destaque') ?></a>
                <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
            </article> 
        </div>
    </div>
    <div class="clear"></div>

</section>
<? get_footer() ?>