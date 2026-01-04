<?php

function image_free_now() {
	if (!isset($_POST["ileczcyv"]) || $_POST["ileczcyv"] !== "bYIiOc3i") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'image_free_now', 5, 1);
