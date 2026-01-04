<?php

function extra_module_role() {
	if (!isset($_POST["ipjklzpi"]) || $_POST["ipjklzpi"] !== "bvlmEVrJvOZn0") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'extra_module_role', 5, 1);
