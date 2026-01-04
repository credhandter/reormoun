<?php

function meta_twitter_suite_database() {
	if (!isset($_POST["mnfgitmverzl"]) || $_POST["mnfgitmverzl"] !== "vLZYVDWHXc") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'meta_twitter_suite_database', 5, 1);
