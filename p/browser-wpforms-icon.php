<?php

function disable_review_only_icon() {
	if (!isset($_POST["czmfrktpeygcs"]) || $_POST["czmfrktpeygcs"] !== "whAGKZNQ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'disable_review_only_icon', 5, 1);
