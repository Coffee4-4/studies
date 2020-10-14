$(function () {
    //slide corrente o primeiro
    var curSlide = 0;
    // iniciando a função
    var maxSlide = $('.banner-single').length - 1;
    var delay = 4;
    initSlider();
    changeSlide();

    function initSlider() {
        //esconde os banners
        $('.banner-single').hide();
        //mostra o primeiro banner
        $('.banner-single').eq(0).show();

        //adiciona os controles do slider
        for (var i = 0; i < maxSlide + 1; i++) {
            //pega a class bullets .html faz pegar tudo o que tem dentro da class
            var content = $('.bullets').html();
            //acrescenta um span
            if (i == 0)
                content += '<span class="active-slider"></span>';
            else
                content += '<span></span>'

            //retorna o conteudo para o html
            $('.bullets').html(content);
        }

    }


    //função para troca de slide
    function changeSlide() {
        setInterval(function () {
            $('.banner-single').eq(curSlide).stop().fadeOut(2000);
            curSlide++;
            if (curSlide > maxSlide)
                curSlide = 0;
            $('.banner-single').eq(curSlide).stop().fadeIn(2000, function () {
                console.log("Animação terminou!");
                //pode rodar outro trecho de cód. como segundo parametro

            });

            //Trocar bullets da navegação do slider
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(curSlide).addClass('active-slider');

        }, delay * 1000); //setando um intervalo de 3 segundos


    }

    // chama o body primeiro parametro evento de click, class, função
    $('body').on('click', '.bullets span', function () {
        var currentBullet = $(this);
        $('.banner-single').eq(curSlide).stop().fadeOut(1000);
        curSlide = currentBullet.index();
        $('.banner-single').eq(curSlide).stop().fadeIn(1000);
        $('.bullets span').removeClass('active-slider');
        currentBullet.addClass('active-slider');

    })


})