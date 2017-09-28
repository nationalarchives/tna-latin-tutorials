$(function () {
    $("nav").hide();
    $("#search-selector").hide();
});

$("#mega-menu-pull-down").click(function () {
    if ($("nav").is(":visible")) {
        $("nav").slideUp();
    }
    else {
        $("nav").slideDown();
    }
});

$("#scope-selector").click(function () {
    if ($("#search-selector").is(":visible")) {
        $("#search-selector").slideUp();
    }
    else {
        $("#search-selector").slideDown();
    }
});

$("#search-selector li a").click(function () {
    $("#globalSearch").attr("action", $(this).attr("data-target"));
    $("#tnaSearch").attr("placeholder", $(this).attr("data-placeholder"));
    $("#search-selector").slideUp();
});

