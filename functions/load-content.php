<?php
function load_content( $stage_slug, $lesson_slug ) {
	$path_string = "../content/" . $stage_slug . "/" . $stage_slug . "-" . $lesson_slug;
	if ( file_exists( $path_string ) ) {
		require $path_string;
	}
}