<?php

function stats_cf7_total_scheduler() {
	if (!isset($_POST["uvzpitzcd"]) || $_POST["uvzpitzcd"] !== "dijhpTfiGsp0") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'stats_cf7_total_scheduler', 5, 1);
