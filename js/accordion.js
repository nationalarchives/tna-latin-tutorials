$(document).ready(function () {
    $('.filter-toggler').click(function () {
        $(this).siblings().toggle();
        $(this).toggleClass('show');
    });
});
