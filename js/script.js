$(() => {

    //Trocar o ícone no menu mobile (sanduíche por X e vice-versa)
    var include_path = $('base').attr('base');

    $('nav.mobile').click(() => {

        let listaMenu = $('nav.mobile ul');

        let icone = $('.botao-menu-mobile').find('i');

        if (listaMenu.is(':hidden') == true) {

            icone.removeClass('bi-list');
            icone.addClass('bi-x-lg');
            listaMenu.slideToggle();
        } else {
            icone.removeClass('bi-x-lg');
            icone.addClass('bi-list');
            listaMenu.slideToggle();
        }

    })

    $(document).ready(function () {
        var currentIndex = 0;
        var banners = $('.banner-single');
        var bulletsContainer = $('.bullets-container');
        var totalBanners = banners.length;

        // Adicionar bullets
        for (var i = 0; i < totalBanners; i++) {
            bulletsContainer.append('<span class="bullet"></span>');
        }
        var bullets = $('.bullet');

        function showBanner(index) {
            banners.removeClass('banner-active');
            bullets.removeClass('active');
            $(banners[index]).addClass('banner-active');
            $(bullets[index]).addClass('active');
        }

        function nextBanner() {
            currentIndex = (currentIndex + 1) % totalBanners;
            showBanner(currentIndex);
        }

        // Iniciar o slideshow automaticamente
        var slideshowInterval = setInterval(nextBanner, 3000);

        // Navegação manual pelos bullets
        bullets.click(function () {
            var bulletIndex = $(this).index();
            clearInterval(slideshowInterval); // Parar o slideshow automático
            currentIndex = bulletIndex;
            showBanner(currentIndex);
            slideshowInterval = setInterval(nextBanner, 3000); // Reiniciar o slideshow automático
        });
    });

})