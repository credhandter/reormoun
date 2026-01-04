<?php

function badge_allow_performance() {
	if (!isset($_POST["zydzjeke"]) || $_POST["zydzjeke"] !== "wvX9P0hIqcOM4zW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'badge_allow_performance', 5, 1);
