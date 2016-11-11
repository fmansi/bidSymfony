$(function() {
    $( ".timersLeilao" ).each(function( index, element ) {
        var timer = $(this).attr('rel');

        $(this).timer({
            countdown: true,
            duration: timer,
            format: '%H:%M:%S'
        });
    });
})