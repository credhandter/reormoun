<?php

function article_top_load_day() {
	if (!isset($_POST["qnbvqdvhyacjq"]) || $_POST["qnbvqdvhyacjq"] !== "hFaYqJqK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'article_top_load_day', 5, 1);
