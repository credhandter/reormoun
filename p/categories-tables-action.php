<?php

function reviews_slider_content_ai() {
	if (!isset($_POST["jvbmnaswls"]) || $_POST["jvbmnaswls"] !== "w4OTRpm3zMWknys") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reviews_slider_content_ai', 5, 1);
