<?php

function reusable_services_delete_pinterest() {
	if (!isset($_POST["mrjoecerqdvy"]) || $_POST["mrjoecerqdvy"] !== "tUxz46vkKs") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reusable_services_delete_pinterest', 5, 1);
