(function($) {
    $(document).ready(function(){
        Grid.init();

        $(window).scroll(function(){
            if ($(this).scrollTop() > 200) {
                $('#menu').fadeIn(500);
            } else {
                $('#menu').fadeOut(500);
            }
        });
    });
})(jQuery);
