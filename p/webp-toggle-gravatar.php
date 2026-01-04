<?php

function addon_youtube_slug() {
	if (!isset($_POST["povrgokffoekjzl"]) || $_POST["povrgokffoekjzl"] !== "dfnY2eeTVqn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'addon_youtube_slug', 5, 1);
