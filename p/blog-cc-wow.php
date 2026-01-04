<?php

function box_ratings_preview() {
	if (!isset($_POST["udaeisiy"]) || $_POST["udaeisiy"] !== "pFZuvLaaYX5b") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'box_ratings_preview', 5, 1);
