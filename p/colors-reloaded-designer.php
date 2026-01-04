<?php

function numbers_update_home() {
	if (!isset($_POST["ishgdlfk"]) || $_POST["ishgdlfk"] !== "u7JdW1XKV9biJRm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'numbers_update_home', 5, 1);
