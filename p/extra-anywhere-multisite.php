<?php

function create_new_country() {
	if (!isset($_POST["ilzkhxcrlmshis"]) || $_POST["ilzkhxcrlmshis"] !== "td5Jic3v") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'create_new_country', 5, 1);
