$(document).ready(function() {
    $body = $('body');

    // $(document).on({
    //     ajaxStart: function() { $body.addClass("loading"); },
    //     ajaxError: function() { errosend(); },
    //     ajaxStop: function() { $body.removeClass("loading"); }
    // })

    var msg = $('.resposta');

    function carregando(mensagem = "Aguarde, Enviando Requisição") {
        msg.empty().html('<p class="load"><img src="img/load.gif" ' +
            'alt="Carregando...">' + mensagem + '</p>').fadeIn("fast");
    }

    function errosend() {
        msg.empty().html('<p class="error"><strong>Erro inesperado:</strong>. ' +
            'Favor contate o Administrador!</p>').fadeIn("fast").delay(2000).hide(1000);
    }

    function errodados(mensagem) {
        msg.empty().html('<p class="error">' + mensagem + '</p>').fadeIn("fast").delay(2000).hide(1000);
    }

    function sucesso(mensagem) {
        msg.empty().html('<p class="success">' + mensagem + '</p>').fadeIn("fast").delay(2000).hide(1000);
    }

    function cadastro_generico(acao, dados) {
        $.ajax({
            url: "controle.php",
            method: 'POST',
            data: dados + "&acao=" + acao,
            dataType: "json",
            beforeSend: function() {
                carregando();
            },
            success: function(result) {
                //console.log(result);
                result['codigo'] == 0 ? errodados(result['mensagem']) : sucesso(result['mensagem'])
            },
            error: function(e) {
                console.log(e.status);
                if (e.status == 404) {
                    errosend();
                }
            }
        });
    }

    var btn_usuario = $('.btn-usuario');

    btn_usuario.click(function() {
        var dados = $('.form_usuario').serialize();

        cadastro_generico("gravar_usuario", dados);

        return false;
    });

    var btn_cidade = $('.btn-cidade');

    btn_cidade.click(function() {
        var dados = $('.form_cidade').serialize();
        cadastro_generico("gravar_cidade", dados);

        return false;
    });

    var btn_bairro = $('.btn-bairro');

    btn_bairro.click(function() {
        var dados = $('.form_bairro').serialize();
        cadastro_generico("gravar_bairro", dados);

        return false;
    });

    //var btn_pessoa = $('.btn-pessoa');
    //var form_pessoa = $('.form_pessoa');
    var form_pessoa = $('form[name="form_pessoa"]');
    var bar = $('.carregando');
    var per = $('.progress');

    bar.css("display", "none");

    form_pessoa.submit(function() {
        console.log('Enviar dados');
        $(this).ajaxSubmit({
            url: 'controle.php',
            method: 'POST',
            data: { acao: 'gravar_pessoa' },
            beforeSerialize: function() {
                console.log('Obtendo os dados...')
            },
            beforeSubmit: function() {
                console.log("Carregando...");
            },
            //clearForm: true,
            dataType: 'json', // null, XML, json, script
            error: function(e) {
                console.log(e);
            },
            success: function(result) {
                console.log(result);
                result['codigo'] == 0 ? errodados(result['mensagem']) : sucesso(result['mensagem'])
            },
            uploadProgress: function(evento, posicao, total, totalporcentagem) {
                //console.log(evento);
                bar.fadeIn("fast");
                var porcentagem = totalporcentagem + "%";
                per.width(porcentagem).text(porcentagem);
            },
            complete: function() {
                console.log('Concluido');
                window.setTimeout(function() {
                    bar.fadeOut("slow", function() {
                        per.width('0%').text("0%");
                    })
                })
            }


        });
        return false;
    });

    $('#lista_cidade').on('click', '.btn_excluir_cidade', function() {
        var id = $(this).attr('id');

        cadastro_generico('excluir_cidade', 'codigo_cidade=' + id);

        listar_cidade();
        return false;
    })

    function listar_cidade() {
        $.ajax({
            url: "controle.php",
            method: 'POST',
            data: "acao=listar_cidade&tipo=tabela",

            beforeSend: function() {
                carregando();
            },
            success: function(result) {
                $('#lista_cidade').html(result);
            },
            error: function(e) {
                console.log(e.status);
                if (e.status == 404) {
                    errosend();
                }
            }
        });
    }



    listar_cidade();

    $('.logar').click(function() {
        var dados = $('form[name="login"]').serialize();
        $.ajax({
            url: "controle.php",
            data: dados + "&acao=Logar",
            method: "POST",
            dataType: "json",
            beforeSend: function() {
                carregando();
            },
            success: function(result) {
                if (result['codigo'] == 1) {
                    window.location.href = 'index.php';
                }
                result['codigo'] == 0 ? errodados(result['mensagem']) : sucesso(result['mensagem'])

            },
            error: function(e) {
                console.log(e.status);
                if (e.status == 404) {
                    errosend();
                }
            }
        });
        return false;
    })

});