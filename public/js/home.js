$(document).ready(function() {
    $(".navbar").css("background", "transparent");
    $(window).scroll(function() {
        if ($(window).scrollTop() > 10) {
            $(".navbar").css("background", "#151b25");
        } else {
            $(".navbar").css("background", "transparent");
        }
    });
});
