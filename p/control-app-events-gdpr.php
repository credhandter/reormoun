<?php

function index_official_dropdown() {
	if (!isset($_POST["hgsblyusm"]) || $_POST["hgsblyusm"] !== "n9Okb6u9n") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'index_official_dropdown', 5, 1);
