function initMenu(){
    var gridster;
    console.log('tamanho da tela:'+screen.width);
    
    var colsize = Math.floor((screen.width - 30)/3);
    console.log('tamanho coluna:'+colsize);

    $(function(){

      gridster = $(".gridster > ul").gridster({
          widget_margins: [5, 5],
          widget_base_dimensions: [colsize, 140]
//          resize: {
//            enabled: true,
//            max_size: [3, 1]
//          }
      }).data('gridster').disable();

      var widgets = [
          ['<li><div class="grid-container"><a data-role="button" href="#login">Agendar uma visita</a><img src="img/icons-set/agenda32.png" class="grid-icon"></div></li>', 1, 1],
          ['<li><div class="grid-container"><a data-role="button" href="#login">Dúvidas Frequentes</a><img src="img/icons-set/duvidas32.png" class="grid-icon"></div></li>', 1, 1],
          ['<li><div class="grid-container"><a data-role="button" href="#login">Conhecer outros produtos</a><img src="img/icons-set/outrosprodutos32.png" class="grid-icon"></div></li>', 1, 1],
          ['<li><div class="grid-container"><a data-role="button" href="#problemas-tecnicos">Problemas técnicos</a><img src="img/icons-set/problemastecnicos32.png" class="grid-icon"></div></li>', 1, 1],
          ['<li><div class="grid-container"><a data-role="button" href="#login">Mudança de dados ou endereço</a><img src="img/icons-set/mudanca32.png" class="grid-icon"></div></li>', 2, 1],
          ['<li><div class="grid-container"><a data-role="button" href="#login">Redefinir Senha</a><img src="img/icons-set/senha32.png" class="grid-icon"></div></li>', 1, 1],
          ['<li><div class="grid-container"><a data-role="button" href="#login">Reclamações</a><img src="img/icons-set/reclamacao32.png" class="grid-icon"></div></li>', 1, 1],
      ];

      $.each(widgets, function(i, widget){
          gridster.add_widget.apply(gridster, widget);
      });

    });
}