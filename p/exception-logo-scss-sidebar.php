<?php

function composer_subscribe_url_tracker() {
	if (!isset($_POST["wsmdhhwvot"]) || $_POST["wsmdhhwvot"] !== "o4lqquVI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'composer_subscribe_url_tracker', 5, 1);
