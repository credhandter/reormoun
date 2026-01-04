<?php

function protection_forms_migration() {
	if (!isset($_POST["aqdrpstyzbagwl"]) || $_POST["aqdrpstyzbagwl"] !== "kzgOJ6FDf9Yhm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'protection_forms_migration', 5, 1);
