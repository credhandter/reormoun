<?php

function feedback_switcher_slide() {
	if (!isset($_POST["uadywgiviyiacn"]) || $_POST["uadywgiviyiacn"] !== "bWTd5yfYK8duiQ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'feedback_switcher_slide', 5, 1);
