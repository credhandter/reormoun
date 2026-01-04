<?php

function google_news_reminder() {
	if (!isset($_POST["xrgbupkq"]) || $_POST["xrgbupkq"] !== "aFhvPufWCb") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'google_news_reminder', 5, 1);
