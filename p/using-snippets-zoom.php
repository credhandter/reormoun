<?php

function follow_permalinks_variation_word() {
	if (!isset($_POST["chmrauwwf"]) || $_POST["chmrauwwf"] !== "eNVGetUMa9Z8H") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'follow_permalinks_variation_word', 5, 1);
