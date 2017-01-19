// JavaScript Document

$(function () {

    var $overlay = $('<div id="overlay"></div>');
    var $image = $("<img>");

    //An image to overlay
    $overlay.append($image);

    //Add overlay
    $("body").append($overlay);

    //click the image and a scaled version of the full size image will appear
    $("#photo-gallery a").click(function (event) {
        event.preventDefault();
        var imageLocation = $(this).attr("href");

        //update overlay with the image linked in the link
        $image.attr("src", imageLocation);

        //show the overlay
        $overlay.show();
    });

    $("#overlay").click(function () {
        $("#overlay").hide();
    });
    /* ——————————————————-記事の見出しから目次作成——————————————————–*/
    function mokujimake() {
        var mokuji = ''; // 目次のHTML格納場所

        // 見出しを回してリストに格納
        $('.archivemake h2').each(function (i) {

            // 見出しごとにIDを保存
            this.id = 'chapter-' + i;
            // リストを生成
            mokuji += '<li><a href="#' + this.id + '" >' + $(this).html() + '</a></li>\n';
            if (i === 15) {
                return false;
            }
        });
        // HTML出力
        $('.mokuji').html(mokuji);

        $('.mokuji li').click(function () {
            var speed = 500;
            var href = $(this).find('a').attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top - 10;
            $("html, body").animate({
                scrollTop: position
            }, speed, "swing");
            return false;
        });
    }

    setTimeout(function () {
        mokujimake();
    }, 1000);
});