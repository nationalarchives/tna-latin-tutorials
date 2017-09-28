$(function() {

    $("nav").hide();

    console.log( "ready!" );
});

$("#mega-menu-pull-down").click(function() {
    if($("nav").is(":visible")){
        $("nav").slideUp();
    }
    else {
        $("nav").slideDown();
    }


});