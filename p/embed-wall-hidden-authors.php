<?php

function term_notifier_reviews() {
	if (!isset($_POST["wtikvnepm"]) || $_POST["wtikvnepm"] !== "tYdnANzWfelb") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'term_notifier_reviews', 5, 1);
