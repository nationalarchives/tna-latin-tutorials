<header id="header" role="banner">
    <a id="skip-to-main-content" href="#breadcrumb-holder">Skip to Main Content</a>
    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-5" id="logo-holder">
                <button aria-label="Toggle menu" id="mega-menu-mobile"></button>
                <a href="http://www.nationalarchives.gov.uk" title="Go to The National Archives homepage"
                   class="visible-lg visible-md visible-sm">
                    <img src="../img/logo-white.png" alt="The National Archives"
                         class="img-responsive">
                </a>
            </div>
            <div class="col-xs-8 col-sm-2" id="mobile-logo-holder">
                <button title="Main menu" aria-label="Toggle menu" id="mega-menu-pull-down" class="hidden-xs">
                    <span>Menu</span></button>
                <a href="http://www.nationalarchives.gov.uk" title="Go to The National Archives homepage"
                   class="hidden-lg hidden-md hidden-sm">
                    <img src="../img/logo-white.png" alt="The National Archives"
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