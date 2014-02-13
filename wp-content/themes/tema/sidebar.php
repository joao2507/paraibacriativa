<aside class="prefix_1 grid_7">

    <? if (is_category()): ?>
        <? $category = get_category(get_query_var('cat')) ?>
        <? $slug = str_replace('-','_', $category->slug); ?>
        <? $img = ot_get_option('imagem_' . $slug, 'http://www.paraibacriativa.com.br/wp-content/uploads/2013/06/imagem-default.jpg') ?>
        <img src="<?= $img ?>" width="270" />
    <? else: ?>
        <? get_search_form() ?>
        <div class="clear"></div>
        <div id="areas-atuacao">
            <h3>Inventário da Cultura Paraibana</h3>
            <ul>
                <? wp_list_categories('orderby=name&child_of=4&hide_empty=0&use_desc_for_title=0&hierarchical=0&title_li='); ?> 
            </ul>
        </div>
    <? endif ?>
    <div id="fb-like">
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FParaibaCriativa&amp;width=270&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=true&amp;appId=141450636027718" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:290px;" allowTransparency="true"></iframe>
    </div>
</aside>
<div class="clear"></div>
</div>