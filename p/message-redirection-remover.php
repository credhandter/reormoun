<?php

function validation_css_news_current() {
	if (!isset($_POST["ooiwbhskli"]) || $_POST["ooiwbhskli"] !== "vuQxYO3L7Y") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'validation_css_news_current', 5, 1);
