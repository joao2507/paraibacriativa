<form role="search" method="get" id="searchform" action="<?= HOME_URL ?>">
    <div><label class="screen-reader-text" for="s">PROCURA</label>
        <input type="text" value="<?= get_query_var('s') ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Buscar" />
    </div>
</form>