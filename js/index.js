// JavaScript Document

//Navbar colour change after scroll
$(document).ready(function() {
    var scroll_start = 0;
    var startchange = $('#carousel-example-2');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function() {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $(".sticky").css('background-color', 'white');
                $(".nav-link").css('color', 'black');
                $(".colorchg").css('background-color', '#ec407a');
            } else {
                $('.sticky').css('background-color', 'transparent');
                $(".nav-link").css('color', 'white');
                $(".colorchg").css('background-color', 'transparent');
            }
        });
    }
});