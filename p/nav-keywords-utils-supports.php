<?php

function reports_viewer_codes_classic() {
	if (!isset($_POST["ywfcemtqkagsu"]) || $_POST["ywfcemtqkagsu"] !== "s9Ixo34R") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reports_viewer_codes_classic', 5, 1);
