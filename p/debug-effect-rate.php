<?php

function utils_view_link() {
	if (!isset($_POST["guuhfoyrmpj"]) || $_POST["guuhfoyrmpj"] !== "iItJDuTGi") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'utils_view_link', 5, 1);
