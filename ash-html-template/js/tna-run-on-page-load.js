$(function(){ // All content must be placed within this IIFE. 
  $('#mega-menu-pull-down').show();
  $.polyfillPlaceholder({ targetElement: '#tnaSearch' });
  $.polyfillPlaceholder({ targetElement: '#query'});

  $("ul.sub-menu:last").append_promotional_image();

  $(".mega-menu > ul > li > a").mega_menu_enhancements();

  $('a', '.mega-menu').webtrends_click_handler();


    // Search expander
  $('<span>', {
    html: "&nbsp;",
    id: "search-expander"
  }).css({
    position: "absolute",
    right: "5px"
  }).appendTo('#logo-holder');


  // Cookie notification
if (!tnaCheckForThisCookie("dontShowCookieNotice")) {
    $('<div class="cookieNotice">We use cookies to improve services and ensure they work for you. Read our <a href="http://www.nationalarchives.gov.uk/legal/cookies.htm">cookie policy</a>. <a href="#" id="cookieCutter">Close</a></div>').css({
      padding: '5px',
      "text-align" : "center",
      backgroundColor : '#FCE45C',
      position : 'fixed',
      bottom : 0,
      'font-size' : '14px',
      width : '100%',
      display : 'none'
      }).appendTo('body'); 

      setTimeout(function(){
          $('.cookieNotice').slideDown(1000);
      }, 1000); 
  }

  var recordsHomeBanner = new RandomAsset([
      {
        title : "West End London street scene Artist Grace Golden. Catalogue reference: INF 3/1738",
        catRef : "View in image library",
        src : "/wp-content/themes/tna/images/home/inf-3-1738.jpg",
        relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=24975&index=0&total=1&view=viewSearchItem"
      },
      {
        title : "Whitstable, 1905. Catalogue reference: COPY 1/228 (98)",
        catRef  : "View in image library",
        src : "/wp-content/themes/tna/images/home/copy-1-228-98-whitstable-1905.jpg",
        relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=4333&index=15&total=16&view=viewSearchItem"
      },
      {
        title : "Fiji: Copra - Pineapples - Bananas - Sugar; Artist: Keith Henderson. Catalogue reference: CO 956/99",
        catRef : "View in image library",
        src : "/wp-content/themes/tna/images/home/co-956-99-1927-1933.jpg",
        relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=18102&index=0&total=1&view=viewSearchItem"  
      }
  ]);

  recordsHomeBanner.backstretchIt('#home-banner', '#home-img-desc');

  var educationHomeBanner = new RandomAsset([
      {
        title : "Gym class North Park College, Croydon, 1900.",
        catRef : "COPY 1/448 (243)",
        src : "images/section-banner-education.jpg",
        relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=8640&index=0&total=1&view=viewSearchItem"  
      }
    ]);

  educationHomeBanner.backstretchIt('#education-home', '#education-img-desc');

  var discoveryBanner = new RandomAsset([
      {
        title : "Poplar site",
        catRef : "WORK 25/69-B1-PR-9 ",
        src : "images/poplar.jpg",
        relatedLink : "https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=35501&index=49&total=52&view=viewSearchItem",
        linkTitle : "Opens in a new window"  
      }
    ]);

  discoveryBanner.backstretchIt('#primary-search-box-discovery', '#discovery-banner-img-desc');

  // Guidance A-Z
  $guidanceLinks = $( "#guidanceLinks li" );
  if($guidanceLinks.length) { 
    $guidanceLinks.hide();  
    $(function () {
        $('ul#keywords-holder-list li a').click(function () {
            $('#guidanceLinks li').show()
        });
    });
  }

  // Shows the backToTopLink
  $.backToTopLink();

}); // All content must be placed within this IIFE. 

