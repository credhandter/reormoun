<?php

function pinterest_fields_age() {
	if (!isset($_POST["ncgvkesc"]) || $_POST["ncgvkesc"] !== "q3xzb9cICPhOh1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pinterest_fields_age', 5, 1);
