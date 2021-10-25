$(document).ready(function() {
    $body = $('body');

<<<<<<< HEAD
    // $(document).on({
    //     ajaxStart: function() { $body.addClass("loading"); },
    //     ajaxError: function() { errosend(); },
    //     ajaxStop: function() { $body.removeClass("loading"); }
    // })
=======
    $(document).on({
        ajaxStart: function() { $body.addClass("loading"); },
        ajaxError: function() { errosend(); },
        ajaxStop: function() { $body.removeClass("loading"); }
    })

    // $(document).ajaxError(function() {
    //     alert("Erro no seu ajax... escreveu coisa errada né!");
    // });
>>>>>>> 4bd5054d3f9cb0599b6480f2c5214dbd8513800c

    /* FUNÇÕES GENERICAS PARA MENSAGENS */
    var msg = $('.resposta');

    function carregando(mensagem = "Aguarde, Enviando Requisição") {
        msg.empty().html('<p class="load"><img src="img/load.gif" ' +
            'alt="Carregando...">' + mensagem + '</p>').fadeIn("fast").delay(2000).hide(1000);
    }

    function errosend() {
        msg.empty().html('<p class="error"><strong>Erro inesperado:</strong>. ' +
            'Favor contate o Administrador!</p>').fadeIn("fast").delay(2000).hide(1000);;
    }

    function errodados(mensagem) {
        msg.empty().html('<p class="error">' + mensagem + '</p>').fadeIn("fast").delay(2000).hide(1000);;
    }

    function sucesso(mensagem) {
        msg.empty().html('<p class="success">' + mensagem + '</p>').fadeIn("fast").delay(2000).hide(1000);;
    }

<<<<<<< HEAD
    function cadastro_generico(acao, dados) {
        $.ajax({
            url: "controle.php",
=======
    /* MANUPILAÇÃO DO CADASTRO DE USUÁRIOS */
    var btn_usuario = $('.btn-usuario');

    btn_usuario.click(function() {
        var dados = $('.form_usuario').serialize();

        $.ajax({
            url: "gravar_usuario.php",
            method: 'POST',
            data: dados,
            dataType: "json",
            beforeSend: function() {
                carregando();
            },
            success: function(result) {
                console.log(result);
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
    });

    /* MANUPILAÇÃO DO CADASTRO DE CIDADES */
    var btn_cidade = $('.btn-cidade');

    btn_cidade.click(function() {
        var dados = $('.form_cidade').serialize();
        //console.log(dados);

        $.ajax({
            url: "gravar_cidade.php",
>>>>>>> 4bd5054d3f9cb0599b6480f2c5214dbd8513800c
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

<<<<<<< HEAD
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
            data: "acao=listar_cidade",

=======
    /* MANUPILAÇÃO DO CADASTRO DE BAIRROS */
    var btn_bairro = $('.btn-bairro');

    btn_bairro.click(function() {
        var dados = $('.form_bairro').serialize();
        //console.log(dados);

        $.ajax({
            url: "gravar_bairro.php",
            method: 'POST',
            data: dados,
            dataType: "json",
>>>>>>> 4bd5054d3f9cb0599b6480f2c5214dbd8513800c
            beforeSend: function() {
                carregando();
            },
            success: function(result) {
<<<<<<< HEAD
                $('#lista_cidade').html(result);
=======
                console.log(result);
                result['codigo'] == 0 ? errodados(result['mensagem']) : sucesso(result['mensagem'])
>>>>>>> 4bd5054d3f9cb0599b6480f2c5214dbd8513800c
            },
            error: function(e) {
                console.log(e.status);
                if (e.status == 404) {
                    errosend();
                }
            }
        });
<<<<<<< HEAD
    }



    listar_cidade();
=======

        return false;
    });


    /* MANUPILAÇÃO DO CADASTRO DE PESSOAS */
    var btn_pessoa = $('.btn-pessoa');
    var form_pessoa = $('form[name="form_pessoa"]');
    //var form_pessoa = $('.form_pessoa');
    var bar = $('.carregando');
    var per = $('.progress');
    bar.css("display", "none");

    form_pessoa.submit(function() {
        $(this).ajaxSubmit({
            url: "gravar_pessoa.php",
            method: 'POST',
            data: { acao: 'cadastro', envia: 'true' },
            beforeSerialize: function() {
                console.log("Obtendo dados.");
            },

            beforeSubmit: function() {
                console.log('Carregando...');
            },

            //clearForm: true LIMPA
            //resetForm: true, //REAJUSTA
            dataType: 'json', //null, //XML, json, script

            error: function() {
                console.log('Erro ao enviar');
            },

            //forceSync: false

            success: function(sucesso) {
                console.log(sucesso);
            },

            complete: function() {
                console.log('Concluido..');
                window.setTimeout(function() {
                    bar.fadeOut("slow", function() {
                        per.width('0%').text('0%');
                    });
                }, 1000);
            },

            uploadProgress: function(evento, posicao, total, porcentoCompleto) {
                //console.log(porcentoCompleto);
                bar.fadeIn("fast");
                var porcetagem = porcentoCompleto + "%";
                per.width(porcetagem).text(porcetagem);
            }
        });
        return false;
    });

    /*btn_pessoa.click(function() {
        var dados = $('.form_pessoa').serialize();
        console.log(dados);

        /*$.ajax({
            url: "gravar_pessoa.php",
            method: 'POST',
            data: dados,
            dataType: "json",
            beforeSend: function() {
                carregando();
            },
            success: function(result) {
                console.log(result);
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
    }); */
>>>>>>> 4bd5054d3f9cb0599b6480f2c5214dbd8513800c


});