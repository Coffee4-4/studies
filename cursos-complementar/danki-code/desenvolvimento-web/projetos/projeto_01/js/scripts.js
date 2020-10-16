
    // Aqui vai todo o nosso codigo javascript.

    //$() == chama a função, que recebe como parametro a classe do HTML que queremos trabalhar.
    $('nav.mobile').click(function () {
        //O que vai acontecer ao clicar na nav.mobile.

        var listaMenu = $('nav.mobile ul');
        /*
        // ABRIR MENU ATRAVÉS DO fadeIn
        if(listaMenu.is(':hidden')==true)
            listaMenu.fadeIn(); //exibe a lista do menu
        else
            listaMenu.fadeOut();

        listaMenu.slideToggle(); //detecta automaticamente se o menu esta aberto ou fechado.


        // Abrir ou fechar sem efeitos
        if (listaMenu.is(':hidden')== true){
            //listaMenu.show();
            listaMenu.css('display','block');

        }else{
            //listaMenu.hide();
            listaMenu.css('display','none');
        }

         */
        if (listaMenu.is(':hidden') == true) {
            // cria a variavel icone que ira receber o resulado da função find(produra diretamente o elemento dentro da class) ou seja a classe do nosso icone
            //var icone = $('.botao-menu-mobile i');
            var icone = $('.botao-menu-mobile').find('i');

            //remove e adicona class
            icone.removeClass('fa fa-bars');
            icone.addClass('fa fa-times-circle');
            listaMenu.slideToggle();

        } else {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa fa-times-circle');
            icone.addClass(' fa fa-bars');
            listaMenu.slideToggle();

        }


    });

    if ($('target').length > 0) {
        // O elemento existe, portanto precisamos dar o scroll em um elmento

        //
        var elemento = '#' + $('target').attr('target');

        //atribui a referencia do valor do elemento
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop': divScroll}, 1500);
    }

    carregarDinamico();
    function carregarDinamico() {
        $('[realtime]').click(function () {
            var pagina = $(this).attr('realtime');
            //esconde o conteudo
            $('.container-principal').hide();
            //carrega a nova pag
            $('.container-principal').load(include_path + 'pages/' + pagina + '.php');

            setTimeout(function () {
                initialize();
                addMarker(-22.8821912, -49.2383956, '', "Minha casa", undefined, false);
            }, 1000);
            //exibe a pag
            $('.container-principal').fadeIn(1000);


            return false;

        })
    }

})
