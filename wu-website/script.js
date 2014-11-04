
//jQuery code

jQuery.noConflict();

(function ($) {

    $(function () {

        $(document).ready(function () {

            $('#contact').click(function () {

                $('#contact-info').slideToggle('slow');

            });

        });

        $(document).ready(function () {

            $('#project').click(function () {

                $('#project-info').slideToggle('slow');

            });

        });

    });

})(jQuery);

//non-jQuery code

function test() {

    console.log(document);

}