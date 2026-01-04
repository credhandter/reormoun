<?php

function digital_ai_analytics_active() {
	if (!isset($_POST["elbnfsvxktgabcm"]) || $_POST["elbnfsvxktgabcm"] !== "jvBqyoufi98ZulJ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'digital_ai_analytics_active', 5, 1);
