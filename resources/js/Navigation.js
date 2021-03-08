// NAVIGATION HAMBURGER TRIGGER
$('.header__navicon').on('click', function() {
    $('.hamburger').toggleClass('hamburger--active');
    $('nav.header__navigation').toggleClass('header__navigation--active');
    $('ul.navigation').removeClass('navigation--hide');
    $('ul.navigation__sub').removeClass('navigation__sub--active');
    $('.header__navigation__back').removeClass('header__navigation__back--active');
});

// NAVIGATION SUB ITEMS TRIGGERS
if($(window).width() < 1024) { // Tablet landscape and below

    // Click on sub item
    $('.has-sub').on('click', function(e) {
        // Add hide class on main navigation
        $('ul.navigation').addClass('navigation--hide');
        // Add show class on sub navigation
        $(this).find('.navigation__sub').addClass('navigation__sub--active');
        // Add show class on navigation go back trigger
        $('.header__navigation__back').addClass('header__navigation__back--active');
    });

    // Click on navigation go back trigger
    $('.header__navigation__back').on('click', function(e) {
        $(this).removeClass('header__navigation__back--active');
        $('.navigation__sub').removeClass('navigation__sub--active');
        $('ul.navigation').removeClass('navigation--hide');
    });

} else {

    $('.header__navigation ul.navigation li.has-sub').on('mouseover', function() {
        $(this).find('ul.navigation__sub').addClass('navigation__sub--active');
    });

    $('.header__navigation ul.navigation li.has-sub').on('mouseleave', function() {
        $(this).find('ul.navigation__sub').removeClass('navigation__sub--active');
    });

}
