<div class="clear"></div>
</div><!-- container -->
<footer>
    <div class="container_24">
        <div class="grid_5 alpha">
            <h1><a href="<?= HOME_URL ?>" class="no-indent"><?= HOME_NAME ?></a></h1>
            <span id="subtitulo">Programa de Extensão da Universidade Federal da Paraíba</span>
            <span id="antetitulo">Financiado pelo PROEXT - MEC</span>
        </div>
        <nav class="redes">
            <ul class="lista-h right">
                <li class="twitter"><a class="sprite no-indent" target="_blank" href="https://twitter.com/ParaibaCriativa">Twitter</a></li>
                <li class="facebook"><a class="sprite no-indent" target="_blank" href="http://fb.com/ParaibaCriativa">Facebook</a></li>
                <li class="youtube"><a class="sprite no-indent" target="_blank" href="#">Youtube</a></li>
                <li class="instagram"><a class="sprite no-indent" target="_blank" href="#">Instagram</a></li>
            </ul>
        </nav>

        <nav id="menu-footer">
            <? wp_nav_menu('theme_location=menu-principal') ?>
        </nav>

        <nav id="menu-colorido-footer">
            <ul>
                <? wp_list_categories('orderby=name&child_of=4&hide_empty=0&use_desc_for_title=0&hierarchical=0&title_li='); ?> 
            </ul>
        </nav>
    </div>
</footer>
<div style="display:none">
    <div id="banner-flutuante" style="background: url(<?= ot_get_option('banner_imagem') ?>) no-repeat;width:400px;height:400px">
        <a class="no-indent" href='<?= ot_get_option('banner_link') ?>' target='_blank'>Banner flutuante</a>
    </div>
</div>
</body>
<script type="text/javascript" src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#menu-superior li:last').css('border-right', 'none').css('margin-right', '0').css('padding-right', '0');
        jQuery('#menu-colorido li').each(function(index, data) {
            jQuery(data).addClass('item-' + (index + 1));
        });
        jQuery('#home, #interna').css('background', 'url("<?= TEMPLATE_URL ?>/images/bg-lines.png")');
        jQuery('#slider-noticias').nivoSlider({effect: 'fade', pauseTime: 7000, directionNav: false});
        jQuery('#slider-agenda').nivoSlider({effect: 'slideInLeft', pauseTime: 4000, directionNav: false, controlNav: false});
        <? wp_reset_query() ?>
        <? if(is_home() && ot_get_option('banner_imagem') != ''): ?>
            jQuery.colorbox({inline:true, href:"#banner-flutuante",opacity:0.5});
            window.setTimeout(function(){
                jQuery.colorbox.close();
            },7000);
        <? endif ?>
    });
</script>
<? wp_footer() ?>
</html>