$(document).ready( function () {
    // Add return on top button
    $('body').append('<div id="scrollTopB" title="Retour en haut">&nbsp;</div>');

    // On button click, let's scroll up to top
    $('#scrollTopB').click( function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });
});

$(window).scroll(function() {
    // If on top fade the bouton out, else fade it in
    if ( $(window).scrollTop() == 0 )
        $('#scrollTopB').fadeOut();
    else
        $('#scrollTopB').fadeIn();
});
