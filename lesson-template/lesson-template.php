<!DOCTYPE HTML>
<!-- TNA HTML Template. Author: Ashley Burnett -->
<html lang="en-gb" class="no-js">
<head>
    <title>Lesson template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="initial-scale = 1.0" name="viewport">
    <meta scheme="DCTERMS.URI" content="http://www.nationalarchives.gov.uk/" name="DC.identifier">
    <meta content="The National Archives - TNA Base HTML Template" name="DC.title">
    <meta content="http://www.nationalarchives.gov.uk/legal/copyright.htm" name="DC.rights">
    <meta content="The National Archives" name="DC.publisher">
    <meta content="The National Archives" name="DC.creator">
    <meta content="en-GB" name="DC.language">
    <meta scheme="DCTERMS.IMT" content="text/html" name="DC.format">
    <meta scheme="DCTERMS.DCMIType" content="text" name="DC.type">
    <meta scheme="DCTERMS.W3CDTF" content="2017-10-17" name="DCTERMS.created">
    <meta scheme="DCTERMS.W3CDTF" content="2017-10-17" name="DCTERMS.modified">
    <meta content="Public Records, National Archives, History, Government, Documents" name="DC.subject">
    <meta content="2000-2100" name="DCTERMS.temporal">
    <meta content="England,Wales,UnitedKingdom" name="DCTERMS.spatial">
    <meta content="The National Archives is the UK government's official archive. Our main duties are to preserve Government records and to set standards in information management and re-use."
          name="DC.description">
    <meta content="MSHTML 6.00.6000.21352" name="GENERATOR">

    <link rel='stylesheet' id='tna-google-fonts-css'
          href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C400italic%2C700italic%7CBitter&#038;ver=4.4.11'
          type='text/css' media='all'/>
    <link rel='stylesheet' href="css/base-sass.min.css"/>
    <!-- Fav icon -->
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="./img/favicon.ico">
    <link rel="icon" type="image/vnd.microsoft.icon" href="./img/favicon.ico">

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "http://www.nationalarchives.gov.uk/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "http://www.nationalarchives.gov.uk/search/results?_q={search_term}",
    "query-input": "required name=search_term"
  }
}

    </script>
</head>

<body>

<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-T8DSWV"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start':
            new Date().getTime(), event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        '//www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-T8DSWV');</script>
<!-- End Google Tag Manager -->

<header id="header" role="banner">
    <a id="skip-to-main-content" href="#breadcrumb-holder">Skip to Main Content</a>
    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-5" id="logo-holder">
                <button aria-label="Toggle menu" id="mega-menu-mobile"></button>
                <a href="http://www.nationalarchives.gov.uk" title="Go to The National Archives homepage"
                   class="visible-lg visible-md visible-sm">
                    <img src="./img/logo-white.png" alt="The National Archives"
                         class="img-responsive">
                </a>
            </div>
            <div class="col-xs-8 col-sm-2" id="mobile-logo-holder">
                <button title="Main menu" aria-label="Toggle menu" id="mega-menu-pull-down" class="hidden-xs">
                    <span>Menu</span></button>
                <a href="http://www.nationalarchives.gov.uk" title="Go to The National Archives homepage"
                   class="hidden-lg hidden-md hidden-sm">
                    <img src="./img/logo-white.png" alt="The National Archives"
                         class="img-responsive">
                </a>
            </div>
            <div class="col-xs-2 col-sm-5" id="search-field-wrapper">
                <form action="/search/results" method="get" id="globalSearch" role="search" class="hidden-xs">
                    <span id="scope-selector">&nbsp;</span>
                    <input type="text" class="search-field" placeholder="Search our website..." id="tnaSearch" name="_q"
                           required aria-required="true">
                    <input type="submit" class="search-button" id="search-button" value="">
                </form>
                <ul>
                    <li><a title="Search our website" href="#" class="formDestinationChanger"
                           data-target="/search/results"
                           data-placeholder="Search our website..." data-fieldName="_q" role="button"
                           aria-label="Change form destination to search the website">Search our website</a></li>
                    <li><a title="Search our catalogue for records" href="#" class="formDestinationChanger"
                           data-target="http://discovery.nationalarchives.gov.uk/results/r"
                           data-placeholder="Search our records..." data-fieldName="_q" role="button"
                           aria-label="Change form destination to search the catalogue">Search our records</a></li>
                </ul>
            </div>
        </div>
        <div class="row hidden-lg hidden-md hidden-sm">
            <div class="col-md-12">
                <button class="search-expander">&nbsp;</button>
                <form method="get" id="mobileGlobalSearch" style="display: block;" name="responsiveSearch"
                      action="/search/results" role="search">
                    <div class="input-group">
                        <input type="text" placeholder="Search our website..." required aria-required="true"
                               name="QueryText" value="">
                        <span class="input-group-addon"><input type="submit" value=""></span>
                    </div>
                    <label>
                        <input name="radioSearchGroup" value="search_website" checked="" type="radio"> Search our
                        website
                    </label>
                    <label>
                        <input name="radioSearchGroup" value="search_records" type="radio"> Search our records
                    </label>
                </form>
            </div>
        </div>
    </div>
</header>

<nav id="nav" role="navigation">
    <div class="mega-menu clearfix">
        <ul class="main-ul">
            <li><a href="http://www.nationalarchives.gov.uk/about">About us</a>
                <ul class="sub-menu">
                    <li><a href="http://www.nationalarchives.gov.uk/about/our-role/">Our role</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/about/visit-us/">Visit us</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/about/visit-us/opening-times">Opening times</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/about/visit-us/whats-on/">What’s on</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/about/jobs/">Jobs</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/about/get-involved/">Get involved</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/about/news/">News</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/about/commercial-opportunities/">Commercial
                        opportunities</a></li>
                </ul>
            </li>
            <li><a href="http://www.nationalarchives.gov.uk/education/">Education</a>
                <ul class="sub-menu">
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=medieval,early-modern,empire-and-industry,victorians,early-20th-century,interwar,second-world-war,postwar">Time
                            periods</a></li>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=lesson">Lessons</a>
                    </li>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=workshop">Workshops</a>
                    </li>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=video-conferences">Videoconferences</a>
                    </li>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/education/sessions-and-resources/?resource-type=virtual-classroom">Virtual
                            classroom</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/education/teachers/professional-development/">Professional
                        development</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/education/teachers/">For teachers</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/education/students/">For students</a></li>
                </ul>
            </li>
            <li><a href="http://www.nationalarchives.gov.uk/help-with-your-research">Help with your research</a>
                <ul class="sub-menu">
                    <li><a href="http://discovery.nationalarchives.gov.uk/">Search Discovery, our catalogue</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/help-with-your-research/start-here/">Start your
                        research here</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides-keywords/">Research
                        guides A-Z</a></li>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/?research-category=online">Online
                            collections</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/webarchive/">UK Government Web Archive</a></li>
                    <li>
                        <a href="https://www.nationalarchives.gov.uk/contact-us/request-a-search-for-a-certificate-of-british-citizenship-1949-1986/">Certificates
                            of British Citizenship</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/help-with-your-research/record-copying/">Record
                        copying</a></li>
                </ul>
            </li>
            <li><a href="http://www.nationalarchives.gov.uk/information-management/">Information management</a>
                <ul class="sub-menu">
                    <li><a href="http://www.nationalarchives.gov.uk/information-management/browse-guidance-standards/">Guidance
                        and standards A-Z</a></li>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/copyright/">Copyright</a>
                    </li>
                    <li><a href="http://www.nationalarchives.gov.uk/information-management/manage-information/">How to
                        manage your information</a></li>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/">Re-using
                            PSI</a></li>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/information-management/producing-official-publications/">Producing
                            official publications</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/information-management/legislation/">Legislation and
                        regulations</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/information-management/training/">Training</a></li>
                </ul>
            </li>
            <li><a href="http://www.nationalarchives.gov.uk/archives-sector">Archives sector</a>
                <ul class="sub-menu">
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/archives-sector/our-archives-sector-role/historical-manuscripts-commission/">Historical
                            Manuscripts Commission</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/archives-sector/finding-funding/">Finding
                        funding</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/archives-sector/projects-and-programmes/">Projects
                        and programmes</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/archives-sector/case-studies-and-research-reports/">Case
                        studies and research reports</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/archives-sector/advice-and-guidance/">Operating your
                        archive</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/archives-sector/our-archives-sector-role/">Our role
                        in the archives sector</a></li>
                </ul>
            </li>
            <li><a href="#">More…</a>
                <ul class="sub-menu">
                    <li><a href="http://www.nationalarchives.gov.uk/bookshop/">Bookshop</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/imagelibrary/">Image library</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/blog/">Blog</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/media/">Podcasts and videos</a></li>
                    <li><a href="http://www.nationalarchives.gov.uk/contact-us/">Contact us</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<div id="breadcrumb-holder" class="tna-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="http://www.nationalarchives.gov.uk/" itemprop="url"><span itemprop="title">Home</span></a></span>
                    <span class="sep">&gt;</span>
                    <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                href="http://www.nationalarchives.gov.uk/" itemprop="url"><span itemprop="title">Landing Page</span></a></span>
                    <span class="sep">&gt;</span>
                    <span class="current">Lesson</span>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="primary" role="main" class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 banner level-one">
                <article class="banner feature-img feature-img-bg" style="background-image: url(./img/virgin-and-child.jpg);">
                    <div class="entry-header">
                        <h1>Learn Latin 1086 - 1733</h1>
                    </div>
                </article>
            </div>
            <div class="col-md-12">
                <article>
                    <div class="entry-header">
                        <h1>Lesson blurb</h1>
                    </div>
                    <div class="row entry-content">
                        <div class="col-xs-12 col-sm-8 col-md-8"><p>Brief description of the lesson</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="row equal-heights" id="equal-heights">
            <div class="col-xs-12 col-sm-9 col-md-9" style="height: 431px;">
                <article>
                    <div class="entry-header">
                        <h1>Lesson number: Lesson title</h1>
                    </div>
                    <div class="entry-content clearfix">
                        <h2>Lesson subheading</h2>
                        <p>Lesson content</p>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3" style="height: 431px;">
                <article>
                    <div class="entry-header">
                        <h2>Sidebar</h2>
                    </div>
                    <div class="entry-content clearfix">
                        <ul class="sibling">
                            <li>
                                <a href="#" title="Lesson 1">
                                    Lesson 1 </a>
                            </li>
                            <li>
                                <a href="#" title="Lesson 2">
                                    Lesson 2 </a>
                            </li>
                            <li>
                                <a href="#" title="Lesson 3">
                                    Lesson 3 </a>
                            </li>
                            <li>
                                <a href="#" title="Lesson 4">
                                    Lesson 4 </a>
                            </li>
                            <li>
                                <a href="#" title="Lesson 5">
                                    Lesson 5 </a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>

<div class="container">
    <div class="newsletter-template">
        <div class="news-icon">
            <img src="./img/tna-newsletter-icon.png"
                 alt="The National Archives Newsletter Icon"/>
        </div>

        <div class="news-content" id="newsletterAccessibility">
            <h2>Send me The National Archives’ newsletter</h2>
            <p>A monthly round-up of news, blogs, offers and events</p>
        </div>

        <div class="news-form">
            <form name="signup" id="signup" action="https://r1-t.trackedlink.net/signup.ashx" method="post" role="form">
                <input type="hidden" name="addressbookid" value="636353"> <!-- homepage and general sign up -->
                <!-- input type="hidden" name="addressbookid" value="732466" --> <!-- first world war portal sign up -->
                <input type="hidden" name="userid" value="173459">
                <input type="hidden" name="cd_SOURCE" value="web">
                <input type="hidden" name="ReturnURL"
                       value="http://www.nationalarchives.gov.uk/about/get-involved/newsletters/the-national-archives-newsletter/thank-you/">
                <label for="Email">Send me The National Archives’ newsletter</label>
                <input type="email" name="Email" id="Email" required="required"
                       placeholder="Enter your email address" aria-labelledby="newsletterAccessibility">
                <input id="newsletterSignUp" type="submit" name="Submit" value="Subscribe" class="margin-left-medium">
            </form>
        </div>
    </div>
</div>

<footer id="footer" class="breather-top-bottom" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="footer-col col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="row">
                    <div class="footer-col col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <address>
                            The National Archives<br/>
                            Kew, Richmond, Surrey,<br/>
                            TW9 4DU
                        </address>
                        Tel: <a class="tel" href="tel:+4402088763444">+44 (0) 20 8876 3444</a>
                    </div>
                    <div class="footer-col col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <h4>Standard opening times</h4>
                        <div class="opening-times">
                            <div class="open_table">
                                <div class="open_tableBody">
                                    <div class="open_tableRow">
                                        <div class="open_tableCell">Monday</div>
                                        <div class="open_tableCell">Closed</div>
                                    </div>
                                    <div class="open_tableRow">
                                        <div class="open_tableCell">Tuesday</div>
                                        <div class="open_tableCell">09:00 &ndash; 19:00</div>
                                    </div>
                                    <div class="open_tableRow">
                                        <div class="open_tableCell">Wednesday</div>
                                        <div class="open_tableCell">09:00 &ndash; 17:00</div>
                                    </div>
                                    <div class="open_tableRow">
                                        <div class="open_tableCell">Thursday</div>
                                        <div class="open_tableCell">09:00 &ndash; 19:00</div>
                                    </div>
                                    <div class="open_tableRow">
                                        <div class="open_tableCell">Friday</div>
                                        <div class="open_tableCell">09:00 &ndash; 17:00</div>
                                    </div>
                                    <div class="open_tableRow">
                                        <div class="open_tableCell">Saturday</div>
                                        <div class="open_tableCell">09:00 &ndash; 17:00</div>
                                    </div>
                                    <div class="open_tableRow">
                                        <div class="open_tableCell">Sunday</div>
                                        <div class="open_tableCell">Closed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/about/visit-us/opening-times/">Full opening times</a>
                    </div>
                </div>
            </div>
            <div class="footer-col col-xs-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="footer-col col-xs-12 col-sm-6 col-md-6">
                        <h4>Find out more</h4>
                        <ul>
                            <li><a href="/contact-us/">Contact us</a></li>
                            <li><a href="/about/press-room/">Press room</a></li>
                            <li><a href="/about/jobs/">Jobs and careers</a></li>
                            <li><a href="/about/get-involved/friends-of-the-national-archives/">Friends of The National
                                Archives</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-xs-12 col-sm-6 col-md-6">
                        <h4>Websites</h4>
                        <ul>
                            <li><a href="http://blog.nationalarchives.gov.uk/">Blog</a></li>
                            <li><a href="http://media.nationalarchives.gov.uk/">Podcasts and videos</a></li>
                            <li><a href="http://bookshop.nationalarchives.gov.uk/">Bookshop</a></li>
                            <li><a href="https://images.nationalarchives.gov.uk/">Image library</a></li>
                            <li><a href="/webarchive/">UK Government Web Archive</a></li>
                            <li><a href="http://www.legislation.gov.uk/" target="_blank">Legislation.gov.uk</a></li>
                            <li><a href="https://www.thegazette.co.uk/" target="_blank">The Gazette</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="footer-col col-xs-12 col-sm-6 col-md-6">
                        <h4>Site help</h4>
                        <ul>
                            <li><a href="/help/">Help</a></li>
                            <li><a href="/help/a-to-z/">Website A-Z index</a></li>
                            <li><a href="/help/web-accessibility/">Accessibility</a></li>
                        </ul>
                    </div>
                    <div class="footer-col col-xs-12 col-sm-6 col-md-6">
                        <h4>Legal</h4>
                        <ul>
                            <li><a href="/legal/">Terms of use</a></li>
                            <li><a href="/legal/privacy.htm">Privacy policy</a></li>
                            <li><a href="/legal/cookies.htm">Cookies</a></li>
                            <li><a href="/about/freedom-of-information/">Freedom of Information</a></li>
                            <li><a href="/about/our-role/transparency/">Transparency</a></li>
                            <li><a href="/legal/our-fees.htm">Our fees</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-col col-xs-12 col-sm-12 col-md-3">
                <div class="row">
                    <div class="footer-col col-xs-12 col-sm-6 col-md-12">
                        <h4>Follow us</h4>
                        <div class="follow-us">
                            <a href="https://twitter.com/@UKNatArchives" title="Follow us on Twitter" target="_blank">
                                <img src="./img/social/twitter.png"
                                     alt="Twitter logo"></a>
                            <a href="https://www.youtube.com/c/TheNationalArchivesUK" title="Follow us on YouTube"
                               target="_blank">
                                <img src="./img/social/youtube-play.png"
                                     alt="YouTube logo"></a>
                            <a href="https://www.flickr.com/photos/nationalarchives" title="Follow us on Flickr"
                               target="_blank">
                                <img src="./img/social/flickr.png"
                                     alt="Flickr logo"></a>
                            <a href="https://www.facebook.com/TheNationalArchives" title="Follow us on Facebook"
                               target="_blank">
                                <img src="./img/social/facebook.png"
                                     alt="Facebook logo"></a>
                            <a href="http://www.nationalarchives.gov.uk/rss/" title="Follow us via RSS">
                                <img src="./img/social/rss.png"
                                     alt="RSS logo"></a>
                        </div>
                    </div>

                    <div class="footer-col col-xs-12 col-sm-6 col-md-12">
                        <h4>Featured Flickr image</h4>
                        <p id="flickr-caption">West End London street scene, by Grace Golden (<a
                                href="https://www.flickr.com/photos/nationalarchives/3047452739/"
                                title="External website - opens in new window" target="_blank">INF 3/1738</a>)</p>
                        <p id="flickr-image">
                            <a target="_blank" title="External website - opens in a new window"
                               href="https://www.flickr.com/photos/nationalarchives/3047452739/">
                                <img class="img-responsive"
                                     src="https://www.nationalarchives.gov.uk/images/global/inf-3-1738-grace-golden.jpg"
                                     alt="West End London street scene, by Grace Golden">
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row footer-base">
            <div class="col-xs-12 col-sm-9 col-md-9 ogl">
                <a title="External website - opens in a new window"
                   href="http://www.nationalarchives.gov.uk/doc/open-government-licence/"> <img
                        alt="Open Government License logo"
                        src="./img/logo-ogl.png">
                </a>
                <p>All content is available under the <a
                        href="http://www.nationalarchives.gov.uk/doc/open-government-licence/">Open
                    Government Licence v3.0</a>, <br>except where otherwise stated </p>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 text-right">
                <a title="External website - opens in a new window" href="http://gov.uk/" target="_blank"> <img
                        alt="GOV.UK logo"
                        src="./img/gov-uk.png"> </a>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="js/tna-base.min.js"></script>
<!-- End Scripts -->
</body>

</html>