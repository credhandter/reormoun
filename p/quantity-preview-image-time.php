<?php

function engine_chatbot_php() {
	if (!isset($_POST["wlerlfkaks"]) || $_POST["wlerlfkaks"] !== "tPIc7nk6rkNhqv") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'engine_chatbot_php', 5, 1);
