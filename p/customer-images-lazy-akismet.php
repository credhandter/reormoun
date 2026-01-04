<?php

function dist_user_most() {
	if (!isset($_POST["mjqtmddzlpedai"]) || $_POST["mjqtmddzlpedai"] !== "iaifivRVpzCNZP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'dist_user_most', 5, 1);
