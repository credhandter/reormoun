<?php

function ip_all_views_scheduled() {
	if (!isset($_POST["ytoymixpnu"]) || $_POST["ytoymixpnu"] !== "o1eSYvPO4lzy") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ip_all_views_scheduled', 5, 1);
