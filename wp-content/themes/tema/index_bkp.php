<? get_header() ?>
<section id="home" class="grid_24">
    <?
    if (function_exists('show_nivo_slider')) {
        show_nivo_slider();
    }
    ?>
    
    <? query_posts('page_id=49'); the_post(); ?>
    <article id="inventario" class="destaque grid_12 alpha">
        <h2 class="grid_2 alpha omega no-indent"> <? the_title() ?></h2>
        <div class="grid_10 alpha omega"><a href="<? the_permalink() ?>"><? the_post_thumbnail('destaque') ?></a></div>
        <span class="destaque-descricao"><a href="<? the_permalink() ?>"><?= get_the_excerpt() ?></a></span>
    </article> 
    
    <? query_posts('page_id=56'); the_post(); ?>
    <article id="agencia" class="destaque grid_12 omega">
        <h2 class="grid_2 alpha omega no-indent"> <? the_title() ?></h2>
        <div class="grid_10 alpha omega"><a href="<? the_permalink() ?>"><? the_post_thumbnail('destaque') ?></a></div>
        <span class="destaque-descricao"><a href="<? the_permalink() ?>"><?= get_the_excerpt() ?></a></span>
    </article> 
    
    <div class="clear"></div>
    
    <div class="grid_12 alpha">
        <nav id="menu-colorido">
            <? wp_nav_menu('theme_location=menu-colorido') ?>
        </nav>
        <div class="clear"></div>
        <? query_posts('page_id=55'); the_post(); ?>
        <article  class="grid_12 alpha omega box">
            <div class="grid_7 alpha box-image">
                <a href="<? the_permalink() ?>">
                    <? the_post_thumbnail('box') ?>
                    <span class="caption"><? the_title() ?></span>
                </a>
            </div>
            <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
        </article>
        
        <? query_posts('page_id=57'); the_post(); ?>
        <article  class="grid_12 alpha omega box">
            <div class="grid_7 alpha box-image">
                <a href="<? the_permalink() ?>">
                    <? the_post_thumbnail('box') ?>
                    <span class="caption"><? the_title() ?></span>
                </a>
            </div>
            <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
        </article>
    </div>
    <? query_posts('page_id=58'); the_post(); ?>
    <article  class="grid_12 omega box">
        <div class="grid_7 alpha box-image">
            <a href="<? the_permalink() ?>">
                <? the_post_thumbnail('box') ?>
                <span class="caption"><? the_title() ?></span>
            </a>
        </div>
        <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
    </article>

    <? query_posts('page_id=60'); the_post(); ?>
    <article  class="grid_12 omega box">
        <div class="grid_7 alpha box-image">
            <a href="<? the_permalink() ?>">
                <? the_post_thumbnail('box') ?>
            </a>
        </div>
        <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
    </article>

    <? query_posts('page_id=62'); the_post(); ?>
    <article  class="grid_12 omega box">
        <div class="grid_7 alpha box-image">
            <a href="<? the_permalink() ?>">
                <? the_post_thumbnail('box') ?>
            </a>
        </div>
        <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
    </article>

    <? query_posts('page_id=53'); the_post(); ?>
    <article  class="grid_12 omega box">
        <div class="grid_7 alpha box-image">
            <a href="<? the_permalink() ?>">
                <? the_post_thumbnail('box') ?>
                <span class="caption"><? the_title() ?></span>
            </a>
        </div>
        <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
    </article>

    <? query_posts('page_id=66'); the_post(); ?>
    <article  class="grid_12 omega box">
        <div class="grid_7 alpha box-image">
            <a href="<? the_permalink() ?>">
                <? the_post_thumbnail('box') ?>
                <span class="caption"><? the_title() ?></span>
            </a>
        </div>
        <span class="texto"><a href="<? the_permalink() ?>"><? the_excerpt() ?></a></span>
    </article>
    
    <div class="grid_12 omega">
    <? get_search_form() ?>
    </div>
</section>
<? get_footer() ?>