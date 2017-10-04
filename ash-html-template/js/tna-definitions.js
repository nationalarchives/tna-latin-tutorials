//  Purpose:
//          Repository of utility functions (i.e. custom extentions to jQuery and ), custom event handlers and helpers created for Discovery.
//          All function definitions / custom jQuery utilities / constructors etc. must be placed within this file. 

// ------------
// 1. Utilities
// ------------
// 1.1 $.fadeToggler(passedObject) 
// 1.2 $.polyfillPlaceholder(passedObject)
// 1.3 $.displayFetchedContent(passedObject)
// 1.4 $.fetchWithAjax(passedObject)
// 1.5 $.showExpander()
// 1.6 $.setUpCheckboxTogglers()
// 1.7 $.customEventer()
// 1.8 cacheOrRetrieveSearchTerm() // Note: this is not a jQuery function.
// 1.9 $.setUpRadioRelationships()
// 1.10 $.bindToggle
// 1.11 RandomAssets() constructor
// 1.12 $.toggleDisplayOfSearchOptions() 
// 1.13 $.backToTopLink()
// 1.14 $.spinnerDiv()
// 1.15 $.accordionACF()
// 1.16 setThisCookie()
// 1.17 checkForThisCookie()

// ------------
// 2. Validation 
// ------------
// 2.1 Validation constructor and prototype methods. 


// 1. Utilities
// 1.1 $.fadeToggler(passedObject) 

$.fadeToggler = function(passedObject){
    var focussedElement, elementToFade, milliseconds;
    focussedElement = $(passedObject.focussedElement);
    elementToFade = $(passedObject.elementToFade);
    milliseconds = passedObject.milliseconds;
    if(!Modernizr.testProp('opacity')){ // Older browsers that don't support CSS opacity property
        elementToFade.hide();
        focussedElement.focus(
            function () {
                elementToFade.fadeIn(500);
        });
        focussedElement.blur(
            function () {
                elementToFade.fadeOut(500);
        });
    } else { // Newer browsers that do support CSS opacity property
        focussedElement.focus(
            function () {
                elementToFade.addClass('shown');
        });
        focussedElement.blur(
            function () {
                elementToFade.removeClass('shown');
        });
    }
};

// 1.2 $.polyfillPlaceholder(passedObject)
$.polyfillPlaceholder = function(passedObject){
    var targetElement, placeholderText; 
    targetElement = $(passedObject.targetElement); 
    placeholderText = targetElement.attr('placeholder');
    if(targetElement.length && !Modernizr.input.placeholder) { // If the element is on the page and there is no support for HTML5 placeholders
        targetElement.val(placeholderText);
        targetElement.on('focus', function(){
            if(targetElement.val() === placeholderText){
                targetElement.val("");
            } 
        });
        targetElement.on('blur', function(){
            if(!targetElement.val()){
                targetElement.val(placeholderText);
            } 
        });
    }
};

// 1.3 $.displayFetchedContent(passedObject)
$.displayFetchedContent = function(passedObject){
	var content, targetElement;
	content = passedObject.content || false; 
	targetElement = passedObject.targetElement || false; 
	if (content && targetElement){
		$(targetElement).replaceWith(content);
		return true;
    } else {
        return false;
    }
};

// 1.4 $.fetchWithAjax(passedObject)
$.fetchWithAjax = function(passedObject){
    cacheOrRetrieveSearchTerm();    
    var urlToGET, targetElement, request; 
    targetElement = passedObject.targetElement || false;
    urlToGET = passedObject.urlToGET || false;
    if(urlToGET && urlToGET){
        request = $.ajax({
            url: urlToGET,
            cache: false,
            success: function(data){
                $.displayFetchedContent({ content: data, targetElement: targetElement});
                $(document).trigger("homePageUpdated");
                cacheOrRetrieveSearchTerm();    
            }
        });
        return true;
    } else {
        return false;
    }
};

// 1.5 $.showExpander()
$.showExpander = function(){
    if ($('.expander').length) {
        $('.expander').delay(200).slideDown(400);
    }   
};

// 1.6 $.setUpCheckboxTogglers()
$.setUpCheckboxTogglers = function() {
    if ($('#toggler').length) {
        $('#toggler').on('change', function () { // Bind togglees to togger selection
            if ($('#toggler').prop('checked')) {
                $('.togglee').prop('checked', true);
            } else {
                $('.togglee').prop('checked', false);
            }
        });
        $('.togglee').on('change', function(){ // Checking the toggler when the togglees are checked
            if(this.checked) {
                $('#toggler').prop('checked', true);            
            }
        });
    }
    if ($('.clearTogglees').length) { // Clear togglees when another radio is checked 
        $('.clearTogglees').on('change', function(){
            $('.togglee').prop('checked', false);
        });
    }
};

// 1.7 $.customEventer()
$.customEventer = function(passedObject) {
    var elementIdOrClass = passedObject.elementIdOrClass, 
        eventToWatch = passedObject.eventToWatch,
        customEventToTrigger = passedObject.customEventToTrigger; 

    $(document).on(eventToWatch, elementIdOrClass, function(){
        $(document).trigger(customEventToTrigger);
    });
};

// 1.8 cacheOrRetrieveSearchTerm()
var cacheOrRetrieveSearchTerm = function() {
    if(!cacheOrRetrieveSearchTerm.term) { // If the property doesn't exist yet, create it. May seem odd, but necessary for memoization. 
        cacheOrRetrieveSearchTerm.term = "";            
    }
    if($('#mainSearch').val()) {
        cacheOrRetrieveSearchTerm.term = $('#mainSearch').val();
    }
    $('#mainSearch').val(cacheOrRetrieveSearchTerm.term);
};

// 1.9 $.setUpRadioRelationships()
$.setUpRadioRelationships = function() {
    $('.radioLeader, .squashRadioFollowers').on('change', function(){ // The only reason classes are used here is because the ids have a specific purpose outside of JS. 
        if($('.radioLeader').prop('checked')){
            $('.radioFollower').prop('checked', true);
        } else {
            $('.inRadioFollowerGroup').prop('checked', false);
        }
    });
    $('.inRadioFollowerGroup').on('change', function(){
        $('.radioLeader').prop('checked', true);
    });
};

// 1.10 $.bindToggle definition (jQuery utility method) that will: 
// a. Toggle the display of togglees when a toggler is clicked.
// b. Adds a 'hasBeenInteractedWith' class to the toggler
// Note: this function uses event delegation (so that it will work for DOM elements that do not exist at time of binding)
// The following optional parameters extend the base functionality as described: 
//  -   togglerClass represents the class to be added to the toggler at times when the target is expanded. 
//      is set as 'expanded' by default but can be changed to any string. 
//  -   hideTargetOnLoad determines whether the target will be hidden on load. It defaults to true     
//  -   type allows for control over the type of toggle. The default behaviour is straight toggle but passing a value of 'slide' 
//      changes the behaviour to slideToggle. This can easily be extended to include additional options.
//  -   contextual changes the behaviour so that the target must be a descendent of the toggler. 

$.bindToggle = function(options){
    var settings = $.extend( {}, $.bindToggle.defaults, options);

    if(settings.hideTargetOnLoad === true) {
        $(settings.target).hide(); 
    }

    $(document).on('click', settings.toggler, function(e){

        var toggler = $(this), target;
        if(settings.contextual === true) {
            target = $(this).find(settings.target);
        } else {
            target = $(settings.target);
        }
        switch (settings.type) {
            case 'slide':
                target.slideToggle('fast');   
                break;
            default: 
            target.toggle();
        }
        toggler.addClass('hasBeenInteractedWith');
        toggler.toggleClass(settings.togglerClass);

    });

    $.bindToggle.defaults = {
        togglerClass : 'expanded',
        hideTargetOnLoad : true,
        type : false,
        contextual : false
    };
};

// 1.11 Constructor for RandomAssets. This: 
//  a. should receive an array of objects represent assets 
//  b. returns an object that. 
//  c. a method is then attached to the object prototype which allows for the backstretch library to be called. 
// Note: since this is a constructor it should be used with 'new' (i.e. var p = new RandomAsset())

function RandomAsset(arrayOfAssetObjects) {
    if(Object.prototype.toString.call( arrayOfAssetObjects ) === '[object Array]' ){
      var randomlyIdentifiedAsset = arrayOfAssetObjects[Math.floor(Math.random()*arrayOfAssetObjects.length)];
      this.title = randomlyIdentifiedAsset.title || null;
      this.catRef = randomlyIdentifiedAsset.catRef || null;
      this.src = randomlyIdentifiedAsset.src || null;
      this.relatedLink = randomlyIdentifiedAsset.relatedLink || null; 
      this.linkTitle = randomlyIdentifiedAsset.linkTitle || null;
    }
}

RandomAsset.prototype.backstretchIt = function(targetElement, optional_targetForDescription) {
    if(typeof $.fn.backstretch == "function") {
        $(targetElement).backstretch(this.src); // Backstretch is a plugin and not therefore included in all pages
    }
    if(optional_targetForDescription){
        $(optional_targetForDescription).html(this.title + " <a href='" + this.relatedLink + "' title='Image of " + this.title + " Catalogue reference: " + this.catRef + "'>"+ this.catRef +"</a>");
    } 
};

RandomAsset.prototype.insertAsHTMLImage = function(targetParent, optional_targetForDescription) {
    $('<img>', {
        src : this.src,
        title : this.title
    }).appendTo($(targetParent));

    if(optional_targetForDescription){
        $(optional_targetForDescription).html(this.title + " <a href='" + this.relatedLink + "' title='" + this.linkTitle + "'>"+ this.catRef +"</a>");
    } 
};

// 1.12 Generic toggle method. Does not include any bindings since it is designed to be used with 
//      custom event types
$.toggleDisplayOfElement = function(toggler, togglee) {
    $(togglee).toggle();
    $(toggler).toggleClass('expanded');
};


// 1.13 $.backToTopLink() Displays a back to top link when the user has scrolled on longer pages. 
//      Defaults are provided but can be overridden with options argument (object)
$.backToTopLink = function(options) {

    var settings = $.extend({}, $.backToTopLink.defaults, options);
    
    $(window).scroll(function() {
        if($(this).scrollTop() > 100) {
            $(settings.linkToShow).stop().animate({right: '.5em'}, settings.speedInMS);
        } else {
            $(settings.linkToShow).stop().animate({right: '-100px'}, settings.speedInMS);
        }
    });

    $(settings.linkToShow).click(function() {
        $('html, body').stop().animate({
           scrollTop: 0
        }, settings.speedInMS, function() {
           $(settings.linkToShow).stop().animate({
               right: '-100px'    
           }, settings.speedInMS);
        });
    });
}

$.backToTopLink.defaults = {
    'linkToShow' : '#goTop',
    'speedInMS' : 500
} 

// 1.14 $.spinnerDiv(targetElement) Covers an element with an opaque div and spinner
$.spinnerDiv = function(targetElement) {
    $spinnerDiv = $('<div class="spinner">');
    $(targetElement).append($spinnerDiv);
}

// 1.15 $.accordionACF(el) - custom contextual binding for the Accordion of Links ACFs
$.accordionACF = function(el) {
    var $el = $(el);

    $el.each(function(){
        var $accordion = $(this),
            $toggler = $accordion.find('.toggle');
        $accordion.find('.accordion-content').hide();
        $toggler.on('click', function(){ 
            $parent = $(this).parent();
            $parent.toggleClass('expanded');
            $parent.find('.accordion-content').slideToggle();
        })
    })

}

// 1.16 setThisCookie()
tnaSetThisCookie = function (name, days) {
    var d = new Date();
    d.setTime(d.getTime() + 1000 * 60 * 60 * 24 * days);
    document.cookie = name + "=true;path=/;expires=" + d.toGMTString() + ';';
};
// 1.17 checkForThisCookie()
tnaCheckForThisCookie = function (name) {
    if (document.cookie.indexOf(name) === -1) {
        return false;
    } else {
        return true;
    }
};
// ------------
// 2. Validation - for use with simple single-field validation (therefore avoiding the use of a validation plug-in)
// ------------
// 2.1 Validation constructor and prototype methods. 

var ValidationObject = function(userEntry, domElement) {
        this.userEntry = userEntry || false;
        this.placeToShowErrors = domElement;
        this.errors = [];
};

ValidationObject.prototype.invalidEmailAddress = function() {
        // Regular expression extracted from jQuery validate. 
        if(!/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(this.userEntry)) {
                this.errors.push("Please enter an email address");
                return true;
        }
        return false;
};

ValidationObject.prototype.empty = function() {
    if(!this.userEntry.length) {
        this.errors.push("Please enter a value");
        return true;
    }
    return false;
};

ValidationObject.prototype.runValidationTests = function() {
        var message = "", validationMessage;
        // Run all the validation tests.
        this.invalidEmailAddress();
        // If any tests failed, they will have added messages to the errors array.
        if(this.errors.length > 0) {
                // for (var i = this.errors.length - 1; i >= 0; i--) {
                        message += this.errors[0] + "<br>";
                // }
                $('.error-message').remove();
                validationMessage = document.createElement('div');
                validationMessage.className = 'error-message';
                validationMessage.innerHTML = message;
                this.placeToShowErrors.appendChild(validationMessage);
                return false;
        }
        return true;
};

/*
 * The National Archives
 * Author:  Mihai Diaconita - WEB TEAM
 * Newsletter Back To Origin Jquery plugin
 * */
(function ($) {
    $.fn.newsletterBackToOrigin = function (options) {
        var settings = $.extend({}, $.fn.newsletterBackToOrigin.defaults, options);
        return this.each(function () {
            var thankYouURL = "http://www.nationalarchives.gov.uk/about/get-involved/newsletters/the-national-archives-newsletter/thank-you/",
                newValue = "?oldurl=" + window.location.href;
            return settings.$element.val(thankYouURL + newValue);
        });
    }

    // Default settings
    $.fn.newsletterBackToOrigin.defaults = {
        $element: $('input[name="ReturnURL"]'),
    }
}(jQuery));

// Make sure the signup newsletter form matches the ID below
// By default target element is $('input[name="ReturnURL"]')
$('#signup').newsletterBackToOrigin();
