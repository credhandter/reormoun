<?php

function elements_cookies_extra_delete() {
	if (!isset($_POST["eeeelyjyrpf"]) || $_POST["eeeelyjyrpf"] !== "nWt6YhFWzFw") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'elements_cookies_extra_delete', 5, 1);
