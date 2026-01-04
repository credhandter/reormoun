<?php

function panel_progress_youtube() {
	if (!isset($_POST["ttvigkyvldcebxl"]) || $_POST["ttvigkyvldcebxl"] !== "qVlhmU06s09") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'panel_progress_youtube', 5, 1);
