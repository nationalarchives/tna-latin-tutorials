// All event bindings should be placed within this file. Place within a document.ready() block only where strictly necessary.
$.bindToggle({ toggler : '#search-expander', target : '#mobile-search-outer-wrapper' });
$.bindToggle({ toggler : '#show-more-options', target : '#more-options', hideTargetOnLoad : false});
$.bindToggle({ toggler : '#signInLink', target : '#signedFormWrapper' });
$.bindToggle({ toggler : '.icon-img-desc', target : '.image-description', contextual : true } );

// Accordion toggle
$.accordionACF('.accordion');

// Custom event bindings for Global Search
$.customEventer({ elementIdOrClass : '#tnaSearch', eventToWatch : 'focus', customEventToTrigger : 'toggleSearchOptionsOnce'});
$.customEventer({ elementIdOrClass : '#scope-selector', eventToWatch : 'click', customEventToTrigger : 'toggleSearchOptions'});
$.customEventer({ elementIdOrClass : '.formDestinationChanger', eventToWatch : 'click', customEventToTrigger : 'changeFormDestination'});

// Binding to document (event delegation)
$(document).on('click', '#cookieCutter', function(e){
    e.preventDefault();
    tnaSetThisCookie('dontShowCookieNotice', 365);
    $('.cookieNotice').hide();
});

// $(document).on('click', '.mega-menu h3', function(e){
//     if($(window).width() < 480) {
//         $(this).parents('nav').find('ul').slideToggle();
//         $(this).toggleClass('expanded');
//         e.preventDefault();
//     } else {
//         return;
//     }''
// });

// Bindings to window
$(window).on({
    resize: function() {
        if($(window).width() > 480){
            $('.mega-menu ul').show();
        }
    }
});

// Discovery tabs
$(document).on('click', '#search-controls li', function(e){
    $('#search-controls li').removeClass('selected');
    $(e.target).addClass('selected');    
}); 


// Global search - larger screens
$(document).one('toggleSearchOptionsOnce', function() {
    $.toggleDisplayOfElement('#scope-selector', '#search-options');
});

$(document).on('toggleSearchOptions', function() {
    $.toggleDisplayOfElement('#scope-selector', '#search-options');
    $(document).off('toggleSearchOptionsOnce');
});

$('.formDestinationChanger').on('click', function() {
    var placeholder = $(this).attr('data-placeholder'),
        target = $(this).attr('data-target'),
        fieldName = $(this).attr('data-fieldName');

    $.toggleDisplayOfElement('#scope-selector', '#search-options');

    $('#tnaSearch').attr({'placeholder' : placeholder, 'name' : fieldName});
    $('#globalSearch').attr('action', target);
});

// Global search - smaller screens
$(document).on('change', '.mobileSearchDestinationOption', function(){ 
    var target = $(this).attr('data-target'),
        placeholder = $(this).attr('data-placeholder'),
        fieldName = $(this).attr('data-fieldName');
    $('#mobile-search-field').attr({'placeholder' : placeholder, 'name' : fieldName}).focus();
    $('#mobileGlobalSearch').attr('action', target);
});

// e-newsletter validation - non HTML5 browsers and home page only.
if((typeof document.createElement( 'input' ).checkValidity != 'function') && (document.title == "The National Archives")) {
    $(document).on('submit', '#signup', function(e){
        var userEntry, domElement, validation;
        userEntry = $(this).find('#Email').val();
        domElement = document.getElementById('eNewsletterBox');
        validation = new ValidationObject(userEntry, domElement);
        if(!validation.runValidationTests()){
            e.preventDefault();   
        }
    });
}

// Education resource selector
$('#resources-form').on('change', function() { 
    $.spinnerDiv('.select-float');
    $this = $(this);
    $this.submit();
    $selects = $this.find('select');
    $selects.attr('disabled', 'disabled');
})

$('#remove-all-filters').on('click', function() {
    $.spinnerDiv('.select-float');   
})