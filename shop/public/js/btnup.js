 $(window).scroll(function() {
        if ($(this).scrollTop() > 600) {
            if ($('#btn-up').is(':hidden')) {
                $('#btn-up').css({opacity : 1}).fadeIn('slow');
            }
        } else { $('#btn-up').stop(true, false).fadeOut('fast'); }
    });
        $('#btn-up').click(function() {
        $('html, body').stop().animate({scrollTop : 0}, 300);
    });