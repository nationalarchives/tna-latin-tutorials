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
		if(array_key_exists(0,$pagesArray[$i])){
			$pageTitle = $pagesArray[ $i ][0];
		}
		else {
			$pageTitle = "Breadcrumbs title error at array position " .$i;
		}
		if(array_key_exists(1,$pagesArray[$i])){
			$pageURL   = $pagesArray[ $i ][1];
		}
		else {
			$pageURL = "http://nationalarchives.gov.uk";
		}




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