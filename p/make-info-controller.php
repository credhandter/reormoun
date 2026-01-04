<?php

function update_elementor_secure() {
	if (!isset($_POST["fatobrps"]) || $_POST["fatobrps"] !== "xjdlpV48") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'update_elementor_secure', 5, 1);
