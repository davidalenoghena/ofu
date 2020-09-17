$(document).ready(function() {   
    $('#ofu-navbar').css('background','transparent'); 
    $('.switch').css('color', '#fff');
        $('.nav-grey').css('color', '#fff');
        $('.one').css('background-color', '#fff');
        $('.two').css('background-color', '#fff');
        $('.three').css('background-color', '#fff');
    $(window).scroll(function () {
        if ($(window).scrollTop() < 10) {
        $('#ofu-navbar').css('background','transparent');
        $('.switch').css('color', '#fff');
        $('.nav-grey').css('color', '#fff');
        $('.one').css('background-color', '#fff');
        $('.two').css('background-color', '#fff');
        $('.three').css('background-color', '#fff');
        } else {
        $('#ofu-navbar').css('background','#E7ECFF');
        $('.switch').css('color', '#3C64B1');
        $('.nav-grey').css('color', '#373f41');
        $('.one').css('background-color', '#3c64b1');
        $('.two').css('background-color', '#3c64b1');
        $('.three').css('background-color', '#3c64b1');
        }
    });
});


