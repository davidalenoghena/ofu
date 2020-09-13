$(document).ready(function() {   
    $('#ofu-navbar').css('background','transparent'); 
    $(window).scroll(function () {
        if ($(window).scrollTop() < 10) {
        $('#ofu-navbar').css('background','transparent');
        $('.switch').css('color', '#fff');
        $('.nav-grey').css('color', '#fff');
        } else {
        $('#ofu-navbar').css('background','#E7ECFF');
        $('.switch').css('color', '#3C64B1');
        $('.nav-grey').css('color', '#373f41');
        }
    });
});


