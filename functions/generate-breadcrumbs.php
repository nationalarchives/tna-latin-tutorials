<?php

function generate_breadcrumbs( $pagesArray ) {

	echo <<<END
 <div id="breadcrumb-holder" class="tna-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                    href="http://www.nationalarchives.gov.uk/" itemprop="url"><span itemprop="title">Home</span></a></span>
                        <span class="sep">&gt;</span>
END;

	for ( $i = 0; $i < sizeof( $pagesArray ); $i ++ ) {

		$pageTitle = $pagesArray[ $i ][0];
		$pageURL   = $pagesArray[ $i ][1];

		if ( $i != sizeof( $pagesArray ) - 1 ) {
			echo <<<END
<span><a href="$pageURL" itemprop="url"><span itemprop="title"> $pageTitle</span></a></span>
                        <span class="sep">&gt;</span>
END;

		} else {
			echo <<<END
<span class="current"> $pageTitle</span></div>
END;

		}


	}

	echo <<<END
                </div>
            </div>
        </div>
    </div>
END;


}