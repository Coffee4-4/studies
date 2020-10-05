$(function () {
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
        listaMenu.slideToggle();
    })
})
