

$(document).ready(function () {

    $('.uploadRow').hide();
    $('.musicRow').hide();
    $('.buttonRow').hide();
    $('.logoRow').hide();
    $('.trendingRow').hide();
    $('.logoRow').fadeIn(2000);
    $('.logoRow').hide(1500, function () {

        $('.buttonRow').fadeIn(1500);

    });

    $('#uploadButton').click(function () {

        $('.buttonRow').fadeOut(500, function () {

            $('.uploadRow').fadeIn(1500);

        });
        

    });

    $('#trendingButton').click(function () {

        $('.buttonRow').fadeOut(500, function () {

            $('.trendingRow').fadeIn(1500);

        });

    });

    $(window).resize(function () {

        $('.uploadedResults').css({
            top: ($(window).height() - $('.musicUploadForm').outerHeight()) / 2,
            bottom: ($(window).height() - $('.musicUploadForm').outerHeight()) / 2
        });

    });

    $(window).resize();
});

