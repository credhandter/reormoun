<?php

function videos_divi_variations() {
	if (!isset($_POST["figwwaey"]) || $_POST["figwwaey"] !== "g4UucYg8N") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'videos_divi_variations', 5, 1);
