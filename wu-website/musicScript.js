$(document).ready(function () {

    

    $(window).resize(function () {

        $('.musicUploadForm').css({
            top: ($(window).height() - $('.musicUploadForm').outerHeight()) / 2,
            bottom: ($(window).height() - $('.musicUploadForm').outerHeight()) / 2
        });

    });

    $(window).resize();

});