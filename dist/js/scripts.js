jQuery(document).ready(function($) {

    $('header .nav a').each(function() {
        if ($(this).prop('href') == window.location.href) {
            $(this).parent().removeClass('nav__item').addClass('nav__item--current');
        }
    });

    $(".accordian h3").click(function(){
        $(".accordian ul ul").slideUp();
        if(!$(this).next().is(":visible"))
        {
            $(this).next().slideDown();
        }
    })

    $('#toggle').click(function() {
        $(this).next('.nav').toggleClass("is-collapsed-mobile");
    });

});