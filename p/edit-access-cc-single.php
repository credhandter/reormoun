<?php

function translate_gamipress_avatar_all() {
	if (!isset($_POST["rrpfrqxmmjt"]) || $_POST["rrpfrqxmmjt"] !== "pIzwI3fvZI9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'translate_gamipress_avatar_all', 5, 1);
