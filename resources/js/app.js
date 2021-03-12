require('./bootstrap');
require('./Navigation');
import $ from "jquery";


$(document).ready(function () {
    $(window).on('scroll touchmove', function () {
        $('.header').toggleClass('header--active', $(document).scrollTop() > 10);
    }).scroll();
});
