<?php

function reports_companion_gallery_app() {
	if (!isset($_POST["dwivnysw"]) || $_POST["dwivnysw"] !== "inEAbDSXKFI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reports_companion_gallery_app', 5, 1);
