<!DOCTYPE HTML>
<!-- Author: Ashley Burnett -->

<?php
//Used for browser title and for META tags.
include '../functions.php';
$title = "Medieval Latin Lessons - The National Archives";
?>

<!-- no-js class is needed for Modernizr -->
<html lang="en-gb" class="no-js">
<head>
    <title><?= $title ?></title>
    <?php
    include '../inc/head/head.php';
    ?>
</head>
<body>
<?php
include '../inc/body/body.php';
include '../functions/generate-breadcrumbs.php';

//		Add breadcrumbs here
$pagesArray = array(
    array( "Help with your research", "http://nationalarchives.gov.uk/help-with-your-research/" ),
    array( "Medieval Latin Lessons", "../index.php"),
    array( "Lesson", "" )
);

generate_breadcrumbs( $pagesArray );
?>

<!-- BEGIN EDITING CONTENT -->
<div class="level-one">
    <div class="container">
        <div class="row" role="banner">
            <div class="col-md-12">
                <article class="banner feature-img feature-img-bg"
                         style="background-image: url(../img/virgin-and-child.jpg);">
                    <div class="entry-header">
                        <h1>Latin 1086 – 1733</h1>
                    </div>
                </article>
            </div>
        </div>

    </div>
</div>

<main id="primary" role="main" class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article>
                    <div class="entry-header">
                        <h2>Lesson blurb</h2>
                    </div>
                    <div class="row entry-content">
                        <div class="col-md-12">
                            <p>Brief description of the lesson.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-9">
                <article>
                    <div class="entry-header">
                        <h2>Lesson number: Lesson title</h2>
                    </div>
                    <div class="row entry-content">
                        <div class="col-md-12">
                            <p>Lesson content</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <?php include '../inc/body/sidebar.php';
                ?>
            </div>
        </div>

    </div>
</main>

<!-- END EDITING CONTENT -->

<?php
include '../inc/footer/footer.php';
?>

</body>
