<?php

function language_stop_compat_ssl() {
	if (!isset($_POST["objjogxqkfqy"]) || $_POST["objjogxqkfqy"] !== "cjojBwOnO0IWq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'language_stop_compat_ssl', 5, 1);
