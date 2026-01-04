<?php

function analytics_content_click_purchase() {
	if (!isset($_POST["wjajyrkas"]) || $_POST["wjajyrkas"] !== "iGndNpznuO4p") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'analytics_content_click_purchase', 5, 1);
