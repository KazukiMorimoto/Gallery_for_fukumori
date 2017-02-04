// JavaScript Document

$(function () {
    var pagetop = $('#pagetop');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    $(document).ready(function () {
        var agent = navigator.userAgent;
        if (agent.search(/iPhone/) != -1) {
            $('#archive').css({
                position: 'absolute'
            });
            $('#pagetop').css({
                position: 'absolute',
            });
            $('#blogwrapper').css({
                margin: '0',
            });
            $('#pagetop img').css({
                width: '0',
            });
        } else if (agent.search(/iPad/) != -1) {
            $('#hogehoge').css({
                display: 'block'
            });
        } else if (agent.search(/Android/) != -1) {
            $('#archive').css({
                position: 'absolute'
            });
            $('#pagetop').css({
                position: 'absolute',
            });
            $('#pagetop img').css({
                width: '0'
            });
        }
    });
});