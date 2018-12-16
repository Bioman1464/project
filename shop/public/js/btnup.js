 $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            if ($('#btn-up').is(':hidden')) {
                $('#btn-up').css({opacity : 1}).fadeIn('slow');
            }
        } else { $('#btn-up').stop(true, false).fadeOut('fast'); }
    });

