$(() => {
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

})