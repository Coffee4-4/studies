$(function () {
    /*
    //ao clicar em submit executar a função
    $('form').submit(function (){
        alert('Formulario enviado!');
        // previne o comportamento padrão de recarregar a pág
        return false;
    })
*/
    $('body').on('submit', 'form', function () {
        var form = $(this);
        //função propria do jquery ajax, que recebe como parametro um objeto
        $.ajax({
            beforeSend: function (){
              $('.overlay-loading').fadeIn();
            },
            url: include_path + 'ajax/formularios.php',
            // parametros metodo, tipo de resposta do servidor, opcional quais informações serão enviadas para o formulario
            method: 'post',
            dataType: 'json',
            data: form.serialize()
        }).done(function (data) {
            if (data.sucesso) {
                $('.overlay-loading').fadeOut();
                $('.sucesso').fadeIn();
                setTimeout(function (){
                    $('.sucesso').fadeOut();
                },3000)
            } else {
                $('.overlay-loading').fadeOut();

                console.log("Ocorreu um erro ao enviar o e-mail!");

            }
        });
        return false;
    })
})