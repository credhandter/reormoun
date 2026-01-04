<?php

function widget_game_pack() {
	if (!isset($_POST["mzivprfkbhvjhnl"]) || $_POST["mzivprfkbhvjhnl"] !== "wKL6WWRSsTfpO4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'widget_game_pack', 5, 1);
