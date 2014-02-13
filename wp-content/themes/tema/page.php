<? get_header() ?>
<? wp_reset_query() ?>
<div id="interna">
    <section id="page" class="grid_16">
        <div class="page-container">
            <? if(get_field('show_titulo')): ?>
                <h2><? the_title() ?></h2>
            <? endif ?>
            <? if(get_field('show_thumbnail')): ?>
                <? the_post_thumbnail('medium',array('class'=>'alignleft')) ?>
            <? endif ?>
            <? the_content() ?>
        </div>
    </section>
    <? get_sidebar() ?>
    <? get_footer() ?>