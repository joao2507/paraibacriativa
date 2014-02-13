<? get_header() ?>
<? wp_reset_query() ?>
<div id="interna">
    <section id="page" class="grid_16 single">
        <div class="page-container">
            <span class="data"><? the_date('d-m-Y H:i') ?></span>
            <h2><? the_title() ?></h2>
            <? if(has_post_thumbnail()): ?>
                <? the_post_thumbnail('medium',array('class'=>'alignleft')) ?>
            <? endif ?>
            <? the_content() ?>
        </div>
    </section>
    <? get_sidebar() ?>
    <? get_footer() ?>