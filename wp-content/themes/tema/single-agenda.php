<? get_header() ?>
<? wp_reset_query() ?>
<div id="interna">
    <section id="page" class="grid_16 single agenda">
        <div class="page-container">
            <h2>AGENDA &Gt; <? the_title() ?></h2>
            <? if (has_post_thumbnail()): ?>
                <? the_post_thumbnail('full-single') ?>
                <br /><br />
            <? endif ?>
            <p><strong>Hora:</strong>  <?= strftime('%H:%M', strtotime(get_the_metakey('hora'))) ?></p>
            <p><strong>Local:</strong>  <? the_metakey('local') ?></p>

            <? if (get_the_metakey('endereco') != null): ?>
                <p><strong>Endereço:</strong>  <? the_metakey('endereco') ?></p>
            <? endif ?>
            <? if (get_the_metakey('valor_ingressos') != null): ?>
                <p><strong>Ingressos:</strong>  <? the_metakey('valor_ingressos') ?></p>
            <? endif ?>
            <? if (get_the_metakey('telefone') != null): ?>
                <p><strong>Telefone:</strong>  <? the_metakey('telefone') ?></p>
            <? endif ?>
            <? if (get_the_metakey('email') != null): ?>
                <p><strong>Email:</strong>  <? the_metakey('email') ?></p>
            <? endif ?>
            <? if (get_the_metakey('site') != null): ?>
                <p><strong>Site:</strong>  <? the_metakey('site') ?></p>
            <? endif ?>
            <? if (get_the_metakey('mais_informacoes') != null): ?>
                <p><strong>Mais Informações:</strong>  <? the_metakey('mais_informacoes') ?></p>
            <? endif ?>
                <a href="<?= HOME_URL ?>/agenda-cultural">&Lt; Voltar</a>
        </div>
    </section>
    <? get_sidebar() ?>
    <? get_footer() ?>