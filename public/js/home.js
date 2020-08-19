$(document).ready(function() {   
    $('#ofu-navbar').css('background','transparent'); 
    $(window).scroll(function () {
        if ($(window).scrollTop() < 10) {
        $('#ofu-navbar').css('background','transparent');
        } else {
        $('#ofu-navbar').css('background','#151b25');
        }
    });
});


