$(document).ready(function() {    
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
        $('#ofu-navbar').css('background','#151b25');
        } else {
        $('#ofu-navbar').css('background','transparent');
        }
    });
});